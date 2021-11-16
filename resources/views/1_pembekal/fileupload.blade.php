@extends('layouts.base')
@section('content')

<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <div class="card-body">
                 <h3> Cipta Nota Minta </h3>
                 <form  method="POST" action="/dokumentambahan" enctype="multipart/form-data"> 
                  @csrf
                  <br>
                  <fieldset>
                    <legend>Dokumen yang perlu dilampirkan:</legend>
                    <br><br>
                  
                    <div class="row">
                      <div class="mb-3 col-md-6">
                          <label class="col-form-label col-sm-6 ">No Sijil MOF</label>
                      </div>
                      <div class="mb-3 col-md-6">
                        <input type="text" name="pembekal_no_sijil_mof" class="form-control"> 
                      </div>
                    </div>

                  <div class="row">
                      <div class="mb-3 col-md-6">
                          <label class="col-form-label col-sm-6 ">No Rujukan Pendaftaran </label>
                      </div>
                      <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="pembekal_no_rujukan_pendaftaran">
                    </div>
                  </div>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 "> Tarikh Sah Sijil MOF</label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <input type="date" class="form-control" name="pembekal_tarikh_sah_mof">
                    </div>
                  </div>


                  <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Sijil MOF </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="file" class="form-control" name="pembekal_sijil_mof">
                    </div>
                  </div>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="col-form-label col-sm-6 ">Sijil Perakuan Bumiputera  </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="file" class="form-control" name="pembekal_sijil_perakuan_bumiputera">
                    </div>
                  </div>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="col-form-label col-sm-6 ">Sijil Pendaftaran Syarikat</label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <input type="file" class="form-control" name="pembekal_sijil_pendaftaran_syarikat">
                    </div>
                  </div>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="col-form-label col-sm-6 ">Sijil Taraf Bumi </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <input type="file" class="form-control" name="pembekal_sijil_taraf_bumi">
                    </div>
                  </div>
                    
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="col-form-label col-sm-6 ">No Pendaftaran PPK</label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <input type="text" class="form-control" name='pembekal_no_pendaftaran_ppk'>
                    </div>
                  </div>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="col-form-label col-sm-6 ">Tarikh Sah PPK </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <input type="date" class="form-control" name=pembekal_tarikh_sah_ppk>
                    </div>
                  </div>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Pengkhususan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                       <input type="text" class="form-control" name=pembekal_pengkhususan>
                    </div>
                  </div>


                  <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Pegawai Bertauliah </label>
                    </div>
                     <div class="mb-3 col-md-6">
                       <input type="text" class="form-control" name='pembekal_pegawai_bertauliah'>
                     </div>
                  </div>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Sijil Gred CIDB </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <input type="file" class="form-control" name='pembekal_sijil_gred'>
                    </div>
                  </div>

                  <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 "> Tarikh Sah Gred </label>
                            </div>
                            <div class="mb-3 col-md-6">
                              <input type="date" class="form-control" name='pembekal_tarikh_sah_gred'>
                            </div>
                  </div>


                    <div class="row">
                      <div class="mb-3 col-md-6">
                          <label class="col-form-label col-sm-6 ">Kod Bidang</label>
                      </div>
                      <div class="mb-3 col-md-6">
                        <select class="form-control" name="id_bidangkod" required>
                          <option hidden>Sila Pilih</option>
                          @foreach($kod as  $kod)
                          {{-- <optgroup label="{{$kod->kategori_kod}}"></optgroup> --}}
                            <option value="{{$kod->id}}">{{$kod->pengkhususan_kod}}-{{$kod->deskripsi_kod}}</option>
                            @endforeach 
                        </select>
                      </div>
                    </div>



                  </fieldset>
                  <br><br><br>
                  
                    <br><br>
                    {{-- <button type="submit" class="btn btn-primary" style="margin:5px; float:">Hantar</button>  
                    <button type="reset"  class="btn btn-primary"  style="margin:5px; float:right">Hapus</button> --}}
                    <button class="btn btn-primary" type="submit" title="Send">Hantar</button> 
                  </form>

                  @stop