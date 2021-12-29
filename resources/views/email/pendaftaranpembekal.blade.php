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
        
    
Pembekal telah daftar dan sedang menunggu pengesahan daripada anda.Berikut maklumat pembekal untuk rujukan pihak anda. Sekian, terima kasih. 

<div>
    <h4>Maklumat Pembekal</h4>
    <br>Nama Syarikat: {{$pembekal->pembekal_company_name}}
    <br>Jenis Akaun: {{$pembekal->pembekal_jenis_akaun}}
    <br>Nama Pemilik: {{$pembekal->pembekal_pemilik}}
</div>

<footer> 
    Sila log masuk ke Sistem ePerolehan untuk membuat pengesahan. 
</footer>