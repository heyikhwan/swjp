<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Welcome ! <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Reservasi</span>
                        <h4 class="mb-3">
                            $<span class="counter-value" data-target="354.5">0</span>k
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-success text-success">+$20.9k</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Perjalanan</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="1256">0</span>
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Leader yang Tersedia</span>
                        <h4 class="mb-3">
                            $<span class="counter-value" data-target="7.54">0</span>M
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-success text-success">+ $2.8k</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>
                    
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">GAED yang Tersedia</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="18.34">0</span>%
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-success text-success">+5.32%</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row-->


<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Daftar Leader/GAED yang Tersedia</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown">
                        <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="#">Members</a>
                            <a class="dropdown-item" href="#">New Members</a>
                            <a class="dropdown-item" href="#">Old Members</a>
                        </div>
                    </div>
                </div>
            </div><!-- end card header -->

            <div class="card-body px-0">
                <div class="px-3" data-simplebar style="max-height: 386px;">
                    <div class="d-flex align-items-center pb-4">
                        <div class="avatar-md me-4">
                            <img src="<?php echo e(URL::asset('./assets/images/users/avatar-2.jpg')); ?>" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Randy Matthews</a></h5>
                            <span class="text-muted">Randy@gmail.com</span>
                        </div>
                        <div class="flex-shrink-0 text-end">
                            <div class="dropdown align-self-start">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Copy</a>
                                    <a class="dropdown-item" href="#">Save</a>
                                    <a class="dropdown-item" href="#">Forward</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Daftar Reservasi</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown align-self-start">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-horizontal-rounded font-size-18 text-dark"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Copy</a>
                            <a class="dropdown-item" href="#">Save</a>
                            <a class="dropdown-item" href="#">Forward</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>

            </div><!-- end card header -->

            <div class="card-body px-0 pt-2 ">
                    <div class="table-responsive border-0 px-3" data-simplebar style="max-height: 395px;">
                        <table class="table align-middle table-nowrap ">
                            <tbody>
                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="<?php echo e(URL::asset('./assets/images/product/img-1.png')); ?>" class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark">Half sleeve T-shirt</a></h5>
                                            <span class="text-muted">$240.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Available</a></p>
                                        <span class="text-muted">243K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">145 Sales</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/index.blade.php ENDPATH**/ ?>