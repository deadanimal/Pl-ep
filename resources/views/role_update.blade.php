@extends('layouts.base')

@section('content')

    <div class="header">
        <h1 class="header-title">
            Pengguna
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">
                        Kemaskini Maklumat Pengguna</a></li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-3 col-xl-2">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tetapan</h5>
                </div>

                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account"
                        role="tab">
                        Maklumat Pengguna
                    </a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password" role="tab">
                        Kata Laluan
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-9 col-xl-10">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="account" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Maklumat Asas</h5>
                        </div>
                        <div class="card-body">
                            <input hidden name="id" value="{{ $user->id }}">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="user_name"
                                            value="{{ $user->user_name }}" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label>Jenis Pengguna</label>
                                    
                                            <select name="jenis" class="form-select" disabled>
                                                <option @if ($user->jenis == 'pekerja') selected @endif value="pekerja">Perbadanan Labuan</option>
                                                <option @if ($user->jenis == 'pembekal') selected @endif value="Pembekal">Pembekal</option>
                                                <option @if ($user->jenis == 'juruaudit') selected @endif value="juruaudit">Juruaudit</option>
                                            </select>
                                    </div>

                                    <div class="mb-3">
                                        <label>No Kad Pengenalan</label>
                                        <input type="text" class="form-control" name="user_identity_no"
                                            value="{{ $user->user_identity_no }}" disabled>
                                    </div>

                                    <div class="mb-3">
                                        <label>Status Pengguna</label>
                                        <input type="text" class="form-control" name="user_status"
                                            value="{{ $user->user_status }}" disabled>
                                            
                                    </div>

                                    <div class="mb-3">
                                        <label>Peranan</label>
                                        @foreach ($user->roles as $role)
                                            <ul>
                                                <li>{{ $role->role_name }}</li>
                                            </ul>
                                        @endforeach
                                    </div>
                                    
                                    

                                </div>
                            </div>
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

                                </div>
                            </div>
                            <h5 class="card-title mb-0">Maklumat Peribadi Pengguna</h5>
                        </div>
                        <div class="card-body">
                            <form action="/Pengguna/{{ $user->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input hidden name="id" value="{{ $user->id }}">

                                <div class="mb-3 col-md-6">
                                    <label for="inputLastName">Emel</label>
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputFirstName">Jenis Pengenalan</label>
                                        <select name="user_jenis_pengenalan" class="form-select">
                                            <option hidden value="">Sila Pilih</option>
                                            <option @if ($user->user_jenis_pengenalan == 'Kad Pengenalan') selected @endif value="Kad Pengenalan">Kad Pengenalan</option>
                                            <option @if ($user->user_jenis_pengenalan == 'Pasport') selected @endif value="Pasport">Pasport</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputLastName">Kewarganegaraan</label>
                                        <input type="text" class="form-control" name="user_kewarganegaraan"
                                            value="{{ $user->user_kewarganegaraan }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputAddress2">Alamat Kediaman</label>
                                    <input type="text" class="form-control" name="user_alamat"
                                        value="{{ $user->user_alamat }}">
                                </div>

                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>Poskod</label>
                                        <input type="number" class="form-control" name=user_poskod
                                            value="{{ $user->user_poskod }}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>Negeri</label>
                                        <select name=user_negeri class="form-select">
                                            <option hidden value="">Sila Pilih</option>
                                            <option @if ($user->user_negeri == 'Johor') selected @endif value='Johor'>Johor</option>
                                            <option @if ($user->user_negeri == 'Kedah') selected @endif value='Kedah'>Kedah</option>
                                            <option @if ($user->user_negeri == 'Kelantan') selected @endif value='Kelantan'>Kelantan</option>
                                            <option @if ($user->user_negeri == 'W.P Kuala Lumpur') selected @endif value='W.P Kuala Lumpur'>W.P Kuala Lumpur
                                            </option>
                                            <option @if ($user->user_negeri == 'W.P Labuan') selected @endif value='W.P Labuan'>W.P Labuan</option>
                                            <option @if ($user->user_negeri == 'Melaka') selected @endif value='Melaka'>Melaka</option>
                                            <option @if ($user->user_negeri == 'Negeri Sembilan') selected @endif value='Negeri Sembilan'>Negeri Sembilan
                                            </option>
                                            <option @if ($user->user_negeri == 'Pahang') selected @endif value='Pahang'>Pahang</option>
                                            <option @if ($user->user_negeri == 'Pulau Pinang') selected @endif value='Pulau Pinang'>Pulau Pinang</option>
                                            <option @if ($user->user_negeri == 'Perlis') selected @endif value="Perlis">Perlis</option>
                                            <option @if ($user->user_negeri == 'Perak') selected @endif value='Perak'>Perak</option>
                                            <option @if ($user->user_negeri == 'W.P Putrajaya') selected @endif value='W.P Putrajaya'>W.P Putrajaya</option>
                                            <option @if ($user->user_negeri == 'Sabah') selected @endif value='Sabah'>Sabah</option>
                                            <option @if ($user->user_negeri == 'Sarawak') selected @endif value='Sarawak'>Sarawak</option>
                                            <option @if ($user->user_negeri == 'Selangor') selected @endif value='Selangor'>Selangor</option>
                                            <option @if ($user->user_negeri == 'Terengganu') selected @endif value='Terengganu'>Terengganu</option>
                                            <option @if ($user->user_negeri == 'Johor') selected @endif value='Johor'>Johor</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label>No Telefon Bimbit</label>
                                        <input type="number" class="form-control" name=user_phone
                                            value="{{ $user->user_phone }}">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label>No Tel Pejabat</label>
                                        <input type="number" class="form-control" name=user_pej
                                            value="{{ $user->user_pej }}">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>

                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="password" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kata Laluan</h5>

                            <form method="POST" action="/edit_password/{{ $user->id }}">
                                {{-- @method('POST') --}}
                                @csrf
                                @method('PUT')
                                {{-- <div class="mb-3">
                                    <label for="inputPasswordCurrent">Kata Laluan Semasa</label>
                                    <input type="password" class="form-control" name="password">
                                </div> --}}
                                <div class="mb-3">
                                    <label for="inputPasswordNew">Kata Laluan Baru</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        @stop
