Laporan 

<form method="POST" action="/Laporan">
    @csrf

    <br>Nama Laporan <input type="text" class="form-control" name="laporan_nama">
    <br> File Laporan  <input type="file" class="form-control" name="laporan_file">
    <br> Modul Laporan  <input type="text" class="form-control" name="laporan_modul">

    <button type=submit>Hantar</button>
</form>
{{-- laporan_created_by	varchar(50)
laporan_created_date	date
laporan_updated_by	varchar(50)
laporan_updated_date	date
perjanjian_id	varchar(50) --}}
