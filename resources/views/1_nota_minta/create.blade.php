@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Cipta Nota Minta</a></li>
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

                    <form method="POST" action="/NotaMinta">
                        @csrf

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Kaedah Permintaan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                 <input type="text" class="form-control" name="ro_kaedah">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Jenis Perolehan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="ro_jenis_perolehan">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Tempoh Penghantaran </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="ro_tempoh_penghantaran">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Jumlah (RM) </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                 <input type="number" class="form-control" name="ro_jumlah">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Nama Pelulus</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                {{-- <input type="text" class="form-control" name="ro_pelulus"> --}}
                                <select class="form-control" name="ro_pelulus">
                                    <option hidden>Sila Pilih</option>
                                    @foreach ($user as $user)
                                    <option value={{$user->id}}>{{$user->user_name}}</option>
                                    @endforeach
                                </select>                                
                            </div>
                        </div>

                        {{-- <br>  <button href=/ItemInfo class="btn-success"> Pilihan Item </button> --}}
                        <div>
                        <br> <button class="btn-primary" type="submit" style="float: right" >Teruskan</button>
                        </div>

                    </form>
            </div>
        </div>
    </div>
</div>


                        
                    @endsection

    
