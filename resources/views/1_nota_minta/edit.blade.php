<h3> Nota Minta </h3>

<form method="POST" action="/NotaMinta/{{$NotaMinta->id}}">
    @csrf

    <br>Kaedah Permintaan <input type="text" class="form-control" name="ro_kaedah" value="{{$NotaMinta->ro_kaedah}}">
    <br>Jenis Perolehan <input type="text" class="form-control" name="ro_jenis_perolehan" value="{{$NotaMinta->ro_jenis_perolehan}}">
    <br>Tempoh Penghantaran <input type="number" class="form-control" name="ro_tempoh_penghantaran" value="{{$NotaMinta->ro_tempoh_penghantaran}}">
    <br> Jumlah (RM) <input type="number" class="form-control" name="ro_jumlah" value="{{$NotaMinta->ro_jumlah}}">
    <br>Pelulus <input type="text" class="form-control" name="ro_pelulus" value="{{$NotaMinta->pelulus}}">
    <br> Catatan Pelulus <input type="text" lass="form-control" name="ro_pelulus_catatan">
    <br>Tarikh Permintaan Diluluskan <input type="date" class="form-control" name="ro_pelulus_date">
    <br> Status Permintaan <input type="text" lass="form-control" name="ro_status">

    <br> <button type="submit">Hantar</button>
</form>
    
