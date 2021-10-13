@extends('layouts.base')

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Senarai Perolehan Yang Perlu Diluluskan </h3>
        
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tahun Perolehan</th>
                            <th>Jenis Pelan</th>
                            <th>Nama Perolehan</th>
                            <th>Kategori Perolehan</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ( $fizaPelanPerancanganPerolehan as  $fizaPelanPerancanganPerolehan)
                            <tr>
                                <td>{{  $fizaPelanPerancanganPerolehan->pelan_year}}</td>
                                <td>{{  $fizaPelanPerancanganPerolehan->pelan_jenis}}</td>
                                <td>{{  $fizaPelanPerancanganPerolehan->pelan_title}}</td>
                                <td>{{  $fizaPelanPerancanganPerolehan->pelan_category }}</td>
                                <td>{{  $fizaPelanPerancanganPerolehan->pelan_status }}</td>
                                <td><a href="/editpelulus/{{$fizaPelanPerancanganPerolehan->id}}"><img src="/img/edit.svg"></td>
                            </tr>
                        @endforeach
                       

                    </tbody>
                 </table>

                </div>
            </div>
        </div>



@stop