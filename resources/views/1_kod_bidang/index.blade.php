@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
    Kod Bidang
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"> Senarai Kod Bidang Berdaftar</a></li>
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
                            <th>Jenis Kod Bidang</th>
                            <th>Kategori Kod</th>
                            <th>Kod Pengkhususan</th>
                            <th>Diskripsi Kod</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ( $KodBidang as  $KodBidang)
                            <tr>
                                <td>{{$KodBidang->kod_type}}</td>
                                <td> {{$KodBidang->kod_category}}</td>
                                <td>{{$KodBidang->kod_pengkhususan}}</td>
                                <td>{{$KodBidang->kod_description}}</td>            
                                <td class="table-action">
                                    <form method="POST" action="/KodBidang/{{$KodBidang->id}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                        <a href="/KodBidang/{{$KodBidang->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                 </table>

                </div>
            </div>
        </div>



@stop