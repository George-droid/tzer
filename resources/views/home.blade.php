@extends('layouts.default')

@section('content')
  <body>

    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel swiper position-relative">

      <div class="swiper-wrapper">

        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{ asset('img/slide-1.jpg') }})">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">Doral, Florida
                        <br> 78345
                      </p>
                      <h1 class="intro-title mb-4 ">
                        <span class="color-b">204 </span> Mount
                        <br> Olive Road Two
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="#"><span class="price-a">Explore properties</span></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{ asset('img/slide-2.jpg') }})">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">Doral, Florida
                        <br> 78345
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b">204 </span> Rino
                        <br> Venda Road Five
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="#"><span class="price-a">Explore properties</span></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{ asset('img/slide-3.jpg') }})">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">Doral, Florida
                        <br> 78345
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b">204 </span> Alira
                        <br> Roan Road One
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="#"><span class="price-a">Explore properties</span></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div><!-- End Intro Section -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section class="section-about">
        <div class="container">
          <div class="row">
            
            <div class="col-md-12 section-t8 position-relative">
              <div class="row">
                <div class="col-md-6 col-lg-5">
                  <img src="{{ asset('img/about-2.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-2  d-none d-lg-block position-relative">
                  <div class="title-vertical d-flex justify-content-start">
                    <span>TZER Properties</span>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 section-md-t3">
                  <div class="title-box-d">
                    <h3 class="title-d">Affordable
                      <span class="color-d">Luxery</span>
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

      <!-- ======= Services Section ======= -->

      {{-- <section class="section-services section-t8">
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
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-cart"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h2 class="title-c">Survey</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    We provide comprehensive land surveying services to assess property boundaries, 
                    topography, and potential development constraints.
                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="#" class="link-c link-icon">Read more
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-calendar4-week"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h2 class="title-c">Architecture</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    Our architectural services focus on creating 
                    innovative designs and functional spaces, tailored to meet our clients'
                     needs and preferences.
                  </p>
                </div>
                <div class="card-footer-c">
                  <a href="#" class="link-c link-icon">Read more
                    <span class="bi bi-calendar4-week"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-card-checklist"></span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h2 class="title-c">Sell</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                    We facilitate property sales by connecting buyers with meticulously
                     planned developments, offering a range of options for building their dream homes.
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
      </section> --}}

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
      <!-- End Services Section -->

      <!-- ======= Latest Properties Section ======= -->
      {{-- <section class="section-property section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Latest Properties</h2>
                </div>
                <div class="title-link">
                  <a href="property-grid.html">All Property
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div id="property-carousel" class="swiper">
            <div class="swiper-wrapper">

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img src="{{ asset('img/property-6.jpg') }}" alt="" class="img-a img-fluid">
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html">206 Mount
                            <br /> Olive Road Two</a>
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | $ 12.000</span>
                        </div>
                        <a href="#" class="link-a">Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span>340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img src="{{ asset('img/property-3.jpg') }}" alt="" class="img-a img-fluid">
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html">157 West
                            <br /> Central Park</a>
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | $ 12.000</span>
                        </div>
                        <a href="property-single.html" class="link-a">Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span>340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img src="{{ asset('img/property-7.jpg') }}" alt="" class="img-a img-fluid">
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html">245 Azabu
                            <br /> Nishi Park let</a>
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | $ 12.000</span>
                        </div>
                        <a href="property-single.html" class="link-a">Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span>340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img src="{{ asset('img/property-10.jpg') }}" alt="" class="img-a img-fluid">
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html">204 Montal
                            <br /> South Bela Two</a>
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">rent | $ 12.000</span>
                        </div>
                        <a href="property-single.html" class="link-a">Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span>340m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>2</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>1</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End carousel item -->
            </div>
          </div>
          <div class="propery-carousel-pagination carousel-pagination"></div>

        </div>
      </section> --}}
      <!-- End Latest Properties Section -->

      <!-- ======= Agents Section ======= -->
      {{-- <section class="section-agents section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Best Agents</h2>
                </div>
                <div class="title-link">
                  <a href="agents-grid.html">All Agents
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img src="{{ asset('img/agent-4.jpg') }}" alt="" class="img-d img-fluid">
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
                  <img src="{{ asset('img/agent-1.jpg') }}" alt="" class="img-d img-fluid">
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
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

      {{-- <section class="section-plans">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Architectural Plans</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Sample Card for Architectural Plan -->
            <div class="col-md-4">
              <div class="card-box">
                <div class="card-header">
                  <h3 class="card-title">Plan Name 1</h3>
                </div>
                <div class="card-body">
                  <img src="plan1.jpg" alt="Plan 1" class="img-fluid">
                  <p class="card-text">Overview of the plan and its key features.</p>
                </div>
                <div class="card-footer">
                  <p class="price">$XX.XX</p>
                  <a href="#" class="btn btn-primary">View Details</a>
                </div>
              </div>
            </div>
            <!-- End Sample Card -->
            
            <!-- Repeat this structure for each architectural plan -->
            <!-- You can add more cards dynamically based on the number of plans -->
          </div>
        </div>
        
      </section> --}}

      <section class="section-plans">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Architectural Plans</h2>
                </div>
                <div class="title-link">
                  <a href="property-grid.html">All Plans
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
      
          <div class="row">
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('img/plan1.png') }}" alt="Plan 1" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="plan-single.html">Plan Name 1</a>
                      </h2>
                    </div>
                    {{-- <div class="card-body-a">
                      <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m<sup>2</sup></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('img/plan2.png') }}" alt="Plan 1" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="plan-single.html">Plan Name 2</a>
                      </h2>
                    </div>
                    {{-- <div class="card-body-a">
                      <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m<sup>2</sup></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('img/plan3.png') }}" alt="Plan 1" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="plan-single.html">Plan Name 3</a>
                      </h2>
                    </div>
                    {{-- <div class="card-body-a">
                      <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m<sup>2</sup></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('img/plan4.png') }}" alt="Plan 1" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="plan-single.html">Plan Name 4</a>
                      </h2>
                    </div>
                    {{-- <div class="card-body-a">
                      <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m<sup>2</sup></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('img/plan5.png') }}" alt="Plan 1" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="plan-single.html">Plan Name 5</a>
                      </h2>
                    </div>
                    {{-- <div class="card-body-a">
                      <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m<sup>2</sup></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('img/plan6.png') }}" alt="Plan 1" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="plan-single.html">Plan Name 6</a>
                      </h2>
                    </div>
                    {{-- <div class="card-body-a">
                      <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m<sup>2</sup></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('img/plan7.png') }}" alt="Plan 1" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="plan-single.html">Plan Name 7</a>
                      </h2>
                    </div>
                    {{-- <div class="card-body-a">
                      <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m<sup>2</sup></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('img/plan8.png') }}" alt="Plan 1" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="plan-single.html">Plan Name 8</a>
                      </h2>
                    </div>
                    {{-- <div class="card-body-a">
                      <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m<sup>2</sup></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('img/plan9.png') }}" alt="Plan 1" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="plan-single.html">Plan Name 9</a>
                      </h2>
                    </div>
                    {{-- <div class="card-body-a">
                      <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m<sup>2</sup></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('img/plan10.png') }}" alt="Plan 1" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="plan-single.html">Plan Name 10</a>
                      </h2>
                    </div>
                    {{-- <div class="card-body-a">
                      <a href="#" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div> --}}
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m<sup>2</sup></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Add more similar card structures for other plans -->
          </div>
         
        </div>
      </section>

      <!-- ======= Latest News Section ======= -->
      {{-- <section class="section-news section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Latest News</h2>
                </div>
                <div class="title-link">
                  <a href="blog-grid.html">All News
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div id="news-carousel" class="swiper">
            <div class="swiper-wrapper">

              <div class="carousel-item-c swiper-slide">
                <div class="card-box-b card-shadow news-box">
                  <div class="img-box-b">
                    <img src="{{ asset('img/post-2.jpg') }}" alt="" class="img-b img-fluid">
                  </div>
                  <div class="card-overlay">
                    <div class="card-header-b">
                      <div class="card-category-b">
                        <a href="#" class="category-b">House</a>
                      </div>
                      <div class="card-title-b">
                        <h2 class="title-2">
                          <a href="blog-single.html">House is comming
                            <br> new</a>
                        </h2>
                      </div>
                      <div class="card-date">
                        <span class="date-b">18 Sep. 2017</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End carousel item -->

              <div class="carousel-item-c swiper-slide">
                <div class="card-box-b card-shadow news-box">
                  <div class="img-box-b">
                    <img src="{{ asset('img/post-5.jpg') }}" alt="" class="img-b img-fluid">
                  </div>
                  <div class="card-overlay">
                    <div class="card-header-b">
                      <div class="card-category-b">
                        <a href="#" class="category-b">Travel</a>
                      </div>
                      <div class="card-title-b">
                        <h2 class="title-2">
                          <a href="blog-single.html">Travel is comming
                            <br> new</a>
                        </h2>
                      </div>
                      <div class="card-date">
                        <span class="date-b">18 Sep. 2017</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End carousel item -->

              <div class="carousel-item-c swiper-slide">
                <div class="card-box-b card-shadow news-box">
                  <div class="img-box-b">
                    <img src="{{ asset('img/post-7.jpg') }}" alt="" class="img-b img-fluid">
                  </div>
                  <div class="card-overlay">
                    <div class="card-header-b">
                      <div class="card-category-b">
                        <a href="#" class="category-b">Park</a>
                      </div>
                      <div class="card-title-b">
                        <h2 class="title-2">
                          <a href="blog-single.html">Park is comming
                            <br> new</a>
                        </h2>
                      </div>
                      <div class="card-date">
                        <span class="date-b">18 Sep. 2017</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End carousel item -->

              <div class="carousel-item-c swiper-slide">
                <div class="card-box-b card-shadow news-box">
                  <div class="img-box-b">
                    <img src="{{ asset('img/post-3.jpg') }}" alt="" class="img-b img-fluid">
                  </div>
                  <div class="card-overlay">
                    <div class="card-header-b">
                      <div class="card-category-b">
                        <a href="#" class="category-b">Travel</a>
                      </div>
                      <div class="card-title-b">
                        <h2 class="title-2">
                          <a href="#">Travel is comming
                            <br> new</a>
                        </h2>
                      </div>
                      <div class="card-date">
                        <span class="date-b">18 Sep. 2017</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End carousel item -->

            </div>
          </div>

          <div class="news-carousel-pagination carousel-pagination"></div>
        </div>
      </section> <!-- End Latest News Section --> --}}

      <!-- ======= Testimonials Section ======= -->
      <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Testimonials</h2>
                </div>
              </div>
            </div>
          </div>

          <div id="testimonial-carousel" class="swiper">
            <div class="swiper-wrapper">

              <div class="carousel-item-a swiper-slide">
                <div class="testimonials-box">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-img">
                        <img src="{{ asset('img/testimonial-1.jpg') }}" alt="" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-ico">
                        <i class="bi bi-chat-quote-fill"></i>
                      </div>
                      <div class="testimonials-content">
                        <p class="testimonial-text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                          debitis hic ber quibusdam
                          voluptatibus officia expedita corpori.
                        </p>
                      </div>
                      <div class="testimonial-author-box">
                        <img src="{{ asset('img/mini-testimonial-1.jpg') }}" alt="" class="testimonial-avatar">
                        <h5 class="testimonial-author">Albert & Erika</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End carousel item -->

              <div class="carousel-item-a swiper-slide">
                <div class="testimonials-box">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-img">
                        <img src="{{ asset('img/testimonial-2.jpg') }}" alt="" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-ico">
                        <i class="bi bi-chat-quote-fill"></i>
                      </div>
                      <div class="testimonials-content">
                        <p class="testimonial-text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                          debitis hic ber quibusdam
                          voluptatibus officia expedita corpori.
                        </p>
                      </div>
                      <div class="testimonial-author-box">
                        <img src="{{ asset('img/mini-testimonial-2.jpg') }}" alt="" class="testimonial-avatar">
                        <h5 class="testimonial-author">Pablo & Emma</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End carousel item -->

            </div>
          </div>
          <div class="testimonial-carousel-pagination carousel-pagination"></div>

        </div>
      </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

  </body>
@endsection