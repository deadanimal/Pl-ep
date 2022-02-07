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

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Spesifikasi </label>
                             </div>
                             <div class="mb-3 col-md-6">
                                 @foreach ($spesifikasi as $spesifikasi)
                                <input type="text" class="form-control" name="jawatankuasa_spesikasi" value="{{$spesifikasi->user_name}}">
                                 @endforeach
                             </div>
                        </div>

                            
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"><br> Jawatankuasa Teknikal </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                @foreach ($teknikal as $teknikal)
                                <input type="text" class="form-control" name="jawatankuasa_teknikal" value="{{$teknikal->user_name}}">
                                @endforeach
                            </div>
                        </div>

                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kewangan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                @foreach ($kewangan as $kewangan)
                                <input type="text" class="form-control" name="jawatankuasa_kewangan" value="{{$kewangan->user_name}}">
                                @endforeach
                                {{-- <button onclick="tambah_nama()">+</button> 
                                <input type="text" class="form-control" name="jawatankuasa_kewangan_2 " id="jawatankuasa_kewangan_2" class="form-control" style="display: none"> --}} 
                            </div>
                        </div>

                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kerja</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                @foreach ($kerja as $kerja)
                                <input type="text" class="form-control" name="jawatankuasa_kerja" value="{{$kerja->user_name}}">
                                @endforeach
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Terbuka </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                @foreach ($terbuka as $terbuka)
                                <input type="text" class="form-control" name="jawatankuasa_terbuka" value="{{$terbuka->user_name}}">
                                @endforeach
                            </div>
                        </div>
                        
                     
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Penilaian</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                @foreach ($penilaian as $penilaian)
                                <input type="text" class="form-control" name="jawatankuasa_penilaian" value="{{$penilaian->user_name}}">
                                @endforeach
                            </div>
                        </div> 
   
                        <div align="right"> 
                            <button class="btn btn-primary" type="submit">Hantar</a></button>
                        </div>
                        <br>
        
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
