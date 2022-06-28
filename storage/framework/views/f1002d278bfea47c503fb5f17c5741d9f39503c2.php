
<?php $__env->startSection('title'); ?> Tambah Anak Wilayah <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/choices.js/choices.js.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/@simonwep/@simonwep.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Data Wilayah <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Tambah Anak Wilayah <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="induk">Induk Wilayah</label>
                                <input type="text" class="form-control" id="induk" name="induk" placeholder="Induk Wilayah" value="<?php echo e(old('induk') ?? $wilayah->nama); ?>"
                                    required disabled>
                            </div>
                        </div>
                    </div>

                   
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="mb-3">
                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Level</label>
                                <select class="form-control" data-trigger name="choices-single-default"
                                    id="choices-single-default"
                                    placeholder="This is a search placeholder" disabled>
                                    <option value="2" <?php echo e(old('level') == '1' || $wilayah->level == '1' ? 'selected' : ''); ?>>Kabupaten/Kota</option>
                                    <option value="3" <?php echo e(old('level') == '2' || $wilayah->level == '2' ? 'selected' : ''); ?>>Kecamatan</option>
                                    <option value="4" <?php echo e(old('level') == '3' || $wilayah->level == '3' ? 'selected' : ''); ?>>Desa</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Anak Wilayah</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Wilayah" value="<?php echo e(old('name')); ?>"
                                    required>
                            </div>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                Masukkan nama wilayah.
                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                   

                    <div class="d-flex justify-content-end gap-2">
                        <a class="btn btn-secondary" href="<?php echo e(route('wilayah.index')); ?>">Kembali</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/choices.js/choices.js.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/form-advanced.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/@simonwep/@simonwep.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/backend/wilayah/tambah.blade.php ENDPATH**/ ?>