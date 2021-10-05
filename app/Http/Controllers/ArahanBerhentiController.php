<?php

namespace App\Http\Controllers;

use App\Models\ArahanBerhenti;
use Illuminate\Http\Request;

class ArahanBerhentiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('arahan_berhenti.index');
    }

    public function create()
    {
       //
    }

    public function store(Request $request)
    {
        return view('arahan_berhenti.create');

    }

    public function show(ArahanBerhenti $arahanBerhenti)
    {
        //

    }

    public function edit(ArahanBerhenti $arahanBerhenti)
    {
        return view('arahan_berhenti.show');

    }


    public function update(Request $request, ArahanBerhenti $arahanBerhenti)
    {
        return view('arahan_berhenti.edit');
    }

    public function destroy(ArahanBerhenti $arahanBerhenti)
    {
        //
    }
}
