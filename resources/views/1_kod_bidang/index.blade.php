@extends('layouts.base')

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Senarai Kod Bidang Yang Berdaftar </h3>
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Jenis Kod Bidang</th>
                            <th>Kategori Kod</th>
                            <th>Kod Pengkhususan</th>
                            <th>Diskripsi Kod</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ( $fizaKodBidang as  $fizaKodBidang)
                            <tr>
                                <td>{{$fizaKodBidang->kod_type}}</td>
                                <td> {{$fizaKodBidang->kod_category}}</td>
                                <td>{{$fizaKodBidang->kod_pengkhususan}}</td>
                                <td>{{$fizaKodBidang->kod_description}}</td>
                                <td><a href="/KodBidang/{{$fizaKodBidang->id }}/edit"><img src="/img/edit.svg"></td>
                            </tr>
                        @endforeach

                    </tbody>
                 </table>

                </div>
            </div>
        </div>



@stop