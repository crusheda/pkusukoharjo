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
                            <li><a href="https://www.facebook.com/rspkusukoharjo" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/rspkusukoharjo" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li>
                                <a href="https://www.tiktok.com/@rspkusukoharjo" target="_blank"><i class="fi fi-brands-tik-tok"></i></a>
                            </li>
                            <li><a href="https://www.youtube.com/channel/UC7KDgt-THy4y9tdso4YbDSw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/rspkusukoharjo" target="_blank"><i class="fab fa-instagram"></i></a></li>
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
                            <li class="nav-item"><a href="{{ route('portal') }}" class="nav-link {{ request()->routeIs('portal') ? 'active' : '' }}">Beranda</a></li>

                            {{-- <li class="nav-item"><a href="#" class="nav-link"># <i class="fas fa-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link"># <i class="fas fa-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link"># <i class="fas fa-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link"># <i class="fas fa-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">#</a></li>
                                </ul>
                            </li> --}}

                            {{-- <li class="nav-item"><a href="{{ route('jadwaldokter') }}" class="nav-link {{ request()->routeIs('jadwaldokter') ? 'active' : '' }}">Jadwal Dokter</a></li> --}}

                            <li class="nav-item"><a href="#" class="nav-link {{ request()->routeIs('profil') || request()->routeIs('imut') ? 'active' : '' }}"> Tentang</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('profil') }}" class="nav-link {{ request()->routeIs('profil') ? 'active' : '' }}">Profil</a></li>
                                    <li class="nav-item"><a href="{{ route('imut') }}" class="nav-link {{ request()->routeIs('imut') ? 'active' : '' }}">Indikator Mutu</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link {{ request()->routeIs('jadwaldokter') || request()->routeIs('tt') ? 'active' : '' }}"> Informasi</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('jadwaldokter') }}" class="nav-link {{ request()->routeIs('jadwaldokter') ? 'active' : '' }}">Jadwal Dokter</a></li>
                                    <li class="nav-item"><a href="{{ route('tt') }}" class="nav-link {{ request()->routeIs('tt') ? 'active' : '' }}">Ketersediaan Tempat Tidur</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link
                                {{  request()->routeIs('unggulan') ||
                                    request()->routeIs('gawatdarurat') ||
                                    request()->routeIs('rawatjalan') ||
                                    request()->routeIs('rawatinap') ||
                                    request()->routeIs('rawatintensif') ||
                                    request()->routeIs('penunjangmedis') ? 'active' : ''
                                }}"> Pelayanan</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('unggulan') }}" class="nav-link {{ request()->routeIs('unggulan') ? 'active' : '' }}">Unggulan</a></li>
                                    <li class="nav-item"><a href="{{ route('gawatdarurat') }}" class="nav-link {{ request()->routeIs('gawatdarurat') ? 'active' : '' }}">Gawat Darurat</a></li>
                                    <li class="nav-item"><a href="{{ route('rawatjalan') }}" class="nav-link {{ request()->routeIs('rawatjalan') ? 'active' : '' }}">Rawat Jalan</a></li>
                                    <li class="nav-item"><a href="{{ route('rawatinap') }}" class="nav-link {{ request()->routeIs('rawatinap') ? 'active' : '' }}">Rawat Inap</a></li>
                                    <li class="nav-item"><a href="{{ route('rawatintensif') }}" class="nav-link {{ request()->routeIs('rawatintensif') ? 'active' : '' }}">Rawat Intensif</a></li>
                                    <li class="nav-item"><a href="{{ route('penunjangmedis') }}" class="nav-link {{ request()->routeIs('penunjangmedis') ? 'active' : '' }}">Penunjang Medis</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="{{ route('kontak') }}" class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a></li>
                        </ul>

                        <div class="others-options">
                            {{-- <a href="cart.html" class="cart-btn"><i class="flaticon-shopping-bag"></i></a> --}}

                            {{-- <div class="option-item"><i class="search-btn fas fa-search"></i>
                                <i class="search-close-btn fas fa-times"></i>

                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">

                                            <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}

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
