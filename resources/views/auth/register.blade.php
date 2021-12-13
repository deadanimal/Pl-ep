@extends('layouts.base')

@section('content')
    
<h3>Pendaftaran Pengguna</h3>

        <x-guest-layout>
            <x-auth-card>
                <x-slot name="logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </x-slot>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')" />
                        <x-input id="name" class="form-control" type="text" name="user_name" :value="old('user_name')" required autofocus />
                    </div>

                    <div>
                        <x-label for="MyKad" :value="__('No MyKad')" />

                        <x-input id="ic" class="form-control" type="text" name="user_identity_no" :value="old('user_identity_no')"  autofocus />
                    </div>

                    <div>
                        <x-label for="Jenis Pengguna" :value="__('Jenis')"/>
                        <select name="jenis" class="form-control" required autofocus />
                            <option value="Pekerja">Staff PL</option>
                            <option value="Pembekal">Pembekal</option>
                            <option value="Juruaudit">Juruaudit</option>
                        </select>
                        {{-- <x-input id="jenis_user" class="form-control" type="text" name="jenis_user" :value="old('jenis_user')" required autofocus /> --}}
                    </div>

                    <!-- Emel Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Emel')" />

                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div>
                        <x-label for="Roles" :value="__('Roles')"/>
                        <select name="roles" class="form-control" required autofocus >
                            <option hidden>SILA PILIH</option>
                                @foreach($role as  $role)
                            <option value="{{$role->id}}">{{$role->role_name}}</option>
                                @endforeach 
                        </select>
                        {{-- <x-input id="jenis_user" class="form-control" type="text" name="jenis_user" :value="old('jenis_user')" required autofocus /> --}}
                    </div>



                    {{-- <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="user_password" class="form-control"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>  

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="form-control"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>  --}}

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </x-auth-card>
        </x-guest-layout>
        @stop