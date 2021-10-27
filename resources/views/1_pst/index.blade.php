<h3> Senarai Sebut Harga </h3>

<table> 
    <tr> 
        <th> Tajuk Sebutharga </th>
        <th> Kaedah Perolehan </th>
        <th> Zon </th>
        <th> </th>
    </tr>
    @foreach ($fizaPembelianSebutTender as $fizaPembelianSebutTender)

        <tr>
        <td> {{$fizaPembelianSebutTender->pst_tajuk}}</td>
        <td> {{$fizaPembelianSebutTender->pst_kaedah_perolehan}}</td>
        <td> {{$fizaPembelianSebutTender->pst_zon_lokasi}}</td>
        <td> <a href="/PembelianSebutTender/{{$fizaPembelianSebutTender->id}}/edit">Butiran</a></td>
    </tr>
        @endforeach
   
</table>

    