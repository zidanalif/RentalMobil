<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecategoriRequest;
use App\Http\Requests\UpdatecategoriRequest;
use App\Repositories\categoriRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class categoriController extends AppBaseController
{
    /** @var  categoriRepository */
    private $categoriRepository;

    public function __construct(categoriRepository $categoriRepo)
    {
        $this->categoriRepository = $categoriRepo;
    }

    /**
     * Display a listing of the categori.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categoris = $this->categoriRepository->all();

        return view('categoris.index')
            ->with('categoris', $categoris);
    }

    /**
     * Show the form for creating a new categori.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoris.create');
    }

    /**
     * Store a newly created categori in storage.
     *
     * @param CreatecategoriRequest $request
     *
     * @return Response
     */
    public function store(CreatecategoriRequest $request)
    {
        $input = $request->all();

        $categori = $this->categoriRepository->create($input);

        Flash::success('Categori saved successfully.');

        return redirect(route('categoris.index'));
    }

    /**
     * Display the specified categori.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categori = $this->categoriRepository->find($id);

        if (empty($categori)) {
            Flash::error('Categori not found');

            return redirect(route('categoris.index'));
        }

        return view('categoris.show')->with('categori', $categori);
    }

    /**
     * Show the form for editing the specified categori.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categori = $this->categoriRepository->find($id);

        if (empty($categori)) {
            Flash::error('Categori not found');

            return redirect(route('categoris.index'));
        }

        return view('categoris.edit')->with('categori', $categori);
    }

    /**
     * Update the specified categori in storage.
     *
     * @param int $id
     * @param UpdatecategoriRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecategoriRequest $request)
    {
        $categori = $this->categoriRepository->find($id);

        if (empty($categori)) {
            Flash::error('Categori not found');

            return redirect(route('categoris.index'));
        }

        $categori = $this->categoriRepository->update($request->all(), $id);

        Flash::success('Categori updated successfully.');

        return redirect(route('categoris.index'));
    }

    /**
     * Remove the specified categori from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categori = $this->categoriRepository->find($id);

        if (empty($categori)) {
            Flash::error('Categori not found');

            return redirect(route('categoris.index'));
        }

        $this->categoriRepository->delete($id);

        Flash::success('Categori deleted successfully.');

        return redirect(route('categoris.index'));
    }
}
