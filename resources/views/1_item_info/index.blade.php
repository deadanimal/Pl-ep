@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Senarai Item</h3>
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Item</th>
                            <th>Tarikh Mula</th>
                            <th>Tarikh Tamat</th>
                            <th></th>
                            <th>Tindakan</th>

                        
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($ItemInfo as $ItemInfo)
                            <tr>
                                <td>{{$ItemInfo->item_name}}</td>
                                <td>{{$ItemInfo->start_date}}</td>
                                <td>{{$ItemInfo->end_date}}</td>
                                <td class="table-action">
                                    <a href='/listkatalog/{{$ItemInfo->katalog_id}}'><i class="align-middle fas fa-fw fa-info"  data-bs-placement="left"
										title="Senarai Katalog"></i></a>
                                    <a href='/ItemInfo/addcart/{{$ItemInfo->id}}'><i class="align-middle fas fa-fw fa-shopping-cart" data-bs-placement="left"
										title="Tambah ke Kart"></i></a>
                                </td>

                                <td> <button onclick="compareItem()">Bandingkan Item</button>
                                <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#defaultModalPrimary">Pertanyaan Item</button>
                                    <div class="modal fade" id="defaultModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Pertanyaan Item</h5>
													<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												{{-- <div class="modal-body m-3">
													<p class="mb-0"></p>
												</div> --}}
												<div class="modal-body m-3">
                                                    <form method="POST" action="/PertanyaanItem">
                                                    @csrf
                                                
                                                    <br> Nama Pembekal <select class="form-control" name="pembekal_id">
                                                        <option hidden>Sila Pilih</option>
                                                        @foreach ($pembekal as $pembekal)
                                                        <option value="{{$pembekal->id}}">{{$pembekal->pembekal_company_name}}</option>
                
                                                        @endforeach
                                                        </select>

                                                    {{-- <select name=pembekal_id class="form-control">
                                                        @foreach ($pembekal as $pembekal)
                                                        <option value="pembekal_id">{{$pembekal->pembekal_company_name}}</option>
                                                        @endforeach
                                                    </select> --}}
                                                
                                                    Kuantiti Item yang Diterima <input type="number" class="form-control" name="tanya_kuanititi">
                                                    Tempoh Penghantaran <input type="text" class="form-control" name="tanya_tempoh_penghantaran">
                                                    Jenis Perolehan <input type="text" class="form-control" name="tanya_jenis_perolehan">
                                                    Catatan <input type="text" class="form-control" name="tanya_catatan">
                                                    Ketersediaan Stok <input type="text" class="form-control" name="tanya_ketersediaan_stok">
                                                    
                                                    Harga Baru <input type="number"  min="1" step="any" class="form-control" name="tanya_harga_baru">
                                                    Status <input type="text" class="form-control" name="tanya_status">
                                                
                                                     {{-- <button type="submit">Hantar</button> --}}
                                                    <br> <br>
													<button type="submit" class="btn btn-primary">Hantar</button>
                                                
                                                </form>
                                                

													{{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button> --}}
												</div>
											</div>
										</div>
									</div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="/ItemKart">Pergi Ke Bakul Item </a>
            <a href="/PenyediaanSpesifikasi/create">Terus ke Penyediaan Spesifikasi Item </a>
        </div>
    </div>
</div>

<script>
    let comparison = []
    function compareItem(id) {
        this.comparison.append(id)
    }
    function makeComparison() {
        window.location.href = 'https://url.com/comparison/' + comparison[0] + '/' + comparison[1] + '/' comparison[2];
    }
</script>

 


@stop
