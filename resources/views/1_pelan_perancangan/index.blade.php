@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Senarai Perolehan </h3>
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
                                <td class="table-action">
                                    @if ($fizaPelanPerancanganPerolehan->pelan_status=="Menunggu pengesahan")
                                            <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></a>  
                                            <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                            <a href="/cetak-pelan/{{$fizaPelanPerancanganPerolehan->id}}"><i class="align-middle fas fa-fw fa-download"></i></i></a>
                                    @else
                                    <a href="/editpelulus/{{$fizaPelanPerancanganPerolehan->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                    <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                    <a href="/cetak-pelan/{{$fizaPelanPerancanganPerolehan->id}}"><i class="align-middle fas fa-fw fa-download"></i></i></a>
                                    @endif

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