<?php

namespace App\Http\Controllers;

use App\Models\Tratamientos;
use App\Models\LogTratamientos;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tratamientos = Tratamientos::all();
        return view('tratamientos.tratamientos')->with('Tratamientos',$Tratamientos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tratamientos.registroTratamiento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tratamiento = new Tratamientos();
        $tratamiento->procedimiento = $request->procedimiento;
        $tratamiento->costoSugerido = $request->costoSugerido;
        $tratamiento->save();

        $log = new LogTratamientos();
        $log->idTratamientos = $tratamiento->id;
        $log->procedimientoN = $tratamiento->procedimiento;
        $log->costoSugeridoN = $tratamiento->costoSugerido;
        $log->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tratamientos  $Tratamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Tratamientos $Tratamiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tratamientos  $Tratamiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tratamiento = Tratamientos::find($id);

        return view('tratamientos.editarTratamiento')->with('tratamiento', $tratamiento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tratamiento = Tratamientos::find($request->id);

        $log = new LogTratamientos();
        $log->idTratamientos = $tratamiento->id;
        $log->procedimiento0 = $tratamiento->procedimiento;
        $log->costoSugerido0 = $tratamiento->costoSugerido;
        $log->procedimientoN = $request->procedimiento;
        $log->costoSugeridoN = $request->costoSugerido;

        $tratamiento->procedimiento = $request->procedimiento;
        $tratamiento->costoSugerido = $request->costoSugerido;
        $tratamiento->save();
        $log->save();

        return redirect('/verTratamientos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tratamientos  $Tratamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tratamiento = Tratamientos::find($id);
        $tratamiento->delete();
        return redirect("/verTratamientos");
    }
}
