@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Semakan Penyediaan Spesifikasi</h3>
            </div>
            <div class="card-body">

            <form method="POST" action="/PenyediaanSpesifikasi/{{$fizaPenyediaanSpesifikasi->id}}" enctype="multipart/form-data">>
            @csrf
            @method('PUT')


            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Tajuk Spesifikasi </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="spesifikasi_tajuk" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_tajuk}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Jenis Barang</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="spesifikasi_jenis_barang" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_jenis_barang}}">
                </div>
            </div>
            

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Butiran Item</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="spesifikasi_description" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_description}}">
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Unit Ukuran </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="spesifikasi_unit_ukuran" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_unit_ukuran}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Jenis Harga</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="spesifikasi_jenis_harga" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_jenis_harga}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Jumlah Harga Indikatif</label>
                </div>
                <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="spesifikasi_jumlah_harga_indikatif" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga_indikatif}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Jumlah Harga</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_jumlah_harga" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Alamat Penghantaran </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="spesifikasi_alamat_penghantaran" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_jumlah_harga}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Catatan Spesifikasi Item</label>
                </div>
                <div class="mb-3 col-md-6">
                    <textarea rows="4" cols="50" class="form-control" name="spesifikasi_catatan">{{$fizaPenyediaanSpesifikasi->spesifikasi_catatan}}</textarea>
                </div>
            </div>
            

           
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Skor Maksima </label>
                </div>

                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_skor_maksima" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_skor_maksima}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Jumlah Skor Teknikal</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_jumlah_skor_teknikal" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_teknikal}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Skor Lulus Teknikal</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_skor_lulus_teknikal" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_teknikal}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Skema Teknikal</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="file" class="form-control" name="spesifikasi_skema_teknikal" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_skema_teknikal}}">
                </div>
            </div>
            
           
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Jumlah Skor Kewangan</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_jumlah_skor_kewangan" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_jumlah_skor_kewangan}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Skor Lulus Kewangan </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_skor_lulus_kewangan" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_kewangan}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Skema Kewangan</label>
                </div>

                <div class="mb-3 col-md-6">
                    <input type="file" class="form-control"  name="spesifikasi_skema_kewangan" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_skema_kewangan}}">
                </div>
            </div>

            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Skor Lulus Keseluruhan</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="spesifikasi_skor_lulus_keseluruhan" value="{{$fizaPenyediaanSpesifikasi->spesifikasi_skor_lulus_keseluruhan}}">
                </div>
            </div>

 
            <button type="submit" class="btn-primary">Hantar</button>
            </form>
            </div>
        </div>
    </div>
</div>
@stop
