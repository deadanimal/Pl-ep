@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Senarai Item</h3>
        
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Item</th>
                            <th>Tarikh Mula</th>
                            <th>Tarikh Tamat</th>
                            <th>Kumpulan Katalog</th>
                            <th> Nama Pembekal</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($ItemInfo as $ItemInfo)
                            <tr>
                                <td>{{$ItemInfo->item_name}}</td>
                                <td>{{$ItemInfo->start_date}}</td>
                                <td>{{$ItemInfo->end_date}}</td>
                                <td>{{$ItemInfo->katalog_id}}</td> 
                                <td></td>
                                <td> <a href="/ItemInfo/addcart/{{$ItemInfo->id}}">Tambah Ke Kart</a></td>
                       
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="/ItemKart">Pergi Ke Bakul Item </a>
        </div>
    </div>
</div>
@stop
