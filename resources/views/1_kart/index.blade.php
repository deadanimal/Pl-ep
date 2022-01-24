@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Bakul Item</a></li>
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
                <form method="POST" action="/ItemKart">
                <table id="datatables-reponsive" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Item</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                @if ($list_nama_barang)
                                    {{--<li>Pembelian ID: {{$list_nama_barang->kart_id}}</li> --}}
                                @foreach ($list_nama_barang as $list_nama_barang)
                                <tr>
                                <td>{{$list_nama_barang->item_name}}</td>
                                <td> <a href="/ItemKart/removecart/{{$list_nama_barang->id}}">Remove Cart </a></td>
                                </tr>
                                @endforeach
                                @endif
                        </tbody> 
                </table>
                 <button type=submit class="btn btn-primary">Hantar</button>

            </div>
    
        </div>
    </div>
</div>

@endsection

