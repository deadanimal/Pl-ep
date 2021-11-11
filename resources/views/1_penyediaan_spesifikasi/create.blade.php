<h3> Borang Penyediaan Spesifikasi Item</h3>

<form method="POST" action="/PenyediaanSpesifikasi">
@csrf

<br>Tajuk Spesifikasi <input type="text"  class="form-control" name="spesifikasi_tajuk_template">
<br>Jenis Barang <input type="text" class="form-control" name="spesifikasi_jenis_barang">
<br>Butiran Item <input type="text" class="form-control" name="spesifikasi_description">
<br>Unit Ukuran <input type="text" class="form-control" name="spesifikasi_unit_ukuran">
<br>Jenis Harga <input type="text" class="form-control" name="spesifikasi_jenis_harga">
<br>Jumlah Harga Indikatif<input type="text" class="form-control" name="spesifikasi_jumlah_harga_indikatif">
<br>Jumlah Harga<input type="text" class="form-control" name="spesifikasi_jumlah_harga">
<br>Alamat Penghantaran <input type="text" class="form-control" name="spesifikasi_alamat_penghantaran">
<br>Skema Teknikal <input type="file" class="form-control" name="spesifikasi_skema_teknikal">
<br>Catatan Spesifikasi Item <textarea rows="4" cols="50" name="spesifikasi_catatan"></textarea>
<br>Skema Kewangan <input type="file" class="form-control" name="spesifikasi_skema_kewangan">
<br>
<button type="submit">Hantar</button>
</form>
