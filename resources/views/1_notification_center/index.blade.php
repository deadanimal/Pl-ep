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
    <ul>
        @foreach ($NotificationCenter as $NotificationCenter)
        <li>{{$NotificationCenter->noti_type}} {{$NotificationCenter->noti_template}} {{$NotificationCenter->noti_subject}} {{$NotificationCenter->noti_content}}</li>
   
    @endforeach
    </ul>
            </div>
        </div>
    </div>
</div>



@endsection