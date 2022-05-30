<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\LogPacientes;
use Illuminate\Http\Request;

/**
 * Class PacienteController
 * @package App\Http\Controllers
 */
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::paginate();

        return view('paciente.index', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * $pacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new Paciente();
        return view('paciente.create', compact('paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Paciente::$rules);

        $paciente = Paciente::create($request->all());

        $log = new LogPacientes();
        $log->idPaciente = $paciente->id;
        $log->nombreN = $paciente->nombre;
        $log->apellidoPN = $paciente->apellidoP;
        $log->apellidoMN = $paciente->apellidoM;
        $log->numTelefonoN = $paciente->numTelefono;
        $log->save();

        return redirect()->route('paciente.index')
            ->with('success', 'Se creó correctamente un paciente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);

        return view('paciente.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);

        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        request()->validate(Paciente::$rules);

        $paciente->update($request->all());

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

        return redirect()->route('paciente.index')
            ->with('success', 'Se actualizó correctamente el paciente seleccionado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id)->delete();

        return redirect()->route('paciente.index')
            ->with('success', 'Se borro el paciente seleccionado');
    }
}
