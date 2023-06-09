<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePacientesRequest;
use App\Http\Requests\UpdatePacientesRequest;
use App\Repositories\PacientesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use PDF;

class PacientesController extends AppBaseController
{
    /** @var PacientesRepository $pacientesRepository*/
    private $pacientesRepository;

    public function __construct(PacientesRepository $pacientesRepo)
    {
        $this->pacientesRepository = $pacientesRepo;
    }

    /**
     * Display a listing of the Pacientes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $busqueda = trim($request->get('busqueda'));
        $pacientes = DB::table('pacientes')
                    ->select('pac_id','pac_nombres','pac_apellidos','pac_cedula','pac_direccion','pac_celular','pac_sexo','pac_correo','pac_repre','pac_estado')
                    ->where('pac_apellidos','LIKE','%'.$busqueda.'%')
                    ->orWhere('pac_cedula','LIKE','%'.$busqueda.'%')
                    ->orderBy('pac_nombres', 'asc')
                    ->paginate(4);
        $fecha=date('Y-m-d');
        return view('pacientes.index', compact('pacientes'))
                ->with('fecha', $fecha);
    }

    public function pdf(Request $request)
    {
        $pacientes = $this->pacientesRepository->all();
        $pdf=PDF::loadView('pacientes.pdf', ['pacientes' =>$pacientes]);
        $fecha=date('Y-m-d');

        return $pdf->setPaper('a4', 'landscape')->stream();
        return view('pacientes.index')
            ->with('pacientes', $pacientes)
            ->with('fecha', $fecha)
            ;
    }

    /**
     * Show the form for creating a new Pacientes.
     *
     * @return Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created Pacientes in storage.
     *
     * @param CreatePacientesRequest $request
     *
     * @return Response
     */
    public function store(CreatePacientesRequest $request)
    {
        $input = $request->all();

        $pacientes = $this->pacientesRepository->create($input);

        Flash::success('El paciente ha sido guardado con éxito');

        return redirect(route('pacientes.index'));
    }

    /**
     * Display the specified Pacientes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pacientes = $this->pacientesRepository->find($id);

        if (empty($pacientes)) {
            Flash::error('Paciente no encontrado');

            return redirect(route('pacientes.index'));
        }

        return view('pacientes.show')->with('pacientes', $pacientes);
    }

    /**
     * Show the form for editing the specified Pacientes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pacientes = $this->pacientesRepository->find($id);

        if (empty($pacientes)) {
            Flash::error('Paciente no encontrado');

            return redirect(route('pacientes.index'));
        }

        return view('pacientes.edit')->with('pacientes', $pacientes);
    }

    /**
     * Update the specified Pacientes in storage.
     *
     * @param int $id
     * @param UpdatePacientesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePacientesRequest $request)
    {
        $pacientes = $this->pacientesRepository->find($id);

        if (empty($pacientes)) {
            Flash::error('Paciente no encontrado');

            return redirect(route('pacientes.index'));
        }

        $pacientes = $this->pacientesRepository->update($request->all(), $id);

        Flash::success('El paciente ha sido actualizado con éxito');

        return redirect(route('pacientes.index'));
    }

    /**
     * Remove the specified Pacientes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pacientes = $this->pacientesRepository->find($id);

        if (empty($pacientes)) {
            Flash::error('Pacientes not found');

            return redirect(route('pacientes.index'));
        }

        $this->pacientesRepository->delete($id);

        Flash::success('El paciente ha sido borrado con éxito');

        return redirect(route('pacientes.index'));
    }

    public function busca_pacientes(Request $rq ){
        $dt=$rq->all();
        $paciente=$dt['paciente'];
        $result=DB::SELECT("SELECT * FROM pacientes WHERE (
            pac_nombres LIKE '%$paciente%' OR
            pac_apellidos LIKE '%$paciente%' OR
            pac_cedula LIKE '%$paciente%') 
        ");
        return Response()->json($result);

    }    
    public function getpacientebyid(Request $rq){
        $dt=$rq->all();
        $pac_id=$dt['pac_id'];
        $paciente=$this->pacientesRepository->find($pac_id);
        return Response()->json($paciente);
    }
}
