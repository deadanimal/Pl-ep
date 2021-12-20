@extends('layouts.base')
@section('content')

<div class="header">
    <h1 class="header-title">
Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Audit Log</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body">

        <table>
            @foreach ($AuditLog as $AuditLog)
            <tr>  
                <td>{{date('d/m/Y H:i', strtotime($AuditLog->created_at))}}:</td>
                <td></td>
                <td>{{$AuditLog->description}}</td>
            </tr>
            @endforeach
        </table>
            </div>
        </div>
    </div>
</div>


@stop
