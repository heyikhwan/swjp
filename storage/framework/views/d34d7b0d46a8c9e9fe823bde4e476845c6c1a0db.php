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
                <div class="owl-carousel owl-theme screenshot-slider zoom-screenshot">

                    <div class="item">
                         <div class="col-md-4 res-margin mx-3">
                            <div class="price-table plan-popular mb-4 mb-sm-5 mb-lg-0">
                                <div class="icon icon-basic-heart"></div>
                                <h3 class="plan-type">Paket Dumai-Malaka</h3>
                                <h2 class="plan-price">Rp. 2.900.000</h2>
                                <ul class="list-unstyled plan-list">
                                    <li>Bus Pariwisata</li>
                                    <li>Hotel 2 Malam di KL</li>
                                    <li>Makan Sesuai Jadwal</li>
                                    <li>Guide and Tour Travel</li>
                                    <li>Tiket Cabel Car</li>
                                    <li>Tiket Ferry PP dan Boarding Pass</li>
                                </ul>
                                <?php if(auth()->guard()->check()): ?>
                                    <a class="btn" href="#">Pilih Paket</a>
                                <?php else: ?>
                                    <a class="btn" href="<?php echo e(route('login')); ?>">Pilih Paket</a>
                                <?php endif; ?>
                                <div class="card-ribbon">
                                    <span>Popular</span>
                                </div>
                            </div>
                        </div>
                    </div>

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