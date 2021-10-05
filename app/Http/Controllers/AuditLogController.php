<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use Illuminate\Http\Request;

class AuditLogController extends Controller
{

    public function index()
    {
        return view('auditlog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auditlog.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(AuditLog $auditLog)
    {
        return view('auditlog.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuditLog  $auditLog
     * @return \Illuminate\Http\Response
     */
    public function edit(AuditLog $auditLog)
    {
        return view('auditlog.edit');
    }

    public function update(Request $request, AuditLog $auditLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuditLog  $auditLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuditLog $auditLog)
    {
        //
    }
}
