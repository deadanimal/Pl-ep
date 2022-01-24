@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Maklumat Syarikat</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body">


            <div class="col-12 col-lg-12">
                <div class="tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#tab-1" data-bs-toggle="tab" role="tab">Maklumat Asas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab-2" data-bs-toggle="tab" role="tab">Maklumat Bekalan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tab-3" data-bs-toggle="tab" role="tab">Maklumat Perkhidmatan</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-1" role="tabpanel">
                            <h4 class="tab-title">Maklumat Asas Perniagaan</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Jenis Akaun  </label>
                                </div>
                                <div class="col-md-6">
                                   <label> {{$pembekal->pembekal_jenis_akaun}}</label>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Nama Syarikat </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                   <label> {{$pembekal->pembekal_company_name}}</label>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">No Pendaftaran Syarikat</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                   <label> {{$pembekal->pembekal_no_pendaftaran}}</label>
                                </div>
                            </div>            
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Sijil SSM </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                   <label> <a href="/storage/{{$pembekal->pembekal_sijil_ssm}}" target="_blank" download>Sijil SSM</a></label>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Nama Pemilik Syarikat </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                   <label> {{$pembekal->pembekal_pemilik}}</label>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Jenis Syarikat</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                   <label> {{$pembekal->pembekal_jenis_company}}</label>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Lesen Perniagaan</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                   <label> <a href="/storage/{{$pembekal->pembekal_lesen_perniagaan}}" target="_blank" download>Lesen Perniagaan</a></label>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Alamat Syarikat</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                   <label> {{$pembekal->pembekal_company_address}}</label>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Nama Pemilik Syarikat </label>
                                </div>
                                <div class="mb-3 col-md-6">
                                   <label> {{$pembekal->pembekal_pemilik}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2" role="tabpanel">
                            <h4 class="tab-title">Maklumat MOF</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Sijil MOF</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                   <label> <a href="/storage/{{$pembekal->pembekal_sijil_mof}}" target="_blank" download>Sijil MOF</a></label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Sijil Perakuan Bumiputera</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                   <label> <a href="/storage/{{$pembekal->pembekal_sijil_perakuan_bumiputera}}" target="_blank" download>Sijil Perakuan Bumiputera</a></label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Sijil Pendaftaran Syarikat</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label> <a href="/storage/{{$pembekal->pembekal_sijil_pendaftaran_syarikat}}" target="_blank" download>Sijil Pendaftaran Syarikat</a></label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Sijil Taraf Bumiputera</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label> <a href="/storage/{{$pembekal->pembekal_sijil_taraf_bumi}}" target="_blank" download>Sijil Taraf Bumiputera</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3" role="tabpanel">
                            <h4 class="tab-title">Maklumat CIDB</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">No Pendaftaran PPK</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label> {{$pembekal->pembekal_no_pendaftaran_ppk}}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Tarikh Sah PPK</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label>{{$pembekal->pembekal_sijil_taraf_bumi}}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Sijil Gred</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label> <a href="/storage/{{$pembekal->pembekal_sijil_gred}}" target="_blank" download>Sijil Gred</a></label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label col-sm-4 text-sm-end ">Tarikh Sah Sijil Gred</label>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label> {{$pembekal->pembekal_tarikh_sah_gred}}</label>
                                </div>
                            </div>

                            



                        </div>
                    </div>
                </div>
            </div>


    
        <br>
        <div>
            <a href=/dashboard class="btn btn-success" style=float:absolute>Kembali</a>
        </div>


@endsection