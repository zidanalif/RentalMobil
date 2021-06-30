<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTestimoniRequest;
use App\Http\Requests\UpdateTestimoniRequest;
use App\Repositories\TestimoniRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TestimoniController extends AppBaseController
{
    /** @var  TestimoniRepository */
    private $testimoniRepository;

    public function __construct(TestimoniRepository $testimoniRepo)
    {
        $this->testimoniRepository = $testimoniRepo;
    }

    /**
     * Display a listing of the Testimoni.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $testimonis = $this->testimoniRepository->all();

        return view('testimonis.index')
            ->with('testimonis', $testimonis);
    }

    /**
     * Show the form for creating a new Testimoni.
     *
     * @return Response
     */
    public function create()
    {
        return view('testimonis.create');
    }

    /**
     * Store a newly created Testimoni in storage.
     *
     * @param CreateTestimoniRequest $request
     *
     * @return Response
     */
    public function store(CreateTestimoniRequest $request)
    {
        $input = $request->all();

        $testimoni = $this->testimoniRepository->create($input);

        Flash::success('Testimoni saved successfully.');

        return redirect(route('testimonis.index'));
    }

    /**
     * Display the specified Testimoni.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testimoni = $this->testimoniRepository->find($id);

        if (empty($testimoni)) {
            Flash::error('Testimoni not found');

            return redirect(route('testimonis.index'));
        }

        return view('testimonis.show')->with('testimoni', $testimoni);
    }

    /**
     * Show the form for editing the specified Testimoni.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testimoni = $this->testimoniRepository->find($id);

        if (empty($testimoni)) {
            Flash::error('Testimoni not found');

            return redirect(route('testimonis.index'));
        }

        return view('testimonis.edit')->with('testimoni', $testimoni);
    }

    /**
     * Update the specified Testimoni in storage.
     *
     * @param int $id
     * @param UpdateTestimoniRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestimoniRequest $request)
    {
        $testimoni = $this->testimoniRepository->find($id);

        if (empty($testimoni)) {
            Flash::error('Testimoni not found');

            return redirect(route('testimonis.index'));
        }

        $testimoni = $this->testimoniRepository->update($request->all(), $id);

        Flash::success('Testimoni updated successfully.');

        return redirect(route('testimonis.index'));
    }

    /**
     * Remove the specified Testimoni from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testimoni = $this->testimoniRepository->find($id);

        if (empty($testimoni)) {
            Flash::error('Testimoni not found');

            return redirect(route('testimonis.index'));
        }

        $this->testimoniRepository->delete($id);

        Flash::success('Testimoni deleted successfully.');

        return redirect(route('testimonis.index'));
    }
}
