<h3> Borang Penyediaan Spesifikasi Item</h3>

<form method="POST" action="/PenyediaanSpesifikasi">
@csrf

<br>Tajuk Spesifikasi <input type="text" name="spesifikasi_tajuk_template">
<br>Jenis Barang <input type="text" name="spesifikasi_jenis_barang">
<br>Butiran Item <input type="text" name="spesifikasi_description">
<br>Unit Ukuran <input type="text" name="spesifikasi_unit_ukuran">
<br>Jenis Harga <input type="text" name="spesifikasi_jenis_harga">
<br>Jumlah Harga Indikatif<input type="number" name="spesifikasi_jumlah_harga_indikatif">
<br>Jumlah Harga<input type="number" name="spesifikasi_jumlah_harga">
<br>Alamat Penghantaran <input type="text" name="spesifikasi_alamat_penghantaran">
<br>Catatan Spesifikasi Item <textarea rows="4" cols="50" name="spesifikasi_catatan"></textarea>
<br>
<button type="submit">Hantar</button>
</form>
