@extends('layouts.app')

@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-white"
        data-image-src="./web/img/photos/bg4.jpg" style="min-height: 100vh;">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16" style="z-index: 5; position:relative">
            <div class="row gy-10 gy-md-13 gy-lg-0 align-items-center">
                <div class="col-md-8 col-lg-5 d-flex position-relative mx-md-auto mx-xl-0 " data-cues="slideInDown"
                    data-group="header">
                    <div class="img-mask mask-1"><img src="./web/img/ulil-upwork.png" srcset="./web/img/ulil-upwork.png 1x"
                            alt="ulil-upwork" style="width: 500px !important; height: auto !important;" /></div>
                    <div class="card shadow-lg position-absolute" style="bottom: 10%; right: 2%;">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <img src="./web/img/icons/lineal/check.svg"
                                        class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" />
                                </div>
                                <div>
                                    <h3 class="counter mb-0 text-nowrap">200+</h3>
                                    <h4 class="fs-14 lh-sm mb-0 text-nowrap text-grey">Projects Done</h4>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-lg-6 offset-lg-1 col-xxl-7 text-center text-lg-start mx-0 " data-cues="slideInDown"
                    data-group="page-title" data-delay="600">
                    <h1 class="display-1 mb-5 text-white">Hi, I'm Mualif Ulil</h1>
                    <p class="lead fs-18 lh-sm mb-7 px-md-10 px-lg-0 text-white">A Senior Full Stack Developer with over 7+
                        years of experience, holding a Bachelor of Information Engineering. I have successfully completed
                        more than 200+ projects utilizing the latest technologies such as Laravel, Python, ExpressJs,
                        NextJs, and NuxtJs. I am ready to collaborate with you!.
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                        data-group="page-title-buttons" data-delay="900">
                        <span><a href="https://api.whatsapp.com/send/?phone=6285860732220" target="_blank"
                                class="btn btn-lg btn-outline-white rounded-pill me-2">Whatsapp </a></span>

                        <span><a href="https://www.upwork.com/freelancers/~013efcd877c7d16f6a" target="_blank"
                                class="btn btn-lg btn-white rounded-pill">Upwork</a></span>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16 text-center">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h3 class="display-4 mb-10 px-xl-10">My Services</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="position-relative">
                <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1"
                    style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
                <div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1"
                    style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
                <div class="row gx-md-5 gy-5 text-center">
                    <!--/column -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card card-service shadow-lg" style="min-height: 400px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <img src="./web/img/icons/lineal/analytics.svg"
                                    class="svg-inject icon-svg icon-svg-sm text-white mb-3" alt="" />
                                <h4 class="">Flutter Application Mobile Development</h4>
                                <p class="mb-2 ">I have more than 7+ Years of experience developing Mobile Application with
                                    Flutter Technology, Skilled in Fast Adaptive Application</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>

                    <!--/column -->
                    <div class="col-md-6 col-xl-3 ">
                        <div class="card card-service-light shadow-lg" style="min-height: 400px; ">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <img src="./web/img/icons/lineal/menu.svg"
                                    class="svg-inject icon-svg icon-svg-sm text-primary mb-3" alt="" />
                                <h4>WordPress Development</h4>
                                <p>I have experience with WordPress using Elementor, creating custom templates, converting
                                    HTML to WordPress, and developing plugins.</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card card-service shadow-lg" style="height: 400px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <img src="./web/img/icons/lineal/browser.svg"
                                    class="svg-inject icon-svg icon-svg-md text-white mb-3" alt="" />
                                <h4 class="">Web Development</h4>
                                <p class="mb-2 ">I have more than 5+ Years of experience developing Web
                                    Application using modern javascript framework like React & Vue</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card card-service-light shadow-lg" style="min-height: 400px">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <img src="./web/img/icons/lineal/web.svg"
                                    class="svg-inject icon-svg icon-svg-sm text-primary mb-3" alt="" />
                                <h4>Python Development</h4>
                                <p class="mb-2">Experienced Python Developer skilled in crafting custom web applications,
                                    seamless integration of functionalities, and third-party API integration.</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container py-7 py-md-8">
            <div class="row gx-md-8 gx-xl-12 gy-10">
                <div class="col-lg-5 mx-auto">
                    <h2 class="display-2 mb-3">My Experiences</h2>
                    <p class="lead fs-24 pe-xxl-8">I've had the pleasure to work with companies across a variety of
                        industries. I'm always interested in new and exciting adventures</p>
                    <a href="{{ route('web.portofolio') }}" class="btn btn-primary btn-icon btn-icon-end mt-2">See
                        Portofolio<i class="uil uil-arrow-up-right"></i></a>
                </div>
                <!--/column -->
                <div class="col-lg-7">
                    <ul class="timeline">
                        <li class="timeline-item">
                            <div class="timeline-info meta fs-14">Feb 2022 - Present</div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h3 class="timeline-title">Chief Technology Officer</h3>
                                <h4 class="timeline-title">Crackin'Code Studio</h4>
                                <p>
                                    Crackin'Code Studio is Professional Software development house Trusted by Global clients
                                    in 5+ Countries with expertise in Web and Mobile Application Development
                                </p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-info meta fs-14">Agu 2021 - Jan 2022</div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h3 class="timeline-title">Mobile Applicattion Developer</h3>
                                <h4 class="timeline-title">Seven Media Technology</h4>
                                <p>Seven Media Technology is a Professional Software House based at Semarang, which is
                                    specialized in Software and Website Development.</p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-info meta fs-14">Nov 2019 - May 2021</div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h3 class="timeline-title">Mobile Application Developer</h3>
                                <h4 class="timeline-title">PT Energi Bangsa Solusindo</h4>
                                <p>Energi Bangsa.id is an online media and training institution that carries a positive
                                    spirit in spreading education, inspiration and motivation to become the nation's energy.
                                </p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-info meta fs-14">Feb 2017 - Nov 2019</div>
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h3 class="timeline-title">Freelance Fullstack Developer</h3>
                                <p>Between February 2017 and November 2019, I leveraged my proficiency in industry-leading
                                    frameworks such as Laravel, Django, and Vue.js for web development, and Flutter for
                                    cross-platform mobile app creation (targeting iOS or Android), to thrive as a freelance
                                    web and mobile application developer. This experience honed my ability to translate
                                    client requirements into user-centric and functionally robust applications, while
                                    fostering strong project management skills to deliver solutions that consistently
                                    exceeded expectations.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--/column -->
            </div>
        </div>
    </section>

    <section class="wrapper">
        <div class="container py-7 py-md-8">
            <div class="row">
                <div class="col-lg-11 col-xl-10 mx-auto mb-10">
                    <h2 class="fs-16 text-uppercase text-muted text-center mb-3">Portofolio</h2>
                    <h3 class="display-3 text-center px-lg-5 px-xl-10 px-xxl-16 mb-0">Elegantly Designed, Expertly
                        Engineered, and Highly Reliable.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="grid grid-view projects-masonry">
                <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                    <div class="project item col-md-6 col-xl-4 mobile">
                        <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-gaweyo.png"
                                srcset="./web/img/portofolio/dimas-gaweyo.png" alt="" /><a class="item-link"
                                href="./web/img/portofolio/dimas-gaweyo.png" data-glightbox
                                data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h2 class="post-title h3 fs-22"><a
                                        href="https://play.google.com/store/apps/details?id=id.gaweyo.android"
                                        target="_blank" class="link-dark">Gaweyo</a></h2>
                                <div class="post-category text-ash">Gig Job Application</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <div class="project item col-md-6 col-xl-4 web">
                        <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-javabica.png"
                                srcset="./web/img/portofolio/dimas-javabica.png" alt="" /><a class="item-link"
                                href="./web/img/portofolio/dimas-javabica.png" data-glightbox
                                data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h2 class="post-title h3 fs-22"><a href="https://javabica.com" target="_blank"
                                        class="link-dark">JavaBica</a></h2>
                                <div class="post-category text-ash">E-commerce</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <div class="project item col-md-6 col-xl-4 web">
                        <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-nifty.png"
                                srcset="./web/img/portofolio/dimas-nifty.png" alt="" /><a class="item-link"
                                href="./web/img/portofolio/dimas-nifty.png" data-glightbox
                                data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h2 class="post-title h3 fs-22"><a href="https://niftyeducate.com" target="_blank"
                                        class="link-dark">Nifty Educate</a></h2>
                                <div class="post-category text-ash">Portal Education</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->
                    <div class="project item col-md-6 col-xl-4 web">
                        <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-inilah.png"
                                srcset="./web/img/portofolio/dimas-inilah.png" alt="" /><a class="item-link"
                                href="./web/img/portofolio/dimas-inilah.png" data-glightbox
                                data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h2 class="post-title h3 fs-22"><a href="https://inilah.com" target="_blank"
                                        class="link-dark">Inilah</a></h2>
                                <div class="post-category text-ash">News Portal</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->

                    <div class="project item col-md-6 col-xl-4 mobile">
                        <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-maxiaga.png"
                                srcset="./web/img/portofolio/dimas-maxiaga.png" alt="" /><a class="item-link"
                                href="./web/img/portofolio/dimas-maxiaga.png" data-glightbox
                                data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h2 class="post-title h3 fs-22"><a
                                        href="https://play.google.com/store/apps/details?id=com.maxiaga.android"
                                        target="_blank" class="link-dark">Maxiaga</a></h2>
                                <div class="post-category text-ash">Pertamina Application</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->

                    <!-- /.item -->
                    <div class="project item col-md-6 col-xl-4 web">
                        <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-rtv.png"
                                srcset="./web/img/portofolio/dimas-rtv.png" alt="" /><a class="item-link"
                                href="./web/img/portofolio/dimas-rtv.png" data-glightbox data-gallery="projects-group"><i
                                    class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                            <div class="post-header">
                                <h2 class="post-title h3 fs-22"><a href="https://roadtovirtuosity.com" target="_blank"
                                        class="link-dark">Road To Virtuosity</a></h2>
                                <div class="post-category text-ash">Online Music Academy</div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->
                </div>

                <div class="text-center mt-10">
                    <a href="{{ route('web.portofolio') }}" class="btn btn-lg btn-primary rounded-pill">More
                        Portofolio</a>
                </div>

            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container py-7 py-md-8">
            <h2 class="display-4 mb-3 text-center">Happy Customers</h2>
            <p class="lead text-center mb-6 px-md-16 px-lg-0">Customer satisfaction is my top priority. See what my clients
                have to say about me.</p>
            <div class="position-relative">
                <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1"
                    style="bottom: 0.5rem; right: -1.7rem;"></div>
                <div class="shape bg-dot primary rellax w-16 h-16" data-rellax-speed="1"
                    style="top: -1rem; left: -1.7rem;"></div>
                <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xl="3"
                    data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="icon mb-0">
                                                <p>“Very professional and highly organized. He developed a detailed
                                                    step-by-step plan on Trello and executed each task efficiently. His
                                                    strong management skills enable him to achieve quick and impressive
                                                    progress.”</p>
                                                <div class="blockquote-details">
                                                    <img class="rounded-circle w-12"
                                                        src="./web/img/avatars/ninedragonlabs-michael.jpg"
                                                        srcset="./web/img/avatars/ninedragonlabs-michael.jpg"
                                                        alt="" />
                                                    <div class="info">
                                                        <h5 class="mb-1">James O'Connor</h5>
                                                        <p class="mb-0">Road To Virtuosity</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="icon mb-0">
                                                <p>“The work was executed with exceptional professionalism. Each task was
                                                    handled with remarkable patience, ensuring complete customer
                                                    satisfaction. The results delivered outstanding value for the money,
                                                    leaving a highly satisfying impression.”</p>
                                                <div class="blockquote-details">
                                                    <img class="rounded-circle w-12" src="./web/img/avatars/turai.PNG"
                                                        srcset="./web/img/avatars/turai.PNG" alt="" />
                                                    <div class="info">
                                                        <h5 class="mb-1">Liam Anderson</h5>
                                                        <p class="mb-0">Agrommunity</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="icon mb-0">
                                                <p>“A talented and exceptional developer in building applications with the
                                                    latest technologies. Additionally, their communication with clients is
                                                    excellent, always striving to meet client needs. I highly recommend them
                                                    with an A++ rating.”</p>
                                                <div class="blockquote-details">
                                                    <img class="rounded-circle w-12" src="./web/img/avatars/samah.jpg"
                                                        srcset="./web/img/avatars/samah.jpg 2x" alt="" />
                                                    <div class="info">
                                                        <h5 class="mb-1">Ethan Harris</h5>
                                                        <p class="mb-0">Jobsicle</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="icon mb-0">
                                                <p>“An exceptionally skilled developer with expertise in building
                                                    applications using the latest technologies. Their communication with
                                                    clients is outstanding, consistently prioritizing client needs. I highly
                                                    recommend them with a top-tier A++ rating.”</p>
                                                <div class="blockquote-details">
                                                    <img class="rounded-circle w-12" src="./web/img/avatars/risdyono.jpg"
                                                        srcset="./web/img/avatars/risdyono.jpg" alt="" />
                                                    <div class="info">
                                                        <h5 class="mb-1">Benjamin Scott</h5>
                                                        <p class="mb-0">Triz Academy</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>

                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="icon mb-0">
                                                <p>“The work was flawlessly executed, exceeding expectations. They
                                                    demonstrate expertise in their field and consistently deliver
                                                    high-quality results on time, which is exactly what one looks for.”</p>
                                                <div class="blockquote-details">
                                                    <img class="rounded-circle w-12" src="./web/img/avatars/te1.jpg"
                                                        srcset="./web/img/avatars/te1.jpg" alt="" />
                                                    <div class="info">
                                                        <h5 class="mb-1">Noah Peterson</h5>
                                                        <p class="mb-0">Kenya</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>


                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="ratings five mb-3"></span>
                                            <blockquote class="icon mb-0">
                                                <p>“Demonstrates exceptional back-end and DevOps expertise, coupled with
                                                    strong quality assurance skills and a meticulous attention to detail.”
                                                </p>
                                                <div class="blockquote-details">
                                                    <img class="rounded-circle w-12" src="./web/img/avatars/te3.jpg"
                                                        srcset="./web/img/avatars/te3@2x.jpg 2x" alt="" />
                                                    <div class="info">
                                                        <h5 class="mb-1">Alexander Brooks</h5>
                                                        <p class="mb-0">United Kingdom</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>

                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.position-relative -->
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container py-7 py-md-8">
            <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
                <div class="col-lg-4 mt-lg-2">
                    <h2 class="display-4 mb-3">My journal</h2>
                    <p class="lead fs-lg mb-6 pe-xxl-5">Here are the most popular news from my articles</p>
                    <a href="{{ route('web.article.index') }}" class="btn btn-soft-primary rounded-pill">View All
                        Articles</a>
                </div>
                <!-- /column -->
                <div class="col-lg-8">
                    <div class="swiper-container blog grid-view mb-6" data-margin="30" data-dots="true"
                        data-items-md="2" data-items-xs="1">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($blogs as $item)
                                    <div class="swiper-slide">
                                        <article>
                                            <figure class="overlay overlay-1 hover-scale rounded mb-5"><a
                                                    href="{{ route('web.article.detail_article', $item->slug) }}"> <img
                                                        src="{{ asset('feature_image/' . $item->feature_image) }}"
                                                        alt="" /></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Read More</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="{{ url('article?category=') . $item->categoryBlogs->slug }}"
                                                        class="hover" rel="category">{{ $item->categoryBlogs->name }}</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h4 class="post-title h3 mt-1 mb-3"><a class="link-dark"
                                                        href="{{ route('web.article.detail_article', $item->slug) }}">{{ \Illuminate\Support\Str::limit($item->title, 35, '...') }}</a>
                                                </h4>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-footer">
                                                <ul class="post-meta mb-0">
                                                    <li class="post-date"><i
                                                            class="uil uil-calendar-alt"></i><span>{{ date_format($item->created_at, 'd M Y') }}</span>
                                                    </li>
                                                    <li class="post-author"></i><i
                                                            class="uil uil-user"></i><span>{{ $item->users->name }}</span>
                                                    </li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.post-footer -->
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
