<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctoresRequest;
use App\Http\Requests\UpdateDoctoresRequest;
use App\Repositories\DoctoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Doctores;
use Illuminate\Support\Facades\DB;
use App\Models\Salas;
use PDF;

class DoctoresController extends AppBaseController
{
    /** @var DoctoresRepository $doctoresRepository*/
    private $doctoresRepository;

    public function __construct(DoctoresRepository $doctoresRepo)
    {
        $this->doctoresRepository = $doctoresRepo;
    }

    /**
     * Display a listing of the Doctores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $busqueda = trim($request->get('busqueda'));
        // $doctores = DB::table('doctores')
        //             ->select('doc_id','doc_nombres','doc_apellidos','doc_cedula','doc_direccion','doc_correo','doc_sexo','doc_horaon','doc_horaoff','doc_estado')
        //             ->where('doc_apellidos','LIKE','%'.$busqueda.'%')
        //             ->orWhere('doc_cedula','LIKE','%'.$busqueda.'%')
        //             ->orderBy('doc_nombres', 'asc')
        //             ->paginate(4);
    // $data = [
    //             'doctores'=>$doctores,
    //             'busqueda'=>$busqueda,
    //     ]; 

        // return view('doctores.index', compact('doctores'))
        //         ->with('fecha', $fecha);
        //$doctores = $this->doctoresRepository->paginate(4);

            //->with('doctores', $doctores);
        $doctores = DB::select("SELECT * FROM doctores d join  salas s on d.sal_id=s.sal_id" );
        $salas= Salas::pluck('sal_id' , 'sal_nombre');
        $busqueda = trim($request->get('busqueda'));
        $pagina = DB::table('doctores')
                    ->select('doc_id','doc_nombres','doc_apellidos','doc_cedula','doc_direccion','doc_correo','doc_sexo','doc_horaon','doc_horaoff','doc_estado')
                    ->where('doc_apellidos','LIKE','%'.$busqueda.'%')
                    ->orWhere('doc_cedula','LIKE','%'.$busqueda.'%')
                    ->orderBy('doc_nombres', 'asc')
                    ->paginate(3); 
        $fecha=date('Y-m-d'); 
        return view('doctores.index')
            ->with('doctores', $doctores)
            ->with('doctores', $pagina)
            ->with ('salas', $salas)
            ->with('fecha', $fecha)
            ;
    }

    public function pdf(Request $request)
    {
        $doctores = DB::select("SELECT * FROM doctores d join salas s on d.sal_id=s.sal_id" );
        $salas= Salas::pluck('sal_id' , 'sal_nombre');
        $pdf=PDF::loadView('doctores.pdf', ['doctores' =>$doctores]);
        $fecha=date('Y-m-d');

        return $pdf->setPaper('a4', 'landscape')->stream();
        return view('doctores.index')
            ->with('doctores', $doctores)
            ->with('salas', $salas)
            ->with('fecha', $fecha)
            ;
    }

    /**
     * Show the form for creating a new Doctores.
     *
     * @return Response
     */
    public function create()
    {
        $salas= Salas::pluck('sal_nombre' , 'sal_id');
        return view('doctores.create')
         ->with ('salas', $salas)
        ;
    }

    /**
     * Store a newly created Doctores in storage.
     *
     * @param CreateDoctoresRequest $request
     *
     * @return Response
     */
    public function store(CreateDoctoresRequest $request)
    {
        $input = $request->all();

        $doctores = $this->doctoresRepository->create($input);

        Flash::success('Doctor guardado correctamente');

        return redirect(route('doctores.index'));
    }

    /**
     * Display the specified Doctores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doctores = $this->doctoresRepository->find($id);

        if (empty($doctores)) {
            Flash::error('Doctor no encontrado');

            return redirect(route('doctores.index'));
        }
        $salas= Salas::pluck('sal_nombre' , 'sal_id');

        return view('doctores.show')
        ->with('doctores', $doctores)
        ->with('salas', $salas)
        ;
    }

    /**
     * Show the form for editing the specified Doctores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doctores = $this->doctoresRepository->find($id);

        if (empty($doctores)) {
            Flash::error('Doctor no encontrado');

            return redirect(route('doctores.index'));
        }
        $salas= Salas::pluck('sal_nombre' , 'sal_id');

        return view('doctores.edit')
        ->with('doctores', $doctores)
        ->with('salas', $salas)
        ;
    }

    /**
     * Update the specified Doctores in storage.
     *
     * @param int $id
     * @param UpdateDoctoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoctoresRequest $request)
    {
        $doctores = $this->doctoresRepository->find($id);

        if (empty($doctores)) {
            Flash::error('Doctor no encontrado');

            return redirect(route('doctores.index'));
        }

        $doctores = $this->doctoresRepository->update($request->all(), $id);

        Flash::success('Doctor actualizado correctamente');

        return redirect(route('doctores.index'));
    }

    /**
     * Remove the specified Doctores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doctores = $this->doctoresRepository->find($id);

        if (empty($doctores)) {
            Flash::error('Doctor no encontrado');

            return redirect(route('doctores.index'));
        }

        $this->doctoresRepository->delete($id);

        Flash::success('Doctor eliminado correctamente');

        return redirect(route('doctores.index'));
    }
}
