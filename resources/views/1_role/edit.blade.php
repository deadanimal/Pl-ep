<form method="POST" action="/Peranan Pengguna/{{$user->id}}">
    @method('PUT')

    <br> Nama Pengguna: {{$user->user_name}}
    <br> Emel: {{$user->email}}
    <br> Jenis Pengguna {{$user->jenis}}
    <br> Peranan Pengguna:                        
      <select name="role_id"  class="form-select">
        <option hidden value="">SILA PILIH</option>
            @foreach($role as  $role)
        <option value="{{$role->id}}">{{$role->role_name}}</option>
            @endforeach 
     </select>
</form>

