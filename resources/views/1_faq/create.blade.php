@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
    Soalan Lazim
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Cipta Soalan Lazim</a></li>
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
                    
                    <form action="/faq" method="POST">
                        @csrf
                        <br> 
                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 "> Seksyen </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type=text class=form-control name=faq_section>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 "> Soalan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type=text class=form-control name=faq_question>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 "> Jawapan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <textarea class=form-control name=faq_answer rows="4" cols="3"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn-primary">Hantar</button>

                    </form>
            </div>
        </div>
    </div>
</div>
@stop