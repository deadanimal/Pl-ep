<h3> Katalog di Bawah Kumpulan {{$Katalog->katalog_kategori}}</h3>

<table > 
    <tr>
        <th>Nama Item</th>
        <th>Harga</th>
        

    </tr> 
    @foreach ($ItemInfo as $ItemInfo)
    <tr>
        <td>{{$ItemInfo->item_name}}</td>
        <td>{{$ItemInfo->item_price}}</td>
    
        @endforeach
    </tr>
</table>