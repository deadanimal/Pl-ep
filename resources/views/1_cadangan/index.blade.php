@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
   Cadangan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Senarai Cadangan</a></li>
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
                            <th>Tarikh Mesyuarat</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            @foreach ($Cadangan as $Cadangan)
                            <td>{{$Cadangan->cadangan_mesyuarat_date}}</td>
                            <td class="table-action">
                                <form method="POST" action="/Cadangan/{{$Cadangan->id}}">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                <a href="/Cadangan/{{$Cadangan->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
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

                            
 



@stop