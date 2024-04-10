@extends('layouts.default')

@section('content')

    <main id="main">
  
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">Affordable Luxery Only For The Best</h1>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    About
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section><!-- End Intro Single-->
  
      <!-- ======= About Section ======= -->
      <section class="section-about">
        <div class="container">
          <div class="row">
            
            <div class="col-md-12 section-t8 position-relative">
              <div class="row">
                <div class="col-md-6 col-lg-5">
                  <img src="{{ asset('img/about-us.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-2  d-none d-lg-block position-relative">
                  <div class="title-vertical d-flex justify-content-start">
                    <span>TZER Properties</span>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 section-md-t3">
                  <div class="title-box-d">
                    <h3 class="title-d">Affordable
                      <span class="color-d">Luxury</span>
                      <br> Properties.
                    </h3>
                  </div>
                  <p class="color-text-a">
                    At Tzer Properties, we go beyond building structures; we foster vibrant communities where families flourish, businesses thrive, and dreams soar. With a legacy of over 10 years in Abuja, we have been instrumental in shaping the city's landscape.
                  </p>
                  <p class="color-text-a">
                    Our Vision is to redefine property development standards, setting new benchmarks for quality, sustainability, and social responsibility. We aspire to pioneer spaces that inspire, enrich, and endure, leaving a lasting legacy for generations to come.
                  </p>
                  <p class="color-text-a">
                    Our Mission is fueled by a passion for perfection, delivering projects that exceed expectations by blending timeless design, innovative technology, and meticulous craftsmanship. We prioritize transparent communication, unwavering integrity, and a relentless pursuit of excellence to surpass the aspirations of our clients and stakeholders.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- =======Team Section ======= -->
      {{-- <section class="section-agents section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Meet Our Team</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img src="{{ asset('img/agent-7.jpg') }}" alt="" class="img-d img-fluid">
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="agent-single.html" class="link-two">Margaret Sotillo
                          <br> Escala</a>
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                      Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                    </p>
                    <div class="info-agents color-a">
                      <p>
                        <strong>Phone: </strong> +54 356 945234
                      </p>
                      <p>
                        <strong>Email: </strong> agents@example.com
                      </p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img src="{{ asset('img/agent-6.jpg') }}" alt="" class="img-d img-fluid">
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="agent-single.html" class="link-two">Stiven Spilver
                          <br> Darw</a>
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                      Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                    </p>
                    <div class="info-agents color-a">
                      <p>
                        <strong>Phone: </strong> +54 356 945234
                      </p>
                      <p>
                        <strong>Email: </strong> agents@example.com
                      </p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-dribbble" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img src="{{ asset('img/agent-5.jpg') }}" alt="" class="img-d img-fluid">
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="agent-single.html" class="link-two">Emma Toledo
                          <br> Cascada</a>
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                      Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                    </p>
                    <div class="info-agents color-a">
                      <p>
                        <strong>Phone: </strong> +54 356 945234
                      </p>
                      <p>
                        <strong>Email: </strong> agents@example.com
                      </p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-dribbble" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End About Section--> --}}

      <!-- =======Services Section ======= -->

      <section class="section-services section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Our Services</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Infrastructure Service -->
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-building"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h4 class="title-c">Infrastructure</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    We specialize in developing robust infrastructure projects that meet modern standards and enhance communities.
                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="#" class="link-c link-icon">Read more
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
            <!-- Real Estate Service -->
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-house-door"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h4 class="title-c">Real Estate</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    Our real estate services offer diverse property options for residential and commercial needs, ensuring customer satisfaction.
                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="#" class="link-c link-icon">Read more
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
            <!-- Project Management Service -->
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-clipboard-check"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h4 class="title-c">Project Management</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    We excel in project management, overseeing every aspect from inception to completion, ensuring quality and timely delivery.
                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="#" class="link-c link-icon">Read more
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
            <!-- Property Financing and Management Service -->
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-cash-coin"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h4 class="title-c">Property Financing & Management</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    Our comprehensive property financing and management services ensure smooth transactions and optimized returns for investors.
                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="#" class="link-c link-icon">Read more
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
            <!-- Developers Service -->
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-people"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h4 class="title-c">Developers</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    Our team of experienced developers brings visions to reality, crafting sustainable and innovative projects.
                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="#" class="link-c link-icon">Read more
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
            <!-- Valuers & Engineering Services -->
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-tools"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h4 class="title-c">Valuers & Engineering</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    Our valuers and engineering services ensure accurate property valuations and expert engineering solutions for successful projects.
                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="#" class="link-c link-icon">Read more
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
    </main><!-- End #main -->
@endsection

