@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
    Soalan Lazim
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kemaskini Soalan Lazim</a></li>
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
                    
                    <form action="/faq/{{$Faq->id}}" method="POST">
                        @csrf
                        @method('PUT')

                        <br> 
                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> Seksyen </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type=text class=form-control name=faq_section value="{{$Faq->faq_section}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> Soalan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <textarea class=form-control name=faq_question rows="4" cols="3">{{$Faq->faq_question}}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> Jawapan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <textarea class=form-control name=faq_answer rows="4" cols="3">{{$Faq->faq_answer}}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                               <label class="col-form-label col-sm-6"> Status </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select  class=form-select name="faq_status">
                                    <option @if ($Faq->status == 'aktif') selected @endif value="aktif">Aktif</option>
                                    <option @if ($Faq->status == 'tidak aktif') selected @endif value=" tidak aktif">Tidak Aktif</option>
                                </select>
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