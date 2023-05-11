@extends('layouts.main')

@section('hero')
    
<section id="hero" class="hero hero-expand-lg">
    {{-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div> --}}
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active" style="background-image: url(/img/welcome-image-1.jpg)">
            <div class="info d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1 data-aos="fade-down">THE APEC <span>AGREEMENT</span></h1>
                            <p data-aos="fade-up">The APEC agreement is in place between a number of APEC countries
                                for the purposes
                                of
                                recognizing “substantial equivalence” of professional competence in engineering</p>
                            <a data-aos="fade-up" data-aos-delay="200" href="#get-started"
                                class="btn-get-started">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url(/img/welcome-image-2.jpg)">
            <div class="info d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1 class="display-2" data-aos="fade-down">Indonesia Monitoring Comitte</span></h1>
                            <h4 class="text-white" data-aos="fade-up">Ready to Elevate Your Enginering Career</h4>
                            <a data-aos="fade-up" data-aos-delay="200" href="#get-started"
                                class="btn-get-started">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item col-md-4" style="background-image: url(/img/welcome-image-3.jpg)">
            <div class="info d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="text-uppercase text-white" data-aos="fade-down">Learn How To Apply</span>
                            </h4>
                            <h2 class="display-2" data-aos="fade-up">The APEC ENGINEER <br />
                                REGISTRATION </h2>
                            <a data-aos="fade-up" data-aos-delay="200" href="/anggota"
                                class="btn-get-started">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>
    
          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>
    

    </div>

</section><!-- End Hero Section -->

@endsection


@section('container')
  
    <!-- MAIN ITEM -->

   

    <main id="main">

      <!-- PARTNER APEC -->
      <section id="partner" class="partner">
          <div class="container">
              <div class="section-header" data-aos="fade-up">
                  <h2>Partner</h2>
                  <p>This website is linked to APEC Agreement page at IEA webiste <span><a
                              href="https://www.ieagreements.org/agreements/apec/">
                              https://www.ieagreements.org/agreements/apec/</a></span></p>
              </div>

              <div class="container" data-aos="fade-up">

                  <div class="row align-items-center">

                      <div class="col-auto   mx-auto official-partner">
                          <a href="https://www.ieagreements.org/">
                              <img src="/img/IAE.png" alt="" width="300"></a>
                      </div>

                      <div class="col-auto mx-auto official-partner">
                          <a href="https://www.apec.org/">
                              <img src="/img/APEC.png" alt="" width="300"></a>
                      </div>

                  </div>
              </div>
          </div>
      </section>

      <!-- Alt Registration -->
      <section id="alt-registration" class="alt-registration">
          <div class="container" data-aos="fade-up">

              <div class="row justify-content-around gy-4">
                  <div class="col-lg-6 img-bg" style="background-image: url(Asset/img/Online\ Registration2.png);"
                      data-aos="zoom-in" data-aos-delay="100"></div>

                  <div class="col-lg-5 d-flex flex-column justify-content-center">
                      <h1 class="display-3" data-aos="fade-up">APEC for the <br />APEC Engineer Registration </span>
                      </h1>
                      <br>

                      <h4 class="text-white">Be Recognized as a Competent Engineer in Indonesia and Beyond! </h4>

                      <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                          <a href="/form" class="btn-get-started">Online Registration</a>
                      </div>
                  </div>
              </div>

          </div>
      </section><!-- End Alt Registration -->

      <!-- ======= List Of The APEC Section ======= -->
      {{-- <section id="apecregistereds" class="apecregistereds">
          <div class="container" data-aos="fade-up">

              <div class="section-header">
                  <h2>Registered APEC Engineers</h2>
                  <h3>List of The APEC Engineer in Indonesia</h3>
              </div>

              <div class="slides swiper">
                  <div class="swiper-wrapper justify-content-between">

                      <div class="swiper-slide">
                          <div class="col-md-2 mx-auto member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img align-items-center">
                                  <img src="/img/registered-apec/luffy.jpg" class="img-fluid rounded-circle" alt="">
                                  <div class="social-links">
                                      <a href="#"><i class="bi bi-twitter"></i></a>
                                      <a href="#"><i class="bi bi-facebook"></i></a>
                                      <a href="#"><i class="bi bi-instagram"></i></a>
                                      <a href="#"><i class="bi bi-linkedin"></i></a>
                                  </div>

                              </div>
                              <div class="member-info text-center">
                                  <a href="">
                                      <h4>Handoko</h4>
                                  </a>
                                  <span>Mechanical Engineer</span>
                              </div>
                          </div><!-- End Team Member -->
                      </div>

                      <div class="swiper-slide">
                          <div class="col-md-2 mx-auto member" data-aos="fade-up" data-aos-delay="200">
                              <div class="member-img align-items-center">
                                  <img src="/img/registered-apec/zoro.jpg" class="img-fluid rounded-circle " alt="">
                                  <div class="social-links">
                                      <a href="#"><i class="bi bi-twitter"></i></a>
                                      <a href="#"><i class="bi bi-facebook"></i></a>
                                      <a href="#"><i class="bi bi-instagram"></i></a>
                                      <a href="#"><i class="bi bi-linkedin"></i></a>
                                  </div>
                              </div>
                              <div class="member-info text-center">
                                  <a href="">
                                      <h4>Rama Usvika</h4>
                                  </a>
                                  <span>Informatics Engineer</span>
                              </div>
                          </div>
                      </div><!-- End Team Member -->

                      <div class="swiper-slide">
                          <div class="col-md-2 mx-auto member align-items-center" data-aos="fade-up" data-aos-delay="200">
                              <div class="member-img">
                                  <img src="/img/registered-apec/sanji.jpg" class="img-fluid rounded-circle" alt="">
                                  <div class="social-links">
                                      <a href="#"><i class="bi bi-twitter"></i></a>
                                      <a href="#"><i class="bi bi-facebook"></i></a>
                                      <a href="#"><i class="bi bi-instagram"></i></a>
                                      <a href="#"><i class="bi bi-linkedin"></i></a>
                                  </div>
                              </div>
                              <div class="member-info text-center">
                                  <a href="">
                                      <h4>Rama Usvika</h4>
                                  </a>
                                  <span>Informatics Engineer</span>
                              </div>
                          </div><!-- End Team Member -->
                      </div>


                      <div class="swiper-slide">
                          <div class="col-md-2 mx-auto member" data-aos="fade-up" data-aos-delay="300">
                              <div class="member-img">
                                  <img src="/img/registered-apec/chopper.jpg" class="img-fluid rounded-circle" alt="">
                                  <div class="social-links">
                                      <a href="#"><i class="bi bi-twitter"></i></a>
                                      <a href="#"><i class="bi bi-facebook"></i></a>
                                      <a href="#"><i class="bi bi-instagram"></i></a>
                                      <a href="#"><i class="bi bi-linkedin"></i></a>
                                  </div>
                              </div>
                              <div class="member-info text-center">
                                  <a href="">
                                      <h4>Raditya</h4>
                                  </a>
                                  <span>Civil Engineer</span>
                              </div>
                          </div><!-- End Team Member -->
                      </div>

                      <div class="swiper-slide">
                          <div class="col-md-2 mx-auto member" data-aos="fade-up" data-aos-delay="100">
                              <div class="member-img">
                                  <img src="/img/registered-apec/brook.jpg" class="img-fluid rounded-circle" alt="">
                                  <div class="social-links">
                                      <a href="#"><i class="bi bi-twitter"></i></a>
                                      <a href="#"><i class="bi bi-facebook"></i></a>
                                      <a href="#"><i class="bi bi-instagram"></i></a>
                                      <a href="#"><i class="bi bi-linkedin"></i></a>
                                  </div>
                              </div>
                              <div class="member-info text-center">
                                  <a href="">
                                      <h4>Handoko</h4>
                                  </a>
                                  <span>Mechanical Engineer</span>
                              </div>
                          </div><!-- End Team Member -->
                      </div>
                  </div>
                  <div class="swiper-pagination"></div>
              </div>
              <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                  <a href="#" class="btn-view-more">View More</a>
              </div>
          </div>
          </div>
      </section><!-- End Our Team Section --> --}}

{{-- Test --}}

<div class="slide-container swiper">
    <div class=" section-headers mt-4 mb-4">
        <h5>Registered APEC Engineers</h5>
        <h3>List of The APEC Engineer in Indonesia</h3>
    </div>
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            @if ($posts->count())
            @foreach ($posts as $post)
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        @if ($post->image)           
                  <img src="{{ asset('storage/' . $post->image) }}"
                  alt="{{ $post->category->name }}" class="img-fluid rounded-circle mx-auto" width="256">
                @else
                  <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img" alt="{{ $post->category->name }}">
                @endif
                    </div>
                </div>
                <div class="card-content">
                    <h5 class="card-title">{{ $post->author->username }}</h5>
                  <p>
                    <small class="text-muted">
                      <i class="bi bi-geo-alt">{{ $post->slug }} </i>
                    </small>
                  </p>
                  <p class="card-text ket" ><i class="bi bi-gear"> </i>{{ $post->title }} <br>
                    <i class="bi bi-mortarboard-fill"> </i>{{ $post->category->slug }}
                  </p>
                </div>
            </div>
            @endforeach
            @else
            <p class="text-center fs-4">No post found.</p>
            @endif
        </div>
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>


@endsection
