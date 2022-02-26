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
                    <form method="POST" action="/Jawatankuasa/pst/{{$pst->id}}">
                        @csrf
                        @method('PUT')
                 
                    <input type="hidden" name="pst_id" value="{{$pst->id}}">
                    
            <fieldset>
                <legend> Jawatakankuasa Spesifikasi</legend>

                    <div class="row">
                        <div class=" col-md-6">
                           <label class="col-form-label col-sm-6">Urusetia Spesifikasi</label>
                        </div>
                        <div class="mb-3  col-md-6">
                            <input type=text name="jawatankuasa_spesifikasi" class="form-control">
                            
                            <select name="jawatankuasa_spesifikasi" class="form-select">
                                <option hidden value="">Sila Pilih</option>
                                    @foreach ($user as $jawatankuasa_spesifikasi_urusetia)
                                <option value={{$jawatankuasa_spesifikasi_urusetia->id}}>{{$jawatankuasa_spesifikasi_urusetia->user_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                           <label class="col-form-label col-sm-6">Jawatankuasa Spesifikasi</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name="jawatankuasa_spesifikasi_ajk" class="form-select">
                                <option hidden value="">Sila Pilih</option>
                                    @foreach ($user as $jawatankuasa_spesifikasi_ajk)
                                <option value={{$jawatankuasa_spesifikasi_ajk->id}}>{{$jawatankuasa_spesifikasi_ajk->user_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                           <label class="col-form-label col-sm-6">Pengerusi Spesifikasi</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name="jawatankuasa_spesifikasi_pengerusi" class="form-select">
                                <option hidden value="">Sila Pilih</option>
                                    @foreach ($user as $jawatankuasa_spesifikasi_pengerusi)
                                <option value={{$jawatankuasa_spesifikasi_pengerusi->id}}>{{$jawatankuasa_spesifikasi_pengerusi->user_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                
            </fieldset>
            <br><br>

            <fieldset>
                <legend>Jawatankuasa Teknikal</legend>
                    <div class="row">
                        <div class="col-md-6">
                           <label class="col-form-label col-sm-6">Jawatankuasa Teknikal</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name="jawatankuasa_teknikal_ajk" class="form-select">
                                <option hidden value="">Sila Pilih</option>
                                
                                    @foreach ($user as $jawatankuasa_teknikal_ajk)
                                <option value={{$jawatankuasa_teknikal_ajk->id}}>{{$jawatankuasa_teknikal_ajk->user_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                           <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Teknikal</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name="jawatankuasa_teknikal_pengerusi" class="form-select">
                                <option hidden value="">Sila Pilih</option>
                                
                                    @foreach ($user as $jawatankuasa_teknikal_pengerusi)
                                <option value={{$jawatankuasa_teknikal_pengerusi->id}}>{{$jawatankuasa_teknikal_pengerusi->user_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

            </fieldset>
            <br><br>

            <fieldset>
                <legend>Jawatankuasa Pembuka</legend>
                    <div class="row">
                        <div class="col-md-6">
                           <label class="col-form-label col-sm-6">Jawatankuasa Pembuka</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name="jawatankuasa_terbuka_ajk" class="form-select">
                                <option hidden value="">Sila Pilih</option>
                                
                                    @foreach ($user as $jawatankuasa_terbuka_ajk)
                                <option value={{$jawatankuasa_terbuka_ajk->id}}>{{$jawatankuasa_terbuka_ajk->user_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col-md-6">
                           <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Pembuka</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name="jawatankuasa_terbuka_pengerusi" class="form-select">
                                <option hidden value="">Sila Pilih</option>
                                
                                    @foreach ($user as $jawatankuasa_terbuka_pengerusi)
                                <option value={{$jawatankuasa_terbuka_pengerusi->id}}>{{$jawatankuasa_terbuka_pengerusi->user_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

            </fieldset>
            <br><br>


            <fieldset>
                <legend>Jawatankuasa Perkhidmatan / Kerja</legend> 

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
                            <div class="col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kerja</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_kerja_ajk" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                        @foreach ($user as $jawatankuasa_kerja_ajk)
                                    <option value={{$jawatankuasa_kerja_ajk->id}}>{{$jawatankuasa_kerja_ajk->user_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                               <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Kerja</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_kerja_pengerusi" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                        @foreach ($user as $jawatankuasa_kerja_pengerusi)
                                    <option value={{$jawatankuasa_kerja_pengerusi->id}}>{{$jawatankuasa_kerja_pengerusi->user_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

            </fieldset>

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
                        <br><br>
                
                <fieldset>
                    <legend> Jawatankuasa Kewangan</legend>

                        <div class="row">
                            <div class="col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kewangan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_kewangan_ajk" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                    @foreach ($user as $jawatankuasa_kewangan_ajk)
                                        <option value={{$jawatankuasa_kewangan_ajk->id}}>{{$jawatankuasa_kewangan_ajk->user_name}}</option>
                                    @endforeach
                                </select>
                                {{-- <button onclick="tambah_nama()">+</button> --}}
                                {{-- <input type="text" name="jawatankuasa_kewangan_2 " id="jawatankuasa_kewangan_2" class="form-control" style="display: none">  --}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                               <label class="col-form-label col-sm-6">Pengerusi Jawatankuasa Kewangan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_kewangan_pengerusi" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                    @foreach ($user as $jawatankuasa_kewangan_pengerusi)
                                        <option value={{$jawatankuasa_kewangan_pengerusi->id}}>{{$jawatankuasa_kewangan_pengerusi->user_name}}</option>
                                    @endforeach
                                </select>
                                {{-- <button onclick="tambah_nama()">+</button> --}}
                                {{-- <input type="text" name="jawatankuasa_kewangan_2 " id="jawatankuasa_kewangan_2" class="form-control" style="display: none">  --}}
                            </div>
                        </div>
                </fieldset>
                <br><br>
                <fieldset>
                    <legend> Jawatankuasa Penilaian</legend>

                        <div class="row">
                            <div class="col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Penilaian</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_penilaian_ajk" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                    @foreach ($user as $jawatankuasa_penilaian_ajk)
                                    <option value={{$jawatankuasa_penilaian_ajk->id}}>{{$jawatankuasa_penilaian_ajk->user_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Penilaian</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_penilaian_pengerusi" class="form-select">
                                    <option hidden value="">Sila Pilih</option>
                                    
                                    @foreach ($user as $jawatankuasa_penilaian_pengerusi)
                                    <option value={{$jawatankuasa_penilaian_pengerusi->id}}>{{$jawatankuasa_penilaian_pengerusi->user_name}}</option>
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
