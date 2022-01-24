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
                                         
                        <form method="POST" action="/docmof"  enctype="multipart/form-data">
                            @csrf
                            <fieldset>
                                <legend> Butiran Lesen MOF</legend>

                                <input type="hidden" name="id_pembekal"  value="{{$pembekal->id}}">

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                       <label class="col-form-label col-sm-6">No Sijil MOF</label>
                                    </div>
                                    <div class="mb-3 col-md-6">     
                                            <input type="text" name="pembekal_no_sijil_mof" class="form-control">                        
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                       <label class="col-form-label col-sm-6">Tarikh Sah Sijil MOF</label>
                                    </div>
                                    <div class="mb-3 col-md-6">     
                                            <input type="date" name="pembekal_tarikh_sah_mof" class="form-control">                        
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                       <label class="col-form-label col-sm-6">Sijil MOF</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <input type="file" name="pembekal_sijil_mof" class="form-control">
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Sijil Perakuan Bumiputera</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input type="file" name="pembekal_sijil_perakuan_bumiputera" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Sijil Pendaftaran Syarikat</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                         
                                                <input type="file" name="pembekal_sijil_pendaftaran_syarikat" class="form-control">
                                        
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">No Rujukan Pendaftaran</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                         
                                                <input type="text" name="pembekal_no_rujukan_pendaftaran" class="form-control">
                                        
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                           <label class="col-form-label col-sm-6">Sijil Taraf Bumi</label>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                         
                                                <input type="file" name="pembekal_sijil_taraf_bumi" class="form-control">
                                            
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
    </main>
    








            