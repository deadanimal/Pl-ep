@extends('layouts.base')
@section('content')
    
        <div class="card-body">
            <table id="datatables-1" class="table table-striped" style="width:100%">
                <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Kumpulan </th>
                            <th>Jenis</th>
                            <th> </th>
                        </tr>
                </thead>

                 <tbody>
                    @foreach ($Katalog as $Katalog)
                <tr>

                    <td>{{$Katalog->katalog_kategori}}</td>
                    <td>{{$Katalog->katalog_kumpulan}}</td>
                    <td>{{$Katalog->katalog_jenis}}</td>
                    <td><a href="/listkatalog/{{$Katalog->id}}">Paparan Item</a></th>
                    
                @endforeach

                </tr>
            </table>
        </div>

 @endsection
        
