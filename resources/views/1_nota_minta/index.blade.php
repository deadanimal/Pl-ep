@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Senarai Nota Minta</h3>
        
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th> Kaedah Pembelian </th>
                            <th> Jenis Perolehan </th>
                            <th> Tempoh Penghantaran</th>
                            <th> Status </th>
                            <th> Disediakan Oleh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($fizaNotaMinta as $fizaNotaMinta)
                            <td>{{$fizaNotaMinta->ro_kaedah}}</td>
                            <td>{{$fizaNotaMinta->ro_jenis_perolehan}}</td>
                            <td>{{$fizaNotaMinta->ro_tempoh_penghantaran}}</td>
                            <td>{{$fizaNotaMinta->ro_status}}</td>
                            <td>{{$fizaNotaMinta->ro_created_by}}</td>
                        </tr>
                             @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop