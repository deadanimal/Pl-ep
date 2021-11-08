@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Nota Penerimaan</h3>
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr> 
                            <th> Nama Pegawai Pengesah</th>
                            <th> Catatan </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($NotaPenerimaan as $NotaPenerimaan)
                        <tr>
                                <th>{{$NotaPenerimaan->terima_pegawai_pengesah}}</th>
                                <th>{{$NotaPenerimaan->terima_catatan}}</th>
                                <th> <a href="/NotaPenerimaan/{{$NotaPenerimaan->id}}/edit">Butiran </a></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop



                            
                            
