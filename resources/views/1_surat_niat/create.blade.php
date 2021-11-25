<h3>Surat Niat</h3>

<form method="POST" action="/SuratNiat" enctype="multipart/form-data">>
    @csrf
    
    <br>Tajuk <input type="text"  class=form-control name="niat_tajuk">
    <br>Lokasi Rundingan <input type="text" class="form-control" name="niat_lokasi_rundingan">
    <br>Tarikh Rundingan <input type="date" class="form-control" name="niat_tarikh_rundingan">
    <br>Catatan Rundingan <input type="text" class="form-control" name="niat_catatan_rundingan">
    <br>Terma Rundingan <input type="text" class="form-control" name="niat_terma_rundingan">
    <br>Penandatangan <input type="text" class="form-control" name="niat_penandatangan">
    <br>Jawatan <input type="text" class="form-control" name="niat_jawatan">
    <br>Pegawai Pelulus <input type="text" class="form-control" name="niat_pelulus">
    <br>Status <input type="text" class="form-control" name="niat_status">
    <br>Surat Rujukan<input type="file" class="form-control" name="niat_file">

    <button type="submit">Hantar</button>
</form> 
