@extends('layouts.base')

@section('content')
<div class="header">
    <h1 class="header-title">
  Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kemaskini Sebutharga / Tender</a></li>
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
                <form method="POST" action="/PembelianSebutTender/{{$PembelianSebutTender->id}}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Panel Item </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_item_panel" value="{{$PembelianSebutTender->pst_item_panel}}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Sistem Panel </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_sistem_panel" value="{{$PembelianSebutTender->pst_sistem_panel}}">
                        </div>
                    </div>
                                
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">No1PP </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_no1pp" value="{{$PembelianSebutTender->pst_no1pp}}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Kumpulan Katalog</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            @foreach ($katalog as $katalog)
                            <input type="text" class="form-control" name="pst_katalog_kumpulan" value="{{$katalog->katalog_kumpulan}}">
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tajuk Pembelian SebutHarga & Tender </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_tajuk" value="{{$PembelianSebutTender->pst_tajuk}}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">No Rujukan Fail</label>
                        </div>
                        <div class="mb-3 col-md-6">                      
                            <input type="text" class="form-control" name="pst_no_rujukan_fail" value="{{$PembelianSebutTender->pst_no_rujukan_fail}}">
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Harga Jangkaan Indikatif </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="pst_jumlah_harga_indikatif_jangkaan" value="{{$PembelianSebutTender->pst_jumlah_harga_indikatif_jangkaan}}">
                        </div>
                    </div>

                        
                    <div class="row">
                        <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Kaedah Perolehan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_kaedah_perolehan" value="{{$PembelianSebutTender->pst_kaedah_perolehan}}">
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis PST </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_jenis" value="{{$PembelianSebutTender->pst_jenis}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6"> Terbuka Kepada</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_terbuka_kepada" value="{{$PembelianSebutTender->pst_terbuka_kepada}}">
                        </div>
                    </div>

                    
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Zon </label>
                        </div>
                        <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="pst_zon_lokasi" value="{{$PembelianSebutTender->pst_zon_lokasi}}">
                        </div>
                    </div>
                    
                                            
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6"> Kategori Jenis Perolehan </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=text name=pst_kategori_jenis_perolehan class="form-control" value="{{$PembelianSebutTender->pst_kategori_jenis_perolehan}}">
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Kategori Perolehan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_kategori_perolehan" value="{{$PembelianSebutTender->pst_kategori_perolehan}}" readonly>
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis Kontrak</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_jenis_kontrak" value="{{$PembelianSebutTender->pst_jenis_kontrak}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis Pemenuhan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_jenis_pemenuhan" value="{{$PembelianSebutTender->pst_jenis_pemenuhan}}"> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tempoh Kontrak</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_tempoh_kontrak" value="{{$PembelianSebutTender->pst_tempoh_kontrak}}">
                        </div>
                    </div>
                {{--     
                item_id
                kod_id
                pembekal_id --}}
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Pembekal Yang Layak</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="pst_jumlah_pembekal_layak" value="{{$PembelianSebutTender->pst_jumlah_pembekal_layak}}">
                        </div>
                    </div>
                    {{-- ro_id
                jawatankuasa_id
                user_id --}}
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Nama Pelulus</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            {{-- <input type="text" class="form-control" name="pst_pelulus" value="{{$PembelianSebutTender->pst_pelulus}}"> --}}
                            <select  class="form-control" name="pst_pelulus">
                                @foreach ($user as $user)
                                <option @if ($PembelianSebutTender->pst_pelulus == $user->id) selected @endif value={{$user->id}}>{{$user->user_name}}</option>    
                                @endforeach
                            </select>

                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Catatan Pelulus </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_catatan_pelulus" value="{{$PembelianSebutTender->pst_catatan_pelulus}}">
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Perihal Taklimat</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_perihal_taklimat" value="{{$PembelianSebutTender->pst_perihal_taklimat}}">
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tarikh Taklimat</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="date" class="form-control" name="pst_taklimat_date" value="{{$PembelianSebutTender->pst_taklimat_date}}">
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Alamat Taklimat</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_taklimat_alamat" value="{{$PembelianSebutTender->pst_taklimat_alamat}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Link </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_link" value="{{$PembelianSebutTender->pst_link}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Penyelaras</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name="pst_pelulus"  class="form-select">
                            @foreach ($penyelaras as $penyelaras)
                                <option @if ($PembelianSebutTender->pst_pelulus == $penyelaras->id) selected @endif value={{$penyelaras->id}}>{{$penyelaras->user_name}}</option>    
                            @endforeach
                            </select>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6"> Kehadiran Maksimum</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_kehadiran_max" value="{{$PembelianSebutTender->pst_kehadiran_max}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Status </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select class="form-select" name="pst_status" value="{{$PembelianSebutTender->pst_status}}">
                                <option hidden value="">Sila Pilih</option>
                                <option @if ($PembelianSebutTender->pst_status == 'Diluluskan') selected @endif value="Diluluskan">Diluluskan</option>
                                <option @if ($PembelianSebutTender->pst_status == 'Tidak Diluluskan') selected @endif value="Tidak Diluluskan">Tidak Diluluskan</option>
                            </select>
                        </div>
                    </div>
                {{-- pst_created_by
                pst_created_date
                pst_updated_by
                pst_updated_date --}}
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis Pemotongan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_jenis_potongan" value="{{$PembelianSebutTender->pst_jenis_potongan}}">
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Deskripsi Pemotongan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_potongan_description" value="{{$PembelianSebutTender->pst_potongan_description}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Amaun Pemotongan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_amaun_potongan" value="{{$PembelianSebutTender->pst_amaun_potongan}}">
                        </div>
                    </div>

                    <br><button type="submit" class="btn-primary" style="float: right" onclick()>Hantar</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@stop

