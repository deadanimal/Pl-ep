@extends('layouts.base')
@section('content')

<div class="header">
    <h1 class="header-title">
Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Audit Log</a></li>
        </ol>
    </nav>
</div>
    <style>
        .c {
            text-align: justify;
        }
    </style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body">
                <table id="datatables-buttons" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Tarikh</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($AuditLog as $AuditLog)
                        <tr>  
                            <td class=c>{{$AuditLog->description}}</td>
                            <td><small>{{date('d/m/Y H:i', strtotime($AuditLog->created_at))}}</small></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables with Buttons
			var datatablesButtons = $("#datatables-buttons").DataTable({
				responsive: true,
				lengthChange: !1,
				buttons: ["copy", "print"]
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
		});
	</script>
    @stop
