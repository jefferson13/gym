<?php namespace Gym\Http\Controllers\Admin;

use Gym\Http\Requests;
use Gym\Http\Controllers\Controller;

use Gym\Http\Requests\CreateMaquinaRequest;
use Gym\Maquina;
use Gym\User;
use Illuminate\Http\Request;

class MaquinasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $maquinas= Maquina::paginate();
        return view('maquinas', compact('maquinas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('admin.maquinas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateMaquinaRequest $request)
	{
        $maquina= new Maquina($request->request->all());
        $maquina->save();

        return redirect()->route('admin.maquinas.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $maquina=Maquina::findOrFail($id);
        return view('admin.maquinas.edit',compact('maquina'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
        $maquina=Maquina::findOrFail($id);

        $maquina->fill($request->request->all());
        $maquina->save();
        return redirect()->route('admin.maquinas.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Maquina::destroy($id);
        return redirect()->route('admin.maquinas.index');
	}

}
