@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
        Pembelian Sebut Harga/Tender
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Kehadiran Taklimat</a></li>
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

                    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <td>Tajuk SebutHarga</td>
                                <td></td>
                                <td>Tarikh Iklan</td>
                                <td>Tarikh Akhir Iklan</td>
                                <td></td>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($pst as $pst)

                            <tr>
                                <td>{{$pst->pst_tajuk}}</td>
                                <td>{{$iklan->pst_id}}</td>
                                <td>{{date('d-m-Y',strtotime($iklan->iklan_date))}}</td>
                                <td>{{date('d-m-Y',strtotime($iklan->iklan_last_date))}}</td>
                                <td><a href="/senaraikehadiran"><i class="align-middle me-2" data-feather="users"></i></a></td>


                            </tr>

                            @endforeach


                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@stop
