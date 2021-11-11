<h3> Item Info </h3>
<form method="POST" action="/ItemInfo/{{$fizaItemInfo->id}}">
    @csrf
@method('PUT')
    <br> 
    {{-- item_id --}}
    <br> Nama Item <input type=text class=form-control name=item_name value="{{$fizaItemInfo->item_name}}">
    <br> Harga Item <input type="number" min="1" step="any" class=form-control name=item_price value="{{$fizaItemInfo->item_price}}">
    <br> Unit Item <input type="text" class=form-control name=item_unit value="{{$fizaItemInfo->item_unit}}">
    <br> Tarikh Mula <input type="date" class=form-control name= start_date value="{{$fizaItemInfo->start_date}}">
    <br> Tarikh Tamat <input type="date" class=form-control name= end_date value="{{$fizaItemInfo->end_date}}">
    <br> Jenis Item 
        <select name=katalog_id class="form-control">
            <option hidden>Sila Pilih</option>
            @foreach ($fizaKatalog as $fizaKatalog)
            {{-- <option value="{{$fizaKatalog->id}}">{{$fizaKatalog->katalog_kumpulan}}</option> --}}
            <option @if ($fizaKatalog->id=='{{$fizaKatalog->id}}') selected @endif value="{{$fizaKatalog->id}}">{{$fizaKatalog->katalog_kumpulan}}</option>
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


