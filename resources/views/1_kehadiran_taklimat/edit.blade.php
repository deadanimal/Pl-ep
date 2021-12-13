Kehadiran Taklimat

<form method="POST" action="/KehadiranTaklimat/{{$KehadiranTaklimat->id}}">
    @csrf
    @method('PUT')
{{-- pst_id
    pembekal_id --}}
    <br> Nama <input type="text" class="form-control" name="kehadiran_nama">
    <br> No Kad Pengenalan <input type="number" class="form-control" name="kehadiran_pengenalan_no">
    <br> No Telefon <input type="number" class="form-control" name="kehadiran_no_tel">
    <br> Emel <input type="email" class="form-control" name="kehadiran_email">
    <br> Status Kehadiran <input type="text" class="form-control" name="kehadiran_status">
    <br> Link <input type="text" class="form-control" name="kehadiran_link">
{{-- kehadiran_created_by
kehadiran_created_date
kehadiran_updated_by
kehadiran_updated_date --}}

    <br> <button type="submit">Hantar</button>
</form>
