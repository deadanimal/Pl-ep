<h3> Cadangan </h3>
<form method="POST" action="/Cadangan">
@csrf
    
    Cadangan Tarikh Mesyuarat <input type="date" class="form-control" name="cadangan_mesyuarat_date">
    <br>Cadangan Lokasi Mesyuarat <input type="text" class="form-control" name="cadangan_mesyuarat_place">
    

<button type="submit">Hantar</button>

</form>