@extends('layouts.base')
@section('content')

        <div class="header">
            <h1 class="header-title">
            Arahan Memberhentikan
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"></a></li>
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
                        <h5 class="card-title mb-0"></h5>
                    </div>
                    <div class="card-body">
                            <form method="POST" action="/ArahanMemberhentikan">
                                @csrf

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Justifikasi Arahan </label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <textarea class="form-control" name="arahan_justifikasi" rows="3" cols="4"></textarea> 
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="col-form-label col-sm-6 ">Keterangan</label>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <textarea class="form-control" name="arahan_keterangan" rows="3" cols="4"></textarea> 
                                    </div>
                                 </div>
                                

    
                @endsection