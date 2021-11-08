@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <h3> Cadangan </h3>
                    <br>
                    <form method="POST" action="/Cadangan">
                    @csrf
                        
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Cadangan Tarikh Mesyuarat </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="date" class="form-control" name="cadangan_mesyuarat_date">
                        </div>
                    </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Cadangan Lokasi </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="cadangan_mesyuarat_place">
                            </div>
                        </div>
                        
                    <br>
                    <button type="submit" class="btn-primary" style="float: right">Hantar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop