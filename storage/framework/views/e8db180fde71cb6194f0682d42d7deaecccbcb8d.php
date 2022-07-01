
<?php $__env->startSection('content'); ?>
    <section id="reservasi" class="banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="height: 600px; overflow-y: scroll;" class="card w-75 mx-auto">
                        <div class="card-header">
                            <h5 class="p-2 ms-1 text-center">Custom Paket</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo e(route('reservasi.store')); ?>" novalidate>
                                <?php echo csrf_field(); ?>
                                <div class="row mb-3 mx-1">
                                    <div class="col-6"><label for="tgl_mulai">Tanggal Mulai</label>
                                        <input type="date" name="tgl_mulai" class="form-control
                                        <?php $__errorArgs = ['tgl_mulai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('tgl_mulai')); ?>" required/>
                                        <?php $__errorArgs = ['tgl_mulai'];
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
                                    <div class="col-6"><label for="tgl_akhir">Tanggal Akhir</label>
                                        <input type="date" name="tgl_akhir" class="form-control <?php $__errorArgs = ['tgl_akhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  value="<?php echo e(old('tgl_akhir')); ?>" required/>
                                        <?php $__errorArgs = ['tgl_akhir'];
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
                                <div class="form-group mx-3">
                                    <div class="row">
                                        <div class="col"><label for="Leader">Pilih Leader</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3 <?php $__errorArgs = ['leader'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="leader" id="leader"
                                        placeholder="This is a placeholder" style="height: 50px;" value="<?php echo e(old('leader')); ?>">
                                        <?php $__currentLoopData = $leader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['leader'];
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
                                <div class="form-group mx-3">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Kendaraan">Pilih Guide</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3 <?php $__errorArgs = ['guide'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="guide" id=""
                                        placeholder="This is a placeholder" style="height: 50px;" value="<?php echo e(old('guide')); ?>">
                                        <?php $__currentLoopData = $guide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['guide'];
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
                                <div class="form-group mx-3">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Kendaraan">Nama Paket</label></div>
                                    </div>
                                    <div class="input-group">
                                       <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Isi nama paket" value="<?php echo e(old('name')); ?>" required/>
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
                                <div class="form-group mx-3">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Kendaraan">Jenis Perjalanan</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3 <?php $__errorArgs = ['jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>""
                                        name="jenis" id=""
                                        placeholder="This is a placeholder" style="height: 50px;" value="<?php echo e(old('jenis')); ?>">
                                        <option value="Darat">Darat</option>
                                        <option value="Laut">Laut</option>
                                        <option value="Udara">Udara</option>
                                    </select>
                                    <?php $__errorArgs = ['jenis'];
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
                                <div class="form-group mx-3">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Kendaraan">Keberangkatan</label></div>
                                    </div>
                                    <div class="input-group">
                                       <input type="text" name="keberangkatan" class="form-control <?php $__errorArgs = ['keberangkatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Isi keberangkatan" value="<?php echo e(old('keberangkatan')); ?>" required/>
                                       <?php $__errorArgs = ['keberangkatan'];
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
                                <div class="row mt-5 float-end">
                                    <div class="col">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm me-2" style="background-color: rgb(98, 95, 110);"">Batal</button>
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/reservasi.css')); ?>">

<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // membatasi jumlah inputan
            var maxGroup =  3;

            //melakukan proses multiple input
            $(".addMoreHotel").click(function() {
                if ($('body').find('.hotel').length < maxGroup) {
                    var fieldHTML = '<div class="form-group hotel">' + $(".hotelCopy").html() + '</div>';
                    $('body').find('.hotel:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });

            $(".addMoreKendaraan").click(function() {
                if ($('body').find('.kendaraan').length < maxGroup) {
                    var fieldHTML = '<div class="form-group kendaraan">' + $(".kendaraanCopy").html() +
                        '</div>';
                    $('body').find('.kendaraan:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });

            //remove fields group
            $("body").on("click", ".remove", function() {
                $(this).parents(".kendaraan").remove();
            });
            //remove fields group
            $("body").on("click", ".remove", function() {
                $(this).parents(".hotel").remove();
            });
        });
    </script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/frontend/reservasi/create.blade.php ENDPATH**/ ?>