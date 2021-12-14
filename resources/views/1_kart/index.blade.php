@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Bakul Item</a></li>
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
 

@if ($itemKart)
    @foreach ($itemKart as $itemKart)
         <ul>
            <li>Pembelian ID: {{ $itemKart->id }}
             <a href="/ItemKart/removecart/{{ $itemKart->id }}">Remove Cart </a></li>
        </ul>
    @endforeach
@endif

<button type=submit class="btn-primary">Hantar</button>

@endsection

