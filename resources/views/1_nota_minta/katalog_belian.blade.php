@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
   Katalog
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Item</a></li>
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
                <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Item</th>
                            <th>Tarikh Mula</th>
                            <th>Tarikh Tamat</th>
                            <th>Nama Pembekal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ItemInfo as $ItemInfo)
                            <tr>
                                <td>{{$ItemInfo->item_name}}</td>
                                <td>{{date('d-m-Y', strtotime($ItemInfo->start_date))}}</td>
                                <td>{{date('d-m-Y', strtotime($ItemInfo->end_date))}}</td>
                                <td>{{$ItemInfo->pembekal_id}}</td>
                                <td>nfdf</td>
                                {{-- <td class="table-action">
                                    <a href='/ItemInfo/addcart/{{$ItemInfo->id}}'><i class="align-middle fas fa-fw fa-shopping-cart" data-bs-placement="left"
										title="Tambah ke Kart"></i></a>
                                    <a href='/listkatalog/{{$ItemInfo->katalog_id}}'><i class="align-middle fas fa-fw fa-info"  data-bs-placement="left"
                                    title="Senarai Katalog"></i></a>
                                        
                                   <i class="align-middle fas fa-fw fa-filter"  data-bs-placement="left"
										title="Banding item" onclick="compareItem()"></i></a></button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#defaultModalPrimary">Pertanyaan Item</button>
                                    <div class="modal fade" id="defaultModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Pertanyaan Item</h5>
													<button  class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												{{-- <div class="modal-body m-3">
													<p class="mb-0"></p>
												</div> 
												<div class="modal-body m-3">
                                                    <form method="POST" action="/PertanyaanItem">
                                                    @csrf
                                                   
                                                    <div class="mb-3 row">
                                                        <label class="col-form-label col-sm-6 text-sm-end">Kuantiti Item yang Diterima</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" class="form-control" name="tanya_kuanititi">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-3 row">
                                                        <label class="col-form-label col-sm-6 text-sm-end">Tempoh Penghantaran</label>
                                                        <div class="col-sm-6"><input type="text" class="form-control" name="tanya_tempoh_penghantaran">
                                                        </div>
                                                    </div>
                                                    
                                                     <div class="mb-3 row">
                                                        <label class="col-form-label col-sm-6 text-sm-end"> Jenis Perolehan</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="tanya_jenis_perolehan">
                                                        </div>
                                                     </div>
                                                         
                                                    
                                                    <div class="mb-3 row">
                                                        <label class="col-form-label col-sm-6 text-sm-end">Catatan </label>
                                                        <div class="col-sm-6">
                                                             <input type="text" class="form-control" name="tanya_catatan">
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="mb-3 row">
                                                        <label class="col-form-label col-sm-6 text-sm-end">Ketersediaan Stok</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="tanya_ketersediaan_stok">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-3 row">
                                                        <label class="col-form-label col-sm-6 text-sm-end">Harga Baru </label>
                                                        <div class="col-sm-6">
                                                            <input type="number"  min="1" step="any" class="form-control" name="tanya_harga_baru">
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="mb-3 row">
                                                        <label class="col-form-label col-sm-6 text-sm-end">Status</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" name="tanya_status">
                                                        </div>
                                                    </div>
                                                
                                                     {{-- <button type="submit">Hantar</button> 
                                                    <br> <br>
													<button type="submit" class="btn btn-primary">Hantar</button>
                                                    
                                                
                                                </form>
                                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button> 
												</div>
											</div>
										</div>
						 			</div>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="/ItemKart/{{$notaMinta->id}}">Pergi Ke Bakul Item </a>
            <a href="/PenyediaanSpesifikasi/create">Terus ke Penyediaan Spesifikasi Item </a>
        </div>
    </div>
</div>

 


@stop
