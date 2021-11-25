 @extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3> Senarai Soalan Lazim</h3>
                <div class="card-body">
                    <table id="datatables-1" class="table table-striped" style="widtd:100%">
                        <tr>
                            <thead>
                                <th>Seksyen </th>
                                <th>Soalan </th>
                                <th>Jawapan</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </thead>
                        </tr>
                        <tr>
                            @foreach ($faq as $faq)
                            <tbody>
                                <td>{{$faq->faq_section}}</td>
                                <td>{{$faq->faq_question}}</td>
                                <td>{{$faq->faq_answer}}</td>
                                <td>{{$faq->faq_status}}</td>
                                <td> <a href="/faq/{{$faq->id}}/edit">Kemaskini</a></td>
                
                            </tbody>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop 



