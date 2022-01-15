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
                    <button class="btn-success" onclick="window.location.href='/ItemInfo/create'">+Tambah</a></button>
                </div>
                <br>
                <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Item</th>
                            <th>Tarikh Mula</th>
                            <th>Tarikh Tamat</th>
                            <th></th>
                          

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($ItemInfo as $ItemInfo)
                            <tr>
                                <td>{{$ItemInfo->item_name}}</td>
                                <td>{{date('d-m-Y', strtotime($ItemInfo->start_date))}}</td>
                                <td>{{date('d-m-Y', strtotime($ItemInfo->end_date))}}</td>  
                                <td class="table-action">
                                    <form method="POST" action="/ItemInfo/{{$ItemInfo->id}}">
                                        @method('DELETE')
                                        @csrf
                                    <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                    <a href='/ItemInfo/{{$ItemInfo->katalog_id}}/edit'><i class="align-middle fas fa-fw fa-info"  data-bs-placement="left"
                                    title="Senarai Katalog"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        
        </div>
    </div>
</div>


@stop
