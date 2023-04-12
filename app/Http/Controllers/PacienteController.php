<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosPacientes = Pacientes::all();
        //Carga vista principal
        return view('pacientes.index',['datosPacientes'=>$datosPacientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Carga vista para crear
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id_usuario = Auth::id();
        $request->validate([
            'txt_nombre' => 'required|max:20'
        ]);
        $paciente = new Pacientes();
        $paciente->nombre = $request->input('txt_nombre');
        $paciente->usuario_crea = $id_usuario;
        $paciente->usuario_mod = $id_usuario;
        $paciente->activo = 'S';
        $paciente->save();
        $datosPacientes = Pacientes::all();
        return view('pacientes.index',['mensaje'=>'Registro guardado','datosPacientes'=>$datosPacientes]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pacientes $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pacientes $pacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pacientes $pacientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pacientes $pacientes)
    {
        //
    }
}
