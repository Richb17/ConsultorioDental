<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Consulta;
use Illuminate\Http\Request;

class FullCalendarController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
  
        if($request->ajax()) {
       
             $data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
  
             return response()->json($data);
        }
  
        return view('fullcalender');
    }
 
    public function show(Event $event){
        $event = Event::all();
        return response()->json($event);
    }

    public function showOne($id){
        $event = Event::find($id);
        #echo($event->consulta->id);
        $consulta = Consulta::find($event->consulta->id);
        return view('consulta.show', compact('consulta'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
 
        switch ($request->type) {
           case 'add':
              $event = Event::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = Event::find($request->id)->update([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Event::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }
}