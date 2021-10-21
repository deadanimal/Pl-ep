<h3>Pembelian Item </h3>

<form method="POST" action="/Pst/{{$Pst->id}}">
    @csrf
    @method('PUT')
    <br>Panel Item <input type="text" class="form-control" name="pst_item_panel" value="{{$Pst->pst_item_panel}}">
    <br>Sistem Panel  <input type="text" class="form-control" name="pst_sistem_panel" value="{{$Pst->pst_sistem_panel}}">
    <br>No1PP <input type="text" class="form-control" name="pst_no1pp" value="{{$Pst->pst_no1pp}}">
    <br>Kumpulan Katalog <input type="text" class="form-control" name="pst_katalog_kumpulan" value="{{$Pst->pst_katalog_kumpulan}}">
    <br>Tajuk Pembelian SebutHarga & Tender <input type="text" class="form-control" name="pst_tajuk" value="{{$Pst->pst_tajuk}}">
    <br>No Rujukan Fail <input type="text" class="form-control" name="pst_no_rujukan_fail" value="{{$Pst->pst_no_rujukan_fail}}">
    <br>Jumlah Harga Jangkaan Indikatif <input type="number" class="form-control" name="pst_jumlah_harga_indikatif_jangkaan" value="{{$Pst->pst_jumlah_harga_indikatif_jangkaan}}">
    <br>Kaedah Perolehan <input type="text" class="form-control" name="pst_kaedah_perolehan" value="{{$Pst->pst_kaedah_perolehan}}">
    <br>Jenis PST <input type="text" class="form-control" name="pst_jenis" value="{{$Pst->pst_jenis}}">
    <br> Terbuka Kepada <input type="text" class="form-control" name="pst_terbuka_kepada" value="{{$Pst->pst_terbuka_kepada}}">
    <br>Zon <<input type="text" class="form-control" name="pst_zon_lokasi" value="{{$Pst->pst_zon_lokasi}}">
    <br>Kategori Jenis Perolehan <input type=text name=pst_kategori_jenis_perolehan class="form-control" value="{{$Pst->pst_kategori_jenis_perolehan}}">
    <br>Kategori Perolehan <input type="text" class="form-control" name="pst_kategori_perolehan" value="{{$Pst->pst_kategori_perolehan}}">
    <br> Jenis kOntrak <input type="text" class="form-control" name="pst_jenis_kontrak" value="{{$Pst->pst_jenis_kontrak}}">
    <br> Jenis Pemenuhan <input type="text" class="form-control" name="pst_jenis_pemenuhan" value="{{$Pst->pst_jenis_pemenuhan}}"> 
    <br> Tempoh Kontrak <input type="text" class="form-control" name="pst_tempoh_kontrak" value="{{$Pst->pst_tempoh_kontrak}}">
{{--     
item_id
kod_id
pembekal_id --}}
    <br>Jumlah Pembekal Yang Layak <input type="number" class="form-control" name="pst_jumlah_pembekal_layak" value="{{$Pst->pst_jumlah_pembekal_layak}}">
{{-- ro_id
jawatankuasa_id
user_id --}}
    <br> Nama Pelulus <input type="text" class="form-control" name="pst_pelulus" value="{{$Pst->pst_pelulus}}">
    <br> Catatan Pelulus <input type="text" class="form-control" name="pst_catatan_pelulus" value="{{$Pst->pst_catatan_pelulus}}">
    <br> Perihal Taklimat <input type="text" class="form-control" name="pst_perihal_taklimat" value="{{$Pst->pst_perihal_taklimat}}">
    <br> Tarikh Taklimat <input type="date" class="form-control" name="pst_taklimat_date" value="{{$Pst->pst_taklimat_date}}">
    <br> Alamat Taklimat <input type="text" class="form-control" name="pst_taklimat_alamat" value="{{$Pst->pst_taklimat_alamat}}">
    <br>Link <input type="text" class="form-control" name="pst_link" value="{{$Pst->pst_link}}">
    <br> Penyelaras <input type="text" class="form-control" name="pst_penyelaras" value="{{$Pst->pst_penyelaras}}">
    <br> Kehadiran Maksimum <input type="text" class="form-control" name="pst_kehadiran_max" value="{{$Pst->pst_kehadiran_max}}">
    <br> Status <input type="text" class="form-control" name="pst_status" value="{{$Pst->pst_status}}">
{{-- pst_created_by
pst_created_date
pst_updated_by
pst_updated_date --}}
    <br> Jenis Pemotongan <input type="text" class="form-control" name="pst_jenis_potongan" value="{{$Pst->pst_jenis_potongan}}">
    <br> Deskripsi Pemotongan <input type="text" class="form-control" name="pst_potongan_description" value="{{$Pst->pst_potongan_description}}">
    <br> Amaun Pemotongan <input type="text" class="form-control" name="pst_amaun_potongan" value="{{$Pst->pst_amaun_potongan}}">

    <br><button type="submit">Hantar</button>
    
</form>

