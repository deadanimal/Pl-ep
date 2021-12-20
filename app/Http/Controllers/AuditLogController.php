<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\AuditLog;
use Illuminate\Http\Request;

class AuditLogController extends Controller
{

    public function index()
    {
        $AuditLog = AuditLog::orderBy('created_at', 'desc')->get();
        $user = User::all();

        return view('audit_log.index', [
            'AuditLog'=>$AuditLog, 
            'user'=>$user
            ] );
    }

    public function create()
    {
        return view('AuditLog.create');
    }

    public function store(Request $request)
    {
        $AuditLog = new AuditLog;
        
        $AuditLog->item = $request->item;
        $AuditLog->description = $request->description;
        $AuditLog->user_id = $request->user_id;

        $AuditLog->save();
        
        return redirect('/AuditLog');

    }


    public function show(AuditLog $auditLog)
    {
        // return view('auditlog.show');
    }


    public function edit(AuditLog $auditLog)
    {
        return view('auditlog.edit');
    }

    public function update(Request $request, AuditLog $auditLog)
    {

        //
        
    }

    
    public function destroy(AuditLog $auditLog)
    {
        //
    }

    public function log($request){
       
        $auditLog = new AuditLog;
        $auditLog->item = $request[0];
        $auditLog->description = $request[1];
        $auditLog->user_id = $request[2];

        $auditLog->save();

    }
}
