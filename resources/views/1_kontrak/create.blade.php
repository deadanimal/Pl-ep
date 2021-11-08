@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <h3>Kontrak</h3>
                    <form method="POST" action="/Kontrak">
                        @csrf

                    {{-- 
                        kontrak_id
                    sst_id
                    kontrak_no_fizikal --}}
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">No fizikal</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="kontrak_no_fizikal">
                        </div>
                    </div>
                

                     <div class="row">
                         <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Tempoh Penghantaran</label>
                         </div>
                         <div class="mb-3 col-md-6">
                             <input type="number" class="form-control" name="kontrak_tempoh_penghantaran">
                         </div>
                     </div>


                     <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Pilihan Kontrak</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="kontrak_pilihan">
                        </div>
                     </div>
                    {{-- pembekal_id
                    pst_id --}}

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">No Rujukan Bon </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="kontrak_no_rujukan_bon">
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Institusi Kewangan </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="kontrak_institusi_kewangan">
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Amaun (RM)</label>
                        </div>
                        <div class="mb-3 col-md-6">
                             <input type="number" class="form-control" name="kontrak_amaun">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Tarikh Kuatkuasa</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="date" class="form-control" name="kontrak_tarikh_kuatkuasa">
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Tarikh Tamat Kontrak </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="date" class="form-control" name="kontrak_tarikh_tamat">
                        </div>
                    </div>

{{-- 
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">File Bon </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="file" class="form-control" name="kontrak_file_bon">
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Pelulus Kontrak</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="kontrak_pelulus">
                        </div>
                    </div>
                        {{-- <br>tempoh_id --}}


                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Catatan Pelulus</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="text" class="form-control" name="kontrak_catatan_pelulus">
                        </div>
                    </div>
                    {{-- kontrak_created_by
                    kontrak_created_date
                    kontrak_updated_by
                    kontrak_updated_date
                    user_id --}}

                    <br> <button type="submit" class="btn-primary">Hantar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
