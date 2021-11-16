@extends('layouts.base')

@section('content')
    


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                   <h3>Kemaskini Jadual Pemenuhan </h3>

                    <form method="POST" action="/JadualPemenuhan/{{$fizaJadualPemenuhan->id}}">
                    @csrf
                    @method("PUT")

                    <br><br>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Jenis Pemenuhan </label>
                        </div>
                         <div class="mb-3 col-md-6">
                        <input type="text"  class="form-control" name="jadual_jenis_pemenuhan" value="{{$fizaJadualPemenuhan->jadual_jenis_pemenuhan}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Kekerapan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="jadual_kekerapan" value="{{$fizaJadualPemenuhan->jadual_kekerapan}}"> 
                            </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Bilangan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="number" class="form-control" name="jadual_bil" value="{{$fizaJadualPemenuhan->jadual_bil}}">
                        </div>  
                    </div>  

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Bulan Mula </label>
                        </div>
                         <div class="mb-3 col-md-6">
                            <input type="month" class="form-control" name="jadual_bulan_mula" id="month1" value="{{$fizaJadualPemenuhan->jadual_bulan_mula}}">
                        </div>
                    </div>

                    {{-- <br>Tahun Mula <input type="" --}}
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Bulan Akhir  </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="month" class="form-control" name="jadual_bulan_akhir" id="month2" value="{{$fizaJadualPemenuhan->jadual_bulan_akhir}}">
                        </div>
                    </div>
                    {{-- <br>Jumlah Bulan <input type=class="form-control" name="jadual_jumlah_bulan" id="total_month"> --}}
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Jenis Jadual</label>
                        </div>
                         <div class="mb-3 col-md-6">
                        <input type="text" class="form-control" name="jadual_jenis" value="{{$fizaJadualPemenuhan->jadual_jenis}}">
                        </div>
                    </div>

                    <br>

                    <button type="submit" class="btn-primary">Hantar</button>
                    </form>
            </div>
        </div>
    </div>
</div>

@stop
