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

            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body">

                <form method="POST" action="/PembelianSebutTender/{{$PembelianSebutTender->id}}" >
                    @csrf
                    @method('PUT')


                <div id="smartwizard-default-primary" class="wizard wizard-primary mb-4">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="#sebutharga">Maklumat SebutHarga<br /><small></small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#lawatantapak">Lawatan Tapak<br /><small></small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#pemotongan">Maklumat Pemotongan<br /><small></small></a></li>
                    </ul>

                <div class="tab-content">
                    <div id="sebutharga" class="tab-pane" role="tabpanel">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Panel Item </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_item_panel" value="{{$PembelianSebutTender->pst_item_panel}}" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Sistem Panel </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_sistem_panel" value="{{$PembelianSebutTender->pst_sistem_panel}}" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">No1PP </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_no1pp" value="{{$PembelianSebutTender->pst_no1pp}}" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Tajuk Pembelian SebutHarga & Tender </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_tajuk" value="{{$PembelianSebutTender->pst_tajuk}}" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">No Rujukan Fail</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_no_rujukan_fail" value="{{$PembelianSebutTender->pst_no_rujukan_fail}}" readonly>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Jumlah Harga Jangkaan Indikatif </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="number" class="form-control" name="pst_jumlah_harga_indikatif_jangkaan" value="{{$PembelianSebutTender->pst_jumlah_harga_indikatif_jangkaan}}" readonly>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6">Kaedah Perolehan</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_kaedah_perolehan" value="{{$PembelianSebutTender->pst_kaedah_perolehan}}" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Jenis PST </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_jenis" value="{{$PembelianSebutTender->pst_jenis}}" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6"> Terbuka Kepada</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_terbuka_kepada" value="{{$PembelianSebutTender->pst_terbuka_kepada}}" readonly>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Zon </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <input type="text" class="form-control" name="pst_zon_lokasi" value="{{$PembelianSebutTender->pst_zon_lokasi}}" readonly>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6"> Kategori Jenis Perolehan </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type=text name=pst_kategori_jenis_perolehan class="form-control" value="{{$PembelianSebutTender->pst_kategori_jenis_perolehan}}" readonly>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Jenis Kontrak</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_jenis_kontrak" value="{{$PembelianSebutTender->pst_jenis_kontrak}}" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Jenis Pemenuhan</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_jenis_pemenuhan" value="{{$PembelianSebutTender->pst_jenis_pemenuhan}}" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label class="col-form-label col-sm-6">Tempoh Kontrak</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pst_tempoh_kontrak" value="{{$PembelianSebutTender->pst_tempoh_kontrak}}" readonly>
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
                                        <input type="number" class="form-control" name="pst_jumlah_pembekal_layak" value="{{$PembelianSebutTender->pst_jumlah_pembekal_layak}}" readonly>
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
                                        {{-- <input type="text" class="form-control" name="pst_katalog_kumpulan" value="{{$PembelianSebutTender->pst_pelulus}}" readonly> --}}
                                        <select  class="form-control" name="pst_pelulus" disabled>
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
                                        <input type="text" class="form-control" name="pst_catatan_pelulus" value="{{$PembelianSebutTender->pst_catatan_pelulus}}" readonly>
                                    </div>
                                </div>

		</div>
        <div id="lawatantapak" class="tab-pane" role="tabpanel">

            <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Perihal Taklimat</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_perihal_taklimat" value="{{$PembelianSebutTender->pst_perihal_taklimat}}" >
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Tarikh Taklimat</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="date" class="form-control" name="pst_taklimat_date" value="{{$PembelianSebutTender->pst_taklimat_date}}" >
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Alamat Taklimat</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_taklimat_alamat" value="{{$PembelianSebutTender->pst_taklimat_alamat}}" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Link </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_link" value="{{$PembelianSebutTender->pst_link}}" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Penyelaras</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name="pst_pelulus"  class="form-select" >
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
                            <input type="text" class="form-control" name="pst_kehadiran_max" value="{{$PembelianSebutTender->pst_kehadiran_max}}" >
                        </div>
                    </div>

        </div>
        <div id="pemotongan" class="tab-pane" role="tabpanel">

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Jenis Pemotongan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_jenis_potongan" value="{{$PembelianSebutTender->pst_jenis_potongan}}" >
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Deskripsi Pemotongan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_potongan_description" value="{{$PembelianSebutTender->pst_potongan_description}}" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Amaun Pemotongan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="pst_amaun_potongan" value="{{$PembelianSebutTender->pst_amaun_potongan}}" >
                        </div>
                    </div>

                    <br>

                    <div align=right>
                        <button type="submit" class="btn btn-primary"> Hantar</button>
                    </div>

		</div>

	</div>
</div>







                    {{-- <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Status </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select class="form-select" name="pst_status" value="{{$PembelianSebutTender->pst_status}}" readonly>
                                <option hidden value="">Sila Pilih</option>
                                <option @if ($PembelianSebutTender->pst_status == 'Diluluskan') selected @endif value="Diluluskan">Diluluskan</option>
                                <option @if ($PembelianSebutTender->pst_status == 'Tidak Diluluskan') selected @endif value="Tidak Diluluskan">Tidak Diluluskan</option>
                            </select>
                        </div>
                    </div> --}}
                {{-- pst_created_by
                pst_created_date
                pst_updated_by
                pst_updated_date --}}

                </form>
                {{-- <a href="/Jawatankuasa/pst/{{$PembelianSebutTender->id}}/edit" class="btn btn-primary">Seterusnya</a> --}}

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

