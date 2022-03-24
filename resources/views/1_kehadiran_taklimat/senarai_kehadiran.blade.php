@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
        Pembelian Sebut Harga/Tender
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Kehadiran Taklimat Untuk SebutHarga</a></li>
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

                <table id="datatables-buttons" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>No Kad Pengenalan</td>
                                {{-- <td>Nama Syarikat</td> --}}
                                <td>Status Kedatangan</td>
                                <td></td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kehadiran as $kehadiran)
                            <tr>
                                <td>{{$kehadiran->kehadiran_nama}}</td>
                                <td>{{$kehadiran->kehadiran_pengenalan_no}}</td>
                                {{-- <td>{{$pembekal->pembekal_company_name}}</td> --}}
                                <td> @if ($kehadiran->status==='menunggu kelulusan')
                                    <span class="badge rounded-pill bg-primary">Dalam Semakan</span>
                               @elseif ($kehadiran->status === 'ditolak')
                                   <span class="badge rounded-pill bg-danger">Ditolak</span>
                                @else
                                   <span class="badge rounded-pill bg-success">Diluluskan</span>
                               @endif
                           </td>
                                <td><a href="/KehadiranTaklimat/{{$kehadiran->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a></td>

                            </tr>
                            @endforeach






                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables with Buttons
        var datatablesButtons = $("#datatables-buttons").DataTable({
            responsive: true,
            lengthChange: !1,
            buttons: ["copy", "print"]
        });
        datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
    });
</script>
@stop
