<table>
    <tr>
        <th> Nama </th>
        <th> Jenis Pengguna </th>
        <th> No Kad Pengenalan</th>
        <th> Role </th>
        <th> </th>
    </tr>
    <tr>
        @foreach ($users as $users)
                <td> {{$users->name}}</td> 
                <td> {{$users->jenis}}</td>
                <td> {{$users->identity_no}}</td>
        @endforeach
        @foreach ($roles as $roles)
                <td>{{$roles->id}}</td>
        @endforeach
        <td><a href = '/registeredUser/{{$users->id}}'>Butiran</a>
    </tr>
</table>
