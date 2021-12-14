@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
 Item Info
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Kemaskini Info Item</a></li>
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
<form method="POST" action="/ItemInfo/{{$fizaItemInfo->id}}">
    @csrf
@method('PUT')
   
    {{-- item_id --}}
    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-10 "> Nama Item</label>
        </div>
        <div class="mb-3 col-md-6">
            <input type=text class=form-control name=item_name value="{{$fizaItemInfo->item_name}}">
        </div>
    </div>


    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-10 ">Harga Item </label>
        </div>
        <div class="mb-3 col-md-6">
            <input type="number" min="1" step="any" class=form-control name=item_price value="{{$fizaItemInfo->item_price}}">
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-10 ">Unit Item</label>
        </div>
        <div class="mb-3 col-md-6">
            <input type="text" class=form-control name=item_unit value="{{$fizaItemInfo->item_unit}}">
        </div>
    </div>


    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-10 ">Tarikh Mula</label>
        </div>
        <div class="mb-3 col-md-6">
             <input type="date" class=form-control name= start_date value="{{$fizaItemInfo->start_date}}">
        </div>
    </div>


    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="col-form-label col-sm-10 "> Tarikh Tamat</label>
        </div>
        <div class="mb-3 col-md-6">
             <input type="date" class=form-control name= end_date value="{{$fizaItemInfo->end_date}}">
        </div>
    </div>


    <div class="row">
         <div class="mb-3 col-md-6">
             <label class="col-form-label col-sm-10 ">Jenis Item </label>
         </div>
         <div class="mb-3 col-md-6">
        
            <select name=katalog_id class="form-control">
                <option hidden>Sila Pilih</option>
                @foreach ($fizaKatalog as $fizaKatalog)
                {{-- <option value="{{$fizaKatalog->id}}">{{$fizaKatalog->katalog_kumpulan}}</option> --}}
                <option @if ($fizaKatalog->id=='{{$fizaKatalog->id}}') selected @endif value="{{$fizaKatalog->id}}">{{$fizaKatalog->katalog_kumpulan}}</option>
                @endforeach
            </select>
         </div>
    </div>

            <div style=float-right>
                   <button class="btn btn-primary" type="submit"> Hantar</button> 
            </div>
</form>
{{-- pembekal_id
item_created_by
item_created_date
item_updated_by
item_updated_date --}}
</div>
        </div>
    </div>
</div>


@stop


