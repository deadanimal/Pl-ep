@extends('layouts.base')



    <h3>Pendaftaran Pembekal</h3>
    </div>
    <div class="card-body">
        <div class="col-12 col-xxl-12">
            <div class="col-12">
                     <form method="POST" action="/Pembekal" enctype="multipart/form-data" id="smartwizard-validation" class="wizard wizard-primary">
                        @csrf
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="#validation-step-1">Maklumat Syarikat<br /><small></small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#validation-step-2">Maklumat Pemilik<br /><small></small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#validation-step-3">Maklumat Cukai Barang & Perkhidmatan<br /><small></small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#validation-step-4">Maklumat Bank<br /><small></small></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="validation-step-1" class="tab-pane" role="tabpanel">

                            <div class="form-group">
                                <label class="form-label">User name
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-userName" type="text" class="form-control required">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Password
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-password" type="text" class="form-control required">
                            </div>
                            <div class="form-group mb-0">
                                <label class="form-label">Confirm Password
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-confirm" type="text" class="form-control required">
                            </div>
                        </div>

                        <div id="validation-step-2" class="tab-pane" role="tabpanel">
                            <div class="form-group">
                                <label class="form-label">First name
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-name" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last name
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-surname" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-email" type="text" class="form-control required email">
                            </div>
                            <div class="form-group mb-0">
                                <label class="form-label">Address</label>
                                <input name="wizard-address" type="text" class="form-control">
                            </div>
                        </div>


                        <div id="validation-step-2" class="tab-pane" role="tabpanel">
                            <div class="form-group">
                                <label class="form-label">First name
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-name" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last name
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-surname" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-email" type="text" class="form-control required email">
                            </div>
                            <div class="form-group mb-0">
                                <label class="form-label">Address</label>
                                <input name="wizard-address" type="text" class="form-control">
                            </div>
                        </div>

                        <div id="validation-step-2" class="tab-pane" role="tabpanel">
                            <div class="form-group">
                                <label class="form-label">First name
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-name" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last name
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-surname" type="text" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email
                                    <span class="text-danger">*</span>
                                </label>
                                <input name="wizard-email" type="text" class="form-control required email">
                            </div>
                            <div class="form-group mb-0">
                                <label class="form-label">Address</label>
                                <input name="wizard-address" type="text" class="form-control">
                            </div>
                        </div>



                        <div id="validation-step-3" class="tab-pane" role="tabpanel">
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-label">I agree with the Terms and Conditions</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

                            @stop
                            