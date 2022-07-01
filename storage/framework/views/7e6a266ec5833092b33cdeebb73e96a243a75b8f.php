<!-- Contact -->
<section id="contact">

    <!-- Container -->
    <div class="container">

        <!-- Section title -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">

                <div class="section-title text-center">
                    <h3>Contact Us</h3>
                </div>

            </div>
        </div>

        <div class="row">

            <!-- Contact info -->
            <div class="contact-info col-12 col-lg-4 res-margin">

                <h5>
                    <span class="icon icon-basic-geolocalize-05"></span>
                    Lokasi Kantor
                </h5>
                <p>
                    Jalan Sudirman No. 193<br>
                    Dumai, Riau<br>
                    Indonesia
                </p>

                <h5>
                    <span class="icon icon-basic-smartphone"></span>
                    No. Telepon
                </h5>
                <p><a href="tel:16175723012">(0761)83624</a></p>

                <h5>
                    <span class="icon icon-basic-mail"></span>
                    Email
                </h5>
                <p>
                    <a href="mailto:customercare@swjp.com">customercare@swjp.com</a>
                </p>

                <h5>
                    <span class="icon icon-basic-clock"></span>
                    Jam Kerja
                </h5>
                <p>
                    09:00 WIB hingga 18:00 WIB
                </p>

            </div>

            <!-- Contact form -->
            <div class="col-12 col-lg-8">

                <?php if($message = Session::get('success')): ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success alert-border-left alert-dismissible fade show"
                                role="alert">
                                <i class="mdi mdi-check-all me-3 align-middle"></i><strong>Success</strong> -
                                <?php echo e($message); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <form id="" action="<?php echo e(route('contact.sendMail')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group mt-2 mb-3">
                                <input type="text" name="name" class="form-control field-name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group mt-2 mb-3">
                                <input type="email" name="email" class="form-control field-email"
                                    placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="form-group mt-2 mb-3">
                                <input type="text" name="subject" class="form-control field-subject"
                                    placeholder="Subject">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="form-group mt-2 mb-3">
                                <textarea name="message" rows="4" class="form-control field-message" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-12 mt-2">
                            <button type="submit" id="contact-submit" name="send" class="btn">Kirim
                                Email</button>
                        </div>
                    </div>

                </form>

                

            </div>

        </div>

    </div>

</section>
<?php /**PATH C:\laragon\www\swjp\resources\views/frontend/layouts/contacts.blade.php ENDPATH**/ ?>