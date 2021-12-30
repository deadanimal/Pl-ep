<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Modern, flexible and responsive Bootstrap 5 admin &amp; dashboard template">
	<meta name="author" content="Bootlab">

	<title>Sistem ePerolehan</title>

	<!-- PICK ONE OF THE STYLES BELOW -->
	<link href="css/modern.css" rel="stylesheet"> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-7');
</script></head>
<main class="main h-100 w-100">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <div class="text-center">
                            <img src="/PL.png" alt="Linda Miller" class="img-fluid rounded-circle" width="30%" height="30%" />
                        </div>
                        <br>
                        <h1 class="h2">Sistem  Pengurusan ePerolehan</h1>
                        <h3>Perbadanan Labuan</h3>
                        <p class="lead">
                Lupa Kata Laluan
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Emel Address -->
                                <div class="mb-3">
											<label>Emel</label>
                                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <div class="text-center mt-3">
                                    <button class="btn btn-lg btn-primary">{{ __('Emel Password Reset Link') }}
                                    </button>
                                </div>
                            </form>

