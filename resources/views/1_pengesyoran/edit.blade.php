<h3>Pengesyoran</h3>
<form method="POST" action="/Pengesyoran/{{$Pengesyoran->id}}" enctype="multipart/form-data">>
@csrf
@method('PUT')
    <br>Tarikh Mesyuarat <input type="date" class="form-control" name="syor_mesyuarat_date" value="{{$Pengesyoran->syor_mesyuarat_date}}">
    <br> Lokasi Mesyuarat <input type="text" class="form-control" name="syor_mesyuarat_place"  value="{{$Pengesyoran->syor_mesyuarat_place}}">
    {{-- jawatankuasa_id --}}
    <br>Kertas Taklimat <input type="file" class="form-control" name="syor_kertas_taklimat" value="{{$Pengesyoran->syor_kertas_taklimat}}">
    {{-- pembekal_id --}}
    <br>Kedudukan Pembekal<input type="text" class="form-control" name="syor_kedudukan_pembekal"  value="{{$Pengesyoran->syor_kedudukan_pembekal}}">
    <br>Catatan <input type="text" class="form-control" name="syor_catatan"  value="{{$Pengesyoran-> syor_catatan}}">
    {{-- sss_id --}}
    <br><input type="number" class="form-control" name="syor_jumlah_skor"  value="{{$Pengesyoran->syor_jumlah_skor}}">
    {{-- syor_created_by
    syor_created_date
    syor_updated_by
    syor_updated_date
    pst_id
    spesifikasi_id --}}

    <br> <button type="submit">Hantar</button>
</form>