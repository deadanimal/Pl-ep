
    <form action="/kemaskini-role/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')

        <br>Nama: <input type="text" name="name" value="{{$user->user_name}}">
        <br>
        <br> Jenis Pengguna 
        <select name="jenis">
            <option hidden>SILA PILIH</option>
            <option @if ($user->jenis == 'pekerja') selected @endif value="pekerja">Staff Perbadanan Labuan</option>
            <option @if ($user->jenis == 'pembekal') selected @endif value="pembekal">Pembekal</option>
            <option @if ($user->jenis == 'juruaudit') selected @endif value="juruaudit">JuruAudit/option>
            </select>
        
        <br>No Kad Pengenalan<input type="text" name="user_identity_no" value="{{$user->identity_no}}">
        
        <br>Email<input type="email" name="email" value="{{$user->email}}">
        
        <br>Role <select name="role_id">
                <option hidden>SILA PILIH</option>
                    @foreach($role as  $role)
                <option value="{{$role->id}}">{{$role->role_name}}</option>
                    @endforeach 


        <br>Status Pengguna: 
        <select name="user_status">
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
        

        <br>

        <button type=submit>Kemaskini</button>
        
        </form>