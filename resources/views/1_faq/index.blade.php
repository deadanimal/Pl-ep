@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
    Soalan Lazim
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Soalan Lazim</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div align="right "> 
                <button class="btn btn-success" onclick="window.location.href='/faq/create'">+Tambah</button>
            </div>
            <div class="card-body">

        
                <table id="datatables-reponsive" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Seksyen </th>
                                <th>Soalan </th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faq as $faq)
                            <tr>
             
                                <td>{{$faq->faq_section}}</td>
                                <td>{{$faq->faq_question}}</td>
                                <td>{{$faq->faq_status}}</td>
                                <td class="table-action">
                                    <form method="POST" action="/faq/{{$faq->id}}">
                                        @method('DELETE')
                                        @csrf
                                    <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                    <a href="/faq/{{$faq->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                              
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

              