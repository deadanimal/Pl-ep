@extends('layouts.base')
@section('content')
<div class="header">
    <h1 class="header-title">
Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Sistem Notifikasi</a></li>
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
        <table id="datatables-reponsive" class="table table-striped" style="width:100%;text-align:left" >
            <thead>
                <tr>
                    <th>Tarikh</th>
                    <th>Subjek</th>
                    <th></th>


                </tr>
            </thead>
            <tbody> 
                @foreach ($NotificationCenter as $NotificationCenter)
                
             <tr> 
              
                    <td>{{date('d/m/Y H:i', strtotime($NotificationCenter->created_at))}}</td>
                    <td>{{$NotificationCenter->noti_subject}}</td>

                    <td> {{$NotificationCenter->noti_content}}</td>
                        
                    @endforeach
                  
                </tbody>
            </tr>
   
            </div>
        </div>
    </div>
</div>



@endsection