<?php namespace Gym\Http\Controllers\Admin;

use Gym\Http\Requests;
use Gym\Http\Controllers\Controller;

use Gym\Http\Requests\CreateRutinaRequest;
use Gym\Rutina;
use Illuminate\Http\Request;

class RutinasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $rutinas= Rutina::paginate();
        return view('rutinas', compact('rutinas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('admin.rutinas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateRutinaRequest $request)
	{
        $rutina= new Rutina($request->request->all());
        $rutina->save();

        return redirect()->route('admin.rutinas.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $rutina=Rutina::findOrFail($id);
        return view('admin.rutinas.edit',compact('rutina'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param Request $request
     * @return Response
     */
	public function update($id,Request $request)
	{
        $rutina=Rutina::findOrFail($id);

        $rutina->fill($request->request->all());

        $rutina->save();

        return redirect()->route('admin.rutinas.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Rutina::destroy($id);
        return redirect()->route('admin.rutinas.index');
	}

}
