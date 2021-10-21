<h3> Pemilihan Akhir Pembekal </h3>
<form action="/PemilihanAkhirPembekal" method="POST">
    @csrf

    Tarikh Mesyuarat Akhir <input type="date" class="form-control" name="akhir_mesyuarat_date">
    <br>Lokasi Mesyuarat <input type=text class="form-control" name="akhir_mesyuarat_place">
    <br> Status Mesyuarat <input type=text class="form-control" name="akhir_mesyuarat_status">
    <br> Catatan Mesyuarat Akhir <input type=text class="form-control" name="akhir_mesyuarat_catatan">
jawatankuasa_id
akhir_kehadiran
akhir_keputusan_mesyuarat
akhir_pilihan
{{-- pembekal_id
syor_id
akhir_created_by
akhir_created_date
akhir_updated_by
akhir_updated_date
pst_id --}}
