
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Data_Tables'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css')); ?>"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?>
            Data Master
<?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Data Hotel
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php if($message = Session::get('success')): ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                <i class="mdi mdi-check-all me-3 align-middle"></i><strong>Success</strong> - <?php echo e($message); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                <div>
                                    <a href="<?php echo e(route('hotel.create')); ?>" class="btn btn-light"><i
                                            class="bx bx-plus me-1"></i> Tambah Hotel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="table-responsive mb-4">
                        <table class="table datatable align-middle dt-responsive table-check nowrap"
                            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Hotel</th>
                                    <th>Nama Wilayah</th>
                                    <th>Bintang</th>
                                    <th>Rating</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->wilayah->nama); ?></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <span><?php echo e($item->bintang); ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <span><?php echo e($item->rating); ?></span>
                                            </div>
                                        </td>
                                        <td class="d-flex gap-2 align-items-center">
                                            <div>
                                                <button type="button"
                                                    class="btn btn-soft-secondary waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target="#detail-<?php echo e($item->id); ?>">
                                                    <i class="fas fa-image"></i>
                                                </button>

                                                <!-- Modal Galeri -->
                                                <div id="detail-<?php echo e($item->id); ?>" class="modal fade" tabindex="-1"
                                                    aria-labelledby="detailLabel" aria-hidden="true" data-bs-scroll="true">
                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="detailLabel">Galeri</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($gallery->hotel_id === $item->id): ?>
                                                                    <div class="col-6">
                                                                        <img src="<?php echo e(asset('storage/hotel/' . $gallery->image)); ?>"
                                                                        class="img-fluid img-thumbnail m-2">
                                                                    </div>
                                                                    <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary waves-effect"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div> <!-- end preview-->

                                            <a href="<?php echo e(route('hotel.edit', $item->id)); ?>"
                                                class="btn btn-soft-warning waves-effect waves-light">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="button" class="btn btn-soft-danger waves-effect waves-light"
                                                id="sa-warning" onclick="swal(<?php echo e($item->id); ?>)">
                                                <i class="fas fa-trash"></i>

                                                <form action="<?php echo e(route('hotel.destroy', $item->id)); ?>" method="post"
                                                    id="delete-<?php echo e($item->id); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                </form>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/datatables.net/datatables.net.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script>
        function swal(id) {
            Swal.fire({
                title: "Yakin ingin menghapus?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#1c84ee",
                cancelButtonColor: "#fd625e",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: 'Tidak, Batalkan!',
            }).then(function(result) {
                if (result.value) {
                    $(`#delete-${id}`).submit();

                    Swal.fire("Deleted!", "Your file has been deleted.", "success");
                }
            });
        }
    </script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/datatable-pages.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/backend/hotel/index.blade.php ENDPATH**/ ?>