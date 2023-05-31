<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctoresRequest;
use App\Http\Requests\UpdateDoctoresRequest;
use App\Repositories\DoctoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

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
        $doctores = $this->doctoresRepository->paginate(5);

        return view('doctores.index')
            ->with('doctores', $doctores);
    }

    /**
     * Show the form for creating a new Doctores.
     *
     * @return Response
     */
    public function create()
    {
        return view('doctores.create');
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

        Flash::success('Doctores saved successfully.');

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
            Flash::error('Doctores not found');

            return redirect(route('doctores.index'));
        }

        return view('doctores.show')->with('doctores', $doctores);
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
            Flash::error('Doctores not found');

            return redirect(route('doctores.index'));
        }

        return view('doctores.edit')->with('doctores', $doctores);
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
            Flash::error('Doctores not found');

            return redirect(route('doctores.index'));
        }

        $doctores = $this->doctoresRepository->update($request->all(), $id);

        Flash::success('Doctores updated successfully.');

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
            Flash::error('Doctores not found');

            return redirect(route('doctores.index'));
        }

        $this->doctoresRepository->delete($id);

        Flash::success('Doctores deleted successfully.');

        return redirect(route('doctores.index'));
    }
}
