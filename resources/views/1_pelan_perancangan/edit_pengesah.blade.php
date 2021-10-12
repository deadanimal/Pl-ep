<form method="POST" action="/PelanPerancanganPerolehan/{{$fizaPelanPerancanganPerolehan->id}}">
@csrf

<br>Jenis pelan: <input type=text name=pelan_jenis value="{{$fizaPelanPerancanganPerolehan->pelan_jenis}}">
<br>Tahun Pelan Perolehan: <input type=number name=pelan_year value="{{$fizaPelanPerancanganPerolehan->pelan_year}}" >
<br>Tajuk Pelan Perolehan: <input type=text name=pelan_title  value="{{$fizaPelanPerancanganPerolehan->pelan_title}}">
<br>Diskripsi Pelan: <input type=text name=pelan_description  value="{{$fizaPelanPerancanganPerolehan->pelan_description}}">
<br>Kategori Pelan: <input type=text name=pelan_category  value="{{$fizaPelanPerancanganPerolehan->pelan_category}}">
<br>Kaedah Pelan Perolehan<input type=text name=pelan_method value="{{$fizaPelanPerancanganPerolehan->pelan_method}}">
<br>Tarikh Jemputan Pelan: <input type=date name=pelan_invitation_date value="{{$fizaPelanPerancanganPerolehan->pelan_invivation_date}}">
<br>Jumlah Anggaran Pelan: <input type=number name=pelan_estimated_amount  value="{{$fizaPelanPerancanganPerolehan->pelan_estimated_amount}}">
<br>Catatan Pelan: <input type=text name='pelan_catatan' value="{{$fizaPelanPerancanganPerolehan->pelan_catatan}}">
<br>Nama Pegawai Pengesah: <input type=text name=pelan_pengesah  value="{{$fizaPelanPerancanganPerolehan->pelan_pengesah}}" readonly>
<br>Catatan Pegawai Pegesah: <input type=text name=pelan_catatan_pengesah value="{{$fizaPelanPerancanganPerolehan->pelan_catatan_pengesah}}" readonly>
<br>Nama Pegawai Pelulus: <input type=text name=pelan_pelulus  value="{{$fizaPelanPerancanganPerolehan->pelan_pelulus}}" readonly>
<br>Catatan Pegawai Pelulus<input type=text name="pelan_catatan_pelulus"> 
<br>Status Pelan: 
<select name="pelan_status">
    <option value="Diluluskan">Diluluskan</option>
    <option value="Semak Semula">Semak Semula</option>
    </select>
{{--pelan_created_by
user_id--}}

<button type=submit>Kemaskini</button> 