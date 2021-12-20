@extends('layouts.base')
@section('content')
<div class="header">
    <h1 class="header-title">
Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Sistem Notifikasi</a></li>
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
        @foreach ($NotificationCenter as $NotificationCenter)
        <table>
            <tr>
                <td>{{date('d/m/Y H:i', strtotime($NotificationCenter->created_at))}}:</td>
                <td></td>
                <td> {{$NotificationCenter->noti_type}} </td>
                <td> {{$NotificationCenter->noti_template}}</td>
                <td> {{$NotificationCenter->noti_subject}}</td>
                <td> {{$NotificationCenter->noti_content}}</td>
   
    @endforeach
    </ul>
            </div>
        </div>
    </div>
</div>



@endsection