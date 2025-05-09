<!DOCTYPE html>
<html lang="en">


        <head>
            <meta charset="utf-8">
            <link rel="icon" type="image/png" href="/PL.png">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Sistem ePerolehan &amp; dashboard template">
            <meta name="author" content="Bootlab">

		<link href="css/modern.css" rel="stylesheet">

		<title>Sistem ePerolehan</title>

		<style>
			.a {
  				padding: 50px;

			}
		</style>

	</head>

<body>

	<nav class="navbar navbar-expand navbar-dark absolute-top w-100 py-1">
		<div class="container">
			<a class="navbar-brand fw-bold" href="/" >
				<img src="/pl-2.png" width="50%"  class="a;">
			</a>
		</div>
	</nav>
	<section class="pt-3 pb-3 landing-bg text-white overflow-hidden">
		<div class="container py-1">
			<div class="row">
				<div class="col-xl-12 mx-auto">
					<div class="row">
						<div class="col-md-12 col-xl-8 text-center mx-auto">
								<h4 class="display-4 fw-bold mb-3 text-white">Sistem Pengurusan ePerolehan</h4>
								<h4 class="display-4 fw-bold mb-3 text-white">Perbadanan Labuan</h4>
								{{-- <p class="lead fw-light mb-3 landing-text">Perbadanan Labuan</p> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="py-1 bg-white landing-nav">
		<div class="container align-left">
			<a href="/" class="btn btn-lg btn-pill btn-primary">Utama</a>
			<a href="/login" class="btn btn-lg btn-pill btn-link text-dark">Log Masuk Pengguna</a>
			{{-- <a target="_blank" href="docs-changelog.html" class="btn btn-lg btn-pill btn-link text-dark">Changelog</a> --}}
			<a  href="#" class="btn btn-lg btn-pill btn-link text-dark">Mengenai eP</a>
			<a  href="#" class="btn btn-lg btn-pill btn-link text-dark">Perkhidmatan Tambahan</a>
			<a  href="#" class="btn btn-lg btn-pill btn-link text-dark">Bantuan dan Rujukan</a>
			<a  href="#" class="btn btn-lg btn-pill btn-link text-dark">Muat Turun</a>
			<a href="#faq" class="btn btn-lg btn-pill btn-link text-dark">Soalan Lazim</a>
		</div>
	</div>

	<section class="py-3">
		<div class="container">
			<div class="mb-4 text-center">
				<h2>Menu</h2>
				{{-- <p class="text-muted">Multiple color schemes & dashboard layouts available to make this template your very own.</p> --}}
			</div>

			<div class="row pb-3">
				<div class="col-md-6 col-lg-4 text-center">
					<a class="mb-3 card overflow-hidden" href="/Pembekal/create" target="_blank">
						<div class="px-4 pt-4">
							<img src="/register.png" class="img-fluid card-img-hover" width=40% height="40"/>
						</div>
					</a>
					<h4>Pendaftaran Pembekal Baru</h4>
				</div>
				<div class="col-md-6 col-lg-4 text-center">
					<a class="mb-3 card overflow-hidden" href="/SenaraiKatalog" target="_blank">
						<div class="px-4 pt-4">
							<img src="/catalogs.png" class="img-fluid card-img-hover" width="40%" height=40%/>
						</div>
					</a>
					<h4>Carian Item & Katalog</h4>
				</div>
				<div class="col-md-6 col-lg-4 text-center">
					<a class="mb-3 card overflow-hidden" href="/senaraisebutharga" target="_blank">
						<div class="px-4 pt-4">
							<img src="/documents.png" class="img-fluid card-img-hover landing-img" width="40%" height=40%/>
						</div>
					</a>
					<h4>Notis Sebutharga / Tender</h4>
				</div>
			</div>
		</div>
	</section>

	<section class="py-6 bg-white">
		<div class="container">

			<div class="mb-4 text-center">
				<h2>Soalan Lazim</h2>
			</div>

		<div class="row">
			<div class="col-12 col-lg-12">
				<div class="accordion" id="accordionExample">

					<div class="card">
						@foreach ($faq as $faq)
						<div class="card-header" id="headingThree">
							<h5 class="card-title my-2">
								<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
									aria-controls="collapseOne">
									{{$faq->faq_question}}
								</a>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="card-body">
								{{$faq->faq_answer}}
							</div>

						</div>
					</div>
					@endforeach

				</div>

			</div>

	</div>
	 </section>



	<footer class="footer">
		<div class="container-fluid">
			<div class="row text-muted">
				<div class="col-8 text-start">
					<ul class="list-inline">
						<li class="list-inline-item">
							<p>Sistem Pengurusan ePerolehan</p>
						</li>
						{{-- <li class="list-inline-item">
							<a class="text-muted" href="#">Privacy</a>
						</li>
						<li class="list-inline-item">
							<a class="text-muted" href="#">Terms of Service</a>
						</li>
						<li class="list-inline-item">
							<a class="text-muted" href="#">Contact</a>
						</li> --}}
					</ul>
				</div>
				<div class="col-4 text-end">
					<p class="mb-0">
						&copy; 2021-Perbadanan Labuan</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<svg width="0" height="0" style="position:absolute">
		<defs>
			<symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
				<path
					d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
				</path>
			</symbol>
		</defs>
	</svg>
	<script src="/js/app.js"></script>

</body>

</html>
