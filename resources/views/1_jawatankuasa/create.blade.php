<h3> Jawatankuasa </h3>

<form method="POST" action="/Jawatankuasa">
    @csrf
    
{{-- jawatankuasa_id --}}
    <br> Jenis Jawatankuasa <input type="text" class="form-control" name="jenis_jawatankuasa">
{{-- user_id --}}
    <br>Peranan Jawatankuasa <input type="text" class="form-control" name="jawatankuasa_peranan">
{{-- pst_id --}}
{{-- jawatankuasa_created_by
jawatankuasa_created_date
jawatankuasa_updated_by
jawatankuasa_updated_date --}}

    <br><button type="submit">Hantar</button>
</form>
