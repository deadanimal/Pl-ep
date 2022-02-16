@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
      Pelan Perancangan Perolehan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Cipta Perancangan Perolehan</a></li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            <div class="card-body">

                <form method="POST" action="/PelanPerancanganPerolehan">
                    @csrf

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-10 ">Jenis Perolehan<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select required name="pelan_jenis" class="form-select">
                                <option hidden value="">Sila Pilih</option>
                                <option value="perolehan bekalan">Perolehan Bekalan</option>
                                <option value="perolehan perkhidmatan">Perolehan Perkhidmatan</option>
                                <option value="perolehan kerja">Perolehan Kerja</option>
                            </select>
                            </div>
                        </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tajuk Perancangan Perolehan<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <textarea required name=pelan_title class="form-control" rows="3" cols="4"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tahun Pelan<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=number name="pelan_year"class="form-control" maxlength="4" placeholder="2021" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6">Diskripsi Pelan<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                           <textarea name=pelan_description class="form-control" rows="3" cols="4" required></textarea>
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Kaedah Perolehan<span class="text-danger">*</span></label></div>
                        <div class="mb-3 col-md-6">
                            <select name="pelan_method" class="form-select">
                            <option hidden value="">Sila Pilih</option>
                            <option value="pembelian terus">Pembelian Terus</option>
                            <option value="sebutharga">Sebutharga</option>
                            <option value="tender">Tender</option>
                          </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tarikh Jemputan Pelan<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=date name=pelan_invitation_date class="form-control" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Anggaran Pelan <span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=number name=pelan_estimated_amount class="form-control" min="0"  step=".01" placeholder="0.00">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Peruntukan Tahunan <span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=number name=pelan_peruntukan_tahunan class="form-control" min="0"  step=".01" placeholder="0.00">
                           
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tarikh Perlaksanaan Iklan<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=date name=pelan_tarikh_perlaksanaan_iklan class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tarikh Penyediaan Spesifikasi<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=date name=pelan_tarikh_penyediaan_spesifikasi class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tarikh Penyediaan Dokumen Tender<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=date name=pelan_tarikh_penyediaan_doc_tender class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tarikh Penilaian Tender<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=date name=pelan_tarikh_penilaian_tender class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tarikh Perlaksanaan Persidangan<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=date name=pelan_tarikh_perlaksanaan_persidangan class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tarikh SST Dikeluarkan<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=date name=pelan_tarikh_sst_dikeluarkan class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Catatan Pelan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <textarea name=pelan_catatan class="form-control" rows="3" cols="4"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Nama Pegawai Pengesah<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name=pelan_pengesah class="form-select">
                                                            <option hidden value="">Sila Pilih</option>
                                @foreach ($user as $user1)
                                <option value={{$user1->id}}>{{$user1->user_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Nama Pegawai Pelulus<span class="text-danger">*</span></label>
                        </div>
                        <div class="mb-3 col-md-6">
                            {{-- <input type=text required name="pelan_pelulus" class="form-control"> --}}
                            <select class="form-select" name="pelan_pelulus">
                                <option hidden value="">Sila Pilih</option>
                                @foreach ($user as $user2)
                                <option value={{$user2->id}}>{{$user2->user_name}}</option>
                                @endforeach
                            </select>             
                        </div>
                    </div>
            
                   {{-- <br>Jenis Perolehan: <input type=text required name="pelan_jenis"> --}}
                   {{-- <br>Tahun Pelan Perolehan: <input type=number name="pelan_year" > --}}
                   {{-- <br>Tajuk Perancangan Perolehan: <input type=text required name=pelan_title> --}}
                   {{-- <br>Diskripsi Pelan: <input type=text required name=pelan_description> --}}
                   {{-- <br>Kategori Pelan: <select name=pelan_category>
                   <option hidden value="">Sila Pilih</option>
                   <option value="bekalan">Bekalan</option>
                   <option value="perkhidmatan">Perkhidmatan</option>
                   <option value="kerja">Kerja</option>
                   </select> --}}

                   {{-- <br>Kaedah Perolehan:<input type="text" name=pelan_method> --}}
                   {{-- <br>Tarikh Jemputan Pelan: <input type=date required name=pelan_invitation_date> --}}
                   {{-- <br>Jumlah Anggaran Pelan: <input type=number name=pelan_estimated_amount> --}}
                   {{-- <br>Catatan Pelan: <input type=text required name=pelan_catatan> --}}
                   {{-- pelan_status --}}
                   {{-- <br>Nama Pegawai Pengesah: <input type=text required name=pelan_pengesah> --}}
                   {{-- pelan_catatan_pengesah --}}
                   {{-- <br>Nama Pegawai Pelulus: <input type=text required name=pelan_pelulus> --}}
                   {{-- pelan_catatan_pelulus 
                   pelan_created_by
                   user_id--}}
                   <br><br>
                  <div align=right>
                   <button class="btn btn-success" type="submit" name="status_pelan" value="draf"> Draf</button> 
                   <button  class="btn btn-primary" type="submit" name="status_pelan" value="hantar">Hantar Pelan</button> 
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>


    



@stop