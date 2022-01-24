@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
    Pembelian   
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kemaskini Nota Minta</a></li>
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


<form method="POST" action="/NotaMinta/{{$NotaMinta->id}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="mb-3 col-md-6">
           <label class="col-form-label col-sm-6"> Kaedah Permintaan </label>
        </div>
        <div class="mb-3 col-md-6">
            <input type="text" class="form-control" name="ro_kaedah" value="{{$NotaMinta->ro_kaedah}}">
        </div>
    </div>


    <div class="row">
        <div class="mb-3 col-md-6">
           <label class="col-form-label col-sm-6">Jenis Perolehan </label>
        </div>
        <div class="mb-3 col-md-6">
            <input type="text" class="form-control" name="ro_jenis_perolehan" value="{{$NotaMinta->ro_jenis_perolehan}}">
        </div>
    </div>
    
    
    <div class="row">
        <div class="mb-3 col-md-6">
           <label class="col-form-label col-sm-6">Tempoh Penghantaran</label>
        </div>
        <div class="mb-3 col-md-6">
            <input type="number" class="form-control" name="ro_tempoh_penghantaran" value="{{$NotaMinta->ro_tempoh_penghantaran}}">
        </div>
    </div>

    
    <div class="row">
        <div class="mb-3 col-md-6">
           <label class="col-form-label col-sm-6">Jumlah (RM) </label>
        </div>
        <div class="mb-3 col-md-6">
            <input type="number" class="form-control" name="ro_jumlah" value="{{$NotaMinta->ro_jumlah}}">
        </div>
    </div>


    <div class="row">
        <div class="mb-3 col-md-6">
           <label class="col-form-label col-sm-6">Pelulus</label>
        </div>
        <div class="mb-3 col-md-6">
            <input type="text" name="ro_pelulus" class="form-control" value="{{$NotaMinta->ro_pelulus}}"> 
        </div>
    </div>


    <div class="row">
        <div class="mb-3 col-md-6">
           <label class="col-form-label col-sm-6">Catatan Pelulus</label>
        </div>
        <div class="mb-3 col-md-6">
            <input type="text" class="form-control" name="ro_pelulus_catatan" value="{{$NotaMinta->ro_pelulus_catatan}}">
        </div>
    </div>
    
         
    <div class="row">
        <div class="mb-3 col-md-6">
           <label class="col-form-label col-sm-6">Tarikh Permintaan Diluluskan</label>
        </div>
         <input type="date" class="form-control" name="ro_pelulus_date" value="{{$NotaMinta->ro_pelulus_date}}">
    
    <div class="row">
        <div class="mb-3 col-md-6">
           <label class="col-form-label col-sm-6">Status Permintaan </label>
        </div>
        <div class="mb-3 col-md-6">
            <select name="ro_status" class="form-select">
                <option @if ($NotaMinta->ro_status == 'Diluluskan') selected @endif value="Diluluskan">Diluluskan</option>
                <option @if ($NotaMinta->ro_status == 'Semak Semula') selected @endif value="Semak Semula">Semak Semula</option>
             </select>
        </div>
    </div>
        

    <div align="right"> 
        <button type="submit" class="btn btn-primary">Hantar</button>
    </div> 
</form>
            </div>
        </div>
    </div>
</div>
@stop
    
