<style type="text/css">
    * {
      font: 12pt "Times New Roman";
      line-height: 1.25;
      text-align: justify;
      
  }

  div{
      text-transform: capitalize;
  }
  </style>

Permohonan Pendaftaran Pembekal yang dihantar pada {{date('d-m-Y H:i', strtotime($pembekal->created_at))}} telah disemak dan {{$pembekal->pembekal_status}} oleh staf kami. Berikut maklumat permohonan yang telah dihantar: 

<h3> Maklumat Syarikat</h3>

<br>Nama Syarikat: {{$pembekal->pembekal_company_name}}
<br>No Pendaftaran SSM: {{$pembekal->pembekal_no_pendaftaran}}
<br>Nama Pemilik: {{$pembekal->pembekal_pemilik}}

