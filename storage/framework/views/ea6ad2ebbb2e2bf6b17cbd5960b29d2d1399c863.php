
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
                            <form method="post" action="<?php echo e(route('reservasi.storeDestinasi')); ?>">
                                <?php echo csrf_field(); ?>
                                
                                <div class="form-group hotel mx-3">
                                    <div class="row">
                                        <div class="col"><label for="Hotel">Hotel</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3 me-3 <?php $__errorArgs = ['hotel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="hotel[]" id="hotel"
                                        placeholder="This is a placeholder" style="height: 50px;" value="<?php echo e(old('hotel')); ?>">
                                        <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                        <div class="input-group-addon me-3">
                                            <button type="button" class="btn btn-success addMoreHotel"  ><i
                                                    class="fas fa-plus"></i></button>
                                        </div>
                                        <?php $__errorArgs = ['hotel'];
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
                                <div class="form-group kendaraan mx-3">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Kendaraan">Kendaraan</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3 me-3 <?php $__errorArgs = ['kendaraan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="kendaraan[]" id=""
                                        placeholder="This is a placeholder" style="height: 50px;" value="<?php echo e(old('kendaraan')); ?>">
                                        <?php $__currentLoopData = $kendaraan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                        <div class="input-group-addon me-3">
                                            <button type="button" class="btn btn-success addMoreKendaraan"><i
                                                    class="fas fa-plus"></i></button>
                                        </div>
                                        <?php $__errorArgs = ['kendaraan'];
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
                                <div class="row mt-5 float-end mx-3">
                                    <div class="col">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm me-2" style="background-color: rgb(98, 95, 110);"">Batal</button>
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group destinasiCopy" style="display: none;">
                                <div class="input-group">
                                    <select class="form-select mb-3 me-3"
                                        name="destinasi[]" id="destinasi"
                                        placeholder="This is a placeholder" style="height: 50px;" value="<?php echo e(old('destinasi')); ?>">
                                        <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="input-group-addon">
                                        <a href="javascript:void(0)" class="btn remove me-3" style="background-color: rgb(245, 0, 0);"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group hotelCopy" style="display: none;">
                                <div class="input-group">
                                    <select class="form-select mb-3 me-3 <?php $__errorArgs = ['hotel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="hotel[]" id="hotel"
                                        placeholder="This is a placeholder" style="height: 50px;" value="<?php echo e(old('hotel')); ?>">
                                        <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="input-group-addon">
                                        <a href="javascript:void(0)" class="btn remove me-3" style="background-color: rgb(245, 0, 0);"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
                                    <?php $__errorArgs = ['hotel'];
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
                            <div class="form-group kendaraanCopy" style="display: none;">
                                <div class="input-group">
                                    <select class="form-select mb-3 me-3 <?php $__errorArgs = ['kendaraan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="kendaraan[]" id=""
                                        placeholder="This is a placeholder" style="height: 50px;" value="<?php echo e(old('kendaraan')); ?>">
                                        <?php $__currentLoopData = $kendaraan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="input-group-addon">
                                        <a href="javascript:void(0)" class="btn btn-danger remove me-3" style="background-color: rgb(245, 0, 0);"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
                                    <?php $__errorArgs = ['kendaraan'];
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
                    var fieldHTML = '<div class="form-group hotel mx-3">' + $(".hotelCopy").html() + '</div>';
                    $('body').find('.hotel:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });

            $(".addMoreKendaraan").click(function() {
                if ($('body').find('.kendaraan').length < maxGroup) {
                    var fieldHTML = '<div class="form-group kendaraan mx-3">' + $(".kendaraanCopy").html() +
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

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/frontend/reservasi/create-destinasi.blade.php ENDPATH**/ ?>