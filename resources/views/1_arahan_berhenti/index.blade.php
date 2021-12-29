@extends('layouts.base')
@section('content')
<div class="header">
    <h1 class="header-title">
Pembekal
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Arahan Memberhentikan</a></li>
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
                            <th>Tarikh Arahan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ArahanMemberhentikan as $ArahanMemberhentikan)
                            <tr>
                                <td> {{$ArahanMemberhentikan->arahan_created_by}}</td>               
                                <td class="table-action">
                                    <form method="POST" action="/ArahanMemberhentikan/{{$ArahanMemberhentikan->id}}">
                                        @method('DELETE')
                                        @csrf
                                    <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                    <a href="/ArahanMemberhentikan/{{$ArahanMemberhentikan->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                    <a href="/ArahanMemberhentikan/{{$ArahanMemberhentikan->id}}"><i class="align-middle fas fa-fw fa-user"></i></a>
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
