@extends('layouts.base')

@section('content')
    


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                   <h3> Perlantikan Jawatankuasa </h3>

                    <form method="POST" action="/Jawatankuasa">
                        @csrf
                        
                        {{-- <input type="hidden" name="pst_id" value="{{$fizaPembelianSebutharga->id}}"> --}}
                    {{-- jawatankuasa_id --}}
                        {{-- <br> Jenis Jawatankuasa <select class="form-control" name="jenis_jawatankuasa">
                        <option hidden>Sila Pilih</option>
                        <option value="Jawatankuasa Spesifikasi">Jawatankuasa Spesifikasi</option>
                        <option value="Jawatankuasa Teknikal">Jawatankuasa Teknikal </option>
                        <option value="Jawatankuasa Kewangan">Jawatankuasa Kewangan </option>
                        <option value="Jawatankuasa Kerja">Jawatankuasa Kerja </option>
                        <option value="Jawatankuasa Terbuka">Jawatankuasa Terbuka </option>
                            </select>
                            <br> --}}

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Spesifikasi </label>
                             </div>
                             <div class="mb-3 col-md-6">
                                    <select name="jawatankuasa_spesifikasi" class="form-control">
                                    <option hidden>Sila Pilih</option>
                                    @foreach ($user as $user6)
                                <option value="{{$user6->id}}">{{$user6->user_name}}</option>
                                @endforeach
                                </select>
                             </div>
                        </div>

                            
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"><br> Jawatankuasa Teknikal </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_teknikal" class="form-control">
                                     <option hidden>Sila Pilih</option>
                                @foreach ($user as $user1)
                                    <option value={{$user1->id}}>{{$user1->user_name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kewangan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_kewangan" class="form-control">
                                    <option hidden>Sila Pilih</option>
                                    @foreach ($user as $user2)
                                        <option value={{$user2->id}}>{{$user2->user_name}}</option>

                                    @endforeach
                                </select>
                                {{-- <button onclick="tambah_nama()">+</button> --}}
                                <input type="text" name="jawatankuasa_kewangan_2 " id="jawatankuasa_kewangan_2" class="form-control" style="display: none"> 
                            </div>
                        </div>

                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Kerja</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_kerja" class="form-control">
                                    <option hidden>Sila Pilih</option>
                                        @foreach ($user as $user3)
                                    <option value={{$user3->id}}>{{$user3->user_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Terbuka </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_terbuka" class="form-control">
                                    <option hidden>Sila Pilih</option>
                                    @foreach ($user as $user4)
                                    <option value={{$user4->id}}>{{$user4->user_name}}</option>
                                    @endforeach   
                                </select>
                            </div>
                        </div>
                        
                     
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jawatankuasa Penilaian</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name="jawatankuasa_penilaian" class="form-control">
                                    <option hidden>Sila Pilih</option>
                                    @foreach ($user as $user2)
                                    <option value={{$user2->id}}>{{$user2->user_name}}</option>
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

                        <br><button type="submit" class="btn-primary">Hantar</button>
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
