Kandungan Perjanjian 

<form method="POST" action="/KandunganPerjanjian">
@csrf
{{-- kandungan_id --}}
    Nama <input type="text" class="form-control" name="kandungan_nama">
    Template Kandungan<br> <input type="file" class="form-control" name="kandungan_template">
{{-- kandungan_created_by
kandungan_created_date
kandungan_updated_by
kandungan_updated_date --}}

<br><button type="submit">Hantar</button>
</form>
