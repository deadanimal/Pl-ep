@extends('layouts.base')
@section('content')

<style>
    
    table{
            text-align: center;
        
    }
</style>

<div class="header">
    <h1 class="header-title">
      Pembekal
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Senarai Pembekal Berdaftar</a></li>
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
                            <th>Jenis Akaun</th>
                            <th>Nama Syarikat</th>
                            <th>Nama Pemilik</th>
                            <th>Status</th>
                            <th>Tarikh Pendaftaran</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ( $pembekal as  $pembekal)
                            <tr>
                                <td>{{  $pembekal->pembekal_jenis_akaun}}</td>
                                <td>{{  $pembekal->pembekal_company_name}}</td>
                                <td>{{  $pembekal->pembekal_pemilik }}</td>
                                <td> @if ($pembekal->pembekal_status === 'Menunggu Pengesahan')                             
                                                    <span class="badge rounded-pill bg-primary">Belum Selesai</span>
                                    @elseif ($pembekal->pembekal_status === 'Ditolak')                             
                                                    <span class="badge rounded-pill bg-danger">Ditolak</span>
                                            @else
                                                    <span class="badge rounded-pill bg-success">Diluluskan</span>
                                            
                                            @endif
                                </td>
                                <td>{{date('d/m/Y H:i', strtotime($pembekal->created_at))}}
                                <td class="table-action">
                                    <form method="POST" action="/Pembekal/{{$pembekal->id}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                        <a href="/Pembekal/{{$pembekal->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
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
</div>



@stop