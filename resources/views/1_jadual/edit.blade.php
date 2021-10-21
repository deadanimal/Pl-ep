<h3>Kemaskini Jadual Pemenuhan </h3>

<form method="POST" action="/JadualPemenuhan/{{$JadualPemenuhan->id}}">
@csrf
@method("PUT"); 
Jenis Pemenuhan <input type="text"  class="form-control" name="jadual_jenis_pemenuhan" value="{{$JadualPemenuhan->jadual_jenis_pemenuhan}}">
<br>Kekerapan <input type="text" class="form-control" name="jadual_kekerapan" value="{{$JadualPemenuhan->jadual_kekerapan}}"> 
<br>Bilangan <input type="number" class="form-control" name="jadual_bil" value="{{$JadualPemenuhan->jadual_bil}}">
<br>Bulan Mula <input type="month" class="form-control" name="jadual_bulan_mula" id="month1" value="{{$JadualPemenuhan->jadual_bulan_mula}}">
{{-- <br>Tahun Mula <input type="" --}}
<br>Bulan Akhir <input type="month" class="form-control" name="jadual_bulan_akhir" id="month2" value="{{$JadualPemenuhan->jadual_bulan_akhir}}">
{{-- <br>Jumlah Bulan <input type=class="form-control" name="jadual_jumlah_bulan" id="total_month"> --}}
<br>Jenis Jadual<input type="text" class="form-control" name="jadual_jenis" value="{{$JadualPemenuhan->jadual_jenis}}">

<br>

<button type="submit">Hantar</button>
</form>
