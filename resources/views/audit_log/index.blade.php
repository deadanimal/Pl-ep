@extends('layouts.base')
@section('content')

<h3> Senarai Audit Log </h3>
<table>
    @foreach ($AuditLog as $AuditLog)
    <tr>      
    <td>    {{$AuditLog->description}} </td>
    </tr>
    @endforeach
</table>

@endsection
