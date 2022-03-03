
   
<!DOCTYPE html>
<html lang="en">

{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="/PL.png">
    
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
            <meta name="author" content="Bootlab">
    
    
            {{-- <title>{{ config('app.name', 'ePerolehan') }}</title> --}}
            <title>Sistem Perolehan</title>
            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
            <!-- Styles -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <link rel="stylesheet" type="text/css" href="sweetalert2.min.css">
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <script src="sweetalert2.min.js"></script>
            <link rel="stylesheet" href="sweetalert2.min.css">
    
            @yield('styles')
            
            <!-- Scripts -->
            {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
            <link href="/css/modern.css" rel="stylesheet">
            <script src="/js/settings.js"></script>
    
            <style>
                table,input[type=text],select {
                    text-transform: capitalize;
            }
          
            table{
                text-align: center;
            }
         
            </style>
    </head>

<body>
    @include('sweet::alert')
    <script>

        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            $("#datatables-reponsive").DataTable({
                responsive: true
            });
        });
    </script>

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

        <div class="wrapper">
            <nav id="sidebar" class="sidebar">
                <a class="sidebar-brand" href="/">
                    <svg>
                        <use xlink:href="#ion-ios-pulse-strong"></use>
                    </svg>
                   Perbadanan Labuan
                </a>
                <div class="sidebar-content">
                    <div class="sidebar-content">
                        <div class="sidebar-user">
                            <a href="/"><img src="/PL.png" class="img-fluid rounded-circle mb-2"/></a>
                            <div class="fw-bold">Sistem ePerolehan</div>
                            <small>{{Auth::user()->user_name}}</small>
                        </div>
                    
                        <ul class="sidebar-nav">
                            <li class="sidebar-header">
                                Menu Utama
                            </li>
        
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="/dashboard">
                                    <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
                                </a>
                            </li>

                            

                            @if (Auth::user()->jenis=='pekerja')
                                @if (Auth::user()->roles[0]->id=='1')
                                        <li class="sidebar-item">
                                            <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Perancangan Perolehan</span>
                                            </a>
                                            <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                                <li class="sidebar-item"><a class="sidebar-link" href="/PelanPerancanganPerolehan">Senarai Pelan</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/PelanPerancanganPerolehan/create">Cipta Pelan Baru</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/indexpengesah">Pelan Yang Menunggu Pengesahan</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/indexpelulus">Pelan Yang Menunggu Kelulusan</a></li>
                                            </ul>
                                        </li>
                    
                                        <li class="sidebar-item">
                                            <a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-users"></i> <span class="align-middle">Pengguna</span>
                                            </a>
                                            <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                                <li class="sidebar-item"><a class="sidebar-link" href="/Pengguna">Senarai Pengguna</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/Pengguna/create">Daftar Pengguna Baru</a></li>
                                            </ul>
                                        </li>
                    
                                        <li class="sidebar-item">
                                            <a data-bs-target="#pembekal" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-briefcase"></i> <span class="align-middle">Pengurusan Pembekal</span>
                                            </a>
                                            <ul id="pembekal" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                                <li class="sidebar-item"><a class="sidebar-link" href="/Pembekal">Kemaskini Profil</a></li>
                                        
                                            </ul>
                                        </li>
                    
                                        <li class="sidebar-item">
                                            <a data-bs-target="#kodbidang" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Kod Bidang</span>
                                            </a>
                                            <ul id="kodbidang" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                                <li class="sidebar-item"><a class="sidebar-link" href="/KodBidang">Senarai Kod Bidang</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/KodBidang/create">Cipta Kod Bidang Baru</a></li>
                                            </ul>
                                        </li>
                    
                                        <li class="sidebar-header">
                                            Permohonan
                                        </li>
                                        <li class="sidebar-item">
                                            <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-shopping-bag"></i> <span class="align-middle">Pembelian</span>
                                            </a>
                                            <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                                    <li class="sidebar-item"><a class="sidebar-link" href="/NotaMinta">Senarai Nota Minta</a></li>
                                                    <li class="sidebar-item"><a class="sidebar-link" href="/NotaMinta/create">Cipta Nota Minta</a></li>
                                                    <li class="sidebar-item"><a class="sidebar-link" href="/NotaPenerimaan">Senarai Nota Penerimaan</a>
                                                    <li class="sidebar-item"><a class="sidebar-link" href="/NotaPenerimaan/create">Cipta Nota Penerimaan</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="sidebar-item">
                                            <a data-bs-target="#pst" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-shopping-cart"></i> <span class="align-middle">Sebutharga/Tender</span>
                                            </a>
                                            <ul id="pst" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                                    <li class="sidebar-item"><a class="sidebar-link" href="/PembelianSebutTender">Senarai SebutHarga/ Tender</a>
                                                    <li class="sidebar-item"><a class="sidebar-link" href="/PembelianSebutTender/create">Cipta SebutHarga/ Tender</a></li>
                                                    <li class="sidebar-item"><a class="sidebar-link" href="/PenyediaanSpesifikasi">Penyediaan Spesifikasi</a></li>
                                                    <li class="sidebar-item"><a class="sidebar-link" href="/JadualPemenuhan">Jadual Pemenuhan</a></li>
                                                    <li class="sidebar-item"><a class="sidebar-link" href="/PerincianPengiklanan">Perincian Pengiklanan</a></li>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="sidebar-item">
                                            <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-tag"></i> <span class="align-middle">Pengurusan Katalog</span>
                                            </a>
                                            <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                                <li class="sidebar-item"><a class="sidebar-link" href="/Katalog">Kumpulan Katalog</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/Katalog/create">Daftar Kumpulan Katalog</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/ItemInfo/create">Daftar Item</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/ItemInfo">Senarai Item</a></li>
                                            </ul>
                                        </li>
                    
                                        <li class="sidebar-item">
                                            <a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-check-square"></i> <span class="align-middle">Cadangan</span>
                                            </a>
                                            <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                                <li class="sidebar-item"><a class="sidebar-link" href="/Cadangan/create">Membuat Cadangan</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/Cadangan">Senarai Cadangan</a></li>
                                            </ul>
                                        </li>
                    
                                        <li class="sidebar-item">
                                            <a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-table"></i> <span class="align-middle">Pemenuhan</span>
                                            </a>
                                            <ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                                <li class="sidebar-item"><a class="sidebar-link" href="/JadualPemenuhan">Senarai Jadual Pemenuhan</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/JadualPemenuhan/create">Cipta Jadual Pemenuhan</a></li>
                                            </ul>
                                        </li>
                    
                                        <li class="sidebar-item">
                                            <a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Pengurusan Kontrak</span>
                                            </a>
                                            <ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                                <li class="sidebar-item"><a class="sidebar-link" href="/SuratSetujuTerima/create">Surat Setuju Terima</a></li>
                                            </ul>
                                        </li>
                    
                                        <li class="sidebar-header">
                                            Lain-lain
                                        </li>
                                        <li class="sidebar-item">
                                            <a data-bs-target="#documentation" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                                <i class="align-middle me-2 fas fa-fw fa-check"></i> <span class="align-middle">FAQ</span>
                                            </a>
                                            <ul id="documentation" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                                <li class="sidebar-item"><a class="sidebar-link" href="/faq">Senarai Soalan Lazim</a></li>
                                                <li class="sidebar-item"><a class="sidebar-link" href="/faq/create">Cipta Soalan Lazim Baru</a></li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="/KandunganPerjanjian/create">
                                                <i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Invois</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        @else
                                <li class="sidebar-item">
                                    <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                        <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Perancangan Perolehan</span>
                                    </a>
                                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                        <li class="sidebar-item"><a class="sidebar-link" href="/PelanPerancanganPerolehan">Senarai Pelan</a></li>
                                        <li class="sidebar-item"><a class="sidebar-link" href="/PelanPerancanganPerolehan/create">Cipta Pelan Baru</a></li>
                                        <li class="sidebar-item"><a class="sidebar-link" href="/indexpengesah">Pelan Yang Menunggu Pengesahan</a></li>
                                        <li class="sidebar-item"><a class="sidebar-link" href="/indexpelulus">Pelan Yang Menunggu Kelulusan</a></li>
                                    </ul>
                                </li>
            
                                <li class="sidebar-header">
                                    Permohonan
                                </li>
                                <li class="sidebar-item">
                                    <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                        <i class="align-middle me-2 fas fa-fw fa-shopping-bag"></i> <span class="align-middle">Pembelian</span>
                                    </a>
                                    <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                            <li class="sidebar-item"><a class="sidebar-link" href="/NotaMinta">Senarai Nota Minta</a></li>
                                            <li class="sidebar-item"><a class="sidebar-link" href="/NotaMinta/create">Cipta Nota Minta</a></li>
                                            <li class="sidebar-item"><a class="sidebar-link" href="/PembelianSebutTender">Senarai SebutHarga/ Tender</a>
                                            <li class="sidebar-item"><a class="sidebar-link" href="/PembelianSebutTender/create">Cipta SebutHarga/ Tender</a></li>
                                            <li class="sidebar-item"><a class="sidebar-link" href="/NotaPenerimaan">Senarai Nota Penerimaan</a>
                                            <li class="sidebar-item"><a class="sidebar-link" href="/NotaPenerimaan/create">Cipta Nota Penerimaan</a>
                                        </li>
                                    </ul>
                                </li>
        
                                    <li class="sidebar-item">
                                        <a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                            <i class="align-middle me-2 fas fa-fw fa-check-square"></i> <span class="align-middle">Cadangan</span>
                                        </a>
                                        <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                            <li class="sidebar-item"><a class="sidebar-link" href="/Cadangan/create">Membuat Cadangan</a></li>
                                            <li class="sidebar-item"><a class="sidebar-link" href="/Cadangan">Senarai Cadangan</a></li>
                                        </ul>
                                    </li>
                
                                    <li class="sidebar-item">
                                        <a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                            <i class="align-middle me-2 fas fa-fw fa-table"></i> <span class="align-middle">Pemenuhan</span>
                                        </a>
                                        <ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                            <li class="sidebar-item"><a class="sidebar-link" href="/JadualPemenuhan">Senarai Jadual Pemenuhan</a></li>
                                            <li class="sidebar-item"><a class="sidebar-link" href="/JadualPemenuhan/create">Cipta Jadual Pemenuhan</a></li>
                                        </ul>
                                    </li>
                
                                    <li class="sidebar-item">
                                        <a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                            <i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Pengurusan Kontrak</span>
                                        </a>
                                        <ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                            <li class="sidebar-item"><a class="sidebar-link" href="/SuratSetujuTerima/create">Surat Setuju Terima</a></li>
                                        </ul>
                                    </li>
                
                                    <li class="sidebar-header">
                                        Lain-lain
                                    </li>
                                    
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="/KandunganPerjanjian/create">
                                            <i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Invois</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                        @endif
                        @else
    
                        <li class="sidebar-item">
                            <a data-bs-target="#pembekal" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                <i class="align-middle me-2 fas fa-fw fa-briefcase"></i> <span class="align-middle">Pengurusan Pembekal</span>
                            </a>
                            <ul id="pembekal" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item"><a class="sidebar-link" href="/Pembekal/{{Auth::user()->pembekal_id}}">Kemaskini Profil</a></li>
                            </ul>
                        </li>

    
                        <li class="sidebar-header">
                            Pembelian
                        </li>

                        <li class="sidebar-item">
                            <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                <i class="align-middle me-2 fas fa-fw fa-shopping-bag"></i> <span class="align-middle">Pembelian</span>
                            </a>
                            <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                    <li class="sidebar-item"><a class="sidebar-link" href="/NotaMinta">Senarai Nota Minta</a></li>
                                    <li class="sidebar-item"><a class="sidebar-link" href="/NotaPenerimaan">Senarai Nota Penerimaan</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                <i class="align-middle me-2 fas fa-fw fa-tag"></i> <span class="align-middle">Pengurusan Katalog</span>
                            </a>
                            <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                <li class="sidebar-item"><a class="sidebar-link" href="/Katalog">Kumpulan Katalog</a></li>
                                <li class="sidebar-item"><a class="sidebar-link" href="/Katalog/create">Daftar Kumpulan Katalog</a></li>
                                <li class="sidebar-item"><a class="sidebar-link" href="/ItemInfo/create">Daftar Item</a></li>
                                <li class="sidebar-item"><a class="sidebar-link" href="/ItemInfo">Senarai Item</a></li>
                            </ul>
                        </li>

        
                            <li class="sidebar-item">
                                <a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                    <i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">Pengurusan Kontrak</span>
                                </a>
                                <ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                    <li class="sidebar-item"><a class="sidebar-link" href="/SuratSetujuTerima/create">Surat Setuju Terima</a></li>
                                </ul>
                            </li>
        
                            <li class="sidebar-header">
                                Lain-lain
                            </li>
                            
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="/KandunganPerjanjian/create">
                                    <i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">Invois</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            @endif
                <div class="main">
                    <nav class="navbar navbar-expand navbar-theme">
                        <a class="sidebar-toggle d-flex me-2">
                            <i class="hamburger align-self-center"></i></a>
        
                        <div class="navbar-collapse collapse">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle position-relative" href="/AuditLog"><i class="align-middle fas fa-clock"></i></a>
                                </li>
        
                                <li class="nav-item dropdown ms-lg-2">
                                    <a class="nav-link dropdown-toggle position-relative" href="/NotificationCenter"><i class="align-middle fas fa-bell"></i></a>
                                </li>
        
                                <li class="nav-item dropdown ms-lg-2">
                                    <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
                                        <i class="align-middle fas fa-cog"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="/Pengguna/{{Auth::user()->id}}/edit"><i class="align-middle me-1 fas fa-fw fa-user"></i> Tetapan Akaun</a>
                
                                        <div class="dropdown-divider"></div>
                                        {{-- <a class="dropdown-item" href="#"> --}}
                                            <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="btn" ><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i>Log Keluar</button>
                                            </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
        
                    </nav>
                <main class="content">
                    <div class="container-fluid">
    
                        @yield('content')
                        @yield('scripts')

                        <script src="/js/app.js"></script>
                    </div>
                </main>
            </div>
        </div>
</body>
</html>