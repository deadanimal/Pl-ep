@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
    Jawatankuasa Sebutharga/Tender
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Kemaskini Pemilihan Jawatankuasa</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body">

                    <form method="POST" action="/Jawatankuasa/{{$Jawatankuasa->id}}">
                        @csrf
                        @method('PUT')

                        <input type="hidden" class="form-control" name="pst_id" value="{{$Jawatankuasa->pst_id}}">
                        {{-- <input type="hidden" name="_method" value="PUT"> --}}

                    <fieldset>
                        <legend>Jawatankuasa Spesifikasi</legend>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Spesifikasi </label>
                             </div>
                             <div class="mb-3 col-md-6">
                                 <select class="form-select" name="jawatankuasa_spesikasi_ajk">
                                    @foreach ($spesifikasi_ajk as $spesifikasi_ajk)
                                     <option @if ($Jawatankuasa->jawatankuasa_spesikasi_ajk == $spesifikasi_ajk->id) selected @endif value="{{$spesifikasi_ajk->id}}">{{$spesifikasi_ajk->user_name}}</option>
                                {{-- <input type="text" class="form-control" name="jawatankuasa_spesikasi_ajk" value="{{$spesifikasi_ajk->user_name}}" > --}}
                                     @endforeach
                                 </select>
                             </div>
                        </div>                      
                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Urusetia Jawatankuasa Spesifikasi </label>
                             </div>
                             <div class="mb-3 col-md-6">
                                 {{-- @foreach ($spesifikasi_urusetia as $spesifikasi_urusetia)
                                <input type="text" class="form-control" name="jawatankuasa_spesikasi_urusetia" value="{{$spesifikasi_urusetia->user_name}}" >
                                 @endforeach --}}

                                 <select class="form-select" name="jawatankuasa_spesikasi_urusetia">
                                    @foreach ($spesifikasi_urusetia as $spesifikasi_urusetia)
                                     <option @if ($Jawatankuasa->jawatankuasa_spesikasi_urusetia == $spesifikasi_urusetia->id) selected @endif value="{{$spesifikasi_urusetia->id}}">{{$spesifikasi_urusetia->user_name}}</option>
                                     @endforeach
                                 </select>
                             </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Spesifikasi </label>
                             </div>
                             <div class="mb-3 col-md-6">
                                 {{-- @foreach ($spesifikasi_pengerusi as $spesifikasi_pengerusi)
                                <input type="text" class="form-control" name="jawatankuasa_spesikasi_pengerusi" value="{{$spesifikasi_pengerusi->user_name}}" >
                                 @endforeach --}}

                                 <select class="form-select" name="jawatankuasa_spesikasi_pengerusi">
                                    @foreach ($spesifikasi_pengerusi as $spesifikasi_pengerusi)
                                     <option @if ($Jawatankuasa->jawatankuasa_spesikasi_pengerusi == $spesifikasi_pengerusi->id) selected @endif value="{{$spesifikasi_pengerusi->id}}">{{$spesifikasi_pengerusi->user_name}}</option>
                                     @endforeach
                                 </select>
                             </div>
                        </div>

                    </fieldset>
                    <br><br>

                    <fieldset>
                        <legend>Jawatankuasa Teknikal</legend>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6">Jawatankuasa Teknikal </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    {{-- @foreach ($teknikal_pengerusi as $teknikal_ajk)
                                    <input type="text" class="form-control" name="jawatankuasa_teknikal_ajk" value="{{$teknikal_ajk->user_name}}" >
                                    @endforeach --}}

                                    <select class="form-select" name="jawatankuasa_teknikal_ajk">
                                        @foreach ($teknikal_ajk as $teknikal_ajk)
                                         <option @if ($Jawatankuasa->jawatankuasa_teknikal_ajk == $teknikal_ajk->id) selected @endif value="{{$teknikal_ajk->id}}">{{$teknikal_ajk->user_name}}</option>
                                         @endforeach
                                     </select>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6"><br> Pengerusi Jawatankuasa Teknikal </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    {{-- @foreach ($teknikal_pengerusi as $teknikal_pengerusi)
                                    <input type="text" class="form-control" name="jawatankuasa_teknikal_pengerusi" value="{{$teknikal_pengerusi->user_name}}" >
                                    @endforeach --}}
                                    <select class="form-select" name="jawatankuasa_teknikal_pengerusi">
                                        @foreach ($teknikal_pengerusi as $teknikal_pengerusi)
                                         <option @if ($Jawatankuasa->jawatankuasa_teknikal_pengerusi == $teknikal_pengerusi->id) selected @endif value="{{$teknikal_pengerusi->id}}">{{$teknikal_pengerusi->user_name}}</option>
                                         @endforeach
                                     </select>
                                </div>
                            </div>
                    </fieldset>
                    <br><br>
                    <fieldset>
                        <legend> Jawatankuasa Kewangan</legend>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6">Jawatankuasa Kewangan </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    {{-- @foreach ($kewangan_ajk as $kewangan_ajk)
                                    <input type="text" class="form-control" name="jawatankuasa_kewangan_ajk" value="{{$kewangan_ajk->user_name}}" >
                                    @endforeach --}}

                                <select class="form-select" name="jawatankuasa_kewangan_ajk">
                                        @foreach ($kewangan_ajk as $kewangan_ajk)
                                         <option @if ($Jawatankuasa->jawatankuasa_kewangan_ajk == $kewangan_ajk->id) selected @endif value="{{$kewangan_ajk->id}}">{{$kewangan_ajk->user_name}}</option>
                                         @endforeach
                                 </select>
                                    
                                </div>
                            </div>


                        
                            <div class="row">
                                <div class="col-md-6">
                                <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Kewangan </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    {{-- @foreach ($kewangan_pengerusi as $kewangan_pengerusi)
                                    <input type="text" class="form-control" name="jawatankuasa_kewangan_pengerusi" value="{{$kewangan_pengerusi->user_name}}" >
                                    @endforeach --}}

                                    <select class="form-select" name="jawatankuasa_kewangan_pengerusi">
                                        @foreach ($kewangan_pengerusi as $kewangan_pengerusi)
                                         <option @if ($Jawatankuasa->jawatankuasa_kewangan_pengerusi == $kewangan_pengerusi->id) selected @endif value="{{$kewangan_pengerusi->id}}">{{$kewangan_pengerusi->user_name}}</option>
                                         @endforeach
                                    </select>
                                </div>
                            </div>
                    </fieldset>
                    <br><br>
                    <fieldset>
                        <legend>Jawatankuasa Kerja/Perkhidmatan</legend>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kerja</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                {{-- @foreach ($kerja_pengerusi as $kerja_ajk)
                                <input type="text" class="form-control" name="jawatankuasa_kerja_ajk" value="{{$kerja_ajk->user_name}}" >
                                @endforeach --}}

                                <select class="form-select" name="jawatankuasa_kerja_ajk">
                                    @foreach ($kerja_ajk as $kerja_ajk)
                                     <option @if ($Jawatankuasa->jawatankuasa_kerja_ajk == $kerja_ajk->id) selected @endif value="{{$kerja_ajk->id}}">{{$kerja_ajk->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Kerja</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                {{-- @foreach ($kerja_pengerusi as $kerja_pengerusi)
                                <input type="text" class="form-control" name="jawatankuasa_kerja_pengerusi" value="{{$kerja_pengerusi->user_name}}" >
                                @endforeach --}}
                                <select class="form-select" name="jawatankuasa_kerja_pengerusi">
                                    @foreach ($kerja_pengerusi as $kerja_pengerusi)
                                     <option @if ($Jawatankuasa->jawatankuasa_kerja_pengerusi == $kerja_pengerusi->id) selected @endif value="{{$kerja_pengerusi->id}}">{{$kerja_pengerusi->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>

                    </fieldset>
                    <br><br>

                    <fieldset>
                        <legend> Jawatankuasa Pembuka</legend>
                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Pembuka </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                {{-- @foreach ($terbuka_pengerusi as $terbuka_pengerusi)
                                <input type="text" class="form-control" name="jawatankuasa_terbuka_ajk" value="{{$terbuka_ajk->user_name}}" >
                                @endforeach --}}

                                <select class="form-select" name="jawatankuasa_terbuka_ajk">
                                    @foreach ($terbuka_ajk as $terbuka_ajk)
                                     <option @if ($Jawatankuasa->jawatankuasa_terbuka_ajk == $terbuka_ajk->id) selected @endif value="{{$terbuka_ajk->id}}">{{$terbuka_ajk->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Terbuka </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                {{-- @foreach ($terbuka_pengerusi as $terbuka_pengerusi)
                                <input type="text" class="form-control" name="jawatankuasa_terbuka_pengerusi" value="{{$terbuka_pengerusi->user_name}}" >
                                @endforeach --}}


                                <select class="form-select" name="jawatankuasa_terbuka_pengerusi">
                                    @foreach ($terbuka_pengerusi as $terbuka_pengerusi)
                                     <option @if ($Jawatankuasa->jawatankuasa_terbuka_pengerusi == $terbuka_pengerusi->id) selected @endif value="{{$terbuka_pengerusi->id}}">{{$terbuka_pengerusi->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <br><br>
                    <fieldset>
                        <legend>Jawatankuasa Penilaian</legend>

                     
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Penilaian</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                {{-- @foreach ($penilaian_ajk as $penilaian_ajk)
                                <input type="text" class="form-control" name="jawatankuasa_penilaian_ajk" value="{{$penilaian_ajk->user_name}}" >
                                @endforeach --}}


                                <select class="form-select" name="jawatankuasa_penilaian_ajk">
                                    @foreach ($penilaian_ajk as $penilaian_ajk)
                                     <option @if ($Jawatankuasa->jawatankuasa_penilaian_ajk == $penilaian_ajk->id) selected @endif value="{{$penilaian_ajk->id}}">{{$penilaian_ajk->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Penilaian</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                {{-- @foreach ($penilaian_pengerusi as $penilaian_pengerusi)
                                <input type="text" class="form-control" name="jawatankuasa_penilaian_pengerusi" value="{{$penilaian_pengerusi->user_name}}" >
                                @endforeach --}}

                                <select class="form-select" name="jawatankuasa_penilaian_pengerusi">
                                    @foreach ($penilaian_pengerusi as $penilaian_pengerusi)
                                     <option @if ($Jawatankuasa->jawatankuasa_penilaian_pengerusi == $penilaian_pengerusi->id) selected @endif value="{{$penilaian_pengerusi->id}}">{{$penilaian_pengerusi->user_name}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>
                        
                    </fieldset>

                    <div align=right>
                        <button type="submit" name="status_jawatankuasa" value="diluluskan" class="btn btn-primary"><i class="fas fa-check"></i> Diluluskan</button> 
                        <button type="submit" name="status_jawatankuasa" value="ditolak" class="btn btn-danger"><i class="fas fa-times"></i> Ditolak</button>
                    </div>
{{--    
                        <div align="right"> 
                            <button class="btn btn-primary" type="submit">Hantar</a></button>
                        </div>
                        <br> --}}
        
                    </form>
                </div>
            </div>
        </div></div>
</div>



            <script>
                function tambah_nama(){
                    // var tambah_nama = document.getElementById('jawatankuasa_kewangan_2');
                        if(document.getElementById('tambah_nama').clicked == true)
                        {
                            document.getElementById(jawatankuasa_kewangan_2).style.display.block();
                        }
                        else {
                        document.getElementById(jawatankuasa_kewangan_2).style.display.none();
                        }
                }
                }
                
             </script>

@stop
