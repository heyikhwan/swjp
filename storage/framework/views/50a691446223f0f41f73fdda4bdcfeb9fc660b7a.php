
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.User_List'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Master Data <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Data Customer <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body">
                 <div class="row align-items-center">
                     <div class="col-md-6">
                         <div class="mb-3">
                             <h5 class="card-title">Data Customer <span class="text-muted fw-normal ms-2">(1)</span></h5>
                         </div>
                     </div>

                     <div class="col-md-6">
                         <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                             
                             <div>
                                 <a href="#" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
                             </div>

                             
                         </div>

                     </div>
                 </div>
                 <!-- end row -->

                 <div class="table-responsive mb-4">
                     <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                         <thead>
                         <tr>
                             <th scope="col" style="width: 50px;">
                                 <div class="form-check font-size-16">
                                     <input type="checkbox" class="form-check-input" id="checkAll">
                                     <label class="form-check-label" for="checkAll"></label>
                                 </div>
                             </th>
                             <th scope="col">Nama</th>
                             <th scope="col">Email</th>
                             <th scope="col">No. Telp</th>
                             <th scope="col">Alamat</th>
                             <th style="width: 80px; min-width: 80px;">Action</th>
                         </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <th scope="row">
                                     <div class="form-check font-size-16">
                                         <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                         <label class="form-check-label" for="contacusercheck1"></label>
                                     </div>
                                 </th>
                                 <td>
                                     <img src="<?php echo e(URL::asset('assets/images/users/avatar-2.jpg')); ?>" alt="" class="avatar-sm rounded-circle me-2">
                                     <a href="#" class="text-body">M. Fadil Martias</a>
                                 </td>
                                 <td>padel@Dason.com</td>
                                 <td>0821521902839</td>
                                 <td>Jalan Bahana</td>
                                 <td>
                                     <div class="dropdown">
                                         <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bx bx-dots-horizontal-rounded"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-menu-end">
                                             <li><a class="dropdown-item" href="#">Edit</a></li>
                                             <li><a class="dropdown-item" href="#">Hapus</a></li>
                                         </ul>
                                     </div>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <!-- end table -->
                 </div>
                 <!-- end table responsive -->
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net/datatables.net.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js')); ?>"></script> --}}
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/datatable-pages.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/apps-contacts-list3.blade.php ENDPATH**/ ?>