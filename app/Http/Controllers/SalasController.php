<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSalasRequest;
use App\Http\Requests\UpdateSalasRequest;
use App\Repositories\SalasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use App\Models\Clinica;

class SalasController extends AppBaseController
{
    /** @var SalasRepository $salasRepository*/
    private $salasRepository;

    public function __construct(SalasRepository $salasRepo)
    {
        $this->salasRepository = $salasRepo;
    }

    /**
     * Display a listing of the Salas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$salas = $this->salasRepository->all();

        //return view('salas.index')
        //    ->with('salas', $salas);
        $salas = DB::select("SELECT * FROM salas s join  clinica c on s.cli_id=c.cli_id" );
        $clinicas= Clinica::pluck('cli_id' , 'cli_nombres');
        $busqueda = trim($request->get('busqueda'));
        $pagina = DB::table('salas')
                    ->select('sal_id','sal_nombre','sal_descripcion','sal_piso','sal_numsal','sal_estado')
                    ->where('sal_nombre','LIKE','%'.$busqueda.'%')
                    ->orWhere('sal_piso','LIKE','%'.$busqueda.'%')
                    ->orderBy('sal_numsal', 'asc')
                    ->paginate(3); 
        $fecha=date('Y-m-d');
        return view('salas.index')
            ->with('salas', $salas)
            ->with('salas', $pagina)
            ->with ('clinica', $clinicas)
            ->with('fecha', $fecha)
            ;
    }

    /**
     * Show the form for creating a new Salas.
     *
     * @return Response
     */
    public function create()
    {
        $clinicas= Clinica::pluck('cli_nombres' , 'cli_id');
        return view('salas.create')
         ->with ('clinicas', $clinicas)
        ;
    }

    /**
     * Store a newly created Salas in storage.
     *
     * @param CreateSalasRequest $request
     *
     * @return Response
     */
    public function store(CreateSalasRequest $request)
    {
        $input = $request->all();

        $salas = $this->salasRepository->create($input);

        Flash::success('Salas saved successfully.');

        return redirect(route('salas.index'));
    }

    /**
     * Display the specified Salas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $salas = $this->salasRepository->find($id);
        $clinicas = Clinica::pluck('cli_id' , 'cli_nombres');

        if (empty($salas)) {
            Flash::error('Salas not found');

            return redirect(route('salas.index'));
        }

        return view('salas.show')
        ->with('salas', $salas)
        ->with('clinica', $clinicas)
        ;
    }

    /**
     * Show the form for editing the specified Salas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $salas = $this->salasRepository->find($id);

        if (empty($salas)) {
            Flash::error('Salas not found');

            return redirect(route('salas.index'));
        }

        $clinicas = Clinica::pluck('cli_nombres' , 'cli_id');

        return view('salas.edit')
        ->with('salas', $salas)
        ->with('clinica', $clinicas);
    }

    /**
     * Update the specified Salas in storage.
     *
     * @param int $id
     * @param UpdateSalasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSalasRequest $request)
    {
        $salas = $this->salasRepository->find($id);

        if (empty($salas)) {
            Flash::error('Salas not found');

            return redirect(route('salas.index'));
        }

        $salas = $this->salasRepository->update($request->all(), $id);

        Flash::success('Salas updated successfully.');

        return redirect(route('salas.index'));
    }

    /**
     * Remove the specified Salas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $salas = $this->salasRepository->find($id);

        if (empty($salas)) {
            Flash::error('Salas not found');

            return redirect(route('salas.index'));
        }

        $this->salasRepository->delete($id);

        Flash::success('Salas deleted successfully.');

        return redirect(route('salas.index'));
    }
}
