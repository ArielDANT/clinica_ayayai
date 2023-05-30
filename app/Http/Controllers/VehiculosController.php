<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVehiculosRequest;
use App\Http\Requests\UpdateVehiculosRequest;
use App\Repositories\VehiculosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use App\Models\Empresa;

class VehiculosController extends AppBaseController
{
    /** @var VehiculosRepository $vehiculosRepository*/
    private $vehiculosRepository;

    public function __construct(VehiculosRepository $vehiculosRepo)
    {
        $this->vehiculosRepository = $vehiculosRepo;
    }

    /**
     * Display a listing of the Vehiculos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vehiculos = DB::select("SELECT * FROM vehiculos v join  empresa e on v.emp_id=e.emp_id" );
        $empresas= Empresa::pluck('emp_id' , 'emp_nombres');
        return view('vehiculos.index')
            ->with('vehiculos', $vehiculos)
            ->with ('empresas', $empresas)
            ;
    }

    /**
     * Show the form for creating a new Vehiculos.
     *
     * @return Response
     */
    public function create()
    {
        $empresas= Empresa::pluck('emp_nombres' , 'emp_id');
        return view('vehiculos.create')
         ->with ('empresas', $empresas)
        ;

    }

    /**
     * Store a newly created Vehiculos in storage.
     *
     * @param CreateVehiculosRequest $request
     *
     * @return Response
     */
    public function store(CreateVehiculosRequest $request)
    {
        $input = $request->all();

        $vehiculos = $this->vehiculosRepository->create($input);

        Flash::success('Vehiculos saved successfully.');

        return redirect(route('vehiculos.index'));
    }

    /**
     * Display the specified Vehiculos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehiculos = $this->vehiculosRepository->find($id);

        if (empty($vehiculos)) {
            Flash::error('Vehiculos not found');

            return redirect(route('vehiculos.index'));
        }

        return view('vehiculos.show')->with('vehiculos', $vehiculos);
    }

    /**
     * Show the form for editing the specified Vehiculos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehiculos = $this->vehiculosRepository->find($id);
        $empresas= Empresa::pluck('emp_nombres' , 'emp_id');


        if (empty($vehiculos)) {
            Flash::error('Vehiculos not found');

            return redirect(route('vehiculos.index'));
        }

        return view('vehiculos.edit')
        ->with('vehiculos', $vehiculos)
        ->with ('empresas', $empresas)

        ;
    }

    /**
     * Update the specified Vehiculos in storage.
     *
     * @param int $id
     * @param UpdateVehiculosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVehiculosRequest $request)
    {
        $vehiculos = $this->vehiculosRepository->find($id);

        if (empty($vehiculos)) {
            Flash::error('Vehiculos not found');

            return redirect(route('vehiculos.index'));
        }

        $vehiculos = $this->vehiculosRepository->update($request->all(), $id);

        Flash::success('Vehiculos updated successfully.');

        return redirect(route('vehiculos.index'));
    }

    /**
     * Remove the specified Vehiculos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehiculos = $this->vehiculosRepository->find($id);

        if (empty($vehiculos)) {
            Flash::error('Vehiculos not found');

            return redirect(route('vehiculos.index'));
        }

        $this->vehiculosRepository->delete($id);

        Flash::success('Vehiculos deleted successfully.');

        return redirect(route('vehiculos.index'));
    }

    public function busca_vehiculos(Request $rq ){
        $dt=$rq->all();
        $vehiculo=$dt['vehiculo'];
        $result=DB::SELECT("SELECT * FROM vehiculos WHERE (
            veh_modelo LIKE '%$vehiculo%' OR
            veh_marca LIKE '%$vehiculo%' OR
            veh_subtipo LIKE '%$vehiculo%') 
        ");
        return Response()->json($result);

    }    
    public function getautobyid(Request $rq){
        $dt=$rq->all();
        $veh_id=$dt['veh_id'];
        $vehiculo=$this->vehiculosRepository->find($veh_id);
        return Response()->json($vehiculo);
    }
    
}
