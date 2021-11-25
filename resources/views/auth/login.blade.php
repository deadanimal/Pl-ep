
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Sistem ePerolehan</title>
    <link href="/css/light.css" rel="stylesheet">
	<script src="/js/settings.js"></script>
	<!-- END SETTINGS -->
</head>
        <!-- Session Status -->
        <auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <auth-validation-errors class="mb-4" :errors="$errors" />

        <body class="theme-blue">
            <div class="splash active">
            </div>
        
            <main class="main h-100 w-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-sm-6 col-md-6 col-lg-6 mauto d-table h-100">
                            <div class="d-table-cell align-middle">
                                <div class="text-center mt-4">
                                    <p class="lead">
                                        <img src="/PL.png" alt="Perbadanan Labuan" class="img-fluid rounded-circle" width="40%" height="132" />
                                    </p>
                                    <h1 class="h2">Sistem ePerolehan Perbadanan Labuan</h1>

                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="m-sm-4">
                                            <div class="text-center">
                                            {{-- <img src="/user.png" alt="Linda Miller" class="img-fluid rounded-circle" width="132" height="132" /> --}}
                                            </div>
                                            <br>

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <!-- MYKAD -->
                                            <div class="mb-3">
                                                <label> MYKAD</label>
                                                <input id="user_identity_no" class="form-control form-control-lg" type="text" name="user_identity_no" :value="old('user_identity_no')" required autofocus />
                                            </div>

                                            <!-- Password -->
                                            <div class="mb-3">
                                                <label>Kata Laluan</label>
                                                <input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
                                            </div>

                                            <!-- Remember Me -->
                                            <div class="block mt-4">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>

                                            <div class="flex items-center justify-end mt-4">
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif

                                                <button class="btn btn-lg btn-primary"> Log Masuk  </button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </body>
</html>
                    

        