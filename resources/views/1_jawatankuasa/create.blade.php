@extends('layouts.base')

@section('content')
<div class="header">
    <h1 class="header-title">
    Jawatankuasa Sebutharga/Tender
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Pemilihan Jawatankuasa</a></li>
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
                    <form method="POST" action="/Jawatankuasa">
                        @csrf
                 
                    <input type="hidden" name="pst_id" value="{{$pst->id}}">


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jawatankuasa Spesifikasi</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name="jawatankuasa_spesifikasi" class="form-select">
                                <option hidden value="">Sila Pilih</option>
                                
                                    @foreach ($user as $jawatankuasa_spesifikasi)
                                <option value={{$jawatankuasa_spesifikasi->id}}>{{$jawatankuasa_spesifikasi->user_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jawatankuasa Teknikal</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name="jawatankuasa_teknikal" class="form-select">
                                <option hidden value="">Sila Pilih</option>
                                
                                    @foreach ($user as $jawatankuasa_teknikal)
                                <option value={{$jawatankuasa_teknikal->id}}>{{$jawatankuasa_teknikal->user_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                        {{-- <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Spesifikasi </label>
                             </div>
                             <div class="mb-3 col-md-6">
                                    <select name="jawatankuasa_spesifikasi" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    @foreach ($user as $jawatankuasa_spesifikasi)
                                <option value="{{$jawatankuasa_spesifikasi->id}}">{{$jawatankuasa_spesifikasi->user_name}}</option>
                                @endforeach
                                </select>
                             </div>
                        </div> --}}

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kerja</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_kerja" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                        @foreach ($user as $jawatankuasa_kerja)
                                    <option value={{$jawatankuasa_kerja->id}}>{{$jawatankuasa_kerja->user_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

{{--                             
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"><br> Jawatankuasa Teknikal </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_teknikal" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                
                                @foreach ($user as $jawatankuasa_teknikal)
                                    <option value={{$jawatankuasa_teknikal->id}}>{{$jawatankuasa_teknikal->user_name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div> --}}

                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kewangan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_kewangan" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                    @foreach ($user as $jawatankuasa_kewangan)
                                        <option value={{$jawatankuasa_kewangan->id}}>{{$jawatankuasa_kewangan->user_name}}</option>
                                    @endforeach
                                </select>
                                {{-- <button onclick="tambah_nama()">+</button> --}}
                                {{-- <input type="text" name="jawatankuasa_kewangan_2 " id="jawatankuasa_kewangan_2" class="form-control" style="display: none">  --}}
                            </div>
                        </div>

                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kerja</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_kerja" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                        @foreach ($user as $jawatankuasa_kerja)
                                    <option value={{$jawatankuasa_kerja->id}}>{{$jawatankuasa_kerja->user_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Terbuka </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_terbuka" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                    @foreach ($user as $jawatankuasa_terbuka)
                                    <option value={{$jawatankuasa_terbuka->id}}>{{$jawatankuasa_terbuka->user_name}}</option>
                                    @endforeach   
                                </select>
                            </div>
                        </div>
                        
                     
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Penilaian</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_penilaian" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                    @foreach ($user as $jawatankuasa_penilaian)
                                    <option value={{$jawatankuasa_penilaian->id}}>{{$jawatankuasa_penilaian->user_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    {{-- user_id --}}
                        {{-- <br>Peranan Jawatankuasa <input type="text" class="form-control" name="jawatankuasa_peranan"> --}}
                    {{-- pst_id --}}
                    {{-- jawatankuasa_created_by
                    jawatankuasa_created_date
                    jawatankuasa_updated_by
                    jawatankuasa_updated_date --}}

   
                        <div align="right"> 
                            <button class="btn btn-primary" type="submit">Hantar</a></button>
                        </div>
                        <br>
        
                    </form>
            </div>
        </div>
    </div>
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
