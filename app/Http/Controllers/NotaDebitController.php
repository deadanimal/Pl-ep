<?php

namespace App\Http\Controllers;

use App\Models\NotaDebit;
use Illuminate\Http\Request;

class NotaDebitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nota_debit.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nota_debit.create');

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

    public function show(NotaDebit $notaDebit)
    {
        return view('nota_debit.show');

    }

    public function edit(NotaDebit $notaDebit)
    {
        return view('nota_debit.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotaDebit  $notaDebit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotaDebit $notaDebit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotaDebit  $notaDebit
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotaDebit $notaDebit)
    {
        //
    }
}
