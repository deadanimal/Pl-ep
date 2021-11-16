@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Surat Setuju Terima </h3>
                <form method="POST" action="/SuratSetujuTerima/{{$SuratSetujuTerima->id}}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Tajuk </label>
                        </div>
                    
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_tajuk" value="{{$SuratSetujuTerima->sst_tajuk}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Insurans Jaminan </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_insurans_jaminan" value="{{$SuratSetujuTerima->sst_insurans_jaminan}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Bon Surat Setuju Terima</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_bon" value="{{$SuratSetujuTerima->sst_bon}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Semakan Surat Setuju Terima </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_semakan" value="{{$SuratSetujuTerima->sst_semakan}}">
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">SST Sl1m </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_sl1m" value="{{$SuratSetujuTerima->sst_sl1m}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Pentadbir Kontrak</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_pentadbir_kontrak" value="{{$SuratSetujuTerima->sst_pentadbir_kontrak}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Perjanjian</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_perjanjian" value="{{$SuratSetujuTerima->sst_perjanjian}}">
                        </div>
                    </div>

                    {{-- <br>FILE <input type="file" class="form-control" name="sst_file"> --}}
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Penandatangan </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_penandatangan" value="{{$SuratSetujuTerima->sst_penandatangan}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Pelulus</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_pelulus" value="{{$SuratSetujuTerima->sst_pelulus}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Catatan Pelulus</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_catatan_pelulus" value="{{$SuratSetujuTerima->sst_catatan_pelulus}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">No Akaun </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_no_akaun" value="{{$SuratSetujuTerima->sst_no_akaun}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Nama Bank </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_nama_bank" value="{{$SuratSetujuTerima->sst_nama_bank}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Harga Cadangan Tawaran </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_harga_cadangan_tawaran" value="{{$SuratSetujuTerima->sst_harga_cadangan_tawaran}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Amaun Cukai Barang dan Perkhidmatan (CBP)</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="sst_amaun_cbp" value="{{$SuratSetujuTerima->sst_amaun_cbp}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Amaun Keseluruhan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="sst_amaun_keseluruhan" value="{{$SuratSetujuTerima->sst_amaun_keseluruhan}}">
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Jenis Potongan </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_jenis_potongan" value="{{$SuratSetujuTerima->sst_jenis_potongan}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Amaun Potongan </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="sst_amaun_potongan" value="{{$SuratSetujuTerima->sst_amaun_potongan}}">
                        </div>
                    </div>
                    <br><br>
                    <fieldset>
                        <legend>Maklumat Saksi</legend>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Nama Saksi </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="sst_nama_saksi" value="{{$SuratSetujuTerima->sst_nama_saksi}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">No Pengenalan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="sst_no_pengenalan" value="{{$SuratSetujuTerima->sst_no_pengenalan}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Jawatan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="sst_jawatan" value="{{$SuratSetujuTerima->sst_jawatan}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Alamat </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="sst_alamat" value="{{$SuratSetujuTerima->sst_alamat}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">No Tel Bimbit </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="sst_no_tel" value="{{$SuratSetujuTerima->sst_no_tel}}"> 
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">No Fax </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="sst_no_fax"  value="{{$SuratSetujuTerima->sst_no_fax}}" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Email</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="email" class="form-control" name="sst_email" value="{{$SuratSetujuTerima->sst_email}}">
                            </div>
                        </div>
        
                    </fieldset>

                    <br>
                    <button type="submit" class="btn-primary">Hantar</button>
                    </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    @stop