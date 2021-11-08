@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <br><h3> Kemaskini Cadangan </h3>
                        <form method="POST" action="/Cadangan/{{$Cadangan->id}}">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Cadangan Tarikh Mesyuarat </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="date" class="form-control" name="cadangan_mesyuarat_date" value="{{$Cadangan->cadangan_mesyuarat_date}}">
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Cadangan Lokasi Mesyuarat</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                 <input type="text" class="form-control" name="cadangan_mesyuarat_place" value="{{$Cadangan->cadangan_mesyuarat_place}}">
                            </div>
                        </div>

                            
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Mesyuarat Status</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                 <textarea class="form-control" name="cadangan_mesyuarat_status" row="4" col="3">{{$Cadangan->cadangan_mesyuarat_status}}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 "><br>Kehadiran </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="cadangan_kehadiran" value="{{$Cadangan->cadangan_kehadiran}}">
                            </div>
                         </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Bilangan Pembekal yang Mendapat Kelulusan Teknikal </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="number" class="form-control" name="cadangan_bil_pembekal_lulus_teknikal" value="{{$Cadangan->cadangan_bil_pembekal_lulus_teknikal}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Bilangan Pembekal yang Mendapat Kelulus Kewangan</label>
                            </div>
                            <div class="mb-3 col-md-6">
                                 <input type="number" class="form-control" name="cadangan_bil_pembekal_lulus_kewangan" value="{{$Cadangan->cadangan_bil_pembekal_lulus_kewangan}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 ">Cadangan Ulasan Penilaian </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="text" class="form-control" name="cadangan_ulasan_penilaian" value="{{$Cadangan->cadangan_ulasan_penilaian}}">
                            </div>
                        </div>
                    
                    <br><button type="submit" class="btn-primary" style="float:right">Hantar</button>

                        </form>
                </div></div>
        </div>
    </div>
</div>
@stop