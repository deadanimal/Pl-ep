@extends('layouts.base')

@section('content')



<div class="header">
    <h1 class="header-title">
      Jadual Pemenuhan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kemaskini Jadual Pemenuhan</a></li>
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

                    <form method="POST" action="/JadualPemenuhan/{{$jadual->id}}">
                    @csrf
                    @method("PUT")

                    <input type="hidden" name="spesifikasi_id" value="{{$jadual->spesifikasi_id}}">
                    <br><br>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis Pemenuhan </label>
                        </div>
                         <div class="mb-3 col-md-6">
                        <input type="text"  class="form-control" name="jadual_jenis_pemenuhan" value="{{$jadual->jadual_jenis_pemenuhan}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Kekerapan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="jadual_kekerapan" value="{{$jadual->jadual_kekerapan}}">
                            </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Bilangan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="jadual_bil" value="{{$jadual->jadual_bil}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Bulan Mula </label>
                        </div>
                         <div class="mb-3 col-md-6">
                            <input type="month" class="form-control" name="jadual_bulan_mula" id="month1" value="{{$jadual->jadual_bulan_mula}}">
                        </div>
                    </div>

                    {{-- <br>Tahun Mula <input type="" --}}
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Bulan Akhir  </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="month" class="form-control" name="jadual_bulan_akhir" id="month2" value="{{$jadual->jadual_bulan_akhir}}">
                        </div>
                    </div>
                    {{-- <br>Jumlah Bulan <input type=class="form-control" name="jadual_jumlah_bulan" id="total_month"> --}}

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis Jadual</label>
                        </div>
                         <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="jadual_jenis" value="{{$jadual->jadual_jenis}}">
                        </div>
                    </div>

                    <br>

                    <div align=right>
                        <button type="submit" name="jadual_status" value="lulus" class="btn btn-primary"><i class="fas fa-check"></i> Diluluskan</button>
                        <button type="submit" name="jadual_status" value="ditolak" class="btn btn-danger"><i class="fas fa-times"></i> Ditolak</button>
                    </div>

                </form>
        </div>
    </div>
</div>


@stop
