<h3> Kemaskini Cadangan </h3>
<form method="POST" action="/Cadangan/{{$Cadangan->id}}">
@csrf
@method('PUT')

    Cadangan Tarikh Mesyuarat <input type="date" class="form-control" name="cadangan_mesyuarat_date">
    <br>Cadangan Lokasi Mesyuarat <input type="text" class="form-control" name="cadangan_mesyuarat_place">
    <br>Mesyuarat Status <input type="text" class="form-control" name="cadangan_mesyuarat_status">
    <br>Kehadiran <input type="text" class="form-control" name="cadangan_kehadiran">
    <br> Bilangan Pembekal yang Mendapat Kelulusan Teknikal <input type="number" class="form-control" name="cadangan_bil_pembekal_lulus_teknikal">
    <br> Bilangan Pembekal yang Mendapat Kelulus Kewangan <input type="number" class="form-control" name="cadangan_bil_pembekal_lulus_kewangan">
    <br>Cadangan Ulasan Penilaian <input type="text" class="form-control" name="cadangan_ulasan_penilaian">
    <br>
    <button type="submit">Hantar</button>

</form>