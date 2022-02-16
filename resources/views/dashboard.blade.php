@extends('layouts.base')
@section('content')

<link href="css/modern.css" rel="stylesheet">
<script src="js/settings.js"></script>
<div class="header">
    <h1 class="header-title">
        Welcome back, {{Auth::user()->user_name}}
    </h1>
    {{-- <p class="header-subtitle">You have 24 new messages and 5 new notifications</p> --}}
</div>


@stop
