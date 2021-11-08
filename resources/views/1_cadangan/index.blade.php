@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Cadangan</h3>
        
            </div>
            <div class="card-body">
                <table id="datatables-1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tarikh Mesyuarat</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($Cadangan as $Cadangan)
                            <tr>
                                <td>{{$Cadangan->cadangan_mesyuarat_date}}</td>
                                <td> <a href="/Cadangan/{{$Cadangan->id}}/edit">Kemaskini</a></td>
                       
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

                            
 



@stop