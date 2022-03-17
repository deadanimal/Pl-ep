@extends('layouts.base')

@section('content')


<div class="header">
    <h1 class="header-title">
        Penyediaan Spesifikasi
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Cipta Penyediaan Spesifikasi</a></li>
        </ol>
    </nav>
</div>
{{-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body">

                <form method="POST" action="/PenyediaanSpesifikasi" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="pst_id" value="{{$pst->id}}">

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Tajuk Spesifikasi </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text"  class="form-control" name="spesifikasi_tajuk">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis Barang </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="spesifikasi_jenis_barang">
                    </div>
                </div>

                 <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Butiran Item </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_description">
                        </div>
                 </div>

                 <div class="row">
                     <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Unit Ukuran</label>
                     </div>
                     <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="spesifikasi_unit_ukuran">
                     </div>
                 </div>

                 <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Jenis Harga </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="spesifikasi_jenis_harga">
                    </div>
                 </div>


                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Jumlah Harga Indikatif</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="spesifikasi_jumlah_harga_indikatif">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Jumlah Harga</label>
                    </div>
                    <div class="mb-3 col-md-6">
                         <input type="number" class="form-control" name="spesifikasi_jumlah_harga">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Jumlah Harga</label>
                    </div>
                    <div class="mb-3 col-md-6">
                         <input type="number" class="form-control" name="spesifikasi_jumlah_harga">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Alamat Penghantaran</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <textarea class="form-control" name="spesifikasi_alamat_penghantaran" rows="3" cols="4"></textarea>
                    </div>
                </div>


                <fieldset>
                    <legend>Spesifikasi Teknikal</legend>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Skema Teknikal </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="file" class="form-control" name="spesifikasi_skema_teknikal">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Skor Lulus Teknikal</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="spesifikasi_skor_lulus_teknikal">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Jumlah Skor Teknikal</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="spesifikasi_jumlah_skor_teknikal">
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
                           <input type="file" class="form-control" name="spesifikasi_skema_kewangan">
                        </div>
                   </div>

                   <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6">Skor Lulus Kewangan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_skor_lulus_kewangan">
                        </div>
                   </div>

                   <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6">Jumlah Skor Kewangan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_jumlah_skor_kewangan">
                        </div>
                    </div>

                </fieldset>
                <br><br>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Skor Maksima</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="spesifikasi_skor_maksima">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Skor Lulus Keseluruhan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="spesifikasi_skor_lulus_keseluruhan">
                    </div>
                </div>


                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Catatan Spesifikasi Item </label>
                    </div>
                    <div class="mb-3 col-md-6">
                         <textarea rows="3" cols="4" class="form-control" name="spesifikasi_catatan"></textarea>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-12 col-xxl-12">
                        <div id="smartwizard-default-primary" class="wizard wizard-primary mb-4">
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href="#sebutharga">1<br /><small>Maklumat Sebutharga</small></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#spesifikasi">2<br /><small>Maklumat Spesifikasi</small></a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="sebutharga" class="tab-pane" role="tabpanel">

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Sistem Panel </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_sistem_panel" value="{{$pst->pst_sistem_panel}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Item Panel </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_item_panel" value="{{$pst->pst_item_panel}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">No1PP </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_no1pp" value="{{$pst->pst_no1pp}}" readonly>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Tajuk Pembelian SebutHarga & Tender </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_tajuk" value="{{$pst->pst_tajuk}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">No Rujukan Fail</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_no_rujukan_fail" value="{{$pst->pst_no_rujukan_fail}}" readonly>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Jumlah Harga Jangkaan Indikatif </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="number" class="form-control" name="pst_total_harga_indikatif_jangkaan" value="{{$pst->pst_total_harga_indikatif_jangkaan}}" readonly>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                               <label class="col-form-label col-sm-6">Kaedah Perolehan</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_kaedah_perolehan" value="{{$pst->pst_kaedah_perolehan}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Jenis PST </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_jenis" value="{{$pst->pst_jenis}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6"> Terbuka Kepada</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_terbuka_kepada" value="{{$pst->pst_terbuka_kepada}}" readonly>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Zon </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_zon_lokasi" value="{{$pst->pst_zon_lokasi}}" readonly>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6"> Kategori Jenis Perolehan </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type=text name=pst_kategori_jenis_perolehan class="form-control" value="{{$pst->pst_kategori_jenis_perolehan}}" readonly>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Jenis Kontrak</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_jenis_kontrak" value="{{$pst->pst_jenis_kontrak}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Jenis Pemenuhan</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_jenis_pemenuhan" value="{{$pst->pst_jenis_pemenuhan}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Tempoh Kontrak</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_tempoh_kontrak" value="{{$pst->pst_tempoh_kontrak}}" readonly>
                                        </div>
                                    </div>
                                {{--
                                item_id
                                kod_id
                                pembekal_id --}}

                                <form method="POST" action="/PenyediaanSpesifikasi" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="pst_id" value="{{$pst->id}}">

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Jumlah Pembekal Yang Layak</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="number" class="form-control" name="pst_jumlah_pembekal_layak" value="{{$pst->pst_jumlah_pembekal_layak}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Nama Pelulus</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="pst_pelulus" value="{{$pelulus->user_name}}" readonly>

                                            {{-- <input type="text" class="form-control" name="pst_katalog_kumpulan" value="{{$pst->pst_pelulus}}" readonly> --}}
                                            {{-- <select  class="form-control" name="pst_pelulus" disabled>
                                                @foreach ($user as $user)
                                                <option @if ($pst->pst_pelulus == $user->id) selected @endif value={{$user->id}}>{{$user->user_name}}</option>
                                                @endforeach
                                            </select> --}}

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Catatan Pelulus </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <textarea class="form-control" rows="4" cols="3" name="pst_catatan_pelulus" readonly>{{$pst->pst_catatan_pelulus}}</textarea>
                                            {{-- <input type="text" class="form-control" name="pst_catatan_pelulus" value="{{$pst->pst_catatan_pelulus}}"> --}}
                                        </div>
                                    </div>

                                </div>

                                <div id="spesifikasi" class="tab-pane" role="tabpanel">

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Tajuk Spesifikasi </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text"  class="form-control" name="spesifikasi_tajuk">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                               <label class="col-form-label col-sm-6">Jenis Barang </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="spesifikasi_jenis_barang">
                                        </div>
                                    </div>

                                     <div class="row">
                                            <div class="mb-3 col-md-6">
                                               <label class="col-form-label col-sm-6">Butiran Item </label>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <input type="text" class="form-control" name="spesifikasi_description">
                                            </div>
                                     </div>

                                     <div class="row">
                                         <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Unit Ukuran</label>
                                         </div>
                                         <div class="mb-3 col-md-6">
                                            <input type="number" class="form-control" name="spesifikasi_unit_ukuran">
                                         </div>
                                     </div>

                                     <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Jenis Harga </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="spesifikasi_jenis_harga">
                                        </div>
                                     </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Jumlah Harga Indikatif</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="number" class="form-control" name="spesifikasi_jumlah_harga_indikatif">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Jumlah Harga</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                             <input type="number" class="form-control" name="spesifikasi_jumlah_harga">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Jumlah Harga</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                             <input type="number" class="form-control" name="spesifikasi_jumlah_harga">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Alamat Penghantaran</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <textarea class="form-control" name="spesifikasi_alamat_penghantaran" rows="3" cols="4"></textarea>
                                        </div>
                                    </div>


                                    <fieldset>
                                        <legend>Spesifikasi Teknikal</legend>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Skema Teknikal </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="file" class="form-control" name="spesifikasi_skema_teknikal">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Skor Lulus Teknikal</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="number" class="form-control" name="spesifikasi_skor_lulus_teknikal">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Jumlah Skor Teknikal</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="number" class="form-control" name="spesifikasi_jumlah_skor_teknikal">
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
                                               <input type="file" class="form-control" name="spesifikasi_skema_kewangan">
                                            </div>
                                       </div>

                                       <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="col-form-label col-sm-6">Skor Lulus Kewangan</label>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <input type="number" class="form-control" name="spesifikasi_        skor_lulus_kewangan">
                                            </div>
                                       </div>

                                       <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="col-form-label col-sm-6">Jumlah Skor Kewangan</label>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <input type="number" class="form-control" name="spesifikasi_jumlah_skor_kewangan">
                                            </div>
                                        </div>

                                    </fieldset>
                                    <br><br>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Skor Maksima</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="number" class="form-control" name="spesifikasi_skor_maksima">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Skor Lulus Keseluruhan</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="number" class="form-control" name="spesifikasi_skor_lulus_keseluruhan">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Catatan Spesifikasi Item </label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                             <textarea rows="3" cols="4" class="form-control" name="spesifikasi_catatan"></textarea>
                                        </div>
                                    </div>

                                    <div align="right">
                                        <button class="btn btn-success" type="submit" name="status_spesifikasi" value="draf">Draf</button>
                                        <button  class="btn btn-primary" type="submit" name="status_spesifikasi" value="hantar">Hantar</button>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>


@stop
