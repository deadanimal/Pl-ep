@extends('layouts.base')

@section('content')
    



<h3>Cipta SebutHarga / Tender </h3>

<form method="POST" action="/PembelianSebutTender">
    @csrf

    <br>
        <div class="col-6"> Panel Item <div class="col-6"> <input type="text" class="form-control" name="pst_item_panel">
    <br> Sistem Panel  <input type="text" class="form-control" name="pst_sistem_panel">
    <br> No Perkeliling Perbendaharaan (No1PP) <input type="text" class="form-control" name="pst_no1pp">
    <br> Kumpulan Katalog <input type="text" class="form-control" name="pst_katalog_kumpulan">
    <br> Tajuk Pembelian SebutHarga & Tender <input type="text" class="form-control" name="pst_tajuk">
    <br> No Rujukan Fail <input type="text" class="form-control" name="pst_no_rujukan_fail">
    <br> Jumlah Harga Jangkaan Indikatif <input type="number" class="form-control" name="pst_jumlah_harga_indikatif_jangkaan">
    <br> Kaedah Perolehan <input type="text" class="form-control" name="pst_kaedah_perolehan">
    <br> Jenis PST <input type="text" class="form-control" name="pst_jenis">
    <br> Terbuka Kepada <input type="text" class="form-control" name="pst_terbuka_kepada">
    <br> Zon <input type="text" class="form-control" name="pst_zon_lokasi">
    <br> Kategori Jenis Perolehan <input type=text name=pst_kategori_jenis_perolehan class="form-control">
    <br> Kategori Perolehan <input type="text" class="form-control" name="pst_kategori_perolehan">
    <br> Jenis kontrak <input type="text" class="form-control" name="pst_jenis_kontrak">
    <br> Jenis Pemenuhan <input type="text" class="form-control" name="pst_jenis_pemenuhan">
    <br> Tempoh Kontrak <input type="text" class="form-control" name="pst_tempoh_kontrak">
{{--     
item_id
kod_id
pembekal_id --}}
    <br>Jumlah Pembekal Yang Layak <input type="number" class="form-control" name="pst_jumlah_pembekal_layak">
{{-- ro_id
jawatankuasa_id
user_id --}}
    <br> Nama Pelulus <input type="text" class="form-control" name="pst_pelulus">
    <br> Catatan Pelulus <input type="text" class="form-control" name="pst_catatan_pelulus">
    <br> Perihal Taklimat <input type="text" class="form-control" name="pst_perihal_taklimat">
    <br> Tarikh Taklimat <input type="date" class="form-control" name="pst_taklimat_date">
    <br> Alamat Taklimat <input type="text" class="form-control" name="pst_taklimat_alamat">
    <br> Link <input type="url" class="form-control" name="pst_link">
    <br> Penyelaras <input type="text" class="form-control" name="pst_penyelaras">
    <br> Kehadiran Maksimum <input type="text" class="form-control" name="pst_kehadiran_max">
    <br> Status <input type="text" class="form-control" name="pst_status">
{{-- pst_created_by
pst_created_date
pst_updated_by
pst_updated_date --}}
    <br> Jenis Pemotongan <input type="text" class="form-control" name="pst_jenis_potongan">
    <br> Deskripsi Pemotongan <input type="text" class="form-control" name="pst_potongan_description">
    <br> Amaun Pemotongan <input type="text" class="form-control" name="pst_amaun_potongan">

    <br><button type="submit">Hantar</button>
    
</form>


    
@endsection

