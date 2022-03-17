@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
        Penyediaan Spesifikasi
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kemaskini Spesifikasi Item</a></li>
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
                <a href="/PenyediaanSpesifikasi">Kembali</a>
            <form method="POST" action="/PenyediaanSpesifikasi/{{$PenyediaanSpesifikasi->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="hidden" class="form-control" name="pst_id" value="{{$PenyediaanSpesifikasi->pst_id}}" readonly>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Tajuk Spesifikasi </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text"  class="form-control" name="spesifikasi_tajuk" value="{{$PenyediaanSpesifikasi->spesifikasi_tajuk}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Jenis Barang </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="spesifikasi_jenis_barang" value="{{$PenyediaanSpesifikasi->spesifikasi_jenis_barang}}" readonly>
                </div>
            </div>

             <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Butiran Item </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="spesifikasi_description" value="{{$PenyediaanSpesifikasi->spesifikasi_description}}" readonly>
                    </div>
             </div>

             <div class="row">
                 <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Unit Ukuran</label>
                 </div>
                 <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_unit_ukuran" value="{{$PenyediaanSpesifikasi->spesifikasi_unit_ukuran}}" readonly>
                 </div>
             </div>

             <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Jenis Harga </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="spesifikasi_jenis_harga" value="{{$PenyediaanSpesifikasi->spesifikasi_jenis_harga}}" readonly>
                </div>
             </div>


            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Jumlah Harga Indikatif</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_jumlah_harga_indikatif" value="{{$PenyediaanSpesifikasi->spesifikasi_jumlah_harga_indikatif}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Jumlah Harga</label>
                </div>
                <div class="mb-3 col-md-6">
                     <input type="number" class="form-control" name="spesifikasi_jumlah_harga" value="{{$PenyediaanSpesifikasi->spesifikasi_jumlah_harga}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Jumlah Harga</label>
                </div>
                <div class="mb-3 col-md-6">
                     <input type="number" class="form-control" name="spesifikasi_jumlah_harga" value="{{$PenyediaanSpesifikasi->spesifikasi_jumlah_harga}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Alamat Penghantaran</label>
                </div>
                <div class="mb-3 col-md-6">
                    <textarea class="form-control" name="spesifikasi_alamat_penghantaran" rows="3" cols="4" readonly>{{$PenyediaanSpesifikasi->spesifikasi_alamat_penghantaran}}</textarea>
                </div>
            </div>


            <fieldset>
                <legend>Spesifikasi Teknikal</legend>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Skema Teknikal </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <div class="mb-2">
                            <span class="align-middle"><a href="/storage/{{$PenyediaanSpesifikasi->spesifikasi_skema_teknikal}}" target="_blank" download> <i class="align-middle me-2" data-feather="download-cloud"></i>Muat Turun Fail</a></span>
                        </div>
                    </div>
                        {{-- <a href="/storage/{{$PenyediaanSpesifikasi->spesifikasi_skema_kewangan}}" target="_blank" download>Muat Turun Fail</a> --}}
               </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Skor Lulus Teknikal</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_skor_lulus_teknikal" value="{{$PenyediaanSpesifikasi->spesifikasi_skor_lulus_teknikal}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Jumlah Skor Teknikal</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_jumlah_skor_teknikal" value="{{$PenyediaanSpesifikasi->spesifikasi_jumlah_skor_teknikal}}" readonly>
                </div>
            </div>

            </fieldset>
            <br><br>


            <fieldset>
                <legend>Spesifikasi Kewangan</legend>

                <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="col-form-label col-sm-6">Skema Kewangan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <div class="mb-2">
                            <span class="align-middle"><a href="/storage/{{$PenyediaanSpesifikasi->spesifikasi_skema_kewangan}}" target="_blank" download> <i class="align-middle me-2" data-feather="download-cloud"></i>Muat Turun Fail</a></span>
                         </div>
                    </div>
                        {{-- <a href="/storage/{{$PenyediaanSpesifikasi->spesifikasi_skema_kewangan}}" target="_blank" download>Muat Turun Fail</a> --}}
               </div>

               <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6">Skor Lulus Kewangan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="spesifikasi_skor_lulus_kewangan" value="{{$PenyediaanSpesifikasi->spesifikasi_skor_lulus_kewangan}}" readonly>
                    </div>
               </div>

               <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6">Jumlah Skor Kewangan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="spesifikasi_jumlah_skor_kewangan" value="{{$PenyediaanSpesifikasi->spesifikasi_jumlah_skor_kewangan}}" readonly>
                    </div>
                </div>

            </fieldset>
            <br><br>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Skor Maksima</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_skor_maksima" value="{{$PenyediaanSpesifikasi->spesifikasi_skor_maksima}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Skor Lulus Keseluruhan</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="spesifikasi_skor_lulus_keseluruhan" value="{{$PenyediaanSpesifikasi->spesifikasi_skor_lulus_keseluruhan}}" readonly>
                </div>
            </div>


            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Catatan Spesifikasi Item </label>
                </div>
                <div class="mb-3 col-md-6">
                     <textarea rows="3" cols="4" class="form-control" name="spesifikasi_catatan" readonly>{{$PenyediaanSpesifikasi->spesifikasi_catatan}}</textarea>
                </div>
            </div>




            <div align="right">
                {{-- <button type="submit" class="btn btn-primary">Hantar</button> --}}
                {{-- <button class=" btn btn-success" onclick="window.location.href='/PenyediaanSpesifikasi'">Kembali</a></button> --}}
                <button  class="btn btn-primary" type="submit" name="status_spesifikasi" value="lulus">Luluskan</button>

            </div>


            </form>
            </div>
        </div>
    </div>
</div>
@stop
