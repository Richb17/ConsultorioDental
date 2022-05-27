<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use App\Models\LogPacientes;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pacientes = Pacientes::all();
        return view('pacientes.pacientes')->with('Pacientes',$Pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.registroPaciente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Pacientes();
        $paciente->nombre = $request->nombre;
        $paciente->apellidoP = $request->apellidoP;
        $paciente->apellidoM = $request->apellidoM;
        $paciente->numTelefono = $request->numTelefono;
        $paciente->save();

        $log = new LogPacientes();
        $log->idPaciente = $paciente->id;
        $log->nombreN = $paciente->nombre;
        $log->apellidoPN = $paciente->apellidoP;
        $log->apellidoMN = $paciente->apellidoM;
        $log->numTelefonoN = $paciente->numTelefono;
        $log->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacientes  $Paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Pacientes $Paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacientes  $Paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Pacientes::find($id);

        return view('pacientes.editarPaciente')->with('paciente', $paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $paciente = Pacientes::find($request->id);

        $log = new LogPacientes();
        $log->idpaciente = $paciente->id;
        $log->nombre0 = $paciente->nombre;
        $log->apellidoP0 = $paciente->apellidoP;
        $log->apellidoM0 = $paciente->apellidoM;
        $log->numTelefono0 = $paciente->numTelefono;
        $log->nombreN = $request->nombre;
        $log->apellidoPN = $request->apellidoP;
        $log->apellidoMN = $request->apellidoM;
        $log->numTelefonoN = $request->numTelefono;

        $paciente->nombre = $request->nombre;
        $paciente->apellidoP = $request->apellidoP;
        $paciente->apellidoM = $request->apellidoM;
        $paciente->numTelefono = $request->numTelefono;
        $paciente->save();
        $log->save();

        return redirect('/verPacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacientes  $Paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Pacientes::find($id);
        $paciente->delete();
        return redirect("/verPacientes");
    }
}
