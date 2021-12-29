@extends('layouts.base')
@section('content')
    
<div class="header">
    <h1 class="header-title">
      Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kemaskini Nota Penerimaan</a></li>
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

                <form method="POST" action="/NotaPenerimaan/{{$NotaPenerimaan->id}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6"> Nama Pegawai Pengesahan Penerimaan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=text class="form-control" name="terima_pegawai_pengesah" value="{{$NotaPenerimaan->terima_pegawai_pengesah}}">
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6"> Catatan </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=text class="form-control" name="terima_catatan" value="{{$NotaPenerimaan->terima_catatan}}">
                        </div>
                    </div>

                {{-- terima_id
                pesanan_id
                pembekal_id
                user_id --}}

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Kuantiti Yang Diterima  </label>   
                    </div>
                        <div class="mb-3 col-md-6">
                            <input type=number class="form-control" name="terima_kuantiti" value="{{$NotaPenerimaan->terima_kuantiti}}">
                        </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Amaun Item Yang Diterima</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=number class="form-control" name="terima_amaun" value="{{$NotaPenerimaan->terima_amaun}}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6"> Skor Item </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=number class="form-control" name="terima_skor_khidmat_sokongan" value="{{$NotaPenerimaan->terima_skor_khidmat_sokongan}}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Skor Kuantiti Item </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=number class="form-control" name="terima_skor_kuantiti" value="{{$NotaPenerimaan->terima_skor_kuantiti}}">
                    </div>
                </div>

                <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6"> Skor Tempoh Penghantaran </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=number class="form-control" name="terima_skor_tempoh_penghantaran" value="{{$NotaPenerimaan->terima_skor_tempoh_penghantaran}}">
                        </div>
                </div>
{{-- penghantaran_id
sst_id
terima_created_by
terima_created_date
terima_updated_by
terima_updated_date --}}
<br>
<button type="submit" class="btn-primary" style="float: right">Hantar</button>
</form>
            </div>
        </div>
    </div>
</div>

@stop