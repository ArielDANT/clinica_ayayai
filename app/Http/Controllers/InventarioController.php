<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInventarioRequest;
use App\Http\Requests\UpdateInventarioRequest;
use App\Repositories\InventarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Proveedor;
use App\Models\Vehiculos;
use App\Models\InventarioDetalle;
use DB;
class InventarioController extends AppBaseController
{
    /** @var InventarioRepository $inventarioRepository*/
    private $inventarioRepository;

    public function __construct(InventarioRepository $inventarioRepo)
    {
        $this->inventarioRepository = $inventarioRepo;
    }

    /**
     * Display a listing of the Inventario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $inventarios = $this->inventarioRepository->all();

        return view('inventarios.index')
            ->with('inventarios', $inventarios);
    }

    /**
     * Show the form for creating a new Inventario.
     *
     * @return Response
     */
    public function create()
    {
        $proveedores=Proveedor::orderBy('pro_nombre')->pluck('pro_nombre' , 'pro_id');
        
        return view('inventarios.create')
        ->with('proveedores', $proveedores);
    }

    /**
     * Store a newly created Inventario in storage.
     *
     * @param CreateInventarioRequest $request
     *
     * @return Response
     */
    public function store(CreateInventarioRequest $request)
    {
        $input = $request->all();
        $encabezado=[
            "pro_id" => $input['pro_id'],
            "inv_fecha" => $input['inv_fecha'],
            "inv_documento" => $input['inv_documento'],
            "inv_estado" => $input['inv_estado']
        ];
        

        $inventario = $this->inventarioRepository->create($input);

        $detalle=[
            "inv_id"=> $inventario->inv_id,
            "ivd_cantidad" => $input['ivd_cantidad'],
            "veh_id" => $input['veh_id'],
            "veh_descripcion" => $input['veh_descripcion'],
            "ivd_vu" => $input['ivd_vu'],
            "ivd_estado" => $input['ivd_estado']
        ];

        InventarioDetalle::create($detalle);
        return redirect(route('inventarios.edit',$inventario->inv_id));
    }

    /**
     * Display the specified Inventario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        return view('inventarios.show')->with('inventario', $inventario);
    }

    /**
     * Show the form for editing the specified Inventario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($inv_id)
    {
        $inventario = $this->inventarioRepository->find($inv_id);

        $proveedores=Proveedor::orderBy('pro_nombre')->pluck('pro_nombre' , 'pro_id');

        $detalle=DB::select("SELECT * FROM inventario_detalle ivd JOIN vehiculos vh ON ivd.veh_id=vh.veh_id WHERE inv_id=$inv_id");
        return view('inventarios.edit')
        ->with('inventario', $inventario)
        ->with('proveedores',  $proveedores)    
        ->with('detalle',$detalle);
    }

    /**
     * Update the specified Inventario in storage.
     *
     * @param int $id
     * @param UpdateInventarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInventarioRequest $request)
    {
        $input=$request->all();
         
        $detalle=[
            "inv_id"=>$id,
            "ivd_cantidad" => $input['ivd_cantidad'],
            "veh_id" => $input['veh_id'],
            "veh_descripcion" => $input['veh_descripcion'],
            "ivd_vu" => $input['ivd_vu'],
            "ivd_estado" => $input['ivd_estado']
        ];

        InventarioDetalle::create($detalle);
        return redirect(route('inventarios.edit',$id));

        
    }

    /**
     * Remove the specified Inventario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        DB::delete("DELETE FROM inventario_detalle WHERE inv_id =$id");
        $this->inventarioRepository->delete($id);
        return redirect(route('inventarios.index'));  

    }
    public function destroy_dt(Request $req){
        $datos=$req->all();
        $ivd_id=$datos['ivd_id'];
        $detalle=InventarioDetalle::find($ivd_id);
        $inv_id=$detalle->inv_id;
        DB::delete("DELETE FROM inventario_detalle WHERE ivd_id=$ivd_id"); 
        return redirect(route('inventarios.edit',$inv_id));
    }
}
