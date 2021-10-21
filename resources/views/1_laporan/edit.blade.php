Laporan 

<form method="POST" action="/Laporan/{{$Laporan->id}}">
    @csrf
    @method('PUT')

    <br>Nama Laporan <input type="text" class="form-control" name="laporan_nama" value="{{$Laporan->laporan_nama}}">
    <br> File Laporan  <input type="file" class="form-control" name="laporan_file" value="{{$Laporan->laporan_file}}">
    <br> Modul Laporan  <input type="text" class="form-control" name="laporan_modul" value="{{$Laporan->laporan_modul}}">

    <button type=submit>Hantar</button>

</form>