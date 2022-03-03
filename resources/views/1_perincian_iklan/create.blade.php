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

                <form method="POST" action="/PerincianPengiklanan">
                @csrf
                
                <input type="hidden" name="pst_id" value="{{$pst->id}}">

                <div id="smartwizard-default-primary" class="wizard wizard-primary mb-4">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="#sebutharga">1<br /><small>Maklumat SebutHarga</small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#pengiklanan">2<br /><small>Maklumat Pengiklanan</small></a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#jadualpemenuhan">3<br /><small>Maklumat Jadual Pemenuhan</small></a></li> --}}
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
                
                <div id="pengiklanan" class="tab-pane" role="tabpanel">
                
                        
                
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Tarikh Pengiklanan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="date"  class="form-control" name="iklan_date">
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Tempoh Pengiklanan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                {{-- <input type="text" class="form-control" name="jadual_kekerapan"> --}}
                                <input class="form-control" type="text" name="iklan_tempoh" value="01/01/2022 - 01/15/2022" />
                            </div>
                        </div>
                
                
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Tarikh Taklimat Sebutharga</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="date" class="form-control" name="iklan_taklimat_date">
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Waktu Taklimat Sebutharga</label>
                            </div>
                            <div class="input-group date" id="datetimepicker-time" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker-time" name=iklan_taklimat_time/>
                                <div class="input-group-text" data-target="#datetimepicker-time" data-toggle="datetimepicker"><i
                                        class="fa fa-calendar"></i></div>
                        </div>
                
                        {{-- <br>Tahun Mula <input type="" --}}
  


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
    

    <script>
		document.addEventListener("DOMContentLoaded", function() {
			// Select2
			$(".select2").each(function() {
				$(this)
					.wrap("<div class=\"position-relative\"></div>")
					.select2({
						placeholder: "Select value",
						dropdownParent: $(this).parent()
					});
			})
			// Daterangepicker
			$("input[name=\"iklan_tempoh\"]").daterangepicker({
				opens: "left"
			});
			$("input[name=\"datetimes\"]").daterangepicker({
				timePicker: true,
				opens: "left",
				startDate: moment().startOf("hour"),
				endDate: moment().startOf("hour").add(32, "hour"),
				locale: {
					format: "M/DD hh:mm A"
				}
			});
			$("input[name=\"datesingle\"]").daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			});
			var start = moment().subtract(29, "days");
			var end = moment();

			function cb(start, end) {
				$("#reportrange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
			}
			$("#reportrange").daterangepicker({
				startDate: start,
				endDate: end,
				ranges: {
					"Today": [moment(), moment()],
					"Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
					"Last 7 Days": [moment().subtract(6, "days"), moment()],
					"Last 30 Days": [moment().subtract(29, "days"), moment()],
					"This Month": [moment().startOf("month"), moment().endOf("month")],
					"Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
				}
			}, cb);
			cb(start, end);
			// Datetimepicker
			$('#datetimepicker-minimum').datetimepicker();
			$('#datetimepicker-view-mode').datetimepicker({
				viewMode: 'years'
			});
			$('#datetimepicker-time').datetimepicker({
				format: 'LT'
			});
			$('#datetimepicker-date').datetimepicker({
				format: 'L'
			});
		});
	</script>
    
@stop

