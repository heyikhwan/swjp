<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Data_Tables'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/libs/datatables.net-buttons-bs4/datatables.net-buttons-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Data Master <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Data Hotel <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                            <div>
                                <a href="#" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Hotel</th>
                            <th>Nama Wilayah</th>
                            <th>Bintang</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>Premiere</td>
                        <td>Aceh</td>
                        <td><p class="text-muted mb-0">
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                        </p></td>
                        <td><p class="text-muted mb-0">
                            <i class="bx bxs-star text-warning"></i>5.0</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- Modal -->
<div class="modal fade" id="rating" tabindex="-1" aria-labelledby="ratingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ratingLabel">Beri Rating</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net/datatables.net.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-buttons/datatables.net-buttons.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-buttons-bs4/datatables.net-buttons-bs4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/datatables.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/tables-datatable5.blade.php ENDPATH**/ ?>