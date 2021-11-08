@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Senarai Spesifikasi Item </h3>
                    <table id="datatables-1" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Jenis Barang</th>
                                <th>Status</th>
                                <th>Disediakan Oleh</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ( $fizaPenyediaanSpesifikasi as  $fizaPenyediaanSpesifikasi)
                                <tr>
                                    <td>{{  $fizaPenyediaanSpesifikasi->spesifikasi_tajuk_template}}</td>
                                    <td>{{  $fizaPenyediaanSpesifikasi->spesifikasi_jenis}}</td>
                                    <td>{{  $fizaPenyediaanSpesifikasi->spesifikasi_status}}</td>
                                    <td>{{  $fizaPenyediaanSpesifikasi->spesifikasi_created_by}}</td>
                                    <td><a href="/PenyediaanSpesifikasi/{{$fizaPenyediaanSpesifikasi->id }}/edit"><img src="/img/edit.svg"></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

@stop




                