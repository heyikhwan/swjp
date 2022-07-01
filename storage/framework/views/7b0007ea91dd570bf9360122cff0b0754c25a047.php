
<?php $__env->startSection('content'); ?>
    <section id="reservasi" class="banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="height: 600px; width: 80em; overflow-y: scroll; overflow-x: scroll;" class="card mx-auto">
                        <div class="card-header">
                            <h5 class="p-2 ms-1 text-center">Riwayat Reservasi</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-responsive overflow-auto">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Tanggal Reservasi</th>
                                        <th>Nama Paket</th>
                                        <th>Jenis Perjalanan</th>
                                        <th>Keberangkatan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $reservasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="text-center">
                                            <td><?php echo e($loop->index + 1); ?></td>
                                            <td><?php echo e($data->created_at); ?></td>
                                            <td><?php echo e($data->judul); ?></td>
                                            <td><?php echo e($data->jenis_perjalanan); ?></td>
                                            <td><?php echo e($data->keberangkatan); ?></td>
                                            <td><?php echo e($data->status); ?></td>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-6" style="width:75px">
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#lihatBukti<?php echo e($loop->index); ?>" class="btn p-3"
                                                            style="background-color: #808080;">
                                                            <span><i class="fa fa-eye"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php if($data->status === 'Menunggu Pembayaran'): ?>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#bukti<?php echo e($loop->index); ?>" class="btn p-1">
                                                                <span>Upload Bukti Pembayaran</span>
                                                            </button>
                                                        <?php elseif($data->status === 'Selesai'): ?>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#rating<?php echo e($loop->index); ?>"
                                                                class="btn p-2">
                                                                <span>Beri Rating</span>
                                                            </button>
                                                            
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                        </div>
                        </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__currentLoopData = $reservasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- Bukti Modal -->
    <div class="modal fade" id="bukti<?php echo e($loop->index); ?>" tabindex="-1" aria-labelledby="buktiLabel"
        aria-hidden="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buktiLabel">Upload Bukti Pembayaran
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('reservasi.pembayaran', $data->id)); ?>" method="post"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Bukti
                                Pembayaran</label>
                            <input class="form-control h-25" type="file" id="formFile" name="bukti">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Lihat Bukti Modal -->
    <div class="modal fade" id="lihatBukti<?php echo e($loop->index); ?>" tabindex="-1" aria-labelledby="buktiLabel"
        aria-hidden="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buktiLabel">Details Reservasi
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <th>Tanggal Keberangkatan</th>
                            <td class="px-2">:</td>
                            <td><?php echo e($data->tgl_mulai); ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Pulang</th>
                            <td class="px-2">:</td>
                            <td><?php echo e($data->tgl_akhir); ?></td>
                        </tr>
                        <tr>
                            <th>Leader</th>
                            <td class="px-2">:</td>
                            <td><?php echo e($data->leader->name); ?></td>
                        </tr>
                        <tr>
                            <th>Guide</th>
                            <td class="px-2">:</td>
                            <td><?php echo e($data->guide->name); ?></td>
                        </tr>
                        <tr>
                            <th>Hotel</th>
                            <td class="px-2">:</td>
                            <td>
                                <ol>
                                    <?php $__currentLoopData = $destinasi->where('reservasi_id', $data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($item->hotel->name); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <th>Kendaraan</th>
                            <td class="px-2">:</td>
                            <td>
                                <ol>
                                    <?php $__currentLoopData = $destinasi->where('reservasi_id', $data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($item->kendaraan->nama); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ol>
                            </td>
                        </tr>

                    </table>
                    <div class="row ">
                        <div class="col">
                            <strong class="text-dark">Bukti Pembayaran :</strong>
                            <img class="mt-2"
                                src="<?php echo e(URL::asset('storage/bukti-pembayaran/' . $data->bukti_pembayaran)); ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Rating Modal -->
    <div class="modal fade" id="rating<?php echo e($loop->index); ?>" tabindex="-1" aria-labelledby="buktiLabel"
        aria-hidden="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buktiLabel">Rating Perjalanan
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <label for="bintang">Bintang</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="fa fa-star font-size-20 text-warning"></i></span>
                                    </div>
                                    <input type="text" class="form-control h-25 <?php $__errorArgs = ['bintang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="bintang" placeholder="Bintang" aria-describedby="inputGroupPrepend"
                                        name="bintang" value="<?php echo e(old('bintang')); ?>" required>
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
                        <div class="row">
                            <div class="col">
                                <label for="feedback">Ulasan</label>
                                <textarea name="feedback" rows="4" class="form-control field-message <?php $__errorArgs = ['feedback'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Komentar kamu"></textarea>
                                    <?php $__errorArgs = ['feedback'];
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swjp\resources\views/frontend/reservasi/index.blade.php ENDPATH**/ ?>