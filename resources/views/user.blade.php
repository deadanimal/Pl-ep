@extends('layouts.base')
@section('content')

<div class="header">
    <h1 class="header-title">
    Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Pendaftaran Pengguna Baharu</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-md-3 col-xl-2">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Profile Settings</h5>
            </div>

            <div class="list-group list-group-flush" role="tablist">
                <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account" role="tab">
                    Account
                </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password" role="tab">
                    Password
                </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
                    Privacy and safety
                </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
                    Email notifications
                </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
                    Web notifications
                </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
                    Widgets
                </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
                    Your data
                </a>
                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#" role="tab">
                    Delete account
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-9 col-xl-10">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="account" role="tabpanel">

                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <a href="#" class="me-1">
                                <i class="align-middle" data-feather="refresh-cw"></i>
                            </a>
                            <div class="d-inline-block dropdown show">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-vertical"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Public info</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="inputUsername">Username</label>
                                        <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputUsername">Biography</label>
                                        <textarea rows="2" class="form-control" id="inputBio"
                                            placeholder="Tell something about yourself"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img alt="Chris Wood" src="img/avatars/avatar.jpg" class="rounded-circle img-responsive mt-2"
                                            width="128" height="128" />
                                        <div class="mt-2">
                                            <span class="btn btn-primary"><i class="fas fa-upload"></i> Upload</span>
                                        </div>
                                        <small>For best results, use an image at least 128px by 128px in .jpg
                                            format</small>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <a href="#" class="me-1">
                                <i class="align-middle" data-feather="refresh-cw"></i>
                            </a>
                            <div class="d-inline-block dropdown show">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-vertical"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Private info</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="inputFirstName">First name</label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="First name">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="inputLastName">Last name</label>
                                    <input type="text" class="form-control" id="inputLastName" placeholder="Last name">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="mb-3">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>

                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="password" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Password</h5>

                        <form>
                            <div class="mb-3">
                                <label for="inputPasswordCurrent">Current password</label>
                                <input type="password" class="form-control" id="inputPasswordCurrent">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mb-3">
                                <label for="inputPasswordNew">New password</label>
                                <input type="password" class="form-control" id="inputPasswordNew">
                            </div>
                            <div class="mb-3">
                                <label for="inputPasswordNew2">Verify password</label>
                                <input type="password" class="form-control" id="inputPasswordNew2">
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
    
@endsection