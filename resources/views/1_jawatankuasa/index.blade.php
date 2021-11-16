@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3> Senarai Jawatankuasa Berdaftar </h3>
                <div class="card-body">
                    <table id="datatables-1" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                            <th> Nama Staff </th>
                            <th> Jenis Jawatankuasa </th>
                            <th></th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($Jawatankuasa as $Jawatankuasa)
                    <tr>
                        <td>{{$Jawatankuasa->user_id}}</td>
                        <td> <a href="/Jawatankuasa/{{$Jawatankuasa->id}}/edit"> Butiran</a></td>
                        @endforeach
                    </tr>
                 
                </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@stop
            
     
        