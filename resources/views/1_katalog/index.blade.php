<h3>Senarai Katalog mengikut kategori </h3>

<table>
    <tr>
     
        <th>katalog_kategori</th>
        <th>katalog_kumpulan </th>
        <th>katalog_jenis</th>
        <th> </th>
    </tr>
        @foreach ($Katalog as $Katalog)
    
    <tr>
        <td>{{$Katalog->katalog_kategori}}</td>
        <td>{{$Katalog->katalog_kumpulan}}</td>
        <td>{{$Katalog->katalog_jenis}}</td>
        <td><a href="/listkatalog/{{$Katalog->id}}">Paparan Item</a></th>
        
        @endforeach

    </tr>
</table>
 
        
