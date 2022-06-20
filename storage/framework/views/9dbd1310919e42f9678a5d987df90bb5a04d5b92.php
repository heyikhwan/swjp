
<?php $__env->startSection('title'); ?> Data Wilayah <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css')); ?>"
    rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Home <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Data Wilayah <?php $__env->endSlot(); ?>
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
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                            <div>
                                <a href="<?php echo e(route('wilayah.create')); ?>" class="btn btn-light"><i
                                        class="bx bx-plus me-1"></i> Tambah Wilayah</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->

                <div class="table-responsive mb-4">
                    <table class="table align-middle datatable dt-responsive table-check nowrap"
                        style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Level</th>
                                <th style="width: 80px; min-width: 80px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $wilayah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->index + 1); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td>
                                    <?php if($item->level == 1): ?>
                                    Provinsi
                                    <?php elseif($item->level == 2): ?>
                                    Kabupaten/Kota
                                    <?php elseif($item->level == 2): ?>
                                    Kecamatan
                                    <?php else: ?>
                                    Desa
                                    <?php endif; ?>
                                </td>
                                <td class="d-flex gap-2 align-items-center">
                                    <a href="<?php echo e(route('kendaraan.edit', $item->id)); ?>"
                                        class="btn btn-soft-warning waves-effect waves-light">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <button type="button" class="btn btn-soft-danger waves-effect waves-light"
                                        id="sa-warning" onclick="swal(<?php echo e($item->id); ?>)">
                                        <i class="fas fa-trash"></i>

                                        <form action="<?php echo e(route('kendaraan.destroy', $item->id)); ?>" method="post"
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
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/datatable-pages.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>

<script>
    $(document).ready(function() {
        $('#wilayah').DataTable({
            processing: true,
            serverSide: true,
            ajax: '<?php echo e(route('wilayah.data')); ?>',
            columns: [
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                { data: 'nama', name: 'nama' },
                { data: 'level', name: 'level' },
                { data: 'induk', name: 'induk' },
                { data: 'aksi', name: 'aksi' },
            ]
        });
    });
</script>

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
            }).then(function (result) {
                if (result.value) {
                    $(`#delete-${id}`).submit();

                    Swal.fire("Deleted!", "Your file has been deleted.", "success");
                }
            });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/backend/wilayah/index.blade.php ENDPATH**/ ?>