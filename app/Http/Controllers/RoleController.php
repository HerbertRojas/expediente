<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::get();
        return view('roles.inicio', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regla = [
            'nombre' => 'required',
            'slug' => 'required'
        ];
        $mensaje = [
            '¡Campo Obligatorio!'
        ];
        $this->validate($request,$regla,$mensaje);

        $role = new Role();
        $role->nombre = $request->nombre;
        $role->slug = $request->slug;
        $role->save();

        return redirect('roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //$role = Role::where('id',$id)->first();
        return view('roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $regla = [
            'nombre' => 'required',
            'slug' => 'required'
        ];
        $mensaje = [
            '¡Campo Obligatorio!'
        ];
        $this->validate($request,$regla,$mensaje);

        $role->nombre = $request->nombre;
        $role->slug = $request->slug;
        $role->save();

        return redirect('roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->estado = !$role->estado;
        $role->save();
        return redirect('roles');
    }
}
