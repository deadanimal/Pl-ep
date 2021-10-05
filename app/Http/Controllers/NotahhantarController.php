<?php

namespace App\Http\Controllers;

use App\Models\Notahhantar;
use Illuminate\Http\Request;

class NotahhantarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nota_hantar.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nota_hantar.create');
        
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
     * @param  \App\Models\Notahhantar  $notahhantar
     * @return \Illuminate\Http\Response
     */
    public function show(Notahhantar $notahhantar)
    {
        return view('nota_hantar.show');

    }


    public function edit(Notahhantar $notahhantar)
    {
        return view('nota_hantar.edit');

    }


    public function update(Request $request, Notahhantar $notahhantar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notahhantar  $notahhantar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notahhantar $notahhantar)
    {
        //
    }
}
