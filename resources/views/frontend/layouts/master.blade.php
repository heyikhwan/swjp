<!DOCTYPE html>
<html class="no-js" lang="en-US">

	<head>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Title -->
		<title>Naxos - App Landing Page Template</title>

        @include('frontend.partials.style')


	</head>

	<body>

        @include('frontend.layouts.topbar')
        <!-- Loader -->
		<div class="page-loader">
			<div class="progress"></div>
		</div>

        @yield('content')

        <!-- Back to top -->
		<a href="#top-page" class="to-top">
			<div class="icon icon-arrows-up"></div>
		</a>
        @include('frontend.layouts.footer')

        @include('frontend.partials.scripts')

	</body>

    </html>
