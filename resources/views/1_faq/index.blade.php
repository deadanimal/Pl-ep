@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Senarai Soalan Lazim</h3>
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped">
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

              