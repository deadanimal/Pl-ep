@extends('layouts.base')

@section('content')
    


<div class="header">
    <h1 class="header-title">
      Jadual Pemenuhan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Cipta Jadual Pemenuhan</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body">

                <form method="POST" action="/JadualPemenuhan">
                @csrf
                
                <input type="hidden" name="spesifikasi_id" value="{{$spesifikasi->id}}">

                <div id="smartwizard-default-primary" class="wizard wizard-primary mb-4">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="#sebutharga">1<br /><small>Maklumat SebutHarga</small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#spesifikasi">2<br /><small>Maklumat Spesifikasi</small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#jadualpemenuhan">3<br /><small>Maklumat Jadual Pemenuhan</small></a></li>
                    </ul>
                
                <div class="tab-content">
                    <div id="sebutharga" class="tab-pane" role="tabpanel">
                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Panel Item </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_item_panel" value="{{$pst->pst_item_panel}}" readonly>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Sistem Panel </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_sistem_panel" value="{{$pst->pst_sistem_panel}}" readonly>
                                    </div>
                                </div>
                                            
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">No1PP </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_no1pp" value="{{$pst->pst_no1pp}}" readonly>
                                    </div>
                                </div>
                                
                                {{-- <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Kumpulan Katalog</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <select class="form-select" name="pst_katalog_kumpulan" disabled>
                                            @foreach ($katalog as $katalog)
                                                <option @if ($pst->pst_katalog_kumpulan == $katalog->id) selected @endif value={{$katalog->id}}>{{$katalog->katalog_kumpulan}}</option>    
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Tajuk Pembelian SebutHarga & Tender </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_tajuk" value="{{$pst->pst_tajuk}}" readonly>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">No Rujukan Fail</label>
                                    </div>
                                    <div class="mb-3 col-md-6">                      
                                        <input type="text" class="form-control" name="pst_no_rujukan_fail" value="{{$pst->pst_no_rujukan_fail}}" readonly>
                                    </div>
                                </div>
                
                                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Jumlah Harga Jangkaan Indikatif </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="number" class="form-control" name="pst_jumlah_harga_indikatif_jangkaan" value="{{$pst->pst_jumlah_harga_indikatif_jangkaan}}" readonly>
                                    </div>
                                </div>
                
                                    
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6">Kaedah Perolehan</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_kaedah_perolehan" value="{{$pst->pst_kaedah_perolehan}}" readonly>
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Jenis PST </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_jenis" value="{{$pst->pst_jenis}}" readonly>
                                    </div>
                                </div>
                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6"> Terbuka Kepada</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_terbuka_kepada" value="{{$pst->pst_terbuka_kepada}}" readonly>
                                    </div>
                                </div>
                
                                
                                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Zon </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <input type="text" class="form-control" name="pst_zon_lokasi" value="{{$pst->pst_zon_lokasi}}" readonly>
                                    </div>
                                </div>
                                
                                                        
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6"> Kategori Jenis Perolehan </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type=text name=pst_kategori_jenis_perolehan class="form-control" value="{{$pst->pst_kategori_jenis_perolehan}}" readonly>
                                    </div>
                                </div>
                
                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Kategori Perolehan</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_kategori_perolehan" value="{{$pst->pst_kategori_perolehan}}" readonly readonly>
                                    </div>
                                </div>
                
                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Jenis Kontrak</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_jenis_kontrak" value="{{$pst->pst_jenis_kontrak}}" readonly>
                                    </div>
                                </div>
                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Jenis Pemenuhan</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_jenis_pemenuhan" value="{{$pst->pst_jenis_pemenuhan}}" readonly> 
                                    </div>
                                </div>
                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Tempoh Kontrak</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_tempoh_kontrak" value="{{$pst->pst_tempoh_kontrak}}" readonly>
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
                                        <input type="number" class="form-control" name="pst_jumlah_pembekal_layak" value="{{$pst->pst_jumlah_pembekal_layak}}" readonly>
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
                                        {{-- <select  class="form-control" name="pst_pelulus" disabled> --}}
 
                                        <input type="text" class="form-control" name="pst_pelulus" value="{{$pst->user_name}}" readonly>

                                            {{-- <option @if ($pst->pst_pelulus == $user->id) selected @endif value={{$user->id}}>{{$user->user_name}}</option>     --}}
                              
                                        </select>
                
                                    </div>
                                </div> 
                
                
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Catatan Pelulus </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_catatan_pelulus" value="{{$pst->pst_catatan_pelulus}}" readonly>
                                    </div>
                                </div>
                
                </div>
                <div id="spesifikasi" class="tab-pane" role="tabpanel">
                
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tajuk Spesifikasi </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_tajuk" value="{{$spesifikasi->spesifikasi_tajuk}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis Barang</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_jenis_barang" value="{{$spesifikasi->spesifikasi_jenis_barang}}">
                        </div>
                    </div>
                    
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Butiran Item</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_description" value="{{$spesifikasi->spesifikasi_description}}">
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Unit Ukuran </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_unit_ukuran" value="{{$spesifikasi->spesifikasi_unit_ukuran}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis Harga</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_jenis_harga" value="{{$spesifikasi->spesifikasi_jenis_harga}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Harga Indikatif</label>
                        </div>
                        <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="spesifikasi_jumlah_harga_indikatif" value="{{$spesifikasi->spesifikasi_jumlah_harga_indikatif}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Harga</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_jumlah_harga" value="{{$spesifikasi->spesifikasi_jumlah_harga}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Alamat Penghantaran </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_alamat_penghantaran" value="{{$spesifikasi->spesifikasi_jumlah_harga}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Catatan Spesifikasi Item</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <textarea rows="4" cols="50" class="form-control" name="spesifikasi_catatan">{{$spesifikasi->spesifikasi_catatan}}</textarea>
                        </div>
                    </div>
                    
                
                   
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Skor Maksima </label>
                        </div>
                
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_skor_maksima" value="{{$spesifikasi->spesifikasi_skor_maksima}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Skor Teknikal</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_jumlah_skor_teknikal" value="{{$spesifikasi->spesifikasi_jumlah_skor_teknikal}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Skor Lulus Teknikal</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_skor_lulus_teknikal" value="{{$spesifikasi->spesifikasi_skor_lulus_teknikal}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6">Skema Teknikal</label>
                        </div>
                        <div class="mb-3 col-md-4">
                            <input type="file" class="form-control" name="spesifikasi_skema_teknikal" value="{{$spesifikasi->spesifikasi_skema_teknikal}}">
                        </div>
                        <div class="mb-3 col-md-2">
                            <a href="/storage/{{$spesifikasi->spesifikasi_skema_teknikal}}" target="_blank" download>Muat Turun Fail</a> 
                        </div>
                      
                    </div>
                    
                   
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Skor Kewangan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_jumlah_skor_kewangan" value="{{$spesifikasi->spesifikasi_jumlah_skor_kewangan}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Skor Lulus Kewangan </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_skor_lulus_kewangan" value="{{$spesifikasi->spesifikasi_skor_lulus_kewangan}}">
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Skema Kewangan</label>
                        </div>
                
                        <div class="mb-3 col-md-4">
                            <input type="file" class="form-control"  name="spesifikasi_skema_kewangan" value="{{$spesifikasi->spesifikasi_skema_kewangan}}">
                        </div>
                        <div class="mb-3 col-md-2">
                            <a href="/storage/{{$spesifikasi->spesifikasi_skema_kewangan}}" target="_blank" download>Muat Turun Fail</a> 
                        </div>
                    </div>
                
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Skor Lulus Keseluruhan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_skor_lulus_keseluruhan" value="{{$spesifikasi->spesifikasi_skor_lulus_keseluruhan}}">
                        </div>
                    </div>
                
                </div>
                <div id="jadualpemenuhan" class="tab-pane" role="tabpanel">
                
                        
                        <input type="hidden" name="spesifikasi_id" value="{{$spesifikasi->id}}">
                
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jenis Pemenuhan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text"  class="form-control" name="jadual_jenis_pemenuhan">
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Kekerapan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="jadual_kekerapan">
                            </div>
                        </div>
                
                
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Bilangan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="jadual_bil">
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Bulan Mula </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                    <input type="month" class="form-control" name="jadual_bulan_mula">
                            </div>
                        </div>
                
                        {{-- <br>Tahun Mula <input type="" --}}
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Bulan Akhir </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="month" class="form-control" name="jadual_bulan_akhir">
                            </div>
                        </div>
                
                
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jumlah Bulan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="jadual_jumlah_bulan">
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jenis Jadual</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="jadual_jenis">
                            </div>
                        </div>


                <div align="right"> 
                    <button type="submit" class="btn btn-primary">Hantar</button>
                </div> 
                </div>
                </div>
                </form>
            </div>
    </div>
</div>


<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			$("#smartwizard-default-primary").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-default-success").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-default-danger").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-default-warning").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-primary").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-success").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-danger").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-warning").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			// Validation
			var $validationForm = $("#smartwizard-validation");
			$validationForm.validate({
				errorPlacement: function errorPlacement(error, element) {
					$(element).parents(".error-placeholder").append(
						error.addClass("invalid-feedback small d-block")
					)
				},
				highlight: function(element) {
					$(element).addClass("is-invalid");
				},
				unhighlight: function(element) {
					$(element).removeClass("is-invalid");
				},
				rules: {
					"wizard-confirm": {
						equalTo: "input[name=\"wizard-password\"]"
					}
				}
			});
			$validationForm
				.smartWizard({
					autoAdjustHeight: false,
					backButtonSupport: false,
					useURLhash: false,
					showStepURLhash: false,
					toolbarSettings: {
						toolbarExtraButtons: [$("<button class=\"btn btn-submit btn-primary\" type=\"button\">Finish</button>")]
					}
				})
				.on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
					if (stepDirection === 1) {
						return $validationForm.valid();
					}
					return true;
				});
			$validationForm.find(".btn-submit").on("click", function() {
				if (!$validationForm.valid()) {
					return;
				}
				alert("Great! The form is valid and ready to submit.");
				return false;
			});
		});
	</script>
           
@stop

