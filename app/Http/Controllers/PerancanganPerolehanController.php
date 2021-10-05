<?php

namespace App\Http\Controllers;

use App\Models\PerancanganPerolehan;
use Illuminate\Http\Request;

class PerancanganPerolehanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perancangan_perolehan.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perancangan_perolehan.create');

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
     * @param  \App\Models\PerancanganPerolehan  $perancanganPerolehan
     * @return \Illuminate\Http\Response
     */
    public function show(PerancanganPerolehan $perancanganPerolehan)
    {
        return view('perancangan_perolehan.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerancanganPerolehan  $perancanganPerolehan
     * @return \Illuminate\Http\Response
     */
    public function edit(PerancanganPerolehan $perancanganPerolehan)
    {
        return view('perancangan_perolehan.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerancanganPerolehan  $perancanganPerolehan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerancanganPerolehan $perancanganPerolehan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerancanganPerolehan  $perancanganPerolehan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerancanganPerolehan $perancanganPerolehan)
    {
        //
    }
}
