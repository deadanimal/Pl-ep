@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Cipta Sebutharga / Tender</a></li>
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
                        <form method="POST" action="/PembelianSebutTender">
                        @csrf

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Panel Item</label>
                            </div>
                            <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_item_panel">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Sistem Panel</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="pst_sistem_panel">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-10"> No Perkeliling Perbendaharaan (No1PP)</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="pst_no1pp">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Tajuk Pembelian SebutHarga & Tender</label>
                            </div> 
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="pst_tajuk">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> No Rujukan Fail </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                 <input type="text" class="form-control" name="pst_no_rujukan_fail">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> Jumlah Harga Jangkaan Indikatif</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="pst_total_harga_indikatif_jangkaan">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">  Kaedah Perolehan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="pst_kaedah_perolehan">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">  Jenis PST </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="pst_jenis">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> Terbuka Kepada </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="pst_terbuka_kepada">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> Zon </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="pst_zon_lokasi">
                            </div>
                        </div>

                         <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Kategori Jenis Perolehan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type=text name=pst_kategori_jenis_perolehan class="form-control">
                            </div>
                         </div>
                        


                         <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jenis kontrak </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="pst_jenis_kontrak">
                            </div>
                         </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> Jenis Pemenuhan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="pst_jenis_pemenuhan">
                            </div>
                        </div>

                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Tempoh Kontrak </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="pst_tempoh_kontrak">
                            </div>
                        </div>

                
                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Jumlah Pembekal Yang Layak </label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="pst_jumlah_pembekal_layak">
                    </div>
                </div>


                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6"> Nama Pelulus</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        {{-- <input type="text" class="form-control" name="pst_pelulus"> --}}
                        <select name="pst_pelulus" class="form-select" required>
                                <option hidden value="">Sila Pilih</option>
                                @foreach ($user as $pelulus)
                                <option value={{$pelulus->id}}>{{$pelulus->user_name}}</option>
                                @endforeach
                            </select>

                    </div>
                </div>

                

                <div align=right>
                    <button class="btn btn-success" type="submit" name="status_pst" value="draf"> Simpan Sebagai Draf</button> 
                    <button  class="btn btn-primary" type="submit" name="status_pst" value="hantar">Hantar</button> 
                </div>
                    
                </form>
                </div>
            </div>
        </div>
</div>

        @stop
