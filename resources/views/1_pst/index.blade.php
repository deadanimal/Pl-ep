@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Senarai Sebutharga / Tender</a></li>
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
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr> 
                            <th> Tajuk Sebutharga </th>
                            <th> Zon </th>
                            <th> Tarikh Hantar</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($PembelianSebutTender as $PembelianSebutTender)
                        <tr>
                            <td> {{$PembelianSebutTender->pst_tajuk}}</td> 
                            <td> {{$PembelianSebutTender->pst_zon_lokasi}}</td>
                            <td> {{date('d-m-Y H:i', strtotime($PembelianSebutTender->created_at))}}</td>
                            <td class="table-action">
                                <form method="POST" action="/PembelianSebutTender/{{$PembelianSebutTender->id}}">
                                    @method('DELETE')
                                    @csrf
                                <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                <a href="/PembelianSebutTender/{{$PembelianSebutTender->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                </form>
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

    