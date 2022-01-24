@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

                <h3>Nota Penghantaran</h3>
                <br>
                <form method="POST" action="/PesananPenghantaran" enctype="multipart/form-data">
                @csrf
 
                <div class="row">
                    <div class="mb-3 col-md-6">
                       <label class="col-form-label col-sm-6">Kuantiti Item</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type="number" class="form-control" name="penghantaran_kuantiti">
                    </div>
                </div>

                <div class="row">
                   <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6">Tarikh Penghantaran</label>
                   </div>
                   <div class="mb-3 col-md-6">
                        <input type="date" class="form-control" name="penghantaran_date">
                   </div>
                </div>

                <div align="right"> 
                    <button type="submit" class="btn btn-primary">Hantar</button>
                </div> 
                
            </form>
            </div>
        </div>
    </div>
</div>
@stop


