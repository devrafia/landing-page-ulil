@extends('layouts.app')

@section('content')
    <section id="portfolio">
        <div class="wrapper bg-gray">
            <div class="container py-15 py-md-17 text-center">
                <div class="row">
                    <div class="col-lg-11 col-xl-10 mx-auto mb-10">
                        <h2 class="fs-16 text-uppercase text-muted text-center mb-3">Portofolio</h2>
                        <h3 class="display-3 text-center px-lg-5 px-xl-10 px-xxl-16 mb-0">Elegantly designed, expertly
                            engineered, and highly reliable.</h3>
                    </div>
                </div>
                <!-- /.row -->
                <div class="grid grid-view projects-masonry">
                    <div class="isotope-filter filter mb-10">
                        <ul>
                            <li><a class="filter-item active" data-filter="*">All</a></li>
                            <li><a class="filter-item" data-filter=".web">Web</a></li>
                            <li><a class="filter-item" data-filter=".mobile">Mobile</a></li>
                        </ul>
                    </div>
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
                                        srcset="./web/img/portofolio/dimas-javabica.png" alt="" /><a
                                        class="item-link" href="./web/img/portofolio/dimas-javabica.png" data-glightbox
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
                                        srcset="./web/img/portofolio/dimas-maxiaga.png" alt="" /><a
                                        class="item-link" href="./web/img/portofolio/dimas-maxiaga.png" data-glightbox
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
                                        href="./web/img/portofolio/dimas-rtv.png" data-glightbox
                                        data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="https://roadtovirtuosity.com"
                                                target="_blank" class="link-dark">Road To Virtuosity</a></h2>
                                        <div class="post-category text-ash">Online Music Academy</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                            <!-- /.item -->


                            <div class="project item col-md-6 col-xl-4 web mobile">
                                <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-ifreelance.png"
                                        srcset="./web/img/portofolio/dimas-ifreelance.png" lt="" /><a
                                        class="item-link" href="./web/img/portofolio/dimas-ifreelance.png" data-glightbox
                                        data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="https://ifreelance.id" target="_blank"
                                                class="link-dark">Ifreelance</a></h2>
                                        <div class="post-category text-ash">Freelancer Portal</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="project item col-md-6 col-xl-4 web">
                                <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-astro.png"
                                        srcset="./web/img/portofolio/dimas-astro.png" alt="" /><a
                                        class="item-link" href="./web/img/portofolio/dimas-astro.png" data-glightbox
                                        data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="https://www.astromusicgroup.com"
                                                target="_blank" class="link-dark">Astro Music Group</a></h2>
                                        <div class="post-category text-ash">Manage Music Distributor</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="project item col-md-6 col-xl-4 web">
                                <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-hcp.png"
                                        srcset="./web/img/portofolio/dimas-hcp.png" alt="" /><a class="item-link"
                                        href="./web/img/portofolio/dimas-hcp.png" data-glightbox
                                        data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="https://humancapitalprofessional.com/"
                                                target="_blank" class="link-dark">Human Capital Professional</a></h2>
                                        <div class="post-category text-ash">Personal profile</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="project item col-md-6 col-xl-4 web">
                                <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-oltime.png"
                                        srcset="./web/img/portofolio/dimas-oltime.png" lt="" /><a
                                        class="item-link" href="./web/img/portofolio/dimas-oltime.png" data-glightbox
                                        data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">Oltime</a>
                                        </h2>
                                        <div class="post-category text-ash">Customer Relationship Management</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="project item col-md-6 col-xl-4 web">
                                <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-koprasi.png"
                                        srcset="./web/img/portofolio/dimas-koprasi.png" alt="" /><a
                                        class="item-link" href="./web/img/portofolio/dimas-koprasi.png" data-glightbox
                                        data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="#" target="_blank"
                                                class="link-dark">Azimuth</a></h2>
                                        <div class="post-category text-ash">Accounting System</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>

                            <div class="project item col-md-6 col-xl-4 web">
                                <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-kopindo.png"
                                        srcset="./web/img/portofolio/dimas-kopindo.png" alt="" /><a
                                        class="item-link" href="./web/img/portofolio/dimas-kopindo.png" data-glightbox
                                        data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="http://kopindo.org/" target="_blank"
                                                class="link-dark">Kopindo</a></h2>
                                        <div class="post-category text-ash">E-Commerce</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>

                            <div class="project item col-md-6 col-xl-4 web">
                                <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-agro.png"
                                        srcset="./web/img/portofolio/dimas-agro.png" alt="" /><a
                                        class="item-link" href="./web/img/portofolio/dimas-agro.png" data-glightbox
                                        data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="https://www.agrommunity.com"
                                                target="_blank" class="link-dark">Agrommunity</a></h2>
                                        <div class="post-category text-ash">Agro management</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>

                            <div class="project item col-md-6 col-xl-4 web">
                                <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-sriboga.png"
                                        srcset="./web/img/portofolio/dimas-sriboga.png" alt="" /><a
                                        class="item-link" href="./web/img/portofolio/dimas-sriboga.png" data-glightbox
                                        data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="https://inspirasibaking.com/"
                                                target="_blank" class="link-dark">Sriboga</a></h2>
                                        <div class="post-category text-ash">Company Profile & Cooking Portal</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>

                            <div class="project item col-md-6 col-xl-4 web">
                                <figure class="rounded mb-6"><img src="./web/img/portofolio/dimas-bixbox.png"
                                        srcset="./web/img/portofolio/dimas-bixbox.png" alt="" /><a
                                        class="item-link" href="./web/img/portofolio/dimas-bixbox.png" data-glightbox
                                        data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="https://bixboxstudio.com/"
                                                target="_blank" class="link-dark">BixBox</a></h2>
                                        <div class="post-category text-ash">Company Profile</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>


                        </div>
                        <!-- /.row -->
                    </div>

                    <!-- /.row -->
                </div>
                <!-- /.grid -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </section>
@endsection
