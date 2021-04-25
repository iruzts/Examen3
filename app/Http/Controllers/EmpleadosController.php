<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado; 

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index')->with('empelados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("empleados.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'cargo' => 'required',
            'salario' => 'required',
            'fechaIngreso' =>'required',
            'fechaSalida' => 'nullable',
            'motivoSalida' => 'nullable'
        ]);
        
        Empleado::create($data);

        return redirect('/empleados')->with('success', 'Empleado creado correctamente.');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleados = Empleado::findOrFail($id);
        return view('empleados.update')->with('empleados', $empleados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'cargo' => 'required',
            'salario' => 'required',
            'fechaIngreso' =>'required',
            'fechaSalida' => 'nullable',
            'motivoSalida' => 'nullable'
        ]);
        
        Empleado::whereId($id)->update($data);

        return redirect('/empleados')->with('success', 'empleado modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleados = Empleado::findOrFail($id);
        $empleados->delete();

        return redirect('/empleados')->with('success', 'empleado eliminado correctamente.');;
    }
}
