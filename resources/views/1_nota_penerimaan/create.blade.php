@extends('layouts.base')
@section('content')
    
<h3> Nota Penerimaan</h3>

<form method="POST" action="/NotaPenerimaan">
    @csrf
    
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-6 "> Nama Pegawai Pengesahan Penerimaan</label>
        </div>
        <div class="mb-3 col-md-6">
            <input type=text class="form-control" name="terima_pegawai_pengesah">
        </div>
    </div>

    
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-6 "> Catatan </label>
        </div>
        <div class="mb-3 col-md-6">
            <input type=text class="form-control" name="terima_catatan">
        </div>
    </div>

{{-- terima_id
pesanan_id
pembekal_id
user_id --}}

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-6 ">Kuantiti Yang Diterima  </label>   
        </div>
            <div class="mb-3 col-md-6">
                <input type=number class="form-control" name="terima_kuantiti">
            </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-6 ">Amaun Item Yang Diterima</label>
        </div>
        <div class="mb-3 col-md-6">
            <input type=number class="form-control" name="terima_amaun">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-6 "> Skor Item </label>
        </div>
        <div class="mb-3 col-md-6">
            <input type=number class="form-control" name="terima_skor_khidmat_sokongan">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-6 ">Skor Kuantiti Item </label>
        </div>
        <div class="mb-3 col-md-6">
            <input type=number class="form-control" name="terima_skor_kuantiti">
        </div>
    </div>

    <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 "> Skor Tempoh Penghantaran </label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=number class="form-control" name="terima_skor_tempoh_penghantaran">
            </div>
    </div>

    <button type="submit" class="btn-success" style="float: right">Hantar</button>


{{-- penghantaran_id
sst_id--}}
<br>
</form>
@stop