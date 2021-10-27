<h3> Jawatankuasa </h3>

<form method="POST" action="/Jawatankuasa">
    @csrf
    
{{-- jawatankuasa_id --}}
    <br> Jenis Jawatankuasa <select class="form-control" name="jenis_jawatankuasa">
    <option hidden>Sila Pilih</option>
    <option value="Jawatankuasa Spesifikasi">Jawatankuasa Spesifikasi</option>
    <option value="Jawatankuasa Teknikal">Jawatankuasa Teknikal </option>
    <option value="Jawatankuasa Kewangan">Jawatankuasa Kewangan </option>
    <option value="Jawatankuasa Kerja">Jawatankuasa Kerja </option>
    <option value="Jawatankuasa Terbuka">Jawatankuasa Terbuka </option>
        </select>
        <br>
{{-- user_id --}}
    <br>Peranan Jawatankuasa <input type="text" class="form-control" name="jawatankuasa_peranan">
{{-- pst_id --}}
{{-- jawatankuasa_created_by
jawatankuasa_created_date
jawatankuasa_updated_by
jawatankuasa_updated_date --}}

    <br><button type="submit">Hantar</button>
</form>
