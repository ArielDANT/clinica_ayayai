<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePreciosRequest;
use App\Http\Requests\UpdatePreciosRequest;
use App\Repositories\PreciosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PreciosController extends AppBaseController
{
    /** @var PreciosRepository $preciosRepository*/
    private $preciosRepository;

    public function __construct(PreciosRepository $preciosRepo)
    {
        $this->preciosRepository = $preciosRepo;
    }

    /**
     * Display a listing of the Precios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $precios = $this->preciosRepository->all();

        return view('precios.index')
            ->with('precios', $precios);
    }

    /**
     * Show the form for creating a new Precios.
     *
     * @return Response
     */
    public function create()
    {
        return view('precios.create');
    }

    /**
     * Store a newly created Precios in storage.
     *
     * @param CreatePreciosRequest $request
     *
     * @return Response
     */
    public function store(CreatePreciosRequest $request)
    {
        $input = $request->all();

        $precios = $this->preciosRepository->create($input);

        Flash::success('Precios saved successfully.');

        return redirect(route('precios.index'));
    }

    /**
     * Display the specified Precios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $precios = $this->preciosRepository->find($id);

        if (empty($precios)) {
            Flash::error('Precios not found');

            return redirect(route('precios.index'));
        }

        return view('precios.show')->with('precios', $precios);
    }

    /**
     * Show the form for editing the specified Precios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $precios = $this->preciosRepository->find($id);

        if (empty($precios)) {
            Flash::error('Precios not found');

            return redirect(route('precios.index'));
        }

        return view('precios.edit')->with('precios', $precios);
    }

    /**
     * Update the specified Precios in storage.
     *
     * @param int $id
     * @param UpdatePreciosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePreciosRequest $request)
    {
        $precios = $this->preciosRepository->find($id);

        if (empty($precios)) {
            Flash::error('Precios not found');

            return redirect(route('precios.index'));
        }

        $precios = $this->preciosRepository->update($request->all(), $id);

        Flash::success('Precios updated successfully.');

        return redirect(route('precios.index'));
    }

    /**
     * Remove the specified Precios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $precios = $this->preciosRepository->find($id);

        if (empty($precios)) {
            Flash::error('Precios not found');

            return redirect(route('precios.index'));
        }

        $this->preciosRepository->delete($id);

        Flash::success('Precios deleted successfully.');

        return redirect(route('precios.index'));
    }
}
