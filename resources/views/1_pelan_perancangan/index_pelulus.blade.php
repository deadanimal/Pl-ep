@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
      Pelan Perancangan Perolehan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Senarai Perolehan Yang Menunggu Kelulusan</a></li>
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
                            <th>Tahun Perolehan</th>
                            <th>Nama Perolehan</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ( $fizaPelanPerancanganPerolehan as  $fizaPelanPerancanganPerolehan)
                            <tr>
                                <td>{{  $fizaPelanPerancanganPerolehan->pelan_year}}</td>
                                <td>{{  $fizaPelanPerancanganPerolehan->pelan_title}}</td>
                                <td>{{  $fizaPelanPerancanganPerolehan->pelan_status }}</td>
                                    <td class="table-action">
                                        <a href="/editpelulus/{{$fizaPelanPerancanganPerolehan->id}}"><i class="align-middle fas fa-fw fa-pen" id="1"></i></i></a>
                                        <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                        <a href="/cetak-pelan/{{$fizaPelanPerancanganPerolehan->id}}"><i class="align-middle fas fa-fw fa-download"></i></i></a>
                                    </td>
                                  
        
                                
                            </tr>
                        @endforeach
                       

                    </tbody>
                 </table>

                </div>
            </div>
        </div>



@stop