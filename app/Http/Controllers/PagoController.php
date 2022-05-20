<?php

namespace App\Http\Controllers;

use App\Models\Pagos;
use App\Models\LogPagos;
use Illuminate\Http\Request;

class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagos  $Pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pagos $Pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagos  $Pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagos $Pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagos  $Pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagos $Pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagos  $Pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagos $Pago)
    {
        //
    }
}
