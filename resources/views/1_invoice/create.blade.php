@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
   Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Invois</a></li>
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
              
                    <form method="POST" action="/Invoice" enctype="multipart/form-data">
                    @csrf
                    {{-- kandungan_id --}}
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">  Nama </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="kandungan_nama">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6"> Template Kandungan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                         <input type="file" class="form-control" name="kandungan_template">
                        </div>
                    </div>
                    {{-- kandungan_created_by
                    kandungan_created_date
                    kandungan_updated_by
                    kandungan_updated_date --}}

                    <div align="right"> 
                        <button type="submit" class="btn btn-primary">Hantar</button>
                    </div> 
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
