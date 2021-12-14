@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Katalog
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Senarai Item</a></li>
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
<form method="POST" action="/Katalog/{{$Katalog->id}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-6 ">Kategori Item</label>
        </div>
        <div class="mb-3 col-md-6">
             <input  type=text class=form-control name=katalog_kategori value="{{$Katalog->katalog_kategori}}">  
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-6 ">Kumpulan </label>
        </div>
        <div class="mb-3 col-md-6">
            <input type=text class=form-control name=katalog_kumpulan value="{{$Katalog->katalog_kumpulan}}">
        </div>
    </div>

    <div class="row">
         <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-6 ">Jenis Katalog </label>
         </div>
         <div class="mb-3 col-md-6">
             <input type=text class=form-control name=katalog_jenis value="{{$Katalog->katalog_jenis}}">
         </div>
    </div>

{{-- katalog_created_by
katalog_created_date
katalog_updated_by
katalog_updated_date
user_id --}}

            <div style=float-right >
            {{-- <a href=/Katalog class="btn-success">Kembali </a> --}}
            <button type="submit" class="btn-primary">Hantar</button>
            </div>
</form>
            </div>
        </div>
    </div>
</div>
@stop