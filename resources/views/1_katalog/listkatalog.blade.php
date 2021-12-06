@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3> Katalog di Bawah Kategori {{$Katalog->katalog_kategori}} - {{$Katalog->katalog_kumpulan}} </h3>

        
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Item</th>
                            <th>Harga</th>
                            <th></th>

                        </tr> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$ItemInfo->item_name}}</td>
                            <td>{{$ItemInfo->item_price}}</td>

                            <td class="table-action">
                                <a href='/ItemInfo/{{$ItemInfo->id}}/edit'><i class="align-middle fas fa-fw fa-info"  data-bs-placement="left"
                                    title="Maklumat Item"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                    
            </div>
        </div>
    </div>
</div>
@stop