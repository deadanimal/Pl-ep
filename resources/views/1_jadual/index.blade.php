@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
      Jadual Pemenuhan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Senarai Jadual Pemenuhan</a></li>
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
                    <table id="datatables-1" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Jenis Jadual</th>
                                <th>Kekerapan</th>
                                <th>Jenis Jadual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($jadual as $jadual)
                                    <td> {{$jadual->jadual_jenis_pemenuhan}}</td>
                                    <td> {{$jadual->jadual_kekerapan}}</td>
                                    <td> {{$jadual->jadual_jenis}}</td>
        
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@stop
                               
                            