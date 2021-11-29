@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <h3> FAQ</h3>
                    
                    <form action="/faq/{{$Faq->id}}" method="POST">
                        @csrf
                        @method('PUT')

                        <br> 
                    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 "> Seksyen </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type=text class=form-control name=faq_section value="{{$Faq->faq_section}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 "> Soalan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type=text class=form-control name=faq_question  value="{{$Faq->faq_question}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 "> Jawapan </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type=text class=form-control name=faq_answer  value="{{$Faq->faq_answer}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="col-form-label col-sm-6 "> Status </label>
                            </div>
                            <div class="mb-3 col-md-6">
                                <select  class=form-control name="faq_status">
                                    <option @if ($Faq->status == 'aktif') selected @endif value="aktif">Aktif</option>
                                    <option @if ($Faq->status == 'tidak aktif') selected @endif value=" tidak aktif">Tidak Aktif</option>
                                </select>
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