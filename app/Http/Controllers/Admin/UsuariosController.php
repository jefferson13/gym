<?php namespace Gym\Http\Controllers\Admin;

use Gym\Http\Requests;
use Gym\Http\Controllers\Controller;

use Gym\Http\Requests\CreateUserRequest;
use Gym\Maquina;
use Gym\Rutina;
use Gym\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users= User::paginate();
        return view('usuarios', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.usuarios.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
	public function store(CreateUserRequest $request)
	{
       $request->request->add(['password'=>$request->request->get("cedula")]);

        $user= new User($request->all());
        $user->save();



        return redirect()->route('admin.crud.index');

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
        $user=User::findOrFail($id);
		return view('admin.usuarios.edit',compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
        $user=User::findOrFail($id);

        $user->fill($request->request->all());
        $user->save();
        return redirect()->route('admin.crud.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
        return redirect()->route('admin.crud.index');
	}

}
