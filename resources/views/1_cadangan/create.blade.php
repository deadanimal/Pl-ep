@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
      Cadangan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
</a></li>
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
                    <form method="POST" action="/Cadangan">
                    @csrf
                        
                    <div class="row">
                        <div class="mb-3 col-md-6">
                           <label class="col-form-label col-sm-6">Cadangan Tarikh Mesyuarat </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="date" class="form-control" name="cadangan_mesyuarat_date">
                        </div>
                    </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6">Cadangan Lokasi </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="cadangan_mesyuarat_place">
                            </div>
                        </div>

                    <br>
                    <button type="submit" class="btn btn-primary" >Hantar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop