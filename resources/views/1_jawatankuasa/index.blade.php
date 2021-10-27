<h3> Senarai Jawatankuasa Berdaftar </h3>
<br><br> 
<table>
    <tr>
        <th> Nama Staff </th>
        <th> Jenis Jawatankuasa </th>
        <th></th>
    </tr>
    @foreach ($Jawatankuasa as $Jawatankuasa)
    <tr>
        <td>{{$Jawatankuasa->user_id}}</td>
        <td>{{$Jawatankuasa->jenis_jawatankuasa}}</td>
        <td><a href="/Jawatankuasa/{{$Jawatankuasa->id}}/edit"> Butiran</a></td>
        @endforeach
    </tr>

</table>
            
     
        