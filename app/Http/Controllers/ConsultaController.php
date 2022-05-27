<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Pacientes;
use App\Models\Tratamientos;
use App\Models\LogConsultas;
use Illuminate\Http\Request;


class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pacientes = Pacientes::all();
        $Tratamientos = Tratamientos::all();
        $Consultas = Consulta::all();
        return view('consultas.home')->with('Pacientes',$Pacientes)->with('Tratamientos',$Tratamientos)->with('Consultas',$Consultas);
    }

    public function indexCards()
    {
        $Pacientes = Pacientes::all();
        $Tratamientos = Tratamientos::all();
        $Consultas = Consulta::all();
        return view('consultas.verConsultas')->with('Pacientes',$Pacientes)->with('Tratamientos',$Tratamientos)->with('Consultas',$Consultas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $consulta = new Consulta();
        $consulta->paciente_id = $request->paciente;
        $consulta->procedimiento_id = $request->procedimiento;
        $consulta->fechaProgramada = $request->fecha;
        $consulta->horarioProgramado = $request->hora;
        $consulta->asistencia = false;
        $consulta->save();

        $log = new LogConsultas();
        $log->idConsulta = $consulta->id;
        $log->paciente_idN = $consulta->paciente_id;
        $log->procedimiento_idN = $consulta->procedimiento_id;
        $log->fechaProgramadaN = $consulta->fechaProgramada;
        $log->horarioProgramadoN = $consulta->horarioProgramado;
        $log->asistenciaN = $consulta->asistencia;
        $log->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show(Consulta $consulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit(Consulta $consulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consulta $consulta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consulta $consulta)
    {
        //
    }
}
