@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
      Pelan Perancangan Perolehan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Senarai Pelan Perolehan</a></li>
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
                    <button class="btn btn-success" onclick="window.location.href='/PelanPerancanganPerolehan/create'">+Tambah</a></button>
                </div>
                <br>
                <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tahun Perolehan</th>
                            <th>Nama Perolehan</th>
                            <th>Kategori Perolehan</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
         

                    <tbody>
                        @foreach ( $pelanPerancanganPerolehan as  $pelanPerancanganPerolehan)
                        
                            <tr>
                                <td>{{  $pelanPerancanganPerolehan->pelan_year}}</td>
                                <td>{{  $pelanPerancanganPerolehan->pelan_title}}</td>
                                <td>{{  $pelanPerancanganPerolehan->pelan_category }}</td>
                                <td>{{  $pelanPerancanganPerolehan->pelan_status }}</td>
                                <td class="table-action">
                                    @if ($pelanPerancanganPerolehan->pelan_status=="Menunggu Pengesahan")
                                            <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                            <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></a>  
                                            <a href="/cetak-pelan/{{$pelanPerancanganPerolehan->id}}"><i class="align-middle fas fa-fw fa-download"></i></i></a>
                                    @else

                                    <form method="POST" action="/PelanPerancanganPerolehan/{{$pelanPerancanganPerolehan->id}}">
                                        @method('DELETE')
                                        @csrf
                                    <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                    <a href="/editpelulus/{{$pelanPerancanganPerolehan->id}}"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                    <a href="/cetak-pelan/{{$pelanPerancanganPerolehan->id}}"><i class="align-middle fas fa-fw fa-download"></i></i></a>
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