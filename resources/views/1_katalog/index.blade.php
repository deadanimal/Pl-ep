@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Katalog
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Item</a></li>
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
            <div align="right"> 
                <button class="btn btn-success" onclick="window.location.href='/ItemInfo/create'">+Item Baru</a></button>
                <button class="btn btn-success" onclick="window.location.href='/Katalog/create'">+Katalog Baru</a></button>
                </div>
                <br>
            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Kumpulan </th>
                            <th>Jenis</th>
                            <th> </th>
                        </tr>
                </thead>

                 <tbody>
                    @foreach ($Katalog as $Katalog)
                <tr>

                    <td>{{$Katalog->katalog_kategori}}</td>
                    <td>{{$Katalog->katalog_kumpulan}}</td>
                    <td>{{$Katalog->katalog_jenis}}</td>
                    <td><a href="/listkatalog/{{$Katalog->id}}">Paparan Item</a></th>
                    
                @endforeach

                </tr>
            </table>
        </div>

 @endsection
        
