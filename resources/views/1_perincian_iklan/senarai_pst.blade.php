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
    </head>

    <body>
        <script src="js/app.js"></script>

	    <script>

            document.addEventListener("DOMContentLoaded", function() {
                // Datatables Responsive
                $("#datatables-reponsive").DataTable({
                    responsive: true
                });
            });
        </script>
    <div class="wrapper">
    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                   Sebutharga/Tender
                </h1>
                <nav aria-label="breadcrumb">
                    <p class="header-subtitle">Senarai Sebutharga</p>
                </nav>
            </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h6 class="card-subtitle text-muted">The Fixed Header DataTables extension ensures the table headers don't leave the user's
                                viewport when scrolling down". See official documentation</h6> --}}
                        </div>
                        <div class="card-body">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tajuk SebutHarga</th>
                                        <th>Tarikh Tutup Iklan</th>
                                        <th>Isi Kedatangan</th>
                                        <th>Butiran Lanjut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>{{$pst->pst_tajuk}}</td>
                                            <td>{{date('d-m-Y', strtotime($iklan->iklan_last_date))}}</td>
                                            <td><a href="/KehadiranTaklimat/{{$pst->id}}/create">Isi Kedatangan</a></td>
                                            <td><a href="/butiransebutharga/{{$iklan->id}}"><i class="align-middle fas fa-fw fa-download"></i></i></a></td>
                                        </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    </div>

