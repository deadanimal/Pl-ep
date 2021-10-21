<form action="/daftar-role" method="POST">
    @csrf
    Nama: <input type="text" name="user_name">

    <br>Jenis Pengguna 
    <select name="jenis">
        <option value="pekerja">Staff Perbadanan Labuan</option>
        <option value="pembekal">Pembekal</option>
        <option value="juruaudit">Juruaudit</option>
    </select>

    <br> identity_no <input type="text" name="user_identity_no">

    <br>email <input type-=email name=user_email>

    <br>Role <select name="role_id">
            <option hidden>SILA PILIH</option>
                @foreach($role as  $role)
            <option value="{{$role->id}}">{{$role->role_name}}</option>
                @endforeach 
            </select>

<br>
    <button type=submit>Daftar</button>
    </form>






