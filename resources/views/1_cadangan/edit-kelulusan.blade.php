@extends('layouts.base')

@section('content')



<div class="header">
    <h1 class="header-title">
      Sebutharga Tender
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kelulusan Cadangan </a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body">

                <div id="smartwizard-default-primary" class="wizard wizard-primary mb-4">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="#sebutharga">1<br /><small>Maklumat SebutHarga</small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#spesifikasi">2<br /><small>Maklumat Spesifikasi</small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#cadangan">3<br /><small>Maklumat Cadangan</small></a></li>
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
                                        <input type="number" class="form-control" name="pst_total_harga_indikatif_jangkaan" value="{{$pst->pst_total_harga_indikatif_jangkaan}}" readonly>
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
                                    <label class="col-form-label col-sm-6">Zon</label>
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
                                        <input type="text" class="form-control" name="pst_pelulus" value="{{$pelulus->user_name}}" readonly>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Catatan Pelulus </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <textarea class="form-control" name="pst_catatan_pelulus" rows="4" cols="3" readonly>{{$pst->pst_catatan_pelulus}}</textarea>
                                    </div>
                                </div>

                </div>

                <div id="spesifikasi" class="tab-pane" role="tabpanel">

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tajuk Spesifikasi </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text"  class="form-control" name="spesifikasi_tajuk" value="{{$spesifikasi->spesifikasi_tajuk}}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jenis Barang </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_jenis_barang" value="{{$spesifikasi->spesifikasi_jenis_barang}}" readonly>
                        </div>
                    </div>

                     <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Butiran Item </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="spesifikasi_description" value="{{$spesifikasi->spesifikasi_description}}" readonly>
                            </div>
                     </div>

                     <div class="row">
                         <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Unit Ukuran</label>
                         </div>
                         <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_unit_ukuran" value="{{$spesifikasi->spesifikasi_unit_ukuran}}" readonly>
                         </div>
                     </div>

                     <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis Harga </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="spesifikasi_jenis_harga" value="{{$spesifikasi->spesifikasi_jenis_harga}}" readonly>
                        </div>
                     </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Harga Indikatif</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_jumlah_harga_indikatif" value="{{$spesifikasi->spesifikasi_jumlah_harga_indikatif}}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Harga</label>
                        </div>
                        <div class="mb-3 col-md-6">
                             <input type="number" class="form-control" name="spesifikasi_jumlah_harga" value="{{$spesifikasi->spesifikasi_jumlah_harga}}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Harga</label>
                        </div>
                        <div class="mb-3 col-md-6">
                             <input type="number" class="form-control" name="spesifikasi_jumlah_harga" value="{{$spesifikasi->spesifikasi_jumlah_harga}}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Alamat Penghantaran</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <textarea class="form-control" name="spesifikasi_alamat_penghantaran" rows="3" cols="4" readonly>{{$spesifikasi->spesifikasi_alamat_penghantaran}}</textarea>
                        </div>
                    </div>


                    <fieldset>
                        <legend>Spesifikasi Teknikal</legend>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Skema Teknikal </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <div class="mb-2">
                                <span class="align-middle"><a href="/storage/{{$spesifikasi->spesifikasi_skema_teknikal}}" target="_blank" download> <i class="align-middle me-2" data-feather="download-cloud"></i>Muat Turun Fail</a></span>
                            </div>
                        </div>
                            {{-- <a href="/storage/{{$spesifikasi->spesifikasi_skema_kewangan}}" target="_blank" download>Muat Turun Fail</a> --}}
                   </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Skor Lulus Teknikal</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_skor_lulus_teknikal" value="{{$spesifikasi->spesifikasi_skor_lulus_teknikal}}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jumlah Skor Teknikal</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_jumlah_skor_teknikal" value="{{$spesifikasi->spesifikasi_jumlah_skor_teknikal}}" readonly>
                        </div>
                    </div>

                    </fieldset>
                    <br><br>


                    <fieldset>
                        <legend>Spesifikasi Kewangan</legend>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                              <label class="col-form-label col-sm-6">Skema Kewangan</label>
                            </div>


                            <div class="mb-3 col-md-6">
                                <div class="mb-2">
                                    <span class="align-middle"><a href="/storage/{{$spesifikasi->spesifikasi_skema_kewangan}}" target="_blank" download> <i class="align-middle me-2" data-feather="download-cloud"></i>Muat Turun Fail</a></span>
                                 </div>
                            </div>
                                {{-- <a href="/storage/{{$spesifikasi->spesifikasi_skema_kewangan}}" target="_blank" download>Muat Turun Fail</a> --}}
                       </div>

                       <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6">Skor Lulus Kewangan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="spesifikasi_skor_lulus_kewangan" value="{{$spesifikasi->spesifikasi_skor_lulus_kewangan}}" readonly>
                            </div>
                       </div>

                       <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6">Jumlah Skor Kewangan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="spesifikasi_jumlah_skor_kewangan" value="{{$spesifikasi->spesifikasi_jumlah_skor_kewangan}}" readonly>
                            </div>
                        </div>

                    </fieldset>
                    <br><br>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Skor Maksima</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_skor_maksima" value="{{$spesifikasi->spesifikasi_skor_maksima}}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Skor Lulus Keseluruhan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="spesifikasi_skor_lulus_keseluruhan" value="{{$spesifikasi->spesifikasi_skor_lulus_keseluruhan}}" readonly>
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Catatan Spesifikasi Item </label>
                        </div>
                        <div class="mb-3 col-md-6">
                             <textarea rows="3" cols="4" class="form-control" name="spesifikasi_catatan" readonly>{{$spesifikasi->spesifikasi_catatan}}</textarea>
                        </div>
                    </div>
            </div>

            <div id="cadangan" class="tab-pane" role="tabpanel">

                <form method="POST" action="/Cadangan/{{$cadangan->id}}">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="spesifikasi_id" value="{{$cadangan->spesifikasi_id}}">

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Cadangan Tarikh Mesyuarat </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="date" class="form-control" name="cadangan_mesyuarat_date" value="{{$cadangan->cadangan_mesyuarat_date}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Cadangan Lokasi Mesyuarat</label>
                        </div>
                        <div class="mb-3 col-md-6">
                             <input type="text" class="form-control" name="cadangan_mesyuarat_place" value="{{$cadangan->cadangan_mesyuarat_place}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Kehadiran</label>
                        </div>
                        <div class="mb-3 col-md-6">
                             <input type="text" class="form-control" name="cadangan_kehadiran" value="{{$cadangan->cadangan_kehadiran}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Bilangan Pembekal yang Mendapat Kelulusan Teknikal </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="cadangan_bil_pembekal_lulus_teknikal" value="{{$cadangan->cadangan_bil_pembekal_lulus_teknikal}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Bilangan Pembekal yang Mendapat Kelulus Kewangan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                             <input type="number" class="form-control" name="cadangan_bil_pembekal_lulus_kewangan" value="{{$cadangan->cadangan_bil_pembekal_lulus_kewangan}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Cadangan Ulasan Penilaian </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <textarea class="form-control" name="cadangan_ulasan_penilaian" rows="4" cols="3">{{$cadangan->cadangan_ulasan_penilaian}}</textarea>
                        </div>
                    </div>


                        <button type="submit" class="btn btn-primary"  value="luluskan" name="status_cadangan" >Luluskan</button>
                        <button class="btn btn-success" onclick="window.location.href='/Cadangan'">Kembali</a></button>



                    </form>
            </div>
                </div>
                </div>
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
			// taklimat_time
			$('#taklimat_time-minimum').taklimat_time();
			$('#taklimat_time-view-mode').taklimat_time({
				viewMode: 'years'
			});
			$('#taklimat_time-time').taklimat_time({
				format: 'LT'
			});
			$('#taklimat_time-date').taklimat_time({
				format: 'L'
			});
		});
	</script>

@stop

