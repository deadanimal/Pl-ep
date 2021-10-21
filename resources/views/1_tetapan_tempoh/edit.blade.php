<h3>Kemaskini Tetapan Tempoh</h3>
{{-- <form method="POST" action="/TetapanTempoh/{{$TetapanTempoh->id}}"> --}}
    <form method="POST" action="/TetapanTempoh">
    @csrf
    @method('PUT')

    <br>Jenis Tetapan Tempoh <input type="text" class="form-control" name="tempoh_type">
    <br> Bilangan Hari <input type="number" class="form-control" name="tempoh_hari">

    <br>
    <button type="submit">Hantar</button>
    
</form>