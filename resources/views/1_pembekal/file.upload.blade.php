<form  method="POST" action="/dokumentambahan" enctype="multipart/form-data"> 
    @csrf

    <br>
    <fieldset>
      <legend>Dokumen yang perlu dilampirkan:</legend>
      <br><br>
    
        <br> No Sijil MOF <input type="text" name="pembekal_no_sijil_mof" class="form-control"> 
        <br> No Rujukan Pendaftaran <input type="text" class="form-control" name="pembekal_no_rujukan_pendaftaran">
        <br> Tarikh Sah Sijil MOF<input type="date" class="form-control" name="pembekal_tarikh_sah_mof">
        <br> Sijil MOF <input type="file" class="form-control" name="pembekal_sijil_mof">
        <br> Sijil Perakuan Bumiputera  <input type="file" class="form-control" name="pembekal_sijil_perakuan_bumiputera">
        <br> Sijil Pendaftaran Syarikat <input type="file" class="form-control" name="pembekal_sijil_pendaftaran_syarikat">
        <br> Sijil Taraf Bumi <input type="file" class="form-control" name="pembekal_sijil_taraf_bumi">
      
        <br> No Pendaftaran PPK<input type="text" class="form-control" name='pembekal_no_pendaftaran_ppk'>
        <br> Tarikh Sah PPK <input type="date" class="form-control" name=pembekal_tarikh_sah_ppk>
        <br> Pengkhususan<input type="text" class="form-control" name=pembekal_pengkhususan>
        <br> Pegawai Bertauliah <input type="text" class="form-control" name='pembekal_pegawai_bertauliah'>
        <br> Sijil Gred CIDB <input type="file" class="form-control" name='pembekal_sijil_gred'>
        <br> Tarikh Sah Gred <input type="date" class="form-control" name='pembekal_tarikh_sah_gred'>


      <div class="col-md-6 ps-md-2">
        <label>Kod Bidang</label>
        <div class="input-group mb-2">
          <select class="form-control" name="id_bidangkod" required>
            <option hidden>Sila Pilih</option>
            @foreach($kod as  $kod)
            {{-- <optgroup label="{{$kod->kategori_kod}}"></optgroup> --}}
               <option value="{{$kod->id}}">{{$kod->pengkhususan_kod}}-{{$kod->deskripsi_kod}}</option>
              @endforeach 
            
          </select>
        </div>



    </fieldset>
    <br><br><br>
    
      <br><br>
      {{-- <button type="submit" class="btn btn-primary" style="margin:5px; float:">Hantar</button>  
      <button type="reset"  class="btn btn-primary"  style="margin:5px; float:right">Hapus</button> --}}
      <button class="btn btn-primary" type="submit" title="Send">Hantar</button> 
    </form>