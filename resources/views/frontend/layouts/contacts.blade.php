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

                <form id="contact-form" action="php/contact.php" method="post">

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group mt-2 mb-3">
                                <input type="text" name="name" class="form-control field-name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group mt-2 mb-3">
                                <input type="email" name="email" class="form-control field-email" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="form-group mt-2 mb-3">
                                <input type="text" name="subject" class="form-control field-subject" placeholder="Subject">
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
                            <button type="submit" id="contact-submit" name="send" class="btn">Kirim Email</button>
                        </div>
                    </div>

                </form>

                <!-- Submit Results -->
                <div class="contact-form-result">
                    <h4>Thank you for the e-mail!</h4>
                    <p>Your message has already arrived! We'll contact you shortly.</p>
                </div>

            </div>

        </div>

    </div>

</section>
