<!DOCTYPE html>
<html class="no-js" lang="en-US">

	<head>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Title -->
		<title>Naxos - App Landing Page Template</title>

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">

		<!-- Google web font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,700">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{asset('frontend/library/bootstrap/css/bootstrap.min.css')}}">

		<!-- Font awesome -->
		<link rel="stylesheet" href="{{asset('frontend/library/fontawesome/css/all.min.css')}}">

		<!-- Linea icons -->
		<link rel="stylesheet" href="{{asset('frontend/library/linea/arrows/styles.css')}}" />
		<link rel="stylesheet" href="{{asset('frontend/library/linea/basic/styles.css')}}" />
		<link rel="stylesheet" href="{{asset('frontend/library/linea/ecommerce/styles.css')}}" />
        <link rel="stylesheet" href="{{asset('frontend/library/linea/software/styles.css')}}" />
        <link rel="stylesheet" href="{{asset('frontend/library/linea/weather/styles.css')}}" />

		<!-- Animate -->
		<link rel="stylesheet" href="{{asset('frontend/library/animate/animate.css')}}">

		<!-- Lightcase -->
		<link rel="stylesheet" href="{{asset('frontend/library/lightcase/css/lightcase.css')}}">

		<!-- Swiper -->
		<link rel="stylesheet" href="{{asset('frontend/library/swiper/swiper-bundle.min.css')}}">

		<!-- Owl carousel -->
		<link rel="stylesheet" href="{{asset('frontend/library/owlcarousel/owl.carousel.min.css')}}">

		<!-- Slick carousel -->
		<link rel="stylesheet" href="{{asset('frontend/library/slick/slick.css')}}">

		<!-- Magnific popup -->
		<link rel="stylesheet" href="{{asset('frontend/library/magnificpopup/magnific-popup.css')}}">

		<!-- YTPlayer -->
		<link rel="stylesheet" href="{{asset('frontend/library/ytplayer/css/jquery.mb.ytplayer.min.css')}}">

		<!-- Stylesheet -->
		<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/media.css')}}">

		<!-- Color schema -->
		<link rel="stylesheet" href="{{asset('frontend/colors/blue.css')}}" class="colors">

	</head>

	<body>

		<!-- Loader -->
		<div class="page-loader">
			<div class="progress"></div>
		</div>

		<!-- Header -->
		<header id="top-page" class="header">

			<!-- Main menu -->
			<div id="mainNav" class="main-menu-area animated">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-12 col-lg-2 d-flex justify-content-between align-items-center">

							<!-- Logo -->
							<div class="logo">

								<a class="navbar-brand navbar-brand1" href="image.html">
									<img src="{{ asset('frontend/images/logo-white.png') }}" alt="Naxos" data-rjs="2" />
								</a>

								<a class="navbar-brand navbar-brand2" href="image.html">
									<img src="{{ asset('frontend/images/logo.png') }}" alt="Naxos" data-rjs="2" />
								</a>

							</div>

							<!-- Burger menu -->
							<div class="menu-bar d-lg-none">
								<span></span>
								<span></span>
								<span></span>
							</div>

						</div>

						<div class="op-mobile-menu col-lg-10 p-0 d-lg-flex align-items-center justify-content-end">

							<!-- Mobile menu -->
							<div class="m-menu-header d-flex justify-content-between align-items-center d-lg-none">

								<!-- Logo -->
								<a href="#" class="logo">
									<img src="{{ asset('frontend/images/logo.png') }}" alt="Naxos" data-rjs="2" />
								</a>

								<!-- Close button -->
								<span class="close-button"></span>

							</div>

							<!-- Items -->
							<ul class="nav-menu d-lg-flex flex-wrap list-unstyled justify-content-center">

								<li class="nav-item">
									<a class="nav-link js-scroll-trigger active" href="#top-page">
										<span>Home</span>
									</a>
								</li>

                                <li class="nav-item">
									<a class="nav-link js-scroll-trigger" href="#pricing">
										<span>Pricing</span>
									</a>
								</li>

								<li class="nav-item">
									<a class="nav-link js-scroll-trigger" href="#features">
										<span>Features</span>
									</a>
								</li>

								<li class="nav-item">
									<a class="nav-link js-scroll-trigger" href="#screenshots">
										<span>Screenshots</span>
									</a>
								</li>

								<li class="nav-item">
									<a class="nav-link js-scroll-trigger" href="#support">
										<span>Support</span>
									</a>
								</li>

								<li class="nav-item">
									<a class="nav-link js-scroll-trigger" href="#contact">
										<span>Contact</span>
									</a>
								</li>

                                @auth

								<li class="nav-item">
									<a href="#" class="nav-link js-scroll-trigger">
										Halo, {{ Auth::user()->name }}!
									</a>
								</li>

                                <li>
                                    <a href="#" class="nav-link js-scroll-trigger" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Log Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </li>

								{{-- <li class="nav-item dropdown no-arrow">
									<a class="nav-link" href="{{ route('login') }}">
										<span>Halo, {{ Auth::user()->name }}</span>
									</a>
								</li> --}}


								@else

								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">
										<span>Login</span>
									</a>
								</li>

                                <li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">
										<span>Daftar</span>
									</a>
								</li>

								@endauth



							</ul>

						</div>

					</div>
				</div>
			</div>

		</header>
		
		<!-- Banner -->
		<section id="home" class="banner image-bg">

			<!-- Container -->
			<div class="container">

				<div class="row align-items-center">

					<!-- Content -->
					<div class="col-12 col-lg-6 res-margin">

						<!-- Banner text -->
						<div class="banner-text">

							<h1 class="wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0s">
								Partner Perjalanan<br>Terbaik Anda
							</h1>

							<p class="wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.3s">
								SWJP menawarkan berbagai pilihan paket perjalanan untuk kenyamanan perjalananmu
							</p>

							{{-- <div class="button-store wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.6s">

								<a href="#" class="custom-btn d-inline-flex align-items-center m-2 m-sm-0 me-sm-3">
									<i class="fab fa-google-play"></i><p>Available on<span>Google Play</span></p>
								</a>

								<a href="#" class="custom-btn d-inline-flex align-items-center m-2 m-sm-0">
									<i class="fab fa-apple"></i><p>Download on<span>App Store</span></p>
								</a>

							</div> --}}

						</div>

					</div>

					<!-- Image -->
					<div class="col-12 col-lg-6">

						<div class="banner-image wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.3s">
							<img class="bounce-effect" src="{{ asset('frontend/images/mainImage.png') }}" alt="" />
						</div>

					</div>

				</div>

			</div>

			<!-- Wave effect -->
			<div class="wave-effect wave-anim">

                <div class="waves-shape shape-one">
                    <div class="wave wave-one"></div>
                </div>

                <div class="waves-shape shape-two">
                    <div class="wave wave-two"></div>
                </div>

                <div class="waves-shape shape-three">
                    <div class="wave wave-three"></div>
                </div>

            </div>

		</section>

		<!-- Clients -->
		<section id="clients" class="section-box bg-grey">

			<!-- Container -->
			<div class="container">

				<div class="row">

					<div class="clients-slider owl-carousel owl-theme">

						<!-- Client 1 -->
						<div class="client">
							<a href="#"><img src="{{ asset('frontend/images/clients/citii.png') }}" alt="Client 1"></a>
						</div>

						<!-- Client 2 -->
						<div class="client">
							<a href="#"><img src="{{ asset('frontend/images/clients/garuda.png') }}"  alt="Client 2"></a>
						</div>

						<!-- Client 3 -->
						<div class="client">
							<a href="#"><img src="{{ asset('frontend/images/clients/indomal.png') }}"  alt="Client 3"></a>
						</div>

						<!-- Client 4 -->
						<div class="client">
							<a href="#"><img src="{{ asset('frontend/images/clients/lion.png') }}"  alt="Client 4"></a>
						</div>

						<!-- Client 5 -->
						<div class="client">
							<a href="#"><img src="{{ asset('frontend/images/clients/sriwijaya.png') }}"  alt="Client 5"></a>
						</div>

						<!-- Client 6 -->
						<div class="client">
							<a href="#"><img src="{{ asset('frontend/images/clients/airasia.png') }}"  alt="Client 6"></a>
						</div>

						<!-- Client 7 -->
						<div class="client">
							<a href="#"><img src="{{ asset('frontend/images/clients/batik.png') }}"  alt="Client 7"></a>
						</div>

						<!-- Client 8 -->
						<div class="client">
							<a href="#"><img src="{{ asset('frontend/images/clients/damri.png') }}"  alt="Client 8"></a>
						</div>

					</div>

				</div>

			</div>

		</section>

        <!-- Pricing -->
		<section id="pricing" class="bg-grey">

			<!-- Container -->
			<div class="container">

				<!-- Section title -->
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6">

						<div class="section-title text-center">
							<h3>Paket Perjalanan</h3>
							<p>Pilih paket perjalananmu atau kamu juga bisa buat paket perjalananmu sendiri</p>
                        </div>

					</div>
				</div>

				<div class="row align-items-center pricing-plans">

					<!-- Plan 1 -->
					<div class="col-12 col-lg-4 res-margin">

                        <div class="price-table">

                            <div class="icon icon-software-layers2"></div>
                            <h3 class="plan-type">Standard</h3>
                            <h2 class="plan-price">$19/month</h2>

                            <ul class="list-unstyled plan-list">
                                <li>50 GB Disk Space</li>
                                <li>Unlimited Bandwidth</li>
                                <li>5 MySQL Database</li>
                                <li>3 FTP Users</li>
                                <li>Free Domain</li>
                            </ul>

                            <a class="btn" href="#">Purchase</a>

                        </div>

					</div>

					<!-- Plan 2 -->
					<div class="col-12 col-lg-4 res-margin">

                        <div class="price-table plan-popular mb-4 mb-sm-5 mb-lg-0">

                            <div class="icon icon-basic-heart"></div>
                            <h3 class="plan-type">Paket Dumai-Malaka</h3>
                            <h2 class="plan-price">Rp. 2.900.000</h2>

                            <ul class="list-unstyled plan-list">
                                <li>Bus Pariwisata</li>
                                <li>Hotel 2 Malam di KL</li>
                                <li>Makan Sesuai Jadwal</li>
                                <li>Guide and Tour Travel</li>
                                <li>Tiket Cabel Car</li>
                                <li>Tiket Ferry PP dan Boarding Pass</li>
                            </ul>

                            <a class="btn" href="#">Pilih Paket</a>

                            <div class="card-ribbon">
                                <span>Popular</span>
                            </div>

                        </div>

					</div>

					<!-- Plan 3 -->
					<div class="col-12 col-lg-4">

                        <div class="price-table">

                            <div class="icon icon-weather-sun"></div>
                            <h3 class="plan-type">Business</h3>
                            <h2 class="plan-price">$39/month</h2>

                            <ul class="list-unstyled plan-list">
                                <li>Unlimited Disk Space</li>
                                <li>Unlimited Bandwidth</li>
                                <li>Unlimited MySQL Database</li>
                                <li>Unlimited FTP Users</li>
                                <li>Unlimited Domains</li>
                            </ul>

                            <a class="btn" href="#">Purchase</a>

                        </div>

					</div>



				</div>

                <!-- Mobile phone -->
                <div class="row">

					<div class="col-12 col-lg-8 offset-lg-2 mobile-phone wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.9s">
						<img src="{{ ('frontend/images/ilus/pesawat.svg') }}" alt="" />
					</div>

				</div>

			</div>

		</section>

		{{-- <!-- Features -->
		<section id="features">

			<!-- Container -->
			<div class="container">

				<!-- Section title -->
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6">

						<div class="section-title text-center">
							<h3>Banyak Keuntungan</h3>
							<p>Banyak keuntungan yang bisa kamu dapatkan di SWJP</p>
						</div>

					</div>
				</div>

				<div class="row d-flex align-items-center">

					<!-- Left -->
					<div class="col-12 col-md-6 col-lg-4">

						<ul class="features-item">

							<!-- Feature box -->
							<li>
								<div class="feature-box d-flex">

									<!-- Box icon -->
									<div class="box-icon">
										<div class="icon icon-basic-gear"></div>

									</div>

									<!-- Box Text -->
									<div class="box-text align-self-center align-self-md-start">
										<h4>Mudahnya Pesan Tiket dan Hotel</h4>
										<p>Pesan tiket sekaligus hotel dengan mudah dan cepat. Tidak perlu risau, hanya dengan satu sentuhan jari, tiket dan hotel yang kamu butuhkan bisa didapatkan dengan mudah.</p>
									</div>

								</div>
							</li>

							<!-- Feature box -->
							<li>
								<div class="feature-box d-flex">

									<!-- Box icon -->
									<div class="box-icon">
										<div class="icon icon-basic-lock"></div>
									</div>

									<!-- Box Text -->
									<div class="box-text align-self-center align-self-md-start">
										<h4>Banyak Pilihan Produk Terbaik</h4>
										<p>Ada banyak pilihan maskapai dengan rute terlengkap ke seluruh dunia. Tersedia juga banyak pilihan hotel di Asia. Kamu juga bisa cari tiket kereta ke berbagai rute, sewa mobil, dan pesan tiket hiburan.</p>
									</div>

								</div>
							</li>

							<!-- Feature box -->
							<li>
								<div class="feature-box d-flex">

									<!-- Box icon -->
									<div class="box-icon">
										<div class="icon icon-basic-message-txt"></div>
									</div>

									<!-- Box Text -->
									<div class="box-text align-self-center align-self-md-start">
										<h4>Tour Guide Berpengalaman</h4>
										<p>Tour Guide di SWJP telah melalui seleksi ketat dan siap membimbing perjalananmu kemana aja</p>
									</div>

								</div>
							</li>

						</ul>
					</div>

					<!-- Center -->
					<div class="col-12 col-lg-4 d-none d-lg-block">
						<div class="features-thumb text-center">
							<img src="{{ asset('frontend/images/ilus/traveler.svg') }}" alt="" />
						</div>
					</div>

					<!-- Right -->
					<div class="col-12 col-md-6 col-lg-4">

						<ul class="features-item">

							<!-- Feature box -->
							<li>
								<div class="feature-box d-flex">

									<!-- Box icon -->
									<div class="box-icon">
										<div class="icon icon-basic-share"></div>
									</div>

									<!-- Box Text -->
									<div class="box-text align-self-center align-self-md-start">
										<h4>24/7 Customer Care</h4>
										<p>Melalui pelayanan 24/7 Customer Care, kami akan selalu ada buat kamu. Dapatkan bantuan untuk pemesanan hotel dan tiketmu dengan pelayanan 24/7 Customer Care</p>
									</div>

								</div>
							</li>

							<!-- Feature box -->
							<li>
								<div class="feature-box d-flex">

									<!-- Box icon -->
									<div class="box-icon">
										<div class="icon icon-basic-sheet-multiple"></div>
									</div>

									<!-- Box Text -->
									<div class="box-text align-self-center align-self-md-start">
										<h4>Merge Files</h4>
										<p>Semper a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus velna culpa expedita.</p>
									</div>

								</div>
							</li>

							<!-- Feature box -->
							<li>
								<div class="feature-box d-flex">

									<!-- Box icon -->
									<div class="box-icon">
										<div class="icon icon-basic-alarm"></div>
									</div>

									<!-- Box Text -->
									<div class="box-text align-self-center align-self-md-start">
										<h4>Action Reminder</h4>
										<p>Semper a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus velna culpa expedita.</p>
									</div>

								</div>
							</li>

						</ul>
					</div>

				</div>

			</div>

		</section> --}}

		{{-- <!-- Parallax video -->
		<section id="parallax-video" class="parallax" data-image="images/parallax/video.jpg">

			<!-- Overlay -->
			<div class="overlay"></div>

			<!-- Container -->
			<div class="container">

				<div class="row">

					<div class="video-btn wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0s">

						<!-- Play button -->
						<a href="https://www.youtube.com/embed/hs1HoLs4SD0" data-rel="lightcase" class="play-btn">
							<i class="fas fa-play"></i>
						</a>

						<span class="video-text">Watch This Video</span>

					</div>

				</div>

			</div>

		</section> --}}

		<!-- Services -->
		<section id="features">

			<!-- Container -->
			<div class="container mt-3">

				<!-- Section title -->
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6">

						<div class="section-title text-center">
							<h3>Banyak Keuntungan</h3>
							<p>Banyak keuntungan yang bisa kamu dapatkan di SWJP</p>
						</div>

					</div>
				</div>

				<div class="row">

					<!-- Service 1 -->
					<div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0">
						<div class="service-single">

							<div class="icon icon-basic-server2"></div>

							<h5>Tour Guide Berpengalaman</h5>
							<p>Tour Guide di SWJP telah melalui seleksi ketat dan siap menemani perjalananmu kemanapun</p>

						</div>
					</div>

					<!-- Service 2 -->
					<div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="service-single">

							<div class="icon icon-basic-headset"></div>

							<h5>24/7 Support</h5>
							<p>Customer Service SWJP siap melayani keluhan traveler kapanpun dan dimanapun</p>

						</div>
					</div>

					<!-- Service 3 -->
					<div class="col-12 col-lg-4 res-margin wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.6s">
						<div class="service-single">

							<div class="icon icon-software-pen"></div>

							<h5>Buat Paketmu Sendiri</h5>
							<p>Kamu bebas membuat paket perjalananmu sendiri</p>

						</div>
					</div>

				</div>

			</div>

		</section>

		{{-- <!-- Overview -->
		<section id="overview" class="bg-grey">

			<!-- Container -->
			<div class="container">

				<!-- Track time -->
				<div class="row">

					<!-- Content -->
					<div class="col-12 col-lg-6 offset-lg-1 order-lg-last res-margin">

						<!-- Section title -->
						<div class="section-title text-center text-lg-start">
							<h3>Track Time From Anywhere</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
						</div>

						<!-- Items -->
						<div class="overview-item">

							<!-- Item 1 -->
							<div class="overview-box d-flex flex-wrap">

								<!-- Icon -->
								<div class="icon icon-basic-compass"></div>

								<!-- Content -->
								<div class="content">
									<h6 class="font-weight-bold mb-2 mt-0">Easy to Use</h6>
									<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur</p>
								</div>

							</div>

							<!-- Item 2 -->
							<div class="overview-box d-flex flex-wrap">

								<!-- Icon -->
								<div class="icon icon-basic-helm"></div>

								<!-- Content -->
								<div class="content">
									<h6 class="font-weight-bold mb-2 mt-0">Monitor &amp; Manage</h6>
									<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur</p>
								</div>

							</div>

							<!-- Item 3 -->
							<div class="overview-box d-flex flex-wrap">

								<!-- Icon -->
								<div class="icon icon-basic-link"></div>

								<!-- Content -->
								<div class="content">
									<h6 class="font-weight-bold mb-2 mt-0">Stay Connected</h6>
									<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur</p>
								</div>

							</div>

						</div>

					</div>

					<!-- Image -->
					<div class="col-12 col-lg-5 order-lg-first text-sm-center">
						<img src="{{ asset('frontend/images/overview/track-time.png') }}" alt="" />
					</div>

				</div>

				<div class="empty-100"></div>

				<!-- Daily schedule -->
				<div class="row">

					<!-- Content -->
					<div class="col-12 col-lg-6 res-margin">

						<!-- Section title -->
						<div class="section-title text-center text-lg-start">
							<h3>Built For Your Daily Schedule</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
						</div>

						<!-- List -->
						<ul class="overview-list">

							<li>
								<p><i class="fa-li fas fa-check"></i> Ut fringilla est at nunc suscipit dictum. Nulla facilisi. Phasellus dignissim nibh eget imperdiet venenatis.</p>
							</li>

							<li>
								<p><i class="fa-li fas fa-check"></i> Nullam egestas tincidunt lectus, sagittis eros vestibulum in. Vestibulum finibus iaculis sagittis. Suspendisse viverra luctus.</p>
							</li>

							<li>
								<p><i class="fa-li fas fa-check"></i> Suspendisse at volutpat magna, vitae mattis metus. Integer posuere eu erat at pharetra. Aliquam ut pharetra diam.</p>
							</li>

							<li>
								<p><i class="fa-li fas fa-check"></i> Donec luctus, sem vel molestie efficitur, metus libero mollis neque, sed scelerisque arcu nisl eu lectus.</p>
							</li>

							<li>
								<p><i class="fa-li fas fa-check"></i> Fusce neque magna, fringilla ac vulputate at, venenatis a eros. Donec accumsan commodo tortor sed fringilla.</p>
							</li>

						</ul>

						<!-- Button -->
						<p class="text-center text-lg-start">
							<a href="#" class="btn">Learn More</a>
						</p>

					</div>

					<!-- Image -->
					<div class="col-12 col-lg-5 offset-lg-1 text-sm-center">
						<img src="{{ asset('frontend/images/overview/daily-schedule.png') }}" alt="" />
					</div>

				</div>

			</div>

		</section> --}}

		<!-- Testimonials -->
		<section id="testimonials">

			<!-- Container -->
			<div class="container">

				<!-- Section title -->
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6">

						<div class="section-title text-center">
							<h3>Apa Kata Mereka?</h3>
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-12 testimonial-carousel">

						<!-- Text -->
						<div class="block-text row">
							<div class="carousel-text testimonial-slider col-12 col-lg-8 offset-lg-2">

								<div>
									<div class="single-box">
										<p><i class="fas fa-quote-left"></i> Fusce euismod eget nulla a tempus. Pellentesque in varius metus. Fusce iaculis cursus ante, vel vestibulum dui sagittis vitae. <i class="fas fa-quote-right"></i></p>
									</div>
								</div>

                                <div>
									<div class="single-box">
										<p><i class="fas fa-quote-left"></i> Aenean sit amet est orci. Aenean at nisi eget nulla lobortis commodo. Nam eget lorem in ex aliquam dapibus. <i class="fas fa-quote-right"></i></p>
									</div>
								</div>

								<div>
									<div class="single-box">
										<p><i class="fas fa-quote-left"></i> Suspendisse non velit lacus. Mauris efficitur lorem a justo semper, ut suscipit ligula malesuada. Donec dui nulla. <i class="fas fa-quote-right"></i></p>
									</div>
								</div>

								<div>
									<div class="single-box">
										<p><i class="fas fa-quote-left"></i> Vestibulum lectus massa, volutpat ut tristique nec, volutpat in turpis. In vehicula tempus odio. Nullam enim ligula. <i class="fas fa-quote-right"></i></p>
									</div>
								</div>

								<div>
									<div class="single-box">
										<p><i class="fas fa-quote-left"></i> Nunc accumsan finibus sollicitudin. Integer malesuada purus sapien, sit amet volutpat sem fringilla ut. Proin viverra scelerisque mollis. <i class="fas fa-quote-right"></i></p>
									</div>
								</div>

								<div>
									<div class="single-box">
										<p><i class="fas fa-quote-left"></i> Cras et est eu tellus fringilla congue. Nunc efficitur libero ut nunc volutpat porttitor. Aliquam in justo at neque. <i class="fas fa-quote-right"></i></p>
									</div>
								</div>

								<div>
									<div class="single-box">
										<p><i class="fas fa-quote-left"></i> Vivamus pellentesque dignissim neque, quis viverra diam venenatis sit amet. Donec dignissim turpis quis libero posuere auctor. <i class="fas fa-quote-right"></i></p>
									</div>
								</div>
								<div>
									<div class="single-box">
										<p><i class="fas fa-quote-left"></i> Aenean varius accumsan eros, id molestie leo vestibulum a. Ut semper dictum feugiat. Integer tincidunt interdum eros ut accumsan. <i class="fas fa-quote-right"></i></p>
									</div>
								</div>

								<div>
									<div class="single-box">
										<p><i class="fas fa-quote-left"></i> Morbi viverra ultrices magna vel egestas. Suspendisse rutrum, lacus nec sodales gravida, augue ante sollicitudin sem. <i class="fas fa-quote-right"></i></p>
									</div>
								</div>

							</div>
						</div>

						<!-- Media -->
						<div class="block-media row">
							<div class="carousel-images testimonial-nav col-12 col-lg-8 offset-lg-2">

								<div>
									<img src="{{ asset('frontend/images/testimonials/client-1.jpg') }}" alt="" class="img-fluid rounded-circle">
									<div class="client-info">
										<h3>Jane Aniston</h3>
										<span>From Globex</span>
									</div>
								</div>

								<div>
									<img src="{{ asset('frontend/images/testimonials/client-2.jpg') }}" alt="" class="img-fluid rounded-circle">
									<div class="client-info">
										<h3>Martin Jack</h3>
										<span>From Hooli</span>
									</div>
								</div>

								<div>
									<img src="{{ asset('frontend/images/testimonials/client-3.jpg') }}" alt="" class="img-fluid rounded-circle">
									<div class="client-info">
										<h3>David Dowsy</h3>
										<span>From Acme</span>
									</div>
								</div>

								<div>
									<img src="{{ asset('frontend/images/testimonials/client-4.jpg') }}" alt="" class="img-fluid rounded-circle">
									<div class="client-info">
										<h3>Doglas Kosta</h3>
										<span>From Soylent</span>
									</div>
								</div>

								<div>
									<img src="{{ asset('frontend/images/testimonials/client-5.jpg') }}" alt="" class="img-fluid rounded-circle">
									<div class="client-info">
										<h3>Anthony Lee</h3>
										<span>From Initech</span>
									</div>
								</div>

								<div>
									<img src="{{ asset('frontend/images/testimonials/client-6.jpg') }}" alt="" class="img-fluid rounded-circle">
									<div class="client-info">
										<h3>Jonathon Doe</h3>
										<span>From Umbrella</span>
									</div>
								</div>

								<div>
									<img src="{{ asset('frontend/images/testimonials/client-7.jpg') }}" alt="" class="img-fluid rounded-circle">
									<div class="client-info">
										<h3>Xenia Mell</h3>
										<span>From Massive</span>
									</div>
								</div>
								<div>
									<img src="{{ asset('frontend/images/testimonials/client-8.jpg') }}" alt="" class="img-fluid rounded-circle">
									<div class="client-info">
										<h3>Shane Catson</h3>
										<span>From Capital</span>
									</div>
								</div>

								<div>
									<img src="{{ asset('frontend/images/testimonials/client-9.jpg') }}" alt="3" class="img-fluid rounded-circle">
									<div class="client-info">
										<h3>Chris Wort</h3>
										<span>From Sylhost</span>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

			</div>

		</section>

		<!-- Counters -->
		<section id="counters" class="parallax" data-image="images/parallax/counters.jpg">

			<!-- Overlay -->
			<div class="overlay"></div>

			<!-- Container -->
			<div class="container">

                <div class="row">

                    <!-- Counter 1 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="counter wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0">
                            <div class="icon icon-basic-download"></div>
                            <div class="counter-content res-margin">
                                <h5>
                                    <span class="number-count">2067</span>
                                </h5>
                                <p>Happy Travelers</p>
                            </div>
                        </div>
                    </div>

                    <!-- Counter 2 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="counter wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="icon icon-ecommerce-bag-plus"></div>
                            <div class="counter-content res-margin">
                                <h5>
                                    <span class="number-count">982</span>
                                </h5>
                                <p>Tour Guide</p>
                            </div>
                        </div>
                    </div>

                    <!-- Counter 3 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="counter wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="icon icon-basic-tablet"></div>
                            <div class="counter-content res-margin">
                                <h5>
                                    <span class="number-count">890</span>
                                </h5>
                                <p>Leaders</p>
                            </div>
                        </div>
                    </div>

                    <!-- Counter 4 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="counter wow fadeInUp" data-wow-offset="10" data-wow-duration="1s" data-wow-delay="0.9s">
                            <div class="icon icon-basic-star"></div>
                            <div class="counter-content">
                                <h5>
                                    <span class="number-count">537</span>
                                </h5>
                                <p>Company Rates</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

		</section>

		<!-- Team -->
		<section id="team">

			<!-- Container -->
			<div class="container">

				<!-- Section title -->
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6">

						<div class="section-title text-center">
							<h3>Tour Guide Kami</h3>
						</div>

					</div>
				</div>

				<div class="row">

					<!-- Member 1 -->
					<div class="col-12 col-md-6 col-lg-3">
						<div class="team-member res-margin">
							<div class="team-image">
								<img src="{{ asset('frontend/images/team/member-1.jpg') }}" alt="" />
								<div class="team-social">
									<div class="team-social-inner">
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<a href="#"><i class="fab fa-dribbble"></i></a>
									</div>
								</div>
							</div>
							<div class="team-details">
								<h5 class="title"><a href="worker.html">Jeannette Crow</a></h5>
								<span class="position">CEO Founder</span>
							</div>
						</div>
					</div>

					<!-- Member 2 -->
					<div class="col-12 col-md-6 col-lg-3">
						<div class="team-member res-margin">
							<div class="team-image">
								<img src="{{ asset('frontend/images/team/member-2.jpg') }}" alt="" />
								<div class="team-social">
									<div class="team-social-inner">
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<a href="#"><i class="fab fa-dribbble"></i></a>
									</div>
								</div>
							</div>
							<div class="team-details">
								<h5 class="title"><a href="worker.html">Michael Broad</a></h5>
								<span class="position">Web Designer</span>
							</div>
						</div>
					</div>

					<!-- Member 3 -->
					<div class="col-12 col-md-6 col-lg-3">
						<div class="team-member res-margin">
							<div class="team-image">
								<img src="{{ asset('frontend/images/team/member-3.jpg') }}" alt="" />
								<div class="team-social">
									<div class="team-social-inner">
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<a href="#"><i class="fab fa-dribbble"></i></a>
									</div>
								</div>
							</div>
							<div class="team-details">
								<h5 class="title"><a href="worker.html">Isabella Dowson</a></h5>
								<span class="position">Creative Director</span>
							</div>
						</div>
					</div>

					<!-- Member 4 -->
					<div class="col-12 col-md-6 col-lg-3">
						<div class="team-member">
							<div class="team-image">
								<img src="{{ asset('frontend/images/team/member-4.jpg') }}" alt="" />
								<div class="team-social">
									<div class="team-social-inner">
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<a href="#"><i class="fab fa-dribbble"></i></a>
									</div>
								</div>
							</div>
							<div class="team-details">
								<h5 class="title"><a href="worker.html">Martin Lawrence</a></h5>
								<span class="position">App Developer</span>
							</div>
						</div>
					</div>

				</div>

			</div>

		</section>

		<!-- Screenshots -->
		<section id="screenshots" class="bg-grey">

			<!-- Container -->
			<div class="container">

				<!-- Section title -->
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6">

						<div class="section-title text-center">
							<h3>Destinasi Pilihan</h3>
						</div>

					</div>
				</div>

				<div class="row">

					<div class="col-12">

						<!-- Carousel -->
						<div class="owl-carousel owl-theme screenshot-slider zoom-screenshot">

							<div class="item">
								<a href="{{ asset('frontend/images/destinasi/bali.png') }}">
									<img src="{{ asset('frontend/images/destinasi/bali.png') }}" alt="" />
								</a>
							</div>

							<div class="item">
								<a href="{{ asset('frontend/images/destinasi/monas.png') }}">
									<img src="{{ asset('frontend/images/destinasi/monas.png') }}" alt="" />
								</a>
							</div>

							<div class="item">
								<a href="{{ asset('frontend/images/destinasi/sumbar.png') }}">
									<img src="{{ asset('frontend/images/destinasi/sumbar.png') }}" alt="" />
								</a>
							</div>

							<div class="item">
								<a href="{{ asset('frontend/images/destinasi/surabaya.png') }}">
									<img src="{{ asset('frontend/images/destinasi/surabaya.png') }}" alt="" />
								</a>
							</div>

							<div class="item">
								<a href="{{ asset('frontend/images/destinasi/danautoba.png') }}">
									<img src="{{ asset('frontend/images/destinasi/danautoba.png') }}" alt="" />
								</a>
							</div>

							<div class="item">
								<a href="{{ asset('frontend/images/destinasi/perambanan.png') }}">
									<img src="{{ asset('frontend/images/destinasi/perambanan.png') }}" alt="" />
								</a>
							</div>

							<div class="item">
								<a href="{{ asset('frontend/images/destinasi/lombok.png') }}">
									<img src="{{ asset('frontend/images/destinasi/lombok.png') }}" alt="" />
								</a>
							</div>

							{{-- <div class="item">
								<a href="{{ asset('frontend/images/screenshots/screenshot-1.jpg') }}">
									<img src="{{ asset('frontend/images/destinasi/bali.jpg.jpg') }}" alt="" />
								</a>
							</div> --}}

						</div>

					</div>

				</div>

			</div>

		</section>

		<!-- Support -->
		<section id="support">

			<!-- Container -->
			<div class="container">

				<!-- Section title -->
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6">

						<div class="section-title text-center">
							<h3>FAQ</h3>
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-12 col-lg-10 offset-lg-1">

						<!-- FAQ accordion -->
						<div id="accordion" class="accordion" role="tablist">

							<!-- Question 1 -->
							<div class="accordion-item">

								<div class="accordion-header" id="heading-1">
									<h5>
										<a class="accordion-button" href="#collapse-1" role="button"
										   aria-expanded="true" data-bs-toggle="collapse" aria-controls="collapse-1">
											Bagaimana cara memesan perjalanan?
										</a>
									</h5>
								</div>

								<div id="collapse-1" class="accordion-collapse collapse show"
									 aria-labelledby="heading-1" data-bs-parent="#accordion">
									<div class="accordion-body">
										<p>
											Untuk memesan perjalanan, kamu harus membuat akun terlebih dahulu dan melengkapi data diri, setelah itu kamu bisa pilih paket yang kamu inginkan dan melanjutkan ke pembayaran.
										</p>
									</div>
								</div>

							</div>

							<!-- Question 2 -->
							<div class="accordion-item">

								<div class="accordion-header" id="heading-2">
									<h5>
										<a class="accordion-button collapsed" href="#collapse-2" role="button"
										   aria-expanded="false" data-bs-toggle="collapse" aria-controls="collapse-2">
											Bagaimana cara membuat paket sendiri?
										</a>
									 </h5>
								</div>

								<div id="collapse-2" class="accordion-collapse collapse"
									 aria-labelledby="heading-2" data-bs-parent="#accordion">
									<div class="accordion-body">
										<p>
											Cukup pilih custom paket dan kamu dapat memilih sendiri kendaraan, hotel dan destinasi kamu. Untuk memesan paketnya jangan lupa buat akun dulu yaa!
										</p>
									</div>
								</div>

							</div>

				<div class="empty-30"></div>

				<div class="row">
					<div class="col-12">
						<p class="text-center mb-0">Masih punya pertanyaan? <a href="#contact"><strong>Tanyain aja disini</strong></a></p>
					</div>
				</div>

			</div>

		</section>

        <!-- Contact -->
		<section id="contact">

			<!-- Container -->
			<div class="container">

				<!-- Section title -->
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6">

						<div class="section-title text-center">
							<h3>Contact Us</h3>
                        </div>

					</div>
				</div>

				<div class="row">

					<!-- Contact info -->
					<div class="contact-info col-12 col-lg-4 res-margin">

                        <h5>
                            <span class="icon icon-basic-geolocalize-05"></span>
                            Lokasi Kantor
                        </h5>
                        <p>
                            Jalan Sudirman No. 193<br>
                            Dumai, Riau<br>
                            Indonesia
                        </p>

                        <h5>
                            <span class="icon icon-basic-smartphone"></span>
                            No. Telepon
                        </h5>
                        <p><a href="tel:16175723012">(0761)83624</a></p>

                        <h5>
                            <span class="icon icon-basic-mail"></span>
                            Email
                        </h5>
                        <p>
                            <a href="mailto:customercare@swjp.com">customercare@swjp.com</a>
                        </p>

                        <h5>
                            <span class="icon icon-basic-clock"></span>
                            Jam Kerja
                        </h5>
                        <p>
                            09:00 WIB hingga 18:00 WIB
                        </p>

					</div>

					<!-- Contact form -->
					<div class="col-12 col-lg-8">

                        <form id="contact-form" action="php/contact.php" method="post">

                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group mt-2 mb-3">
                                        <input type="text" name="name" class="form-control field-name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group mt-2 mb-3">
                                        <input type="email" name="email" class="form-control field-email" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="form-group mt-2 mb-3">
                                        <input type="text" name="subject" class="form-control field-subject" placeholder="Subject">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="form-group mt-2 mb-3">
                                        <textarea name="message" rows="4" class="form-control field-message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-12 mt-2">
                                    <button type="submit" id="contact-submit" name="send" class="btn">Kirim Email</button>
                                </div>
                            </div>

                        </form>

                        <!-- Submit Results -->
                        <div class="contact-form-result">
                            <h4>Thank you for the e-mail!</h4>
                            <p>Your message has already arrived! We'll contact you shortly.</p>
                        </div>

					</div>

				</div>

			</div>

		</section>

        {{-- <!-- Subscribe -->
		<section id="subscribe" class="parallax" data-image="images/parallax/subscribe.jpg">

			<!-- Overlay -->
			<div class="overlay"></div>

			<!-- Container -->
			<div class="container">

                <!-- Section title -->
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-6">

						<div class="section-title text-center white">
							<h3 class="text-white">Subscribe To Newsletter</h3>
							<p>Vivamus ornare feugiat orci eu faucibus. Phasellus nulla arcu, pharetra nec laoreet in, scelerisque a lectus.</p>
                        </div>

					</div>
				</div>

                <!-- Newsletter form -->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">

                        <form id="subscribe-form" action="php/subscribe.php" method="post">
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control field-subscribe" placeholder="Enter Your Email Address" required />
                            </div>
                            <button type="submit" class="btn w-100">Subscribe</button>
                        </form>

                        <h3 id="subscribe-result" class="text-center text-white">
                            Thanks for subscribing!
                        </h3>

                        <div class="empty-30"></div>

                        <p class="text-center mb-0">
                            We don’t share your personal information with anyone or company.
                            Check out our <a href="#"><strong>Privacy Policy</strong></a> for more information.
                        </p>

                    </div>
                </div>

            </div>

		</section> --}}

        <!-- Footer -->
		<footer>

			<!-- Widgets -->
			<div class="footer-widgets">
                <div class="container">

					<div class="row">

                        <!-- Footer logo -->
						<div class="col-12 col-md-6 col-lg-3 res-margin">
							<div class="widget">
								<p class="footer-logo">
                                    <img src="images/logo-white.png" alt="Naxos" data-rjs="2">
                                </p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis non, fugit totam vel laboriosam vitae.
								</p>

                                <!-- Social links -->
                                <div class="footer-social">
                                    <a href="#" title="Twitter"><i class="fab fa-twitter fa-fw"></i></a>
                                    <a href="#" title="Facebook"><i class="fab fa-facebook-f fa-fw"></i></a>
                                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a>
                                    <a href="#" title="Pinterest"><i class="fab fa-pinterest fa-fw"></i></a>
                                </div>
							</div>
						</div>

                        <!-- Useful links -->
						<div class="col-12 col-md-6 col-lg-2 offset-lg-1 res-margin">
							<div class="widget">

								<h6>Useful Links</h6>

								<ul class="footer-menu">
									<li><a href="#">Support</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms &amp; Conditions</a></li>
									<li><a href="#">Affiliate Program</a></li>
									<li><a href="#">Careers</a></li>
								</ul>

							</div>
						</div>

                        <!-- Product help -->
						<div class="col-12 col-md-6 col-lg-3 res-margin">
							<div class="widget">

								<h6>Product Help</h6>

								<ul class="footer-menu">
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Reviews</a></li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Feedback</a></li>
									<li><a href="#">API</a></li>
								</ul>

							</div>
						</div>

                        <!-- Download -->
                        <div class="col-12 col-md-6 col-lg-3">
							<div class="widget">

                                <h6>Download</h6>

                                <div class="button-store">
								    <a href="#" class="custom-btn d-inline-flex align-items-center m-2 m-sm-0 mb-sm-3"><i class="fab fa-google-play"></i><p>Available on<span>Google Play</span></p></a>
                                    <a href="#" class="custom-btn d-inline-flex align-items-center m-2 m-sm-0"><i class="fab fa-apple"></i><p>Download on<span>App Store</span></p></a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Copyright -->
			<div class="footer-copyright">
				<div class="container">

					<div class="row">
						<div class="col-12">

							<!-- Text -->
                            <p class="copyright text-center">
                                Copyright © 2022 <a href="#" target="_blank">Naxos</a>. All Rights Reserved.
                            </p>

						</div>
					</div>

				</div>
			</div>

		</footer>

        <!-- Back to top -->
		<a href="#top-page" class="to-top">
			<div class="icon icon-arrows-up"></div>
		</a>

		<!-- jQuery -->
		<script src="{{asset('frontend/library/jquery/jquery.js')}}"></script>
		<script src="{{asset('frontend/library/jquery/jquery-easing.js')}}"></script>

		<!-- Bootstrap -->
		<script src="{{asset('frontend/library/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- Plugins -->
		<script src="{{asset('frontend/library/retina/retina.min.js')}}"></script>
		<script src="{{asset('frontend/library/backstretch/jquery.backstretch.min.js')}}"></script>
		<script src="{{asset('frontend/library/swiper/swiper-bundle.min.js')}}"></script>
		<script src="{{asset('frontend/library/owlcarousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontend/library/slick/slick.js')}}"></script>
		<script src="{{asset('frontend/library/waypoints/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('frontend/library/isotope/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('frontend/library/waitforimages/jquery.waitforimages.min.js')}}"></script>
		<script src="{{asset('frontend/library/lightcase/js/lightcase.js')}}"></script>
		<script src="{{asset('frontend/library/wow/wow.min.js')}}"></script>
		<script src="{{asset('frontend/library/parallax/jquery.parallax.min.js')}}"></script>
		<script src="{{asset('frontend/library/counterup/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('frontend/library/magnificpopup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('frontend/library/ytplayer/jquery.mb.ytplayer.min.js')}}"></script>

		<!-- Main -->
		<script src="{{asset('frontend/js/main.js')}}"></script>

	</body>

</html>
