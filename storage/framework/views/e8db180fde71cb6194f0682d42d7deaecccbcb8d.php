
<?php $__env->startSection('content'); ?>
    <section id="reservasi" class="banner vh-100">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card w-75 mx-auto">
                        <div class="card-header">
                            <h5 class="p-2 ms-1 text-center">Custom Paket</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="#">
                                <?php echo csrf_field(); ?>
                                <div class="row mb-3">
                                    <div class="col-11"><label for="Durasi">Durasi Perjalanan</label>
                                        <input type="text" name="durasi" class="form-control" id="durasi"
                                            placeholder="Pilih durasi perjalanan" style="max-width:828px;"/>
                                            
                                    </div>
                                </div>
                                <div class="form-group hotel">
                                    <div class="row">
                                        <div class="col"><label for="Hotel">Hotel</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3 me-3"
                                        name="hotel[]" id="hotel"
                                        placeholder="This is a placeholder" style="height: 50px;">
                                        <option value="Choice 1" >Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4" >Choice 4</option>
                                    </select>
                                        <div class="input-group-addon me-3">
                                            <button type="button" class="btn btn-success addMoreHotel"><i
                                                    class="fas fa-plus"></i></button>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group kendaraan">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Hotel">Kendaraan</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3 me-3"
                                        name="kendaraan[]" id=""
                                        placeholder="This is a placeholder" style="height: 50px;">
                                        <option value="Choice 1" >Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4" >Choice 4</option>
                                    </select>
                                        <div class="input-group-addon me-3">
                                            <button type="button" class="btn btn-success addMoreKendaraan"><i
                                                    class="fas fa-plus"></i></button>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mt-3 text-center">
                                    <div class="col">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group hotelCopy" style="display: none;">
                                <div class="input-group">
                                    <select class="form-select mb-3 me-3"
                                        name="hotel[]" id="hotel"
                                        placeholder="This is a placeholder" style="height: 50px;">
                                        <option value="Choice 1" >Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4" >Choice 4</option>
                                    </select>
                                    <div class="input-group-addon">
                                        <a href="javascript:void(0)" class="btn btn-danger remove me-3"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group kendaraanCopy" style="display: none;">
                                <div class="input-group">
                                    <select class="form-select mb-3 me-3"
                                        name="kendaraan[]" id=""
                                        placeholder="This is a placeholder" style="height: 50px;">
                                        <option value="Choice 1" >Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4" >Choice 4</option>
                                    </select>
                                    <div class="input-group-addon">
                                        <a href="javascript:void(0)" class="btn btn-danger remove me-3"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
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