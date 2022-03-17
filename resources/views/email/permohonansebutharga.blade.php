<style>
    .a{
        text-align: justify;

        
    }
    
    .b{
        text-transform: capitalize;
  

    }

    </style>

<body>
    Salam Sejahtera,

    <p class="a">
        Dimaklumkan permohonan yang dihantar pada {{$PembelianSebutTender->created_at}} telah disemak dan {{$PembelianSebutTender->pst_status}}.Berikut bahawa butiran ringkas sebutharga untuk rujukan pihak tuan/puan: </p>

        <p class="b">
            <ul>
                <li>Tajuk Sebutharga: {{$PembelianSebutTender->PembelianSebutTender_tajuk}}</li>
                <li>No Rujukan Fail: {{$PembelianSebutTender->PembelianSebutTender_no_rujukan_fail}}</li>
                <li>Kategori Perolehan: {{$PembelianSebutTender->PembelianSebutTender_kategori_jenis_perolehan}}</li>
                <li>Tempoh Kontrak: {{$PembelianSebutTender->PembelianSebutTender_tempoh_kontrak}}</li>
            </ul>
        </p>

        <footer>
            <p class="a">
                Sila log masuk ke Sistem Pengurusan ePerolehan untuk maklumat lanjut sebutharga tersebut dan mengambil tindakan selanjutnya. 
            </p>
            <p> Sekian, terima kasih.
        </footer>
</body>

