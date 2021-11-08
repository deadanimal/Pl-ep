@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3> Senarai Sebut Harga </h3>
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr> 
                            <th> Tajuk Sebutharga </th>
                            <th> Kaedah Perolehan </th>
                            <th> Zon </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fizaPembelianSebutTender as $fizaPembelianSebutTender)
                        <tr>
                            <td> {{$fizaPembelianSebutTender->pst_tajuk}}</td>
                            <td> {{$fizaPembelianSebutTender->pst_kaedah_perolehan}}</td>
                            <td> {{$fizaPembelianSebutTender->pst_zon_lokasi}}</td>
                            <td> <a href="/PembelianSebutTender/{{$fizaPembelianSebutTender->id}}/edit">Butiran</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop

    