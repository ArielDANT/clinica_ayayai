<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClinicaRequest;
use App\Http\Requests\UpdateClinicaRequest;
use App\Repositories\ClinicaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ClinicaController extends AppBaseController
{
    /** @var ClinicaRepository $clinicaRepository*/
    private $clinicaRepository;

    public function __construct(ClinicaRepository $clinicaRepo)
    {
        $this->clinicaRepository = $clinicaRepo;
    }

    /**
     * Display a listing of the Clinica.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clinicas = $this->clinicaRepository->all();

        return view('clinicas.index')
            ->with('clinicas', $clinicas);
    }

    /**
     * Show the form for creating a new Clinica.
     *
     * @return Response
     */
    public function create()
    {
        return view('clinicas.create');
    }

    /**
     * Store a newly created Clinica in storage.
     *
     * @param CreateClinicaRequest $request
     *
     * @return Response
     */
    public function store(CreateClinicaRequest $request)
    {
        $input = $request->all();

        $clinica = $this->clinicaRepository->create($input);

        Flash::success('Clinica saved successfully.');

        return redirect(route('clinicas.index'));
    }

    /**
     * Display the specified Clinica.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clinica = $this->clinicaRepository->find($id);

        if (empty($clinica)) {
            Flash::error('Clinica not found');

            return redirect(route('clinicas.index'));
        }

        return view('clinicas.show')->with('clinica', $clinica);
    }

    /**
     * Show the form for editing the specified Clinica.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clinica = $this->clinicaRepository->find($id);

        if (empty($clinica)) {
            Flash::error('Clinica not found');

            return redirect(route('clinicas.index'));
        }

        return view('clinicas.edit')->with('clinica', $clinica);
    }

    /**
     * Update the specified Clinica in storage.
     *
     * @param int $id
     * @param UpdateClinicaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClinicaRequest $request)
    {
        $clinica = $this->clinicaRepository->find($id);

        if (empty($clinica)) {
            Flash::error('Clinica not found');

            return redirect(route('clinicas.index'));
        }

        $clinica = $this->clinicaRepository->update($request->all(), $id);

        Flash::success('Clinica updated successfully.');

        return redirect(route('clinicas.index'));
    }

    /**
     * Remove the specified Clinica from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clinica = $this->clinicaRepository->find($id);

        if (empty($clinica)) {
            Flash::error('Clinica not found');

            return redirect(route('clinicas.index'));
        }

        $this->clinicaRepository->delete($id);

        Flash::success('Clinica deleted successfully.');

        return redirect(route('clinicas.index'));
    }
}
