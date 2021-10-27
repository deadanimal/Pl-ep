<h3> Nota Minta </h3>

<form method="POST" action="/NotaMinta">
    @csrf

    <br>Kaedah Permintaan <input type="text" class="form-control" name="ro_kaedah">
    <br>Jenis Perolehan <input type="text" class="form-control" name="ro_jenis_perolehan">
    <br>Tempoh Penghantaran <input type="number" class="form-control" name="ro_tempoh_penghantaran">
    <br> Jumlah (RM) <input type="number" class="form-control" name="ro_jumlah">
    <br> Nama Pelulus <input type="text" class="form-control" name="ro_pelulus">

    <br> <button type="submit">Hantar</button>
</form>
<br> <a href=/Katalog>Pilihan Item </a>
    
