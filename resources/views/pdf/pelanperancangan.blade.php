<style>
    * {
        font: 12pt "Times New Roman";
        line-height: 1.5;
        text-align: justify;
        
    }
</style>

<h6>Tahun:{{$fizaPelanPerancanganPerolehan->pelan_year}}</h6>
<h5>Jenis Perolehan: {{$fizaPelanPerancanganPerolehan->pelan_jenis}}
<h5>Tajuk: {{$fizaPelanPerancanganPerolehan->pelan_title}}</h5>

<br>Perihal: {{$fizaPelanPerancanganPerolehan->pelan_description}}
<br>Kategori Perancangan: {{$fizaPelanPerancanganPerolehan->pelan_category}}
<br>Kaedah Perolehan: {{$fizaPelanPerancanganPerolehan->pelan_method}}
<br>Tarikh: {{$fizaPelanPerancanganPerolehan->pelan_invitation_date}}
<br>Amaun anggaran: {{$fizaPelanPerancanganPerolehan->pelan_estimated_amount}}
@foreach ($user as $user)
<br>Pegawai Pengesah: {{$user->user_name}}
<br>Pegawai Pelulus: {{$user->user_name}} 
@endforeach
<br>Status Perancangan Perolehan:  {{$fizaPelanPerancanganPerolehan->pelan_status}}