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
                <form method="POST" action="/KehadiranTaklimat">
                    @csrf

                <input type=hidden name=pst_id value="{{$pst->id}}">
                <input type=hidden name=pembekal_id value="{{Auth::user()->pembekal_id}}">


                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">Nama</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="kehadiran_nama">
                    </div>
                </div>


                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">No Kad Pengenalan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="kehadiran_pengenalan_no">
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">No Telefon (Bimbit)</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="kehadiran_no_tel">
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">Email</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="email" class="form-control" name="kehadiran_email">
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">Status Kehadiran</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="status">
                    </div>
                </div>

                <div class="row">
                    <div class=" col-md-6">
                       <label class="col-form-label col-sm-6">Link</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="url" class="form-control" name="link">
                    </div>
                </div>


                {{-- kehadiran_created_by
                kehadiran_created_date
                kehadiran_updated_by
                kehadiran_updated_date --}}
                <div class="col-md-4 text-right">
                    <br> <button class="btn btn-primary" type="submit">Hantar</button>
                </form>
                @stop
