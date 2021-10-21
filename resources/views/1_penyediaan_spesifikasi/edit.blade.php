<h3> Borang Penyediaan Spesifikasi Item</h3>

<form method="POST" action="/PenyediaanSpesifikasi/{{$PenyediaanSpesifikasi->id}}">
@csrf
<br>Tajuk Spesifikasi <input type="text" name="spesifikasi_tajuk_template" value="{{$PenyediaanSpesifikasi->spesifikasi_tajuk_template}}">
<br>Jenis Barang <input type="text" name="spesifikasi_jenis_barang" value="{{$PenyediaanSpesifikasi->spesifikasi_jenis_barang}}>
<br>Butiran Item <input type="text" name="spesifikasi_description" value="{PenyediaanSpesifikasi->spesifikasi_description}}">
<br>Unit Ukuran <input type="text" name="spesifikasi_unit_ukuran" value="{{$PenyediaanSpesifikasi->spesifikasi_jenis_ukuran}}">
<br>Jenis Harga <input type="text" name="spesifikasi_jenis_harga" value="{{$PenyediaanSpesifikasi->spesifikasi_jenis_harga}}">
<br>Jumlah Harga Indikatif<input type="number" name="spesifikasi_jumlah_harga_indikatif" value="{{$PenyediaanSpesifikasi->spesifikasi_jumlah_harga_indikatif}}">
<br>Jumlah Harga<input type="number" name="spesifikasi_jumlah_harga" value="{{$PenyediaanSpesifikasi->spesifikasi_jumlah_harga}}">
<br>Alamat Penghantaran <input type="text" name="spesifikasi_alamat_penghantaran" value="{{$PenyediaanSpesifikasi->spesifikasi_jumlah_harga}}">
<br>Catatan Spesifikasi Item <textarea rows="4" cols="50" name="spesifikasi_catatan">{{$PenyediaanSpesifikasi->spesifikasi_catatan}}></textarea>

<br>Skor Maksima <input type="number" name="spesifikasi_skor_maksima">
<br>Jumlah Skor Teknikal<input type="number" name="spesifikasi_jumlah_skor_teknikal">
<br>Skor Lulus Teknikal<input type="number" name="spesifikasi_skor_lulus_teknikal">
<br>Skema Teknikal<input type="file" name="spesifikasi_skema_teknikal">
<br>Jumlah Skor Kewangan<input type="number" name="spesifikasi_jumlah_skor_kewangan">
<br>Skor Lulus Kewangan <input type="number" name="spesifikasi_skor_lulus_kewangan">
<br>Skema Kewangan <input type="file" name="spesifikasi_skema_kewangan">
<br>Skor Lulus Keseluruhan <input type="text" name="spesifikasi_skor_lulus_keseluruhan">

<button type="submit">Hantar</button>
</form>
