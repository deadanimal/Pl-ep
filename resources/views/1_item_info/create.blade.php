<h3> Daftar Item Info </h3>
<form method="POST" action="/ItemInfo">
    @csrf

    <br> 
    {{-- item_id --}}
    <br> Nama Item <input type=text class=form-control name=item_name>
    <br> Harga Item <input type="number" min="1" step="any" class=form-control name=item_price>
    <br> Unit Item <input type="text" class=form-control name=item_unit>
    <br> Tarikh Mula <input type="date" class=form-control name= start_date>
    <br> Tarikh Tamat <input type="date" class=form-control name= end_date>
    <br> Jenis Item 
        <select name=katalog_id class="form-control">
            <option hidden>Sila Pilih</option>
            @foreach ($Katalog as $Katalog)
            <option value="{{$Katalog->id}}">{{$Katalog->katalog_kumpulan}}</option>
            @endforeach
        </select>
<br>
<button type="submit">Hantar</button>
</form>
{{-- pembekal_id
item_created_by
item_created_date
item_updated_by
item_updated_date --}}


