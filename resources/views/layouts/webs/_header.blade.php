@if (Route::currentRouteName() == 'web.home')
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-dark">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="{{ url('/') }}" class="d-inline-flex align-content-center gap-1">
                        <img class="logo-dark h-10 w-10 rounded-circle" src="{{ asset('web/img/ulil-upwork.png') }}"
                            srcset="{{ asset('web/img/ulil-upwork.png') }}" alt="arrizal-linkedin" width="200" />
                        <img class="logo-light h-10 w-10 rounded-circle" src="{{ asset('web/img/ulil-upwork.png') }}"
                            srcset="{{ asset('web/img/ulil-upwork.png') }}" alt="" width="200" />
                        <h5 class="d-flex align-items-center text-light">Mualif Ulil</h5>
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-light fs-30 mb-0">Mualif Ulil</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item "><a class="nav-link {{ Request::is('portofolio') ? 'active ' : '' }}"
                                    href="{{ route('web.portofolio') }}" wire:navigate wire:loading>Portofolio</a></li>

                            <li class="nav-item "><a class="nav-link {{ Request::is('article') ? 'active ' : '' }}"
                                    href="{{ route('web.article.index') }}" wire:navigate wire:loading>Articles</a></li>

                            <li class="nav-item "><a class="nav-link" target="_blank"
                                    href="https://api.whatsapp.com/send/?phone=6285860732220">Whatsapp</a></li>
                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="offcanvas-footer d-lg-none">
                            <div>
                                <a href="mailto:mail.mualifulil@gmail.com"
                                    class="link-inverse">mail.mualifulil@gmail.com</a>
                                <a href="https://api.whatsapp.com/send/?phone=6285860732220"
                                    class="link-inverse"target="_blank">0858-6073-2220</a>
                                <nav class="nav social social-white mt-4">
                                    <a href="https://www.facebook.com/mualifulilm"><i
                                            class="uil uil-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/arrizal-dharma-agrianto-96a581346/"
                                        target="_blank"><i class="uil uil-linkedin"></i></a>
                                    <a href="https://www.instagram.com/mualif_ulil"><i
                                            class="uil uil-instagram"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                        </div>
                        <!-- /.offcanvas-footer -->
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other ms-lg-4">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item d-none d-md-block">

                            <a class="btn btn-white btn-icon btn-icon-start rounded-pill"
                                href="https://www.upwork.com/freelancers/~013efcd877c7d16f6a" target="_blank">
                                Upwork
                            </a>
                            <!-- <a href="#" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="trueLink">Download CV</a> -->
                        </li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
    </header>
@else
    <nav class="navbar navbar-expand-lg classic navbar-light navbar-bg-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ url('/') }}" class="d-flex gap-1">
                    <img class="logo-dark rounded-circle h-10 w-10" src="{{ asset('web/img/ulil-upwork.png') }}"
                        srcset="{{ asset('web/img/ulil-upwork.png') }}" alt="" width="200" />
                    <h5 class="d-flex align-items-center text-dark font-weight-bold">Mualif Ulil</h5>
                    {{-- <img class="logo-light" src="{{ asset('web/img/dimas-white.png')}}" srcset="{{ asset('web/img/dimas-white.png')}}" alt=""  width="200"/> --}}
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <a href="/"><img src="{{ asset('web/img/ulil-upwork.png') }}"
                            srcset="{{ asset('web/img/ulil-upwork.png 2x') }}" alt="" width="50"
                            height="50" style="border-radius: 50%" /></a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item "><a class="nav-link {{ Request::is('portofolio') ? 'active ' : '' }}"
                                href="{{ route('web.portofolio') }}" wire:navigate wire:loading>Portofolio</a></li>
                        <li class="nav-item "><a class="nav-link {{ Request::is('article') ? 'active ' : '' }}"
                                href="{{ route('web.article.index') }}" wire:navigate wire:loading>Articles</a></li>
                        <li class="nav-item "><a class="nav-link" target="_blank"
                                href="https://api.whatsapp.com/send/?phone=6285860732220">Whatsapp</a></li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                        <a href="mailto:arrizaldharmaagrianto@gmail.com"
                            class="link-inverse">arrizaldharmaagrianto@gmail.com</a>
                        <a href="https://api.whatsapp.com/send/?phone=6285860732220"
                            class="link-inverse"target="_blank">0858-6073-2220</a>
                        <nav class="nav social social-white mt-4">
                            <a href="https://www.facebook.com/mualifulilm"><i class="uil uil-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/in/arrizal-dharma-agrianto-96a581346/"
                                target="_blank"><i class="uil uil-linkedin"></i></a>
                            <a href="https://www.instagram.com/mualif_ulil"><i class="uil uil-instagram"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /offcanvas-nav-other -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-none d-md-block">

                        <a href="https://www.upwork.com/freelancers/~012dd0073fa520988c" target="_blank"
                            class="btn btn-navy btn-icon btn-icon-start rounded-pill">
                            <i class="uil uil-whatshapp-alt"></i> Upwork
                        </a>
                        <!-- <a href="#" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="trueLink">Download CV</a> -->
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
@endif
