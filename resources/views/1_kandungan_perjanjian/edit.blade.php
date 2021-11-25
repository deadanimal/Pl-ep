Kandungan Perjanjian 

<form method="POST" action="/KandunganPerjanjian/{{$KandunganPerjanjian->id}}" enctype="multipart/form-data">>
@csrf
@method('PUT')
{{-- kandungan_id --}}
    Nama <input type="text" class="form-control" name="kandungan_nama" value="{{$KandunganPerjanjian->kandungan_nama}}">
    <br> Template Kandungan Perjanjian <input type="file" class="form-control" name="kandungan_template" value="{{$KandunganPerjanjian->kandungan_template}}">
{{-- kandungan_created_by
kandungan_created_date
kandungan_updated_by
kandungan_updated_date --}}

<br><button type="submit">Hantar</button>
</form>
