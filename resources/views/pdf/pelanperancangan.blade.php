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
<h5>No Siri: {{$fizaPelanPerancanganPerolehan->pelan_no_siri}}</h5>

<br>Perihal: {{$fizaPelanPerancanganPerolehan->pelan_description}}
<br>Kategori Perancangan: {{$fizaPelanPerancanganPerolehan->pelan_category}}
<br>Kaedah Perolehan: {{$fizaPelanPerancanganPerolehan->pelan_method}}
<br>Tarikh: {{$fizaPelanPerancanganPerolehan->pelan_invitation_date}}
<br>Amaun anggaran: {{$fizaPelanPerancanganPerolehan->pelan_estimated_amount}}
@foreach ($user as $user2)
<br>Pegawai Pengesah: {{$user2->user_name}}
@endforeach
@foreach ($user as $user4)
<br>Pegawai Pelulus: {{$user4->user_name}} 
@endforeach


<br>Status Pelan: {{$fizaPelanPerancanganPerolehan->pelan_status}}