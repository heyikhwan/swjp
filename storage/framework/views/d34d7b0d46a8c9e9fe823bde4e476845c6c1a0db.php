<!-- Pricing -->
<section id="pricing" class="bg-grey">

    <!-- Container -->
    <div class="container">

        <!-- Section title -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">

                <div class="section-title text-center">
                    <h3>Paket Perjalanan</h3>
                    <p>Pilih paket perjalananmu atau kamu juga bisa buat paket perjalananmu sendiri</p>
                </div>

            </div>
        </div>

        

            <!-- Plan 1 -->
            

             <!-- Plan 2 -->
            

            <!-- Plan 3 -->
            
        

        <div class="row">

            <div class="col-12">

                <!-- Carousel -->
                <div class="owl-carousel owl-theme screenshot-slider">

                    <?php $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <div class="col-md-4 res-margin mx-3">
                           <div class="price-table <?php echo e($data->is_popular ? 'plan-popular' : ''); ?> mb-4 mb-sm-5 mb-lg-0">
                               <div class="icon icon-basic-heart"></div>
                               <h3 class="plan-type"><?php echo e($data->nama); ?></h3>
                               <h2 class="plan-price">Rp.<?php echo e($data->harga); ?></h2>
                               <ul class="list-unstyled plan-list">
                                <?php $__currentLoopData = explode(',',$data->body); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fitur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($fitur); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </ul>
                               <?php if(auth()->guard()->check()): ?>
                                   <a class="btn" href="#">Pilih Paket</a>
                               <?php else: ?>
                                   <a class="btn" href="<?php echo e(route('login')); ?>">Pilih Paket</a>
                               <?php endif; ?>
                               <?php if($data->is_popular): ?>
                               <div class="card-ribbon">
                                <span>Popular</span>
                            </div>
                               <?php endif; ?>
                           </div>
                       </div>
                   </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    

              </div>

            </div>

        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <h5>Ingin membuat Paket Perjalananmu Sendiri?</h5>
                            <a href="<?php echo e(route('reservasi.create')); ?>"
                                class="btn btn-primary text-light justify-content-end">Custom Paket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile phone -->
        <div class="row">

            <div class="col-12 col-lg-8 offset-lg-2 mobile-phone wow fadeInUp" data-wow-offset="10"
                data-wow-duration="1s" data-wow-delay="0.9s">
                <img src="<?php echo e('frontend/images/ilus/pesawat.svg'); ?>" alt="" />
            </div>

        </div>

    </div>

</section>

<?php /**PATH C:\laragon\www\swjp\resources\views/frontend/layouts/pricing.blade.php ENDPATH**/ ?>