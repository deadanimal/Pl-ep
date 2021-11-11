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
                            <th></th>
                            <th>Tindakan</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($ItemInfo as $ItemInfo)
                            <tr>
                                <td>{{$ItemInfo->item_name}}</td>
                                <td>{{$ItemInfo->start_date}}</td>
                                <td>{{$ItemInfo->end_date}}</td>
                                <td><a href='/listkatalog/{{$ItemInfo->katalog_id}}'>Kumpulan Katalog</a></td>
                                <td> <a href="/ItemInfo/addcart/{{$ItemInfo->id}}">Tambah Ke Kart</a></td>
                                <td> <button onclick="compareItem()">Bandingkan Item</button>
                       
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="/ItemKart">Pergi Ke Bakul Item </a>
            <a href="/PenyediaanSpesifikasi/create">Terus ke Penyediaan Spesifikasi Item </a>
        </div>
    </div>
</div>

<script>
    let comparison = []
    function compareItem(id) {
        this.comparison.append(id)
    }
    function makeComparison() {
        window.location.href = 'https://url.com/comparison/' + comparison[0] + '/' + comparison[1] + '/' comparison[2];
    }
</script>


@stop
