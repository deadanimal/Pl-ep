<h3>Kemaskini Katalog</h3>

<br>
<form method="POST" action="/Katalog/{{$Katalog->id}}">
    @csrf
    @method('PUT')
    <br>Kategori Item  <input  type=text class=form-control name=katalog_kategori value="{{$Katalog->katalog_kategori}}">        
    <br>Kumpulan  <input type=text class=form-control name=katalog_kumpulan value="{{$Katalog->katalog_kumpulan}}">
    <br>Jenis Katalog  <input type=text class=form-control name=katalog_jenis value="{{$Katalog->katalog_jenis}}">
{{-- katalog_created_by
katalog_created_date
katalog_updated_by
katalog_updated_date
user_id --}}
<button type="submit">Hantar</button>
</form>