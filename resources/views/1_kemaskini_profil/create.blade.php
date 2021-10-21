<h3>Permohonan Kemaskini Profil</h3>

<form method="POST" action="/KemaskiniProfil">
    @csrf
    
    {{-- permohonan_id --}}
    <br> Deskripsi Permohonan <input type="text" class="form-control" name="permohonan_description">
{{-- pembekal_id
permohonan_created_by
permohonan_created_date
permohonan_updated_by
permohonan_updated_date --}}

<button type="submit">Hantar</button>
</form>

