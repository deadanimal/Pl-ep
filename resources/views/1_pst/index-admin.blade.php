@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Sebutharga / Tender</a></li>
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
                    <button class="btn btn-success" onclick="window.location.href='/PembelianSebutTender/create'">+Tambah</a></button>
                </div>
                <br>

                <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tajuk Sebutharga </th>
                            <th>Zon </th>
                            <th>Tarikh Hantar</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($PembelianSebutTender as $pst)
                        <tr>
                            <td> {{$pst->pst_tajuk}}</td>
                            <td> {{$pst->pst_zon_lokasi}}</td>
                            <td> {{date('d-m-Y H:i', strtotime($pst->created_at))}}</td>
                            <td>@if ($pst->pst_status==='menunggu kelulusan')
                                <span class="badge rounded-pill bg-primary">Dalam Semakan</span>
                           @elseif ($pst->pst_status === 'draf')
                                <span class="badge rounded-pill bg-secondary">Draf</span>
                           @elseif ($pst->pst_status === 'ditolak')
                               <span class="badge rounded-pill bg-danger">Ditolak</span>
                            @else
                               <span class="badge rounded-pill bg-success">Diluluskan</span>
                           @endif
                       </td>
                       <td class="table-action">
                            @if($pst->pst_status=='draf')

                            <form method="POST" action="/PembelianSebutTender/{{$pst->id}}">
                                @method('DELETE')
                                @csrf
                            <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                            <a href="/PembelianSebutTender/{{$pst->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                            </form>

                            @elseif ($pst->pst_status === 'menunggu kelulusan')
                                @if (Auth::user()->id==$pst->pst_pelulus)
                                    <a href="/PembelianSebutTender/{{$pst->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                @else
                                    <button class="btn" disabled><i class="align-middle fas fa-fw fa-pen"></i></a>
                                @endif

                            @elseif ($pst->pst_status ==='diluluskan')
                                <a href="/PembelianSebutTender/{{$pst->id}}"><i class="align-middle fas fa-fw fa-pen"></i></a>

                        @endif
                      </td>
                      @endforeach
                </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@stop

