@extends('layouts.base')
@section('content')
<div class="header">
    <h1 class="header-title">
        Pembekal
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"> Maklumat Syarikat </a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div id="smartwizard-default-primary" class="wizard wizard-primary mb-4">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#asas">1<br /><small>Maklumat Asas</small></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#bekalan">2<br /><small>Maklumat Bekalan</small></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#perkhidmatan">3<br /><small>Maklumat Perkhidmatan</small></a>
                </li>

            </ul>

            <div class="tab-content">
                <div id="asas" class="tab-pane" role="tabpanel">
                    <div class="row">
                    <div class="col-md-6">
                        <label class="col-form-label col-sm-6">Jenis Akaun  </label>
                    </div>
                    <div class="col-md-6">
                       <label> {{$pembekal->pembekal_jenis_akaun}}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="col-form-label col-sm-6">Nama Syarikat </label>
                    </div>
                    <div class="mb-3 col-md-6">
                       <label> {{$pembekal->pembekal_company_name}}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="col-form-label col-sm-6">No Pendaftaran SSM</label>
                    </div>
                    <div class="mb-3 col-md-6">
                       <label> {{$pembekal->pembekal_no_pendaftaran}}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="col-form-label col-sm-6">Salinan Sijil SSM </label>
                    </div>
                    <div class="mb-3 col-md-6">
                       <label> <a href="/storage/{{$pembekal->pembekal_sijil_ssm}}" target="_blank" download>Salinan Sijil SSM</a></label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="col-form-label col-sm-6">Nama Pemilik Syarikat </label>
                    </div>
                    <div class="mb-3 col-md-6">
                       <label> {{$pembekal->pembekal_pemilik}}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="col-form-label col-sm-6">Jenis Syarikat</label>
                    </div>
                    <div class="mb-3 col-md-6">
                       <label> {{$pembekal->pembekal_jenis_company}}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="col-form-label col-sm-6">Lesen Perniagaan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                       <label> <a href="/storage/{{$pembekal->pembekal_lesen_perniagaan}}" target="_blank" download>Lesen Perniagaan</a></label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="col-form-label col-sm-6">Alamat Syarikat</label>
                    </div>
                    <div class="mb-3 col-md-6">
                       <label> {{$pembekal->pembekal_company_address}}</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="col-form-label col-sm-6">Nama Pemilik Syarikat </label>
                    </div>
                    <div class="mb-3 col-md-6">
                       <label> {{$pembekal->pembekal_pemilik}}</label>
                    </div>
                </div>
            </div>


                <div id="bekalan" class="tab-pane" role="tabpanel">

                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-form-label col-sm-6">Salinan Sijil MOF</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            @if ($pembekal->pembekal_sijil_mof!=null)
                                <label> <a href="/storage/{{$pembekal->pembekal_sijil_mof}}" target="_blank" download>Salinan Sijil MOF</a></label>
                            @else
                                 <label>Tiada</label>
                            @endif

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-form-label col-sm-6">Sijil Perakuan Bumiputera</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            @if ($pembekal->pembekal_sijil_perakuan_bumiputera!=null)
                            <label> <a href="/storage/{{$pembekal->pembekal_sijil_perakuan_bumiputera}}" target="_blank" download>Sijil Perakuan Bumiputera</a></label>
                        @else
                             <label>Tiada</label>
                        @endif

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-form-label col-sm-6">Sijil Pendaftaran Syarikat</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            @if ($pembekal->pembekal_sijil_pendaftaran_syarikat!=null)
                            <label> <a href="/storage/{{$pembekal->pembekal_sijil_pendaftaran_syarikat}}" target="_blank" download>Sijil Pendaftaran Syarikat</a></label>
                        @else
                             <label>Tiada</label>
                        @endif


                        </div>
                    </div>
                </div>


                <div id="perkhidmatan" class="tab-pane" role="tabpanel">

                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-form-label col-sm-6">No Pendaftaran PPK</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            @if ($pembekal->pembekal_no_pendaftaran_ppk!=null)
                            <label>{{$pembekal->pembekal_no_pendaftaran_ppk}}</label>
                        @else
                             <label>Tiada</label>
                        @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-form-label col-sm-6">Tarikh Sah Laku Sijil PPK</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            @if ($pembekal->pembekal_tarikh_sah_ppk!=null)
                            <label>{{$pembekal->pembekal_tarikh_sah_ppk}}</label>
                        @else
                             <label>Tiada</label>
                        @endif


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-form-label col-sm-6">Sijil Gred</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            @if ($pembekal->pembekal_sijil_gred!=null)
                            <label> <a href="/storage/{{$pembekal->pembekal_sijil_gred}}" target="_blank" download>Sijil Gred</a></label>
                        @else
                             <label>Tiada</label>
                        @endif

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <label class="col-form-label col-sm-6">Tarikh Sah Sijil Gred</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            @if ($pembekal->pembekal_tarikh_sah_gred!=null)
                            <label> {{$pembekal->pembekal_tarikh_sah_gred}}</label>
                        @else
                             <label>Tiada</label>
                        @endif
                        </div>
                    </div>

                </div>

            </div>
        </div>
</div>
<div>
    <a href=/dashboard class="btn btn-success" style=float:absolute>Kembali</a>
</div>

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
