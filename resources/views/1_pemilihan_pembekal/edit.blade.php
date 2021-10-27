<h3> Pemilihan Akhir Pembekal </h3>
<form action="/PemilihanAkhirPembekal/{{$PemilihanAkhirPembekal->id}}" method="POST">
    @csrf
    <br> Tarikh Mesyuarat Akhir <input type="date" class="form-control" name="akhir_mesyuarat_date" value="{{$PemilihanAkhirPembekal->akhir_mesyuarat_date}}">
    <br> Lokasi Mesyuarat <input type=text class="form-control" name="akhir_mesyuarat_place" value="{{$PemilihanAkhirPembekal->akhir_mesyuarat_place}}" >
    <br> Status Mesyuarat <input type=text class="form-control" name="akhir_mesyuarat_status" value="{{$PemilihanAkhirPembekal->akhir_mesyuarat_status}}">
    <br> Catatan Mesyuarat Akhir <input type=text class="form-control" name="akhir_mesyuarat_catatan" value="{{$PemilihanAkhirPembekal->akhir_mesyuarat_catatan}}">
    <br> Kehadiran Mesyuarat <input type=text class="form-control" name="akhir_kehadiran">
    <br>Keputusan Akhir Mesyuarat <input type=text class="form-control" name="akhir_keputusan_mesyuarat"> 
{{-- pembekal_id
syor_id
akhir_created_by
akhir_created_date
akhir_updated_by
akhir_updated_date
pst_id --}}

    <br> <button type="submit">Hantar</button>
</form>
