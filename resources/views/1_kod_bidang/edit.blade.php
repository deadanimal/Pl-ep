@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
    Kod Bidang
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kemaskini Kod Bidang</a></li>
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
                <form method="POST" action="/KodBidang/{{$fizaKodBidang->id}}">
                    @csrf
                @method('PUT')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-10 ">Jenis Kod</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=text name="kod_type" class="form-control" value="{{$fizaKodBidang->kod_type}}"></div>
                        </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Kategori Kod</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=text name=kod_category class="form-control" value="{{$fizaKodBidang->kod_category}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Pengkhususan Kod</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=text name="kod_pengkhususan"class="form-control" value="{{$fizaKodBidang->kod_pengkhususan}}">
                        
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6">Diskripsi Kod</label>
                        </div>
                        <div class="mb-3 col-md-6">
                           <input type=text name=kod_description class="form-control" value="{{$fizaKodBidang->kod_description}}" >
                        </div>
                    </div>

                   <button  class="btn btn-success" type="submit" >Hantar</button> 

                </form>
            </div> 
        </div>

@stop
