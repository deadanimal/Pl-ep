@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                   <h3> Cipta Nota Minta </h3>

                    <form method="POST" action="/NotaMinta">
                        @csrf

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Kaedah Permintaan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                 <input type="text" class="form-control" name="ro_kaedah">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Jenis Perolehan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="ro_jenis_perolehan">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Tempoh Penghantaran </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="ro_tempoh_penghantaran">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Jumlah (RM)     </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                 <input type="number" class="form-control" name="ro_jumlah">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Nama Pelulus</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="ro_pelulus">
                            </div>
                        </div>

                        <br>  <button href=/ItemInfo class="btn-success"> Pilihan Item </button>

                        {{-- <br> <button type="submit">Hantar</button> --}}
                    </form>

                        
                    @endsection

    
