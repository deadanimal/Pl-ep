@extends('layouts.base')

@section('content')
<div class="header">
    <h1 class="header-title">
    Sebutharga/Tender
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Kehadiran Taklimat</a></li>
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
                <form method="POST" action="/KehadiranTaklimat/{{$kehadiran->id}}" >
                    @csrf
                    @method('PUT')

                <input type=hidden name=pst_id value="{{$kehadiran->pst_id}}">


                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">Nama Syarikat Pembekal</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control"  value="{{$pembekal->pembekal_company_name}}" readonly>
                        <input type="text" hidden name="pembekal_id" value="{{$pembekal->id}}">
                    </div>
                </div>


                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">Nama</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="kehadiran_nama" value="{{$kehadiran->kehadiran_nama}}">
                    </div>
                </div>


                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">No Kad Pengenalan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="kehadiran_pengenalan_no" value="{{$kehadiran->kehadiran_pengenalan_no}}">
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">No Telefon (Bimbit)</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="kehadiran_no_tel" value="{{$kehadiran->kehadiran_no_tel}}">
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">Email</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="email" class="form-control" name="kehadiran_email" value="{{$kehadiran->kehadiran_email}}">
                    </div>
                </div>



                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">Link</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="url" class="form-control" name="link" value="{{$kehadiran->link}}">
                    </div>
                </div>


                <div class="col-md-4 text-right">
                    <button type="submit" name="status_kehadiran" value="dilulus" class="btn btn-primary"><i class="fas fa-check"></i> Diluluskan</button>
                    <button type="submit" name="status_kahadiran" value="ditolak" class="btn btn-danger"><i class="fas fa-times"></i> Ditolak</button>

                </div>


                </form>
            </div>
        </div>
    </div>
</div>
@stop
