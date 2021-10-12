@extends('layouts.base')

@section('content')

     <h3>Cipta Perolehan Baru</h3>
        </div>
            <div class="card-body">
                <form method="POST" action="/PelanPerancanganPerolehan">
                    @csrf

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-10 ">Jenis Pelan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=text name="pelan_jenis" class="form-control"></div>
                        </div>


                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Tajuk Pelan Perolehan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=text name=pelan_title class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Tahun Pelan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=number name="pelan_year"class="form-control" maxlength="4" placeholder="2021">
                        
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6">Diskripsi Pelan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                           <input type=text name=pelan_description class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6">Kategori Pelan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <select name=pelan_category class="form-control">
                                <option hidden>Sila Pilih</option>
                                <option value="bekalan">Bekalan</option>
                                <option value="perkhidmatan">Perkhidmatan</option>
                                <option value="kerja">Kerja</option>
                                </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Kaedah Perolehan</label></div>
                        <div class="mb-3 col-md-6">
                            <input type=text name="pelan_jenis" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Tarikh Jemputan Pelan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=date name=pelan_invitation_date class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Jumlah Anggaran Pelan </label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=number name=pelan_estimated_amount class="form-control" min="0" value="0" step=".01" placeholder="0.00">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Catatan Pelan</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=text name=pelan_catatan class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Nama Pegawai Pengesah</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input  type=text name=pelan_pengesah class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="col-form-label col-sm-6 ">Nama Pegawai Pelulus</label>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type=text name="pelan_pelulus" class="form-control">
                        </div>
                    </div>
            
                   {{-- <br>Jenis Pelan: <input type=text name="pelan_jenis"> --}}
                   {{-- <br>Tahun Pelan Perolehan: <input type=number name="pelan_year" > --}}
                   {{-- <br>Tajuk Pelan Perolehan: <input type=text name=pelan_title> --}}
                   {{-- <br>Diskripsi Pelan: <input type=text name=pelan_description> --}}
                   {{-- <br>Kategori Pelan: <select name=pelan_category>
                   <option hidden>Sila Pilih</option>
                   <option value="bekalan">Bekalan</option>
                   <option value="perkhidmatan">Perkhidmatan</option>
                   <option value="kerja">Kerja</option>
                   </select> --}}

                   {{-- <br>Kaedah Perolehan:<input type="text" name=pelan_method> --}}
                   {{-- <br>Tarikh Jemputan Pelan: <input type=date name=pelan_invitation_date> --}}
                   {{-- <br>Jumlah Anggaran Pelan: <input type=number name=pelan_estimated_amount> --}}
                   {{-- <br>Catatan Pelan: <input type=text name=pelan_catatan> --}}
                   {{-- pelan_status --}}
                   {{-- <br>Nama Pegawai Pengesah: <input type=text name=pelan_pengesah> --}}
                   {{-- pelan_catatan_pengesah --}}
                   {{-- <br>Nama Pegawai Pelulus: <input type=text name=pelan_pelulus> --}}
                   {{-- pelan_catatan_pelulus 
                   pelan_created_by
                   user_id--}}
                   
                  <div style=float-right>
                   <button class="btn btn-primary" type="submit" name="status_pelan" value="draf">Simpan Sebagai Draf</button> 
                   <button  class="btn btn-success" type="submit" name="status_pelan" value="hantar">Hantar Pelan</button> 
                  </div>
                </form>
            
            </div> 
        </div>
    </div>
</div>

</div>



@stop