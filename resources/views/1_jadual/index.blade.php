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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadual as $jadual)

                            <tr>
                                    <td> {{$jadual->jadual_jenis_pemenuhan}}</td>
                                    <td> {{$jadual->jadual_kekerapan}}</td>
                                    <td> {{$jadual->jadual_jenis}}</td>
                                    <td class="table-action">
                                        <form method="POST" action="/JadualPemenuhan/{{$jadual->id}}">
                                            @method('DELETE')
                                            @csrf
                                        <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                        <a href="/JadualPemenuhan/{{$jadual->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                    
                                        </form>
                    
                                    </td>
        
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@stop
                               
                            