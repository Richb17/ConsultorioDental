<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\LogConsultas;
use App\Models\Tratamiento;
use App\Models\Paciente;
use App\Models\Event;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

/**
 * Class ConsultaController
 * @package App\Http\Controllers
 */
class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function calendar()
    {
        $consulta = new Consulta();
        $tratamientos = Tratamiento::all();
        $pacientes = Paciente::all();
        $events = Event::all();
        return view('consulta.home', compact('consulta', 'tratamientos', 'pacientes', 'events'));
    }

    public function index()
    {
        $consultas = Consulta::paginate();

        return view('consulta.index', compact('consultas'))
            ->with('i', (request()->input('page', 1) - 1) * $consultas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consulta = new Consulta();
        $tratamientos = Tratamiento::all();
        $pacientes = Paciente::all();
        return view('consulta.create', compact('consulta', 'tratamientos', 'pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Consulta::$rules);

        if($request->pagoCompleto){
            $request->fechaPago = date("Y-m-d");
            echo ($request->fechaPago);
        }

        $consulta = Consulta::create($request->all());
        $consulta->fechaPago = date("Y-m-d");
        $consulta->save();
        
        $log = new LogConsultas();
        $log->idConsulta = $consulta->id;
        $log->paciente_idN = $consulta->paciente_id;
        $log->procedimiento_idN = $consulta->procedimiento_id;
        $log->fechaProgramadaN = $consulta->fechaProgramada;
        $log->startN = $consulta->start;
        $log->endN = $consulta->end;
        $log->asistenciaN = false;
        $log->pagoCompletoN = false;
        $log->save();

        $event = new Event();
        $event->title = $consulta->tratamiento->procedimiento;
        $event->start = $consulta->fechaProgramada.'T'.$consulta->start;
        $event->end = $consulta->fechaProgramada.'T'.$consulta->end;
        $event->consultaId = $consulta->id;
        $event->save();

        return redirect()->route('consulta.index')
            ->with('success', 'Se registro una nueva consulta!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consulta = Consulta::find($id);

        return view('consulta.show', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Consulta::find($id);
        $tratamientos = Tratamiento::all();
        $pacientes = Paciente::all();

        return view('consulta.edit', compact('consulta', 'tratamientos', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Consulta $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consulta $consulta)
    {
        request()->validate(Consulta::$rules);
        

        $consulta = Consulta::find($request->id);
        $consulta->paciente_id = $request->paciente_id;
        $consulta->procedimiento_id = $request->procedimiento_id;
        $consulta->fechaProgramada = $request->fechaProgramada;
        $consulta->start = $request->start;
        $consulta->end = $request->end;
        if($request->asistencia){
        $consulta->asistencia = $request->asistencia;
        }
        if($request->pagoCompleto){
        $consulta->pagoCompleto = $request->pagoCompleto;
        $consulta->fechaPago = date('Y-m-d');
        }
        $consulta->save();
        return redirect('/consulta');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consulta = Consulta::find($id)->delete();

        return redirect()->route('consulta.index')
            ->with('success', 'Se elimin?? correctamente');
    }

    public function downloadPdf()
    {
        $consultas = Consulta::all();

        view()->share('consulta.pdf',$consultas);

        $pdf = PDF::loadView('consulta.pdf', ['consultas' => $consultas])->setOptions(['defaultFont' => 'sans-serif']);
        
        return $pdf->download('consulta.pdf');
    }
}
