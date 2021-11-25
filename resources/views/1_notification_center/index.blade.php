@extends('layouts.base')
@section('content')
    
<h3> Sistem Notifikasi </h3>


   
    <ul>
        @foreach ($NotificationCenter as $NotificationCenter)
        <li>{{$NotificationCenter->noti_type}} {{$NotificationCenter->noti_template}} {{$NotificationCenter->noti_subject}} {{$NotificationCenter->noti_content}}</li>
   
    @endforeach


@endsection