<h3>Surat Setuju Terima </h3>
<form method="POST" action="/SuratSetujuTerima">
@csrf

Tajuk <input type="text" class="form-control" name="sst_tajuk">
<br>Insurans Jaminan <input type="text" class="form-control" name="sst_insurans_jaminan">
<br>Bon Surat Setuju Terima <input type="text" class="form-control" name="sst_bon">
<br>Semakan Surat Setuju Terima <input type="text" class="form-control" name="sst_semakan">
<br>SST Sl1m <input type="text" class="form-control" name="sst_sl1m">
<br>Pentadbir Kontrak <input type="text" class="form-control" name="sst_pentadbir_kontrak">
<br>Perjanjian <input type="text" class="form-control" name="sst_perjanjian">
{{-- <br>FILE <input type="file" class="form-control" name="sst_file"> --}}
<br>Penandatangan <input type="text" class="form-control" name="sst_penandatangan">
<br>Pelulus <input type="text" class="form-control" name="sst_pelulus">
<br>Catatan Pelulus <input type="text" class="form-control" name="sst_catatan_pelulus">
<br>No Akaun <input type="text" class="form-control" name="sst_no_akaun">
<br>Nama Bank <input type="text" class="form-control" name="sst_nama_bank">
<br>Harga Cadangan Tawaran <input type="text" class="form-control" name="sst_harga_cadangan_tawaran">
<br>Amaun Cukai Barang dan Perkhidmatan (CBP) <input type="number" class="form-control" name="sst_amaun_cbp">
<br>Amaun Keseluruhan <input type="number" class="form-control" name="sst_amaun_keseluruhan">

<br>Jenis Potongan <input type="text" class="form-control" name="sst_jenis_potongan">
<br>Amaun Potongan <input type="number" class="form-control" name="sst_amaun_potongan">
<fieldset>
    <legend>Maklumat Saksi</legend>
    <br>Nama Saksi <input type="text" class="form-control" name="sst_nama_saksi">
    <br>No Pengenalan <input type="text" class="form-control" name="sst_no_pengenalan">
    <br>Jawatan <input type="text" class="form-control" name="sst_jawatan">
    <br>Alamat <input type="text" class="form-control" name="sst_alamat">
    <br>No Tel Bimbit <input type="number" class="form-control" name="sst_no_tel">
    <br>No Fax <input type="number" class="form-control" name="sst_no_fax">
    <br>Email <input type="email" class="form-control" name="sst_email">
</fieldset>

<br>
<button type="submit">Hantar</button>
</form>




</fieldset>
