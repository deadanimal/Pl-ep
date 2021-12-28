@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
    Soalan Lazim
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Senarai Soalan Lazim</a></li>
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
                                    <a href="/faq/{{$faq->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                    <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
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

              