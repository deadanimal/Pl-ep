@extends('layouts.base')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">

                        <form method="POST" action="/dokumentambahan" enctype="multipart/form-data">
                            @csrf
                            <br>
                            <fieldset>
                                <legend>Dokumen yang perlu dilampirkan:</legend>
                                <br><br>

                                <input type="hidden" name="id_pembekal"  value="{{$fizaPembekal->id}}">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">No Sijil MOF</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" name="pembekal_no_sijil_mof" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">No Rujukan Pendaftaran </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name="pembekal_no_rujukan_pendaftaran">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 "> Tarikh Sah Sijil MOF</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="date" class="form-control" name="pembekal_tarikh_sah_mof">
                                    </div>
                                </div>
{{-- 
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Sijil MOF </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="file" class="form-control" name="pembekal_sijil_mof">
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Sijil Perakuan Bumiputera </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="file" class="form-control" name="pembekal_sijil_perakuan_bumiputera">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Sijil Perakuan Pendaftaran Syarikat</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="file" class="form-control"
                                            name="pembekal_sijil_pendaftaran_syarikat">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Sijil Taraf Bumi </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="file" class="form-control" name="pembekal_sijil_taraf_bumi">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">No Pendaftaran PPK</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name='pembekal_no_pendaftaran_ppk'>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Tarikh Sah PPK </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="date" class="form-control" name=pembekal_tarikh_sah_ppk>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Pengkhususan</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name=pembekal_pengkhususan>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Pegawai Bertauliah </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="text" class="form-control" name='pembekal_pegawai_bertauliah'>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Sijil Gred CIDB </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="file" class="form-control" name='pembekal_sijil_gred'>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 "> Tarikh Sah Gred </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="date" class="form-control" name='pembekal_tarikh_sah_gred'>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Kod Bidang</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <select class="form-control" name="kod_id[]" multiple style="width: 100%">
                                            @foreach ($kod as $kod)
                                                <optgroup label={{$kod->kod_type}}>
                                                    <option value="{{ $kod->id }}">{{$kod->kod_description}}</option>
                                                </optgroup>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </fieldset>
                            <br><br><br>

                            <br><br>
                            {{-- <button type="submit" class="btn btn-primary" style="margin:5px; float:">Hantar</button>  
                    <button type="reset"  class="btn btn-primary"  style="margin:5px; float:right">Hapus</button> --}}
                            <button class="btn btn-primary" type="submit" title="Send">Hantar</button>
                        </form>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                // Initialize Select2 multiselect box
                                $("select[name=\"kod_id\"]").select2({
                                    placeholder: "Select gear...",
                                }).change(function() {
                                    $(this).valid();
                                });
                                // Trigger validation on tagsinput change
                                $("input[name=\"validation-bs-tagsinput\"]").on("itemAdded itemRemoved", function() {
                                    $(this).valid();
                                });
                                // Initialize validation
                                $("#validation-form").validate({
                                    ignore: ".ignore, .select2-input",
                                    focusInvalid: false,
                                    rules: {
                                        "kod_id": {
                                            required: true,
                                            minlength: 1
                                        }
                                    }

                                    // Errors
                                    errorPlacement: function errorPlacement(error, element) {
                                        var $parent = $(element).parents(".error-placeholder");
                                        // Do not duplicate errors
                                        if ($parent.find(".jquery-validation-error").length) {
                                            return;
                                        }
                                        $parent.append(
                                            error.addClass("jquery-validation-error small form-text invalid-feedback")
                                        );
                                    },
                                    highlight: function(element) {
                                        var $el = $(element);
                                        var $parent = $el.parents(".error-placeholder");
                                        $el.addClass("is-invalid");
                                        // Select2 and Tagsinput
                                        if ($el.hasClass("select2-hidden-accessible") || $el.attr("data-role") ===
                                            "tagsinput") {
                                            $el.parent().addClass("is-invalid");
                                        }
                                    },
                                    unhighlight: function(element) {
                                        $(element).parents(".error-placeholder").find(".is-invalid").removeClass(
                                            "is-invalid");
                                    }
                                });
                            });
                        </script>

                    @stop
