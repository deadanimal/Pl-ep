@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
   Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Kemaskini Pengesyoran</a></li>
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

                <form method="POST" action="/Pengesyoran/{{$pengesyoran->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tarikh Mesyuarat </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="date" class="form-control" name="syor_mesyuarat_date" value="{{$pengesyoran->syor_mesyuarat_date}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Lokasi Mesyuarat </label>
                        </div> 
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="syor_mesyuarat_place"  value="{{$pengesyoran->syor_mesyuarat_place}}">
                        </div>
                    </div>
                            {{-- jawatankuasa_id --}}
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Kertas Taklimat</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <a href="/storage/{{$pengesyoran->syor_kertas_taklimat}}" target="_blank" download>Muat Turun Fail</a> 

                            <input type="file" class="form-control" name="syor_kertas_taklimat" value="{{$pengesyoran->syor_kertas_taklimat}}">

                        </div>
                    </div>

                            {{-- pembekal_id --}}
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Kedudukan Pembekal</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="syor_kedudukan_pembekal"  value="{{$pengesyoran->syor_kedudukan_pembekal}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Catatan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="syor_catatan"  value="{{$pengesyoran-> syor_catatan}}">
                        </div>
                    </div>
                            {{-- sss_id --}}

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Skor </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="syor_jumlah_skor"  value="{{$pengesyoran->syor_jumlah_skor}}">
                        </div>
                    </div>
                        {{-- syor_created_by
                    syor_created_date
                    syor_updated_by
                    syor_updated_date
                    pst_id
                    spesifikasi_id --}}

                    <br> <button type="submit" class="btn-primary">Hantar</button>
                        </form>
                    </div>
        </div>
    </div>
</div>

@stop