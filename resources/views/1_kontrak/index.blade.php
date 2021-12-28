@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3> Senarai Kontrak</h3>
            </div>
            <div class="card-body">
                <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                    <thead>
                        <tr> 
                            <th> No Fizikal Kontrak </th>
                            <th> Tempoh Penghantaran </th>
                            <th> No Rujukan Bon </th>
                            <th> Kontrak Pelulus </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fizaKontrak as $fizaKontrak)
                        <tr>
                            <td>{{$fizaKontrak->kontrak_no_fizikal}}</td>
                            <td>{{$fizaKontrak->kontrak_tempoh_penghantaran}}</td>
                            <td>{{$fizaKontrak->kontrak_no_rujukan_bon}}</td>
                            <td>{{$fizaKontrak->kontrak_pelulus}}</td>
                            <td><a href="/Kontrak/{{$fizaKontrak->id}}/edit">Butiran </a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
                