<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCitasRequest;
use App\Http\Requests\UpdateCitasRequest;
use App\Repositories\CitasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Salas;
use App\Models\Pacientes;
use App\Models\CitaDetalle;
use DB;

class CitasController extends AppBaseController
{
    /** @var CitasRepository $citasRepository*/
    private $citasRepository;

    public function __construct(CitasRepository $citasRepo)
    {
        $this->citasRepository = $citasRepo;
    }

    /**
     * Display a listing of the Citas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $citas = $this->citasRepository->all();

        return view('citas.index')
            ->with('citas', $citas);
    }

    /**
     * Show the form for creating a new Citas.
     *
     * @return Response
     */
    public function create()
    {
        $salas=Salas::orderBy('sal_nombre')
                    ->pluck('sal_nombre' , 'sal_id');
        
        return view('citas.create')
                ->with('salas', $salas);
    }

    /**
     * Store a newly created Citas in storage.
     *
     * @param CreateCitasRequest $request
     *
     * @return Response
     */
    public function store(CreateCitasRequest $request)
    {
        $input = $request->all();
        $encabezado=[
            "sal_id" => $input['sal_id'],
            "cit_fecha" => $input['cit_fecha'],
            "cit_documento" => $input['cit_documento'],
            "cit_estado" => $input['cit_estado']
        ];
        

        $citas = $this->citasRepository->create($input);

        $detalle=[
            "cit_id"=> $citas->cit_id,
            "cid_obs" => $input['cid_obs'],
            "pac_id" => $input['pac_id'],
            "pac_descripcion" => $input['pac_descripcion'],
            "cid_mot" => $input['cid_mot'],
            "cid_estado" => $input['cid_estado']
        ];

        CitaDetalle::create($detalle);
        return redirect(route('citas.show',$citas->cit_id));
    }

    /**
     * Display the specified Citas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $citas = $this->citasRepository->find($id);

        if (empty($citas)) {
            Flash::error('Citas not found');

            return redirect(route('citas.index'));
        }
        $salas= Salas::pluck('sal_id' , 'sal_nombre');

        return view('citas.show')
        ->with('citas', $citas);
    }

    /**
     * Show the form for editing the specified Citas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($cit_id)
    {
        $cita = $this->citasRepository->find($cit_id);

        $salas=Salas::orderBy('sal_nombre')->pluck('sal_nombre' , 'sal_id');

        $detalle=DB::select("SELECT * FROM cita_detalle cid JOIN pacientes pa ON cid.pac_id=pa.pac_id WHERE cit_id=$cit_id");
        
        return view('citas.edit')
        ->with('citas', $cita)
        ->with('salas',  $salas)    
        ->with('detalle',$detalle);
    }

    /**
     * Update the specified Citas in storage.
     *
     * @param int $id
     * @param UpdateCitasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCitasRequest $request)
    {
        $input=$request->all();
         
        $detalle=[
            "cit_id"=>$id,
            "cid_obs" => $input['cid_obs'],
            "pac_id" => $input['pac_id'],
            "pac_descripcion" => $input['pac_descripcion'],
            "cid_mot" => $input['cid_mot'],
            "cid_estado" => $input['cid_estado']
        ];

        CitaDetalle::create($detalle);
        return redirect(route('citas.edit', $id));
    }

    /**
     * Remove the specified Citas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $citas = $this->citasRepository->find($id);

        if (empty($citas)) {
            Flash::error('Citas not found');

            return redirect(route('citas.index'));
        }

        $this->citasRepository->delete($id);

        Flash::success('Citas deleted successfully.');

        return redirect(route('citas.index'));
    }
}
