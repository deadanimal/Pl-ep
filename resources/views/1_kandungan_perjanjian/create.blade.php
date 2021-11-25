@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <h3>Kandungan Perjanjian </h3>

                    <form method="POST" action="/KandunganPerjanjian" enctype="multipart/form-data">
                    @csrf
                    {{-- kandungan_id --}}
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">  Nama </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="kandungan_nama">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 "> Template Kandungan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                         <input type="file" class="form-control" name="kandungan_template">
                        </div>
                    </div>

                    <br><button type="submit" class="btn-primary">Hantar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
