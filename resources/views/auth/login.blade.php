
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
<!-- SET YOUR THEME -->

        <!-- Session Status -->
        <auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <auth-validation-errors class="mb-4" :errors="$errors" />

	<main class="main h-100 w-100">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<div class="text-center">
								<img src="/PL.png" alt="Linda Miller" class="img-fluid rounded-circle" width="132" height="132" />
							</div>
							<br>
							<h1 class="h2">Sistem ePerolehan</h1>
							<p class="lead">
								Log Masuk Sistem ePerolehan
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">

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
												<span class="ml-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
											</label>
										</div>

										<div class="flex items-center justify-end mt-4">
											@if (Route::has('password.request'))
												<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
													{{ __('Lupa Kata Laluan?') }}
												</a>
											@endif

										</div>
										<div class="text-center mt-3">
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

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="js/app.js"></script>

</body>

</html>