<form method="POST" action="/Roles/{{$user->id}}">
    @method('PUT')

    <br> Nama Pengguna: {{$user->user_name}}
    <br> Emel: {{$user->email}}
    <br> Jenis Pengguna {{$user->jenis}}
    <br> Roles:                        
      <select name="role_id"  class="form-control">
        <option hidden>SILA PILIH</option>
            @foreach($role as  $role)
        <option value="{{$role->id}}">{{$role->role_name}}</option>
            @endforeach 
     </select>
</form>

