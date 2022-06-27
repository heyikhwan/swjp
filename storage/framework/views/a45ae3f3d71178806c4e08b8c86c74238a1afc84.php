<?php $__env->startSection('title'); ?> Edit Hotel <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Data Hotel <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Edit Hotel <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo e(route('hotel.update', $hotel->id)); ?>" class="needs-validation" novalidate>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="row">
                        <div class="col-9">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Hotel</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" placeholder="Nama Hotel" value="<?php echo e(old('name') ?? $hotel->name); ?>"
                                    required>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                        <div class="col-3">
                            <label for="bintang">Bintang</label>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend"><i class="bx bxs-star font-size-20 text-warning"></i></span>
                              </div>
                              <input type="text" class="form-control <?php $__errorArgs = ['bintang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="bintang" placeholder="Bintang" aria-describedby="inputGroupPrepend" name="bintang"  value="<?php echo e(old('bintang') ?? $hotel->bintang); ?>"required>
                              <?php $__errorArgs = ['bintang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                        </div>
                </div>
                        <label>Wilayah</label>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="provinsi" class="form-label font-size-13 text-muted">Provinsi</label>
                                    <select class="form-select  <?php $__errorArgs = ['provinsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="provinsi" id="provinsi" placeholder="Provinsi">
                                        <option value="">Pilih Provinsi</option>
                                        <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['provinsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="kabupaten"
                                        class="form-label font-size-13 text-muted">Kabupaten/Kota</label>
                                    <select class="form-select <?php $__errorArgs = ['kabupaten'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="kabupaten" id="kabupaten" placeholder="Kab/Kota">
                                        <option value="">Pilih Kabupaten/Kota</option>
                                    </select>
                                    <?php $__errorArgs = ['kabupaten'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="kecamatan" class="form-label font-size-13 text-muted">Kecamatan</label>
                                    <select class="form-select <?php $__errorArgs = ['kecamatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="kecamatan" id="kecamatan" placeholder="Kecamatan">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                    <?php $__errorArgs = ['kecamatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="desa" class="form-label font-size-13 text-muted">Desa</label>
                                    <select class="form-select <?php $__errorArgs = ['desa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="desa" id="desa" placeholder="Desa">
                                        <option value="">Pilih Desa</option>
                                    </select>
                                    <?php $__errorArgs = ['desa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="image">Gambar</label>

                                    <div class="mb-3">
                                        <div class="row d-flex align-items-end">
                                            <?php $__currentLoopData = $hotel->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-2 my-1" id="image-container-<?php echo e($gallery->id); ?>">
                                                <img class="<?php echo e($gallery->image ? '' : 'd-none'); ?> border p-1 rounded img-fluid"
                                                    src="<?php echo e($gallery->image ? url('storage/hotel/', $gallery->image) : '#'); ?>" width="200">

                                                <?php if($gallery->image): ?>
                                                <div class="text-center">
                                                    <a href="javascript:void(0)" class="btn btn-link btn-sm text-danger"
                                                        onclick="event.preventDefault();imgDestroy(<?php echo e($gallery->id); ?>, 'image');">[Hapus]</a>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <input type="file" id="image" name="image[]" accept=".svg, image/png,image/jpg,image/jpeg" multiple />

                                    <small class="form-text text-muted">only allowed
                                        jpg/jpeg/png/svg file and smaller than 2MB</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a class="btn btn-secondary" href="<?php echo e(route('hotel.index')); ?>">Kembali</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>

<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
</script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script>
    const provinsi = document.querySelector('#provinsi');
    const kabupaten = document.querySelector('#kabupaten');
    const kecamatan = document.querySelector('#kecamatan');
    const desa = document.querySelector('#desa');

    let provinsiId;
    let kabupatenId;
    let kecamatanId;

    provinsi.addEventListener('change', () => {
        provinsiId = provinsi.options[provinsi.selectedIndex].value;

        const url = '/data/kota/' + provinsiId;

        const lastOpt = kabupaten.children;

        for (let i = lastOpt.length - 1; i >= 1; --i) {
            lastOpt[i].remove();
        }

        let fetchRes = fetch(url);
        fetchRes.then(res =>
        res.json()).then(d => {
            d.forEach(e => {
                var option = document.createElement("option");
                option.text = e.nama;
                option.value = e.id;
                kabupaten.add(option);
            });
        });
    });

    kabupaten.addEventListener('change', () => {
        kabupatenId = kabupaten.options[kabupaten.selectedIndex].value;

        const url = '/data/kecamatan/' + kabupatenId;

        const lastOpt = kecamatan.children;

        for (let i = lastOpt.length - 1; i >= 1; --i) {
            lastOpt[i].remove();
        }

        let fetchRes = fetch(url);
        fetchRes.then(res =>
        res.json()).then(d => {
            d.forEach(e => {
                var option = document.createElement("option");
                option.text = e.nama;
                option.value = e.id;
                kecamatan.add(option);
            });
        });
    });

    kecamatan.addEventListener('change', () => {
        kecamatanId = kecamatan.options[kecamatan.selectedIndex].value;

        const url = '/data/desa/' + kecamatanId;

        const lastOpt = desa.children;

        for (let i = lastOpt.length - 1; i >= 1; --i) {
            lastOpt[i].remove();
        }

        let fetchRes = fetch(url);
        fetchRes.then(res =>
        res.json()).then(d => {
            d.forEach(e => {
                var option = document.createElement("option");
                option.text = e.nama;
                option.value = e.id;
                desa.add(option);
            });
        });
    });
</script>


<script>
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize
    );

    FilePond.setOptions({
        server: {
            url: '<?php echo e(route("upload")); ?>',
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            }
        },
        allowMultiple: true,
    });
    const inputElement = document.querySelector('input[id="image"]');
    const pond = FilePond.create(inputElement, {
        maxFileSize: '2MB',
    });
</script>
<script>
    function imgDestroy(id, type) {
        if(confirm('Anda yakin ingin menghapus?'))
        {
            $.ajax({
                url: '/hotel/img-delete/' + id,
                method: 'put',
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                },
                success: function(data) {
                    document.querySelector('#image-container-' + id).remove();
                }
            })
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/backend/hotel/edit.blade.php ENDPATH**/ ?>