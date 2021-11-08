@extends('layouts.base')
@section('content')
 
<h1>Bakul Item</h1>

@if ($itemKart)
    @foreach ($itemKart as $itemKart)
         <ul>
            <li>Pembelian Barang ID: {{ $itemKart->id }}
             <a href="/ItemKart/removecart/{{ $itemKart->id }}">Remove Cart </a></li>
        </ul>
    @endforeach
@endif

<a  href="/NotaMinta" class="btn-primary">Hantar</a>

@endsection

