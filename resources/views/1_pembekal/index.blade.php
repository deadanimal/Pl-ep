@extends('layouts.base')

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Senarai Pembekal yang Berdaftar </h3>
        
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Jenis Akaun</th>
                            <th>Nama Syarikat</th>
                            <th>Nama Pemilik</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ( $pembekal as  $pembekal)
                            <tr>
                                <td>{{  $pembekal->pembekal_jenis_akaun}}</td>
                                <td>{{  $pembekal->pembekal_company_name}}</td>
                                <td>{{  $pembekal->pembekal_pemilik }}</td>
                                <td>{{  $pembekal->pembekal_status}}</td>
                                <td class="table-action">
                                    <a href="/Pembekal/{{$pembekal->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                    <a href="/Pembekal/{{$pembekal->id}}/destroy"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                </td>
                   
                            </tr>
                        @endforeach
                       

                    </tbody>
                 </table>

                </div>
            </div>
        </div>



@stop