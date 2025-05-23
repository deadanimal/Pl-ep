@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
        Pelan Perancangan Perolehan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kelulusan Perancangan Perolehan</a></li>
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
        <form method="POST" action="/updatepelulus">
        @csrf
        @method('PUT')


        <input type="hidden" name="perancangan_id"  value="{{$PelanPerancanganPerolehan->id}}">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-10 ">Jenis Perolehan</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=text name="pelan_jenis" class="form-control"  value="{{$PelanPerancanganPerolehan->pelan_jenis}}"></div>
            </div>


        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Tajuk Pelan Perolehan</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=text name=pelan_title class="form-control" value="{{$PelanPerancanganPerolehan->pelan_title}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Tahun Pelan</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type="number" name="pelan_year" value="{{$PelanPerancanganPerolehan->pelan_year}}" class="form-control" maxlength="4" placeholder="2021">
            
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6">Diskripsi Pelan</label>
            </div>
            <div class="mb-3 col-md-6">
               <textarea name=pelan_description class="form-control" rows="3" cols="4" >{{$PelanPerancanganPerolehan->pelan_description}}</textarea>
            </div>
        </div>


        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Kaedah Perolehan</label></div>
            <div class="mb-3 col-md-6">
                <input type=text name="pelan_method" class="form-control" value="{{$PelanPerancanganPerolehan->pelan_method}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Tarikh Jemputan Pelan</label>
            </div>
            <div class="mb-3 col-md-6">
                <input  type=date name=pelan_invitation_date class="form-control"  value="{{$PelanPerancanganPerolehan->pelan_invitation_date}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Jumlah Anggaran Pelan </label>
            </div>
            <div class="mb-3 col-md-6">
                <input  type=number name=pelan_estimated_amount class="form-control" min="0"  step=".01" placeholder="0.00" value="{{$PelanPerancanganPerolehan->pelan_estimated_amount}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Peruntukan Tahunan </label>
            </div>
            <div class="mb-3 col-md-6">
                <input  type=number name=pelan_peruntukan_tahunan class="form-control" min="0"  step=".01" placeholder="0.00"  value="{{$PelanPerancanganPerolehan->pelan_peruntukan_tahunan}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Tarikh Perlaksanaan Iklan</label>
            </div>
            <div class="mb-3 col-md-6">
                <input  type=date name=pelan_tarikh_perlaksanaan_iklan class="form-control"   value="{{$PelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_iklan}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Tarikh Penyediaan Spesifikasi</label>
            </div>
            <div class="mb-3 col-md-6">
                <input  type=date name=pelan_tarikh_penyediaan_spesifikasi class="form-control"  value="{{$PelanPerancanganPerolehan->pelan_tarikh_penyediaan_spesifikasi}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Tarikh Penyediaan Dokumen Tender</label>
            </div>
            <div class="mb-3 col-md-6">
                <input  type=date name=pelan_tarikh_penyediaan_doc_tender class="form-control"  value="{{$PelanPerancanganPerolehan->pelan_tarikh_penyediaan_doc_tender}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Tarikh Penilaian Tender</label>
            </div>
            <div class="mb-3 col-md-6">
                <input  type=date name=pelan_tarikh_penilaian_tender class="form-control"  value="{{$PelanPerancanganPerolehan->pelan_tarikh_penilaian_tender}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Tarikh Perlaksanaan Persidangan</label>
            </div>
            <div class="mb-3 col-md-6">
                <input  type=date name=pelan_tarikh_perlaksanaan_persidangan class="form-control"  value="{{$PelanPerancanganPerolehan->pelan_tarikh_perlaksanaan_persidangan}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Tarikh SST Dikeluarkan</label>
            </div>
            <div class="mb-3 col-md-6">
                <input  type=date name=pelan_tarikh_sst_dikeluarkan class="form-control"  value="{{$PelanPerancanganPerolehan->pelan_tarikh_sst_dikeluarkan}}">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Catatan Pelan</label>
            </div>
            <div class="mb-3 col-md-6">
                <textarea name=pelan_catatan class="form-control" rows="3" cols="4">{{$PelanPerancanganPerolehan->pelan_catatan}}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Nama Pegawai Pengesah</label>
            </div>
            <div class="mb-3 col-md-6">
                {{-- <input  type=text name=pelan_pengesah class="form-control" value="{{$PelanPerancanganPerolehan->pelan_pengesah}}" readonly> --}}
                {{-- @foreach ($pengesah as $pengesah) --}}
                {{-- <input  type=text name=pelan_pengesah class="form-control" value="{{$pengesah->user_name}}" readonly> --}}
                {{-- @endforeach --}}

                <select  name="pelan_pengesah" class="form-control" readonly>
          
                    <option @if ($PelanPerancanganPerolehan->pelan_pengesah == '{{$pengesah->id}}') selected @endif value="{{$pengesah->id}}">{{$pengesah->user_name}}</option>
                    {{-- @endforeach  --}}
                    </select>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Nama Pegawai Pelulus</label>
            </div>
            <div class="mb-3 col-md-6">
                {{-- @foreach ($pelulus as $pelulus) --}}
                {{-- <input  type=text name=pelan_pelulus class="form-control" value="{{$pelulus->user_name}}" readonly> --}}
                {{-- @endforeach --}}
                {{-- <input type=text name="pelan_pelulus" class="form-control" value="{{$PelanPerancanganPerolehan->pelan_pelulus}}" readonly> --}}

                <select  name="pelan_pelulus" class="form-control" readonly>
                    {{-- <input type=text name="pelan_pengesah" class="form-control"  value="{{$pengesah->user_name}}"> --}}
                    <option @if ($PelanPerancanganPerolehan->pelan_pelulus == '{{$pengesah->id}}') selected @endif value="{{$pengesah->id}}">{{$pengesah->user_name}}</option>
                    {{-- @endforeach  --}}
                    </select>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Status Pelan</label>
            </div>
            <div class="mb-3 col-md-6">
                <select name="pelan_status" class="form-select" required>
                    <option hidden value="">Sila Pilih</option>
                    <option value="Diluluskan">Diluluskan</option>
                    <option value="Perlu Semak Semula">Semak Semula</option>
                    <option value="Dibatalkan">Dibatalkan</option>
                </select>
                    
            </div>
        </div>


        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Catatan Pelulus</label>
            </div>
            <div class="mb-3 col-md-6">
                <textarea row=3 col=4 name=pelan_catatan_pelulus class="form-control"></textarea>

            </div>
        </div>


        
        {{-- <br>Jenis Perolehan: <input type=text name=pelan_jenis value="{{$PelanPerancanganPerolehan->pelan_jenis}}">
        <br>Tahun Pelan Perolehan: <input type=number name=pelan_year value="{{$PelanPerancanganPerolehan->pelan_year}}">
        <br>Tajuk Pelan Perolehan: <input type=text name=pelan_title  value="{{$PelanPerancanganPerolehan->pelan_title}}">
        <br>Diskripsi Pelan: <input type=text name=pelan_description  value="{{$PelanPerancanganPerolehan->pelan_description}}">
        <br>Kategori Pelan: <input type=text name=pelan_category  value="{{$PelanPerancanganPerolehan->pelan_category}}">
        <br>Kaedah Pelan Perolehan<input type=text name=pelan_method value="{{$PelanPerancanganPerolehan->pelan_method}}">
        <br>Tarikh Jemputan Pelan: <input type=date name=pelan_invitation_date  value="{{$PelanPerancanganPerolehan->pelan_invivation_date}}">
        <br>Jumlah Anggaran Pelan: <input type=number name=pelan_estimated_amount  value="{{$PelanPerancanganPerolehan->pelan_estimated_amount}}">
        <br>Catatan Pelan: <input type=text name=pelan_catatan value="{{$PelanPerancanganPerolehan->pelan_catatan}}">
        {{-- pelan_status 
        <br>Nama Pegawai Pengesah: <input type=text name=pelan_pengesah  value="{{$PelanPerancanganPerolehan->pelan_pengesah}}">
        {{-- pelan_catatan_pengesah 
        <br>Nama Pegawai Pelulus: <input type=text name=pelan_pelulus  value="{{$PelanPerancanganPerolehan->pelan_pelulus}}"> --}}
        {{-- pelan_catatan_pelulus 
        pelan_created_by
        user_id--}}
     
        <br><br>
        <div align=right>
         <button  class="btn btn-primary" type="submit">Kemaskini</button> 
        </div>
        </form>
            </div>
        </div>
    </div>
</div>


@stop