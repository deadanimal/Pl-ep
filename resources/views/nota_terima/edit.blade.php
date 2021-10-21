<h3>Nota Penerimaan</h3>

<form method="POST" action="/NotaPenerimaan/{{$NotaPerimaan->id}}">
@csrf
@method('PUT');

<br>Pengesahan Pegawai Penerima<input type="text" class="form-control" name="terima_pegawai_pengesah">
<br>Catatan Penerimaan <input type=text class="form-control" name="terima_catatan">
<br>Kuantiti Item <input type=number class="form-control" name="terima_kuantiti">
<br>Amaun<input type="number" class="form-control" name="terima_amaun">
<br>Skor Khidmat Sokongan<input type="number" class="form-control" name="terima_skor_khidmat_sokongan">
<br>Skor Tempoh Penghantaran <input type="number" class="form-control" name="terima_tempoh_penghantaran">

<br> <button type="submit">Hantar</button>

</form>
