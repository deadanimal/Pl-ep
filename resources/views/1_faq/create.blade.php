@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <h3> FAQ</h3>
                    
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
                                <input type=text class=form-control name=faq_answer>
                            </div>
                        </div>

                        <button type="submit" class="btn-primary">Hantar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop