<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Lightbox'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/glightbox/glightbox.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Extended <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?>Lightbox <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Single Image Lightbox</h5>
                <p class="card-title-desc">Glightbox Single Image Lightbox Example</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="mt-4">
                            <a href="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>" class="image-popup">
                                <img src="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>" class="img-fluid" alt="work-thumbnail">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="mt-4">
                            <a href="<?php echo e(URL::asset('assets/images/small/img-2.jpg')); ?>" class="image-popup">
                                <img src="<?php echo e(URL::asset('assets/images/small/img-2.jpg')); ?>" class="img-fluid" alt="work-thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Images with Description</h5>
                <p class="card-title-desc">Glightbox Images with Description Example</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="mt-4">
                            <a href="<?php echo e(URL::asset('assets/images/small/img-4.jpg')); ?>" class="image-popup-desc" data-title="Project 01" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit">
                                <img src="<?php echo e(URL::asset('assets/images/small/img-4.jpg')); ?>" class="img-fluid" alt="work-thumbnail">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="mt-4">
                            <a href="<?php echo e(URL::asset('assets/images/small/img-5.jpg')); ?>" class="image-popup-desc" data-title="Project 02" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit">
                                <img src="<?php echo e(URL::asset('assets/images/small/img-5.jpg')); ?>" class="img-fluid" alt="work-thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="mt-4">
                            <a href="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>" class="image-popup-desc" data-title="Project 03" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit">
                                <img src="<?php echo e(URL::asset('assets/images/small/img-1.jpg')); ?>" class="img-fluid" alt="work-thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Popup with Video or Map</h5>
                <p class="card-title-desc">Glightbox Popup with Video or Map Example</p>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-start gap-3 flex">
                    <a href="<?php echo e(url('https://www.youtube.com/watch?v=0O2aH4XLbto')); ?>" class="btn btn-light image-popup-video-map" data-title="YouTube Video" data-description="YouTube Video Popup">
                        Open YouTube Video
                    </a>

                    <a href="<?php echo e(url('https://vimeo.com/45830194')); ?>" class="btn btn-light image-popup-video-map" data-title="Vimeo Video" data-description="Vimeo Video Popup">
                        Open Vimeo Video
                    </a>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/glightbox/glightbox.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/lightbox.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/extended-lightbox.blade.php ENDPATH**/ ?>