@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3> Jadual Pemenuhan </h3>
                <div class="card-body">
                    <table id="datatables-1" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Jenis Pemenuhan </th>
                                <th> Kekerapan</th>
                                <th>Jenis </th>
                            </tr>
                        </thead>
                        <tr>
                            <tbody>
                                @foreach ($jadual as $jadual)
                                    <td> {{$jadual->jadual_jenis_pemenuhan}}</td>
                                    <td> {{$jadual->jadual_kekerapan}}</td>
                                    <td> {{$jadual->jadual_jenis}}</td>
        
                                @endforeach
                            </tbody>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
                                
                            