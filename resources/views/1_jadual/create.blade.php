<h3>Jadual Pemenuhan </h3>

<form method="POST" action="/JadualPemenuhan">
@csrf
Jenis Pemenuhan <input type="text"  class="form-control" name="jadual_jenis_pemenuhan">
<br>Kekerapan <input type="text" class="form-control" name="jadual_kekerapan">
<br>Bilangan <input type="number" class="form-control" name="jadual_bil">
<br>Bulan Mula <input type="month" class="form-control" name="jadual_bulan_mula">
{{-- <br>Tahun Mula <input type="" --}}
<br>Bulan Akhir <input type="month" class="form-control" name="jadual_bulan_akhir">
<br>Jumlah Bulan <input type="number" class="form-control" name="jadual_jumlah_bulan">
<br>Jenis Jadual<input type="text" class="form-control" name="jadual_jenis">

<br>

<button type="submit">Hantar</button>
</form>

