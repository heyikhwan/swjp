
<?php $__env->startSection('title'); ?> Data User <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Home <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Data User <?php $__env->endSlot(); ?>
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
                            <div class="dropdown">
                                <a class="btn btn-light shadow-none dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-plus me-1"></i> Tambah User
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="<?php echo e(route('user.admin.create')); ?>">Admin</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('user.manager.create')); ?>">Manager</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('user.leader.create')); ?>">Leader</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('user.guide.create')); ?>">Guide</a></li>
                                </ul>
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
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th style="width: 80px; min-width: 80px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->index + 1); ?></td>
                                <td>
                                    <img src="<?php echo e(!is_null($item->avatar) ? URL::asset('storage/avatar/' . $item->avatar) : URL::asset('images/avatar-1.png')); ?>"
                                        alt="" class="avatar-sm rounded-circle me-2">
                                    <span><?php echo e($item->name); ?></span>
                                </td>
                                <td><?php echo e($item->username); ?></td>
                                <td><?php echo e($item->email); ?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge
                                        <?php if($item->getRoleNames()[0] == 'admin'): ?> badge-soft-success <?php endif; ?>
                                        <?php if($item->getRoleNames()[0] == 'manager'): ?> badge-soft-primary <?php endif; ?>
                                        <?php if($item->getRoleNames()[0] == 'leader'): ?> badge-soft-danger <?php endif; ?>
                                        <?php if($item->getRoleNames()[0] == 'guide'): ?> badge-soft-info <?php endif; ?>
                                        <?php if($item->getRoleNames()[0] == 'customer'): ?> badge-soft-secondary <?php endif; ?>
                                        "><?php echo e(Str::ucfirst($item->getRoleNames()[0])); ?></a>
                                    </div>
                                </td>
                                <td class="d-flex gap-2 align-items-center">
                                    <div>
                                        <button type="button" class="btn btn-soft-secondary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#detail-<?php echo e($item->id); ?>">
                                            <i class="fas fa-eye"></i>
                                        </button>
                    
                                        <!-- Modal Detail user -->
                                        <div id="detail-<?php echo e($item->id); ?>" class="modal fade" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true" data-bs-scroll="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="detailLabel">Detail User</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-4">
                                                            <div class="d-flex gap-3 align-items-center">
                                                                <img class="rounded-circle" width="80" src="<?php echo e($item->avatar ? asset('storage/avatar/' . $item->avatar) : asset('images/avatar-1.png')); ?>">
    
                                                                <div class="d-flex flex-column">
                                                                    <div class="d-flex gap-1">
                                                                        <h5><?php echo e($item->name); ?></h5> - <i><?php echo e($item->username); ?></i>
                                                                    </div>
                                                                <a href="#" class="badge py-1
                                                                <?php if($item->getRoleNames()[0] == 'admin'): ?> badge-soft-success <?php endif; ?>
                                                                <?php if($item->getRoleNames()[0] == 'manager'): ?> badge-soft-primary <?php endif; ?>
                                                                <?php if($item->getRoleNames()[0] == 'leader'): ?> badge-soft-danger <?php endif; ?>
                                                                <?php if($item->getRoleNames()[0] == 'guide'): ?> badge-soft-info <?php endif; ?>
                                                                <?php if($item->getRoleNames()[0] == 'customer'): ?> badge-soft-secondary <?php endif; ?>
                                                                "><?php echo e(Str::ucfirst($item->getRoleNames()[0])); ?></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <table>
                                                                <tr>
                                                                    <th>Email</th>
                                                                    <td class="px-2">:</td>
                                                                    <td><?php echo e($item->email); ?></td>
                                                                </tr>

                                                                <?php if($item->getRoleNames()[0] == 'customer'): ?>
                                                                <tr>
                                                                    <th>NIK</th>
                                                                    <td class="px-2">:</td>
                                                                    <td><?php echo e($item->customer->nik); ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <th>Tempat Lahir</th>
                                                                    <td class="px-2">:</td>
                                                                    <td><?php echo e($item->customer->tempat_lahir); ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <th>Tanggal Lahir</th>
                                                                    <td class="px-2">:</td>
                                                                    <td><?php echo e($item->customer->tanggal_lahir); ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <th>No. Passport</th>
                                                                    <td class="px-2">:</td>
                                                                    <td><?php echo e($item->customer->no_passport); ?></td>
                                                                </tr>
                                                                <?php endif; ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    </div> <!-- end preview-->

                                    <a href="
                                    <?php if($item->getRoleNames()[0] == 'admin'): ?> <?php echo e(route('user.admin.edit', $item->id)); ?> <?php endif; ?>
                                    <?php if($item->getRoleNames()[0] == 'manager'): ?> <?php echo e(route('user.manager.edit', $item->id)); ?> <?php endif; ?>
                                    <?php if($item->getRoleNames()[0] == 'customer'): ?> <?php echo e(route('user.customer.edit', $item->id)); ?> <?php endif; ?>
                                    " class="btn btn-soft-warning waves-effect waves-light">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <?php if($item->id != Auth::user()->id): ?>
                                    <button type="button" class="btn btn-soft-danger waves-effect waves-light"
                                        id="sa-warning" onclick="swal(<?php echo e($item->id); ?>)">
                                        <i class="fas fa-trash"></i>

                                        <form action="<?php echo e(route('user.destroy', $item->id)); ?>" method="post" id="delete-<?php echo e($item->id); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                        </form>
                                    </button>
                                    <?php endif; ?>
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
            }).then(function (result) {
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/backend/user/index.blade.php ENDPATH**/ ?>