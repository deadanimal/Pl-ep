@extends('layouts.base')

@section('content')
<div class="header">
    <h1 class="header-title">
                    Pembelian Sebutharga / Tender
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Kelulusan Sebutharga/Tender</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 col-xxl-12">
                <form method="POST" action="/PembelianSebutTender/{{$PembelianSebutTender->id}}">
                    @csrf
                    @method('PUT')

                    <div id="smartwizard-default-primary" class="wizard wizard-primary mb-4">
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="#sebutharga">1<br /><small>Maklumat Sebutharga</small></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#jawatankuasa">2<br /><small>Maklumat Jawatankuasa</small></a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="sebutharga" class="tab-pane" role="tabpanel">

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Sistem Panel </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_sistem_panel" value="{{$PembelianSebutTender->pst_sistem_panel}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Item Panel </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_item_panel" value="{{$PembelianSebutTender->pst_item_panel}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">No1PP </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_no1pp" value="{{$PembelianSebutTender->pst_no1pp}}" readonly>
                </div>
            </div>


            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Tajuk Pembelian SebutHarga & Tender </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_tajuk" value="{{$PembelianSebutTender->pst_tajuk}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">No Rujukan Fail</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_no_rujukan_fail" value="{{$PembelianSebutTender->pst_no_rujukan_fail}}" readonly>
                </div>
            </div>


            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Jumlah Harga Jangkaan Indikatif </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="pst_total_harga_indikatif_jangkaan" value="{{$PembelianSebutTender->pst_total_harga_indikatif_jangkaan}}" readonly>
                </div>
            </div>


            <div class="row">
                <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Kaedah Perolehan</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_kaedah_perolehan" value="{{$PembelianSebutTender->pst_kaedah_perolehan}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Jenis PST </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_jenis" value="{{$PembelianSebutTender->pst_jenis}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6"> Terbuka Kepada</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_terbuka_kepada" value="{{$PembelianSebutTender->pst_terbuka_kepada}}" readonly>
                </div>
            </div>



            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Zon </label>
                </div>
                <div class="mb-3 col-md-6">
                <input type="text" class="form-control" name="pst_zon_lokasi" value="{{$PembelianSebutTender->pst_zon_lokasi}}" readonly>
                </div>
            </div>


            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6"> Kategori Jenis Perolehan </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type=text name=pst_kategori_jenis_perolehan class="form-control" value="{{$PembelianSebutTender->pst_kategori_jenis_perolehan}}" readonly>
                </div>
            </div>



            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Jenis Kontrak</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_jenis_kontrak" value="{{$PembelianSebutTender->pst_jenis_kontrak}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Jenis Pemenuhan</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_jenis_pemenuhan" value="{{$PembelianSebutTender->pst_jenis_pemenuhan}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Tempoh Kontrak</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control" name="pst_tempoh_kontrak" value="{{$PembelianSebutTender->pst_tempoh_kontrak}}" readonly>
                </div>
            </div>


            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Jumlah Pembekal Yang Layak</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="number" class="form-control" name="pst_jumlah_pembekal_layak" value="{{$PembelianSebutTender->pst_jumlah_pembekal_layak}}" readonly>
                </div>
            </div>


            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Nama Pelulus</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text" class="form-control"  value="{{$pelulus->user_name}}" readonly>
                    <input type="text" hidden name="pst_pelulus" value="{{$pelulus->id}}">
                </div>
            </div>



            <div class="row">
                <div class="mb-3 col-md-6">
                   <label class="col-form-label col-sm-6">Catatan Pelulus </label>
                </div>
                <div class="mb-3 col-md-6">
                    <textarea class="form-control" rows="4" cols="3" name="pst_catatan_pelulus">{{$PembelianSebutTender->pst_catatan_pelulus}}</textarea>
                </div>
            </div>



            </div>
                 <div id="jawatankuasa" class="tab-pane" role="tabpanel">

                        <fieldset>
                        <legend>Jawatankuasa Spesifikasi</legend>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Spesifikasi </label>
                             </div>
                             <div class="mb-3 col-md-6">
                                 <select class="form-select" name="jawatankuasa_spesikasi_ajk">
                                    @foreach ($spesifikasi_ajk as $spesifikasi_ajk)
                                     <option @if ($jawatankuasa->jawatankuasa_spesikasi_ajk == $spesifikasi_ajk->id) selected @endif value="{{$spesifikasi_ajk->id}}">{{$spesifikasi_ajk->user_name}}</option>
                                     @endforeach
                                 </select>
                             </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Urusetia Jawatankuasa Spesifikasi </label>
                             </div>
                             <div class="mb-3 col-md-6">
                                 <select class="form-select" name="jawatankuasa_spesikasi_urusetia">
                                    @foreach ($spesifikasi_urusetia as $spesifikasi_urusetia)
                                     <option @if ($jawatankuasa->jawatankuasa_spesikasi_urusetia == $spesifikasi_urusetia->id) selected @endif value="{{$spesifikasi_urusetia->id}}">{{$spesifikasi_urusetia->user_name}}</option>
                                     @endforeach
                                 </select>
                             </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Spesifikasi </label>
                             </div>
                             <div class="mb-3 col-md-6">
                                 <select class="form-select" name="jawatankuasa_spesikasi_pengerusi">
                                    @foreach ($spesifikasi_pengerusi as $spesifikasi_pengerusi)
                                     <option @if ($jawatankuasa->jawatankuasa_spesikasi_pengerusi == $spesifikasi_pengerusi->id) selected @endif value="{{$spesifikasi_pengerusi->id}}">{{$spesifikasi_pengerusi->user_name}}</option>
                                     @endforeach
                                 </select>
                             </div>
                        </div>

                    </fieldset>
                    <br><br>

                    <fieldset>
                        <legend>Jawatankuasa Teknikal</legend>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6">Jawatankuasa Teknikal </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <select class="form-select" name="jawatankuasa_teknikal_ajk">
                                        @foreach ($teknikal_ajk as $teknikal_ajk)
                                         <option @if ($jawatankuasa->jawatankuasa_teknikal_ajk == $teknikal_ajk->id) selected @endif value="{{$teknikal_ajk->id}}">{{$teknikal_ajk->user_name}}</option>
                                         @endforeach
                                     </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6"><br> Pengerusi Jawatankuasa Teknikal </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <input type="text" class="form-control" name="jawatankuasa_teknikal_pengerusi" value="{{$teknikal_pengerusi->user_name}}" readonly>
                                    <select class="form-select" name="jawatankuasa_teknikal_pengerusi">
                                        @foreach ($teknikal_pengerusi as $teknikal_pengerusi)
                                         <option @if ($jawatankuasa->jawatankuasa_teknikal_pengerusi == $teknikal_pengerusi->id) selected @endif value="{{$teknikal_pengerusi->id}}">{{$teknikal_pengerusi->user_name}}</option>
                                         @endforeach
                                     </select>
                                </div>
                            </div>
                    </fieldset>
                    <br><br>
                    <fieldset>
                        <legend> Jawatankuasa Kewangan</legend>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6">Jawatankuasa Kewangan </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                <select class="form-select" name="jawatankuasa_kewangan_ajk">
                                        @foreach ($kewangan_ajk as $kewangan_ajk)
                                         <option @if ($jawatankuasa->jawatankuasa_kewangan_ajk == $kewangan_ajk->id) selected @endif value="{{$kewangan_ajk->id}}">{{$kewangan_ajk->user_name}}</option>
                                         @endforeach
                                 </select>

                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Kewangan </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <select class="form-select" name="jawatankuasa_kewangan_pengerusi">
                                        @foreach ($kewangan_pengerusi as $kewangan_pengerusi)
                                         <option @if ($jawatankuasa->jawatankuasa_kewangan_pengerusi == $kewangan_pengerusi->id) selected @endif value="{{$kewangan_pengerusi->id}}">{{$kewangan_pengerusi->user_name}}</option>
                                         @endforeach
                                    </select>
                                </div>
                            </div>
                    </fieldset>
                    <br><br>
                    <fieldset>
                        <legend>Jawatankuasa Kerja/Perkhidmatan</legend>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kerja</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select class="form-select" name="jawatankuasa_kerja_ajk">
                                    @foreach ($kerja_ajk as $kerja_ajk)
                                     <option @if ($jawatankuasa->jawatankuasa_kerja_ajk == $kerja_ajk->id) selected @endif value="{{$kerja_ajk->id}}">{{$kerja_ajk->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Kerja</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select class="form-select" name="jawatankuasa_kerja_pengerusi">
                                    @foreach ($kerja_pengerusi as $kerja_pengerusi)
                                     <option @if ($jawatankuasa->jawatankuasa_kerja_pengerusi == $kerja_pengerusi->id) selected @endif value="{{$kerja_pengerusi->id}}">{{$kerja_pengerusi->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>

                    </fieldset>
                    <br><br>

                    <fieldset>
                        <legend> Jawatankuasa Pembuka</legend>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Pembuka </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select class="form-select" name="jawatankuasa_terbuka_ajk">
                                    @foreach ($terbuka_ajk as $terbuka_ajk)
                                     <option @if ($jawatankuasa->jawatankuasa_terbuka_ajk == $terbuka_ajk->id) selected @endif value="{{$terbuka_ajk->id}}">{{$terbuka_ajk->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Terbuka </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select class="form-select" name="jawatankuasa_terbuka_pengerusi">
                                    @foreach ($terbuka_pengerusi as $terbuka_pengerusi)
                                     <option @if ($jawatankuasa->jawatankuasa_terbuka_pengerusi == $terbuka_pengerusi->id) selected @endif value="{{$terbuka_pengerusi->id}}">{{$terbuka_pengerusi->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <br><br>
                    <fieldset>
                        <legend>Jawatankuasa Penilaian</legend>


                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Penilaian</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select class="form-select" name="jawatankuasa_penilaian_ajk">
                                    @foreach ($penilaian_ajk as $penilaian_ajk)
                                     <option @if ($jawatankuasa->jawatankuasa_penilaian_ajk == $penilaian_ajk->id) selected @endif value="{{$penilaian_ajk->id}}">{{$penilaian_ajk->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Penilaian</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select class="form-select" name="jawatankuasa_penilaian_pengerusi">
                                    @foreach ($penilaian_pengerusi as $penilaian_pengerusi)
                                     <option @if ($jawatankuasa->jawatankuasa_penilaian_pengerusi == $penilaian_pengerusi->id) selected @endif value="{{$penilaian_pengerusi->id}}">{{$penilaian_pengerusi->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>

                    </fieldset>

                    <div align=right>
                        <button type="submit" name="status_pst" value="diluluskan" class="btn btn-primary"><i class="fas fa-check"></i> Diluluskan</button>
                        <button type="submit" name="status_pst" value="ditolak" class="btn btn-danger"><i class="fas fa-times"></i> Ditolak</button>
                    </div>
                 </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>







    @stop
