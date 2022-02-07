<!DOCTYPE html>
<html lang="en">

{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="/PL.png">
    
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
            <meta name="author" content="Bootlab">
    
    
            {{-- <title>{{ config('app.name', 'ePerolehan') }}</title> --}}
            <title>Sistem ePerolehan</title>
            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
            <!-- Styles -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href=https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" src=https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js></script>


            <script src="sweetalert2.min.js"></script>
            <link rel="stylesheet" href="sweetalert2.min.css">
    
            @yield('styles')
            
            <!-- Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <link href="/css/modern.css" rel="stylesheet">
            <script src="/js/settings.js"></script>
    
            <style>
                table,input[type=text]{
                    text-transform: capitalize;
            }
            </style>

        <script src="/js/settings.js"></script>
        <!-- END SETTINGS -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-120946860-7');
        </script>
            </head>
    <div class="wrapper">
    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                   Pembekal
                </h1>
                <nav aria-label="breadcrumb">
                </nav>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Pendaftaran Pembekal Baharu</h5>

                        </div>
                        <div class="card-body">
                                         
                        <form method="POST" action="/doccidb"  enctype="multipart/form-data">
                            @csrf
                            <fieldset>
                                <legend> Butiran Sijil CIDB</legend>

                                <input type="hidden" name="id_pembekal"  value="{{$pembekal->id}}">


                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">No Pendaftaran PPK</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                                <input type="text" name="pembekal_no_pendaftaran_ppk" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Tarikh Sah PPK</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                  
                                                <input type="date" name="pembekal_tarikh_sah_ppk" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Pengkhususan</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                  
                                                <input type="text" name="pembekal_pengkhususan" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Pegawai Bertauliah</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            
                                                <input type="text" name="pembekal_pegawai_bertauliah" class="form-control">
                              
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Sijil Gred CIDB</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            
                                                <input type="file" name="pembekal_sijil_gred" class="form-control">
                                          
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Tarikh Sah Sijil</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            
                                                <input type="date" name="pembekal_tarikh_sah_gred" class="form-control">
                                      
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Kod Bidang</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <select class="form-select" name="kod_id">
                                                <option hidden value="">Sila Pilih</option>
                                                @foreach ($kod as $kod)
                                                    <optgroup label="{{$kod->kod_pengkhususan}}">
                                                        <option value="{{$kod->id}}">{{$kod->kod_description}}</option>
                                                    </optgroup>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
    

                            </fieldset>

                            <div align="right"> 
                                <button type="submit" class="btn btn-primary">Hantar</button>
                            </div> 
                            
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script>
            document.addEventListener("DOMContentLoaded", function() {
            // Initialize Select2 select box
            $("select[name=\"validation-select2\"]").select2({
            allowClear: true,
            placeholder: "Select gear...",
            }).change(function() {
            $(this).valid();
            });
            // Initialize Select2 multiselect box
            $("select[name=\"kod_id\"]").select2({
            placeholder: "Pilih Kod Bidang",
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
            "validation-email": {
            required: true,
            email: true
            },
            "validation-password": {
            required: true,
            minlength: 6,
            maxlength: 20
            },
            "validation-password-confirmation": {
            required: true,
            minlength: 6,
            equalTo: "input[name=\"validation-password\"]"
            },
            "validation-required": {
            required: true
            },
            "validation-url": {
            required: true,
            url: true
            },
            "validation-select": {
            required: true
            },
            "validation-multiselect": {
            required: true,
            minlength: 2
            },
            "validation-select2": {
            required: true
            },
            "kod_id": {
            required: true,
            minlength: 2
            },
            "validation-text": {
            required: true
            },
            "validation-file": {
            required: true
            },
            "validation-radios": {
            required: true
            },
            "validation-checkbox": {
            required: true
            },
            "validation-checkbox-group-1": {
            require_from_group: [1, "input[name=\"validation-checkbox-group-1\"], input[name=\"validation-checkbox-group-2\"]"]
            },
            "validation-checkbox-group-2": {
            require_from_group: [1, "input[name=\"validation-checkbox-group-1\"], input[name=\"validation-checkbox-group-2\"]"]
            },
            "validation-checkbox-group-1": {
            require_from_group: [1, "input[name=\"validation-checkbox-group-1\"], input[name=\"validation-checkbox-group-2\"]"]
            },
            "validation-checkbox-group-2": {
            require_from_group: [1, "input[name=\"validation-checkbox-group-1\"], input[name=\"validation-checkbox-group-2\"]"]
            }
            },
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
            if ($el.hasClass("select2-hidden-accessible") || $el.attr("data-role") === "tagsinput") {
            $el.parent().addClass("is-invalid");
            }
            },
            unhighlight: function(element) {
            $(element).parents(".error-placeholder").find(".is-invalid").removeClass("is-invalid");
            }
            });
            });
            </script>
        
        
    </main>


    








            