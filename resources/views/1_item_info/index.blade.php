<h3> Senarai Item yang Telah didaftarkan </h3>

<table>
    <tr>
        <thead>
            <th>NAMA ITEM</th>
            <th>UNIT ITEM</th>
            <th>TARIKH MULA</th>
            <th>TARIKH TAMAT</th>
            <th> ID Katalog</th> 
            <td></td>
        </thead>
    </tr>
    <tr>
        @foreach ($ItemInfo as $ItemInfo)

        <tbody>

            <td>{{$ItemInfo->item_name}}</td>
            <td>{{$ItemInfo->item_unit}}</td>
            <td>{{$ItemInfo->start_date}}</td>
            <td>{{$ItemInfo->end_date}}</td>
            <td>{{$ItemInfo->katalog_id}}</td> 
               <td> <a href="/ItemInfo/beli/{{$ItemInfo->id}}">Add to cart?</a></td>

            @endforeach
        </tbody>
    </tr>
</table>
                {{-- pembekal_id
                item_created_by
                item_created_date
                item_updated_by
                item_updated_date --}}
                