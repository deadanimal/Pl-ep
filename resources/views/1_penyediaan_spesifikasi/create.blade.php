@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

                <h3> Borang Penyediaan Spesifikasi Item</h3>

                <br><br>
                <form method="POST" action="/PenyediaanSpesifikasi">
                @csrf

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Tajuk Spesifikasi </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text"  class="form-control" name="spesifikasi_tajuk">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Jenis Barang </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="spesifikasi_jenis_barang">
                    </div>
                </div>

                 <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Butiran Item </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_description">
                        </div>
                 </div>

                 <div class="row">
                     <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Unit Ukuran</label>
                     </div>
                     <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="spesifikasi_unit_ukuran">
                     </div>
                 </div>

                 <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Jenis Harga </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="spesifikasi_jenis_harga">
                    </div>
                 </div>


                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Jumlah Harga Indikatif</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="spesifikasi_jumlah_harga_indikatif">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Jumlah Harga</label>
                    </div>
                    <div class="mb-3 col-md-6">
                         <input type="text" class="form-control" name="spesifikasi_jumlah_harga">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Alamat Penghantaran</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="spesifikasi_alamat_penghantaran">
                    </div>
                </div>


                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Skema Teknikal </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="file" class="form-control" name="spesifikasi_skema_teknikal">
                    </div>
                </div>


                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Catatan Spesifikasi Item </label>
                    </div>
                    <div class="mb-3 col-md-6">
                         <textarea rows="4" cols="50" class="form-control" name="spesifikasi_catatan"></textarea>
                    </div>
                </div>

                
                <div class="row">
                     <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Skema Kewangan</label>
                     </div>
                     <div class="mb-3 col-md-6">
                        <input type="file" class="form-control" name="spesifikasi_skema_kewangan">
                     </div>
                </div>

                <br>
               
                <div style=float-right>
                    <button class="btn-success" type="submit" name="status_spesifikasi" value="draf">Draf</button> 
                    <button  class="btn-primary" type="submit" name="status_spesifikasi" value="hantar">Hantar</button> 
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
