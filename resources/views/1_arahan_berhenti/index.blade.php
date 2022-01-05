@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
      Pembekal
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Arahan Memberhentikan</a></li>
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
                <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tarikh Arahan</th>
                            <th>Arahan Dibuat</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ( $ArahanMemberhentikan as  $ArahanMemberhentikan)

                    <tbody>
                            <tr>
                                <td>{{date('d-m-Y', strtotime($ArahanMemberhentikan->created_at))}}</td>
                                <td>{{$ArahanMemberhentikan->created_by}}</td>
                                <td class="table-action">
                                    @if ($ArahanMemberhentikan->pelan_status=="Menunggu pengesahan")
                                            <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></a>  
                                            <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                            <a href="/cetak-pelan/{{$ArahanMemberhentikan->id}}"><i class="align-middle fas fa-fw fa-download"></i></i></a>
                                    @else
                                    <a href="/ArahanMemberhentikan/{{$ArahanMemberhentikan->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                    <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                    <a href="/cetak-pelan/{{$ArahanMemberhentikan->id}}"><i class="align-middle fas fa-fw fa-download"></i></i></a>
                                    @endif

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