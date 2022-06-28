<!DOCTYPE html>
<html class="no-js" lang="en-US">

	<head>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Title -->
		<title>Naxos - App Landing Page Template</title>

        <?php echo $__env->make('frontend.partials.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	</head>

	<body>

        <?php echo $__env->make('frontend.layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Loader -->
		<div class="page-loader">
			<div class="progress"></div>
		</div>

        <?php echo $__env->yieldContent('content'); ?>

        <!-- Back to top -->
		<a href="#top-page" class="to-top">
			<div class="icon icon-arrows-up"></div>
		</a>

        <?php echo $__env->make('frontend.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</body>

    </html>
<?php /**PATH C:\laragon\www\swjp\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>