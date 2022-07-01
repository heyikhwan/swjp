<!-- Team -->
<section id="team">

    <!-- Container -->
    <div class="container">

        <!-- Section title -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">

                <div class="section-title text-center">
                    <h3>Our Team</h3>
                </div>

            </div>
        </div>

        <div class="row">
            
            @foreach ($karyawan as $data )
             <!-- Member 1 -->
             <div class="col-12 col-md-6 col-lg-3">
                <div class="team-member res-margin">
                    <div class="team-image">
                        <img src="{{ !is_null($data->avatar) ? URL::asset('storage/avatar/' . $data->avatar) : URL::asset('images/avatar-1.png') }}" alt="" />
                        <div class="team-social">
                            <div class="team-social-inner">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-details">
                        <h5 class="title"><a href="worker.html">{{ $data->name }}</a></h5>
                        <span class="position">{{ $data->getRoleNames()[0] }}</span>
                    </div>
                </div>
            </div>             
            @endforeach
            </div>

        </div>

    </div>

</section>
