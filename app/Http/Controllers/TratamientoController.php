<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use App\Models\LogTratamientos;
use Illuminate\Http\Request;

/**
 * Class TratamientoController
 * @package App\Http\Controllers
 */
class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tratamientos = Tratamiento::paginate();

        return view('tratamiento.index', compact('tratamientos'))
            ->with('i', (request()->input('page', 1) - 1) * $tratamientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tratamiento = new Tratamiento();
        return view('tratamiento.create', compact('tratamiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tratamiento::$rules);

        $tratamiento = Tratamiento::create($request->all());

        $log = new LogTratamientos();
        $log->idTratamientos = $tratamiento->id;
        $log->procedimientoN = $tratamiento->procedimiento;
        $log->costoSugeridoN = $tratamiento->costoSugerido;
        $log->save();

        return redirect()->route('tratamiento.index')
            ->with('success', 'Se registró correctamente el tratamiento.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tratamiento = Tratamiento::find($id);

        return view('tratamiento.show', compact('tratamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tratamiento = Tratamiento::find($id);

        return view('tratamiento.edit', compact('tratamiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tratamiento $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tratamiento $tratamiento)
    {
        request()->validate(Tratamiento::$rules);

        $tratamiento->update($request->all());

        $log = new LogTratamientos();
        $log->idTratamientos = $tratamiento->id;
        $log->procedimiento0 = $tratamiento->procedimiento;
        $log->costoSugerido0 = $tratamiento->costoSugerido;
        $log->procedimientoN = $request->procedimiento;
        $log->costoSugeridoN = $request->costoSugerido;


        return redirect()->route('tratamiento.index')
            ->with('success', 'Se actualizó correctamente el tratamiento seleccionado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tratamiento = Tratamiento::find($id)->delete();

        return redirect()->route('tratamiento.index')
            ->with('success', 'Se borró correctamente el tratamiento seleccionado');
    }
}
