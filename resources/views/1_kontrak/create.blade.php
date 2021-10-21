<h3>Kontrak</h3>
<form method="POST" action="/Kontrak">
    @csrf

{{-- 
    kontrak_id
sst_id
kontrak_no_fizikal --}}
    <br> No fizikal <input type="text" class="form-control" name="kontrak_no_fizikal">

    <br> Tempoh Penghantaran <input type="number" class="form-control" name="kontrak_tempoh_penghantaran">
    <br> Pilihan Kontrak <input type="text" class="form-control" name="kontrak_pilihan">
{{-- pembekal_id
pst_id --}}
    <br> No Rujukan Bon <input type="text" class="form-control" name="kontrak_no_rujukan_bon">
    <br> Institusi Kewangan <input type="text" class="form-control" name="kontrak_institusi_kewangan">
    <br> Amaun (RM) <input type="number" class="form-control" name="kontrak_amaun">
    <br> Tarikh Kuatkuasa <input type="date" class="form-control" name="kontrak_tarikh_kuatkuasa">
    <br> Tarikh Tamat Kontrak <input type="date" class="form-control" name="kontrak_tarikh_tamat">
    <br> File Bon <input type="file" class="form-control" name="kontrak_file_bon">
    <br> Pelulus Kontrak <input type="text" class="form-control" name="kontrak_pelulus">
    {{-- <br>tempoh_id --}}
    <br> Catatan Pelulus <input type="text" class="form-control" name="kontrak_catatan_pelulus">
{{-- kontrak_created_by
kontrak_created_date
kontrak_updated_by
kontrak_updated_date
user_id --}}

<br> <button type="submit">Hantar</button>
</form>
