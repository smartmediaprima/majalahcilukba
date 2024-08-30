@extends('landing.layouts.app')
@section('content')
    <!-- Hero Section -->

    <!-- Sesi 2 -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between text-center text-lg-start">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <img src="{{ asset('assets/img/clients/logo-cilukba.png') }}" data-aos="fade-in" style="width: 50%"
                            class="mb-4" />
                        <h2>Sahabat Ceria, Bermain dan Belajar</h2>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('assets/img/majalah/karakter/cicilulubaba.png') }}" class="img-fluid animated"
                        alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section>
    <!-- End Sesi 2 -->

    <!-- /End Hero Section -->

    <!-- Clients Section -->
    <!-- <section id="clients" class="clients section">
                                                                                                                                <div class="container" data-aos="fade-up">
                                                                                                                                  <div class="swiper init-swiper">
                                                                                                                                    <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }
            </script>
                                                                                                                                    <div class="swiper-wrapper justify-content-center">
                                                                                                                                      <div class="swiper-slide">
                                                                                                                                        <img
                                                                                                                                          src="{{ asset('assets/img/clients/logo-ptsmp.png') }}"
                                                                                                                                          class="img-fluid"
                                                                                                                                          alt=""
                                                                                                                                        />
                                                                                                                                      </div>
                                                                                                                                      <div class="swiper-slide">
                                                                                                                                        <img
                                                                                                                                          src="{{ asset('assets/img/clients/logo-cilukba.png') }}"
                                                                                                                                          class="img-fluid"
                                                                                                                                          alt=""
                                                                                                                                        />
                                                                                                                                      </div>
                                                                                                                                      <div class="swiper-slide">
                                                                                                                                        <img
                                                                                                                                          src="{{ asset('assets/img/clients/logo-cilukba-junior.png') }}"
                                                                                                                                          class="img-fluid"
                                                                                                                                          alt=""
                                                                                                                                        />
                                                                                                                                      </div>
                                                                                                                                      <div class="swiper-slide">
                                                                                                                                        <img
                                                                                                                                          src="{{ asset('assets/img/clients/logo-smarteen.png') }}"
                                                                                                                                          class="img-fluid"
                                                                                                                                          alt=""
                                                                                                                                        />
                                                                                                                                      </div>
                                                                                                                                    </div>
                                                                                                                                  </div>
                                                                                                                                </div>
                                                                                                                              </section> -->
    <!-- /End Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
            <p>Tentang Kami</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row pb-4 align-items-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3 pb-4 order-1 order-lg-2">
                    <img src="{{ asset('assets/img/majalah/karakter/baba-24.png') }}" style="height: 100%" class="img-fluid"
                        alt="" />
                </div>
                <div class="col-lg-9 order-2 order-lg-1 content">
                    <h3>Voluptatem dignissimos provident</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check2-all"></i>
                            <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</span>
                        </li>
                        <li>
                            <i class="bi bi-check2-all"></i>
                            <span>Duis aute irure dolor in reprehenderit in voluptate
                                velit.</span>
                        </li>
                        <li>
                            <i class="bi bi-check2-all"></i>
                            <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate trideta
                                storacalaperda mastiro dolore eu fugiat nulla
                                pariatur.</span>
                        </li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident
                    </p>
                </div>
            </div>
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-3 pb-4 order-3 order-lg-3">
                    <img src="{{ asset('assets/img/majalah/karakter/lulu2.png') }}" style="height: 80%" class="img-fluid"
                        alt="" />
                </div>
                <div class="col-lg-9 order-4 order-lg-4 content">
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi velit at provident, quaerat reiciendis, voluptate quae
                        autem quasi adipisci magni dolore neque vel culpa similique?
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check2-all"></i>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Magni, quas.</span>
                        </li>
                        <li>
                            <i class="bi bi-check2-all"></i>
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Expedita, velit!</span>
                        </li>
                        <li>
                            <i class="bi bi-check2-all"></i>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quidem, numquam.</span>
                        </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                        mollitia natus aut nisi! Similique porro ratione sint! Ab
                        blanditiis delectus distinctio fuga ratione soluta repellendus
                        quae, sint deleniti ut. Ratione.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /End About Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <img src="{{ asset('assets/img/hadilaiklan2024rsz.gif') }}" class="testimonials-bg" alt="" />
        <div class="container">
            <div class="swiper init-swiper" data-aos="fade-up">
                <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img"
                                alt="" />
                            <h3>Saul Goodman</h3>
                            <h4>CEO &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Proin iaculis purus consequat sem cure digni ssim donec
                                    porttitora entum suscipit rhoncus. Accusantium quam,
                                    ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img"
                                alt="" />
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Export tempor illum tamen malis malis eram quae irure
                                    esse labore quem cillum quid cillum eram malis quorum
                                    velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img"
                                alt="" />
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Enim nisi quem export duis labore cillum quae magna enim
                                    sint quorum nulla quem veniam duis minim tempor labore
                                    quem eram duis noster aute amet eram fore quis sint
                                    minim.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img"
                                alt="" />
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Fugiat enim eram quae cillum dolore dolor amet nulla
                                    culpa multos export minim fugiat minim velit minim dolor
                                    enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img"
                                alt="" />
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Quis quorum aliqua sint quem legam fore sunt eram irure
                                    aliqua veniam tempor noster veniam enim culpa labore duis
                                    sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Check our Portfolio</p>
        </div>
        <!-- End Section Title -->
        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-c">Cilukba</li>
                    <li data-filter=".filter-cj">Cilukba Junior</li>
                </ul>
                <!-- End Portfolio Filters -->
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-6 col-lg-3 col-md-4 portfolio-item isotope-item filter-c">
                        <img src="{{ asset('assets/img/majalah/cover-cilukba/C107.png') }}" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Cilukba 107</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/img/majalah/cover-cilukba/C107.png') }}" title="Cilukba 107"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <div class="col-6 col-lg-3 col-md-4 portfolio-item isotope-item filter-cj">
                        <img src="{{ asset('assets/img/majalah/cover-junior/CJ92.png') }}" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Cilukba Junior 92</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/img/majalah/cover-junior/CJ92.png') }}" title="Cilukba Junior 92"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <div class="col-6 col-lg-3 col-md-4 portfolio-item isotope-item filter-c">
                        <img src="{{ asset('assets/img/majalah/cover-cilukba/C109.png') }}" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Cilukba 109</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/img/majalah/cover-cilukba/C109.png') }}" title="Cilukba 109"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <div class="col-6 col-lg-3 col-md-4 portfolio-item isotope-item filter-cj">
                        <img src="{{ asset('assets/img/majalah/cover-junior/CJ93.png') }}" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Cilukba Junior 93</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/img/majalah/cover-junior/CJ93.png') }}" title="Cilukba Junior 93"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <div class="col-6 col-lg-3 col-md-4 portfolio-item isotope-item filter-c">
                        <img src="{{ asset('assets/img/majalah/cover-cilukba/C108.png') }}" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Cilukba 108</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/img/majalah/cover-cilukba/C108.png') }}" title="Cilukba 108"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <div class="col-6 col-lg-3 col-md-4 portfolio-item isotope-item filter-cj">
                        <img src="{{ asset('assets/img/majalah/cover-junior/CJ94.png') }}" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Cilukba Junior 94</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/img/majalah/cover-junior/CJ94.png') }}" title="Cilukba Junior 94"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <div class="col-6 col-lg-3 col-md-4 portfolio-item isotope-item filter-c">
                        <img src="{{ asset('assets/img/majalah/cover-cilukba/C110.png') }}" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Cilukba 110</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/img/majalah/cover-cilukba/C110.png') }}" title="Cilukba 110"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    <div class="col-6 col-lg-3 col-md-4 portfolio-item isotope-item filter-cj">
                        <img src="{{ asset('assets/img/majalah/cover-junior/CJ95.png') }}" class="img-fluid"
                            alt="" />
                        <div class="portfolio-info">
                            <h4>Cilukba Junior 95</h4>
                            <p>Lorem ipsum, dolor sit</p>
                            <a href="{{ asset('assets/img/majalah/cover-junior/CJ95.png') }}" title="Cilukba Junior 95"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                </div>
                <!-- End Portfolio Container -->
            </div>
        </div>
    </section>
    <!-- /End Portfolio Section -->

    <!-- Promo Section -->
    <section id="promo" class="promo section dark-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Flash Sale</h2>
            <p>Promo Hari Ini</p>
        </div>
        <!-- End Section Title -->

        <div class="promo-carousel-wrap">
            <div class="container">
                <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
                    <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".js-custom-next",
                    "prevEl": ".js-custom-prev"
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 3,
                      "spaceBetween": 40
                    }
                  }
                }
              </script>
                    <button class="navigation-prev js-custom-prev">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="navigation-next js-custom-next">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                    <div class="swiper-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-slide">
                            <div class="promo-item">
                                <div class="promo-item-contents">
                                    <a href="#">
                                        <span class="promo-item-category">We do</span>
                                        <h2 class="promo-item-title">Planting</h2>
                                    </a>
                                </div>
                                <img src="{{ asset('assets/img/promo/promo-3.png') }}" alt="Image"
                                    class="img-fluid" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="promo-item">
                                <div class="promo-item-contents">
                                    <a href="#">
                                        <span class="promo-item-category">We do</span>
                                        <h2 class="promo-item-title">Watering</h2>
                                    </a>
                                </div>
                                <img src="{{ asset('assets/img/promo/promo-1.png') }}" alt="Image"
                                    class="img-fluid" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="promo-item">
                                <div class="promo-item-contents">
                                    <a href="#">
                                        <span class="promo-item-category">We do</span>
                                        <h2 class="promo-item-title">Fertilizing</h2>
                                    </a>
                                </div>
                                <img src="{{ asset('assets/img/promo/promo-2.png') }}" alt="Image"
                                    class="img-fluid" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="promo-item">
                                <div class="promo-item-contents">
                                    <a href="#">
                                        <span class="promo-item-category">We do</span>
                                        <h2 class="promo-item-title">Seeding Plants</h2>
                                    </a>
                                </div>
                                <img src="{{ asset('assets/img/promo/promo-4.png') }}" alt="Image"
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Promo Section -->

    <!-- Subscribe Start -->
    <section id="subscribe" class="subscribe section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Berlangganan</h2>
            <p>Berlangganan sekarang.</p>
        </div>
        <!-- End Section Title -->

        <div class="container-fluid">
            <div class="container">
                <div class="row g-4 align-items-center justify-content-center">
                    <div class="col-7 col-lg-3 col-md-5">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <h3>Paket Semester</h3>
                            <h4><sup>Rp.</sup>65.000<span> /6 month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://bit.ly/cilukbaonshopee" class="btn-buy">Gabung Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 col-lg-3 col-md-5">
                        <div class="box" data-aos="fade-up" data-aos-delay="100">
                            <span class="subs-badge">Best Value</span>
                            <h3>Agen</h3>
                            <h4><sup>Rp.</sup>666.000</h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://bit.ly/cilukbaonwhatsapp" class="btn-buy">Gabung Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 col-lg-3 col-md-5">
                        <div class="box" data-aos="fade-up" data-aos-delay="300">
                            <h3>Paket Tahunan</h3>
                            <h4><sup>Rp.</sup>150.000<span> /year</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://bit.ly/cilukbaonwhatsapp" class="btn-buy">Gabung Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe End -->

    <!-- CTA Section -->
    <section id="cta" class="cta section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <p>Berlangganan Sekarang</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="50">
                <div class="col-xl-10">
                    <div class="text-center">
                        <p>
                            Bergabunglah dengan komunitas pembaca setia kami dan dapatkan
                            konten eksklusif, berita terbaru, dan banyak lagi!
                            Berlangganan sekarang!
                        </p>
                        <a class="cta-whatsapp-btn" href="https://bit.ly/cilukbaonwhatsapp" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="24" viewBox="0 0 40 40">
                                <path fill="#f2faff"
                                    d="M4.221,29.298l-0.104-0.181c-1.608-2.786-2.459-5.969-2.458-9.205 C1.663,9.76,9.926,1.5,20.078,1.5c4.926,0.002,9.553,1.919,13.03,5.399c3.477,3.48,5.392,8.107,5.392,13.028 c-0.005,10.153-8.268,18.414-18.42,18.414c-3.082-0.002-6.126-0.776-8.811-2.24l-0.174-0.096l-9.385,2.46L4.221,29.298z">
                                </path>
                                <path fill="#788b9c"
                                    d="M20.078,2L20.078,2c4.791,0.001,9.293,1.867,12.676,5.253C36.137,10.639,38,15.14,38,19.927 c-0.005,9.878-8.043,17.914-17.927,17.914c-2.991-0.001-5.952-0.755-8.564-2.18l-0.349-0.19l-0.384,0.101l-8.354,2.19 l2.226-8.131l0.11-0.403L4.55,28.867c-1.566-2.711-2.393-5.808-2.391-8.955C2.163,10.036,10.202,2,20.078,2 M20.078,1 C9.651,1,1.163,9.485,1.158,19.912c-0.002,3.333,0.869,6.588,2.525,9.455L1,39.169l10.03-2.63c2.763,1.507,5.875,2.3,9.042,2.302 h0.008c10.427,0,18.915-8.485,18.92-18.914c0-5.054-1.966-9.807-5.538-13.382C29.89,2.971,25.14,1.002,20.078,1L20.078,1z">
                                </path>
                                <path fill="#79ba7e"
                                    d="M19.995,35c-2.504-0.001-4.982-0.632-7.166-1.823l-1.433-0.782l-1.579,0.414l-3.241,0.85l0.83-3.03	l0.453-1.656L7,27.485c-1.309-2.267-2.001-4.858-2-7.492C5.004,11.726,11.732,5.001,19.998,5c4.011,0.001,7.779,1.563,10.61,4.397	C33.441,12.231,35,15.999,35,20.005C34.996,28.273,28.268,35,19.995,35z">
                                </path>
                                <path fill="#fff"
                                    d="M28.28,23.688c-0.45-0.224-2.66-1.313-3.071-1.462c-0.413-0.151-0.712-0.224-1.012,0.224	c-0.3,0.45-1.161,1.462-1.423,1.761c-0.262,0.3-0.524,0.337-0.974,0.113c-0.45-0.224-1.899-0.7-3.615-2.231	c-1.337-1.191-2.239-2.663-2.501-3.113c-0.262-0.45-0.029-0.693,0.197-0.917c0.202-0.202,0.45-0.525,0.674-0.787	c0.224-0.262,0.3-0.45,0.45-0.75c0.151-0.3,0.075-0.563-0.038-0.787c-0.113-0.224-1.012-2.437-1.387-3.336	c-0.364-0.876-0.736-0.757-1.012-0.771c-0.262-0.014-0.562-0.015-0.861-0.015c-0.3,0-0.787,0.113-1.198,0.563	c-0.411,0.45-1.573,1.537-1.573,3.749s1.611,4.35,1.835,4.649c0.224,0.3,3.169,4.839,7.68,6.786	c1.072,0.462,1.911,0.739,2.562,0.947c1.076,0.342,2.057,0.294,2.832,0.178c0.864-0.129,2.66-1.087,3.034-2.136	c0.375-1.049,0.375-1.95,0.262-2.136C29.03,24.025,28.731,23.912,28.28,23.688z">
                                </path>
                            </svg>
                            Whatsapp
                        </a>
                        <a class="cta-shopee-btn" href="https://bit.ly/cilukbaonshopee" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="24" viewBox="0 0 48 48">
                                <path fill="#f4511e"
                                    d="M36.683,43H11.317c-2.136,0-3.896-1.679-3.996-3.813l-1.272-27.14C6.022,11.477,6.477,11,7.048,11 h33.904c0.571,0,1.026,0.477,0.999,1.047l-1.272,27.14C40.579,41.321,38.819,43,36.683,43z">
                                </path>
                                <path fill="#f4511e"
                                    d="M32.5,11.5h-2C30.5,7.364,27.584,4,24,4s-6.5,3.364-6.5,7.5h-2C15.5,6.262,19.313,2,24,2 S32.5,6.262,32.5,11.5z">
                                </path>
                                <path fill="#fafafa"
                                    d="M24.248,25.688c-2.741-1.002-4.405-1.743-4.405-3.577c0-1.851,1.776-3.195,4.224-3.195 c1.685,0,3.159,0.66,3.888,1.052c0.124,0.067,0.474,0.277,0.672,0.41l0.13,0.087l0.958-1.558l-0.157-0.103 c-0.772-0.521-2.854-1.733-5.49-1.733c-3.459,0-6.067,2.166-6.067,5.039c0,3.257,2.983,4.347,5.615,5.309 c3.07,1.122,4.934,1.975,4.934,4.349c0,1.828-2.067,3.314-4.609,3.314c-2.864,0-5.326-2.105-5.349-2.125l-0.128-0.118l-1.046,1.542 l0.106,0.087c0.712,0.577,3.276,2.458,6.416,2.458c3.619,0,6.454-2.266,6.454-5.158C30.393,27.933,27.128,26.741,24.248,25.688z">
                                </path>
                            </svg>
                            Shopee
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End CTA Section -->
@endsection
