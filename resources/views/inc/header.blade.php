<!-- Start Header Area -->
<header class="header-area">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="header-contact-info">
                        <li><i class="fas fa-phone"></i> IGD : <a href="tel:0271593979">0271-593-979</a></li>
                        <li><i class="far fa-paper-plane"></i> <a href="mailto:pku.sukoharjo@gmail.com">pku.sukoharjo@gmail.com</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="header-right-content">
                        <ul class="top-header-social">
                            <li><a href="https://www.facebook.com/rspkusukoharjo"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/rspkusukoharjo"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.tiktok.com/@rspkusukoharjo"><i class="fab fa-tiktok"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC7KDgt-THy4y9tdso4YbDSw"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/rspkusukoharjo"><i class="fab fa-instagram"></i></a></li>
                        </ul>

                        {{-- <div class="lang-select">
                            <select>
                                <option>Eng</option>
                                <option>Spa</option>
                                <option>Ara</option>
                                <option>Fre</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="fovia-responsive-nav">
            <div class="container">
                <div class="fovia-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('portal') }}">
                            {{-- <img src="{{ asset('assets/img/logo.png') }}" alt="logo"> --}}
                            <img src="{{ asset('img/logo/pku/logo-1-sm-green.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="fovia-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('portal') }}">
                        <img src="{{ asset('img/logo/pku/logo-1-sm-green.png') }}" alt="logo" style="background-size: contain;position: relative;max-height: 50px;">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ route('portal') }}" class="nav-link active">Beranda</a></li>

                            <li class="nav-item"><a href="#" class="nav-link">Department <i class="fas fa-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="services-1.html" class="nav-link">Department 01</a></li>

                                    <li class="nav-item"><a href="services-2.html" class="nav-link">Department 02</a></li>

                                    <li class="nav-item"><a href="single-services.html" class="nav-link">Department Details</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Doctor <i class="fas fa-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="doctor.html" class="nav-link">Doctor</a></li>

                                    <li class="nav-item"><a href="doctor-details.html" class="nav-link">Doctor Details</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Shop <i class="fas fa-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="shop.html" class="nav-link">Shop</a></li>

                                    <li class="nav-item"><a href="single-product.html" class="nav-link">Single Products</a></li>

                                    <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>

                                    <li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Blog <i class="fas fa-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="blog-1.html" class="nav-link">Blog Grid</a></li>

                                    <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Right Sidebar</a></li>

                                    <li class="nav-item"><a href="single-blog.html" class="nav-link">Blog Details</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Pages <i class="fas fa-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>

                                    <li class="nav-item"><a href="appointment.html" class="nav-link">Appointment</a></li>

                                    <li class="nav-item"><a href="timetable.html" class="nav-link">Time Table</a></li>

                                    <li class="nav-item"><a href="partner.html" class="nav-link">Partner</a></li>

                                    <li class="nav-item"><a href="error-404.html" class="nav-link">404 Error</a></li>

                                    <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>

                        <div class="others-options">
                            {{-- <a href="cart.html" class="cart-btn"><i class="flaticon-shopping-bag"></i></a> --}}

                            <div class="option-item"><i class="search-btn fas fa-search"></i>
                                <i class="search-close-btn fas fa-times"></i>

                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">

                                            <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <a href="tel:0271593979" class="btn btn-primary" style="background-color: rgb(255, 92, 92)"><i class="fas fa-phone text-dark" style="background-color: white"></i>IGD 24 JAM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->
