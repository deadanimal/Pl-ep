@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Info Item
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Daftar Item</a></li>
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
                    <form method="POST" action="/ItemInfo">
                        @csrf
                        <br> 
                        {{-- item_id --}}
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Nama Item </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type=text class=form-control name=item_name>
                            </div>
                        </div>


                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Harga Item</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" min="1" step="any" class=form-control name=item_price>
                            </div>
                        </div>
                             
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Unit Item </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class=form-control name=item_unit>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> Tarikh Mula</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                 <input type="date" class=form-control name= start_date>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> Tarikh Tamat</label>
                            </div>
                            <div class="mb-3 col-md-6"> 
                                <input type="date" class=form-control name= end_date>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Jenis Item </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select name=katalog_id class="form-control">
                                    <option hidden>Sila Pilih</option>
                                    @foreach ($Katalog as $Katalog)
                                    <option value="{{$Katalog->id}}">{{$Katalog->katalog_kumpulan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
             
                    <button type="submit" class="btn-primary">Hantar</button>
                    </form>
            </div>
        </div>
    </div>
</div>


                    {{-- pembekal_id
                    item_created_by
                    item_created_date
                    item_updated_by
                    item_updated_date --}}
                    @endsection

