@extends('layouts.fovia')

@section('content')
<style>
    /* STYLE FOR IMAGE GALLERY */
    .portfolio-menu{
        text-align:center;
    }
    .portfolio-menu ul li{
        display:inline-block;
        margin:0;
        list-style:none;
        padding:10px 15px;
        cursor:pointer;
        -webkit-transition:all 05s ease;
        -moz-transition:all 05s ease;
        -ms-transition:all 05s ease;
        -o-transition:all 05s ease;
        transition:all .5s ease;
    }

    .portfolio-item{
        width:100%;
    }
    .portfolio-item .item{
        /*width:303px;*/
        float:left;
        margin-bottom:10px;
    }
</style>
<!-- Start Main Banner Area -->
<div class="home-slides owl-carousel owl-theme">
    <div class="main-banner" style="background-image: url(img/gedung-pku/bg-gedung-small.png)">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span>Portal Resmi</span>
                        <h1>Rumah Sakit PKU Muhammadiyah Sukoharjo</h1>
                        <p>Amanah, Santun, Ramah, Ikhlas (ASRI)</p>

                        <div class="btn-box">
                            {{-- <a href="#antrian-bpjs" class="btn btn-primary">Antrian Online <i class="flaticon-doctor-1"></i></a>
                            <a href="{{ route('jadwaldokter') }}" class="btn btn-light">Jadwal Dokter <i class="fas fa-calendar"></i></a> --}}
                            {{-- <div class="btn-group">

                            </div> --}}
                            <a href="http://103.210.117.106:83/m" class="btn btn-primary" target="_blank">Daftar Online <i class="fas fa-user"></i></a>
                            {{-- <a href="{{ route('jadwaldokter') }}" class="btn btn-label-info">Jadwal Dokter <i class="fas fa-calendar"></i></a> --}}
                            <a href="{{ route('jadwaldokter') }}" allow="autoplay" class="btn btn-light">Jadwal Dokter <i class="fas fa-calendar"></i></a><br>
                            {{-- <a href="https://www.youtube.com/watch?v=rmNucGJuxNg?autoplay=1" allow="autoplay" class="btn btn-light popup-youtube">Profil Rumah Sakit <i class="fas fa-play"></i></a><br> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-shape1"><img src="{{ asset('assets/img/circle-shape1.png') }}" alt="image"></div>
        <div class="circle-shape2"><img src="{{ asset('assets/img/circle-shape2.png') }}" alt="image"></div>
        <div class="shape1"><img src="{{ asset('assets/img/shape/1.png') }}" alt="image"></div>
    </div>

    {{-- <div class="main-banner item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span>Women Care</span>
                        <h1>Exceptional Care for Women</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Quis ipsumpsum dolor sit amet consectetur.</p>

                        <div class="btn-box">
                            <a href="#" class="btn btn-primary">Make appointment <i class="fas fa-bell"></i></a>
                            <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="btn btn-light popup-youtube">Play Now <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-shape1"><img src="{{ asset('assets/img/circle-shape1.png') }}" alt="image"></div>
        <div class="circle-shape2"><img src="{{ asset('assets/img/circle-shape2.png') }}" alt="image"></div>
        <div class="shape1"><img src="{{ asset('assets/img/shape/1.png') }}" alt="image"></div>
    </div>

    <div class="main-banner item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span>Health Service</span>
                        <h1>Your Health is Our Top Priority</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Quis ipsumpsum dolor sit amet consectetur.</p>

                        <div class="btn-box">
                            <a href="#" class="btn btn-primary">Make appointment <i class="fas fa-bell"></i></a>
                            <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="btn btn-light popup-youtube">Play Now <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-shape1"><img src="{{ asset('assets/img/circle-shape1.png') }}" alt="image"></div>
        <div class="circle-shape2"><img src="{{ asset('assets/img/circle-shape2.png') }}" alt="image"></div>
        <div class="shape1"><img src="{{ asset('assets/img/shape/1.png') }}" alt="image"></div>
    </div> --}}
</div>
<!-- End Main Banner Area -->

{{-- <section class="main-services-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Main Features</span>
            <h2>Our Main Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-services-box">
                    <div class="icon">
                        <i class="flaticon-doctor"></i>
                    </div>
                    <h3><a href="#">Advanced Care</a></h3>
                    <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-services-box">
                    <div class="icon">
                        <i class="flaticon-dental-chair"></i>
                    </div>
                    <h3><a href="#">Internal Medicine</a></h3>
                    <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-services-box">
                    <div class="icon">
                        <i class="flaticon-care"></i>
                    </div>
                    <h3><a href="#">Otolaryngology</a></h3>
                    <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="main-services-box">
                    <div class="icon">
                        <i class="flaticon-brain"></i>
                    </div>
                    <h3><a href="#">Ophthalmology</a></h3>
                    <p>Lorem ipsum dolor sit amet consecte adipiscing elit sed do eiusincidunt.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="shape2"><img src="{{ asset('assets/img/shape/2.png') }}" alt="image"></div>
</section>

<section class="about-area">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="">
                    <img src="{{ asset('assets/img/main-banner2.jpg') }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="about-content">
                    <span>About Us</span>
                    <h2>Short Story About Fovia Clinic Since 1999</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                    <ul>
                        <li><i class="flaticon-check-mark"></i> Scientific Skills For getting a better result</li>
                        <li><i class="flaticon-check-mark"></i> Communication Skills to getting in touch</li>
                        <li><i class="flaticon-check-mark"></i> A Career Overview opportunity Available</li>
                        <li><i class="flaticon-check-mark"></i> A good Work Environment For work</li>
                    </ul>

                    <a href="#" class="btn btn-primary">Learn More <i class="flaticon-right-chevron"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-mission-area ptb-100">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="our-mission-content">
                    <span class="sub-title">Our Mission & Vision</span>
                    <h2>Better Information, Better Health</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-doctor"></i>
                            </div>
                            <span>Professional Staff</span>

                            Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                        </li>

                        <li>
                            <div class="icon">
                                <i class="flaticon-newborn"></i>
                            </div>
                            <span>Newborn Care</span>

                            Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                        </li>

                        <li>
                            <div class="icon">
                                <i class="flaticon-laboratory"></i>
                            </div>
                            <span>Sufficient Lab Tests</span>

                            Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                        </li>

                        <li>
                            <div class="icon">
                                <i class="flaticon-extraction"></i>
                            </div>
                            <span>Tooth Extraction</span>

                            Lorem ipsum dolor sit amet sit, consectetur adipiscing elit.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="our-mission-image">
                    <img src="{{ asset('assets/img/mission-img1.jpg') }}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="shape3"><img src="{{ asset('assets/img/shape/3.png') }}" class="wow fadeInLeft" alt="image"></div>
</section>

<section class="fun-facts-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-fun-facts">
                    <div class="icon">
                        <i class="flaticon-doctor-1"></i>
                    </div>
                    <h3>
                        <span class="odometer" data-count="540"></span>
                        <span class="optional-icon">+</span>
                    </h3>
                    <p>Expert Doctors</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-fun-facts">
                    <div class="icon">
                        <i class="flaticon-light-bulb"></i>
                    </div>
                    <h3>
                        <span class="odometer" data-count="899"></span>
                        <span class="optional-icon">K</span>
                    </h3>
                    <p>Problem Solve</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-fun-facts">
                    <div class="icon">
                        <i class="flaticon-science"></i>
                    </div>
                    <h3>
                        <span class="odometer" data-count="100"></span>
                        <span class="optional-icon">+</span>
                    </h3>
                    <p>Award Winning</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-fun-facts">
                    <div class="icon">
                        <i class="flaticon-trophy"></i>
                    </div>
                    <h3>
                        <span class="odometer" data-count="56"></span>
                        <span class="optional-icon">K</span>
                    </h3>
                    <p>Experiences</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-area ptb-100 bg-f4f9fd">
    <div class="container">
        <div class="section-title">
            <span>Our Services</span>
            <h2>Our Healthcare Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-1">
                    <div class="icon">
                        <i class="flaticon-cancer"></i>
                    </div>
                    <h3><a href="#">Cancer Services</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-2">
                    <div class="icon">
                        <i class="flaticon-liver"></i>
                    </div>
                    <h3><a href="#">Liver Transplant</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-3">
                    <div class="icon">
                        <i class="flaticon-kidney"></i>
                    </div>
                    <h3><a href="#">Kidney Cancer</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-4">
                    <div class="icon">
                        <i class="flaticon-ekg"></i>
                    </div>
                    <h3><a href="#">Cardiac Arrhythmia</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-5">
                    <div class="icon">
                        <i class="flaticon-tooth"></i>
                    </div>
                    <h3><a href="#">Dental Services</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box bg-6">
                    <div class="icon">
                        <i class="flaticon-radiation"></i>
                    </div>
                    <h3><a href="#">Radiation Oncology</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

                    <a href="#" class="read-more-btn">Read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="more-services-btn">
                    <a href="#" class="btn btn-primary">More Services <i class="flaticon-right-chevron"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Artikel Kesehatan</h2>
            <p>Tetap sehat bersama Rumah Sakit PKU Muhammadiyah Sukoharjo</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="{{ asset('assets/img/blog/1.jpg') }}" alt="image"></a>
                    </div>

                    <div class="post-content">
                        <div class="post-meta">
                            <ul>
                                <li>By: <a href="#">Yussuf Faisal</a></li>
                                <li>June 19, 2021</li>
                            </ul>
                        </div>

                        <h3><a href="#">250+ Medical Tips We Just Had to Share</a></h3>
                        <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="{{ asset('assets/img/blog/2.jpg') }}" alt="image"></a>
                    </div>

                    <div class="post-content">
                        <div class="post-meta">
                            <ul>
                                <li>By: <a href="#">Yussuf Faisal</a></li>
                                <li>June 10, 2021</li>
                            </ul>
                        </div>

                        <h3><a href="#">12 Ways You Can Cut Your Prescription Costs</a></h3>
                        <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="#"><img src="{{ asset('assets/img/blog/3.jpg') }}" alt="image"></a>
                    </div>

                    <div class="post-content">
                        <div class="post-meta">
                            <ul>
                                <li>By: <a href="#">Yussuf Faisal</a></li>
                                <li>June 24, 2021</li>
                            </ul>
                        </div>

                        <h3><a href="#">10 Tips to Live Better With Psoriatic Arthritis</a></h3>
                        <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="more-services-btn">
                    <a href="#" class="btn btn-primary">Artikel Lainnya <i class="flaticon-right-chevron"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doctor-area ptb-100 bg-fefefe">
    <div class="container">
        <div class="section-title">
            <span>Doctors</span>
            <h2>Meet Our Qualified Doctors</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="doctor-slides owl-carousel owl-theme">
            <div class="single-doctor-box">
                <div class="doctor-image">
                    <img src="{{ asset('assets/img/doctor/1.jpg') }}" alt="image">

                    <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                </div>

                <div class="doctor-content">
                    <h3><a href="#">Dr. Addison Smith</a></h3>
                    <span>Cardiologists</span>

                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="single-doctor-box">
                <div class="doctor-image">
                    <img src="{{ asset('assets/img/doctor/5.jpg') }}" alt="image">

                    <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                </div>

                <div class="doctor-content">
                    <h3><a href="#">Dr. Sarah Taylor</a></h3>
                    <span>Nephrologists</span>

                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="single-doctor-box">
                <div class="doctor-image">
                    <img src="{{ asset('assets/img/doctor/2.jpg') }}" alt="image">

                    <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                </div>

                <div class="doctor-content">
                    <h3><a href="#">Dr. Aiken Ward</a></h3>
                    <span>Dermatologists</span>

                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="single-doctor-box">
                <div class="doctor-image">
                    <img src="{{ asset('assets/img/doctor/3.jpg') }}" alt="image">

                    <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                </div>

                <div class="doctor-content">
                    <h3><a href="#">Babatunde Jon</a></h3>
                    <span>Endocrinologists</span>

                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="single-doctor-box">
                <div class="doctor-image">
                    <img src="{{ asset('assets/img/doctor/4.jpg') }}" alt="image">

                    <a href="#" class="details-btn"><i class="fas fa-plus"></i></a>
                </div>

                <div class="doctor-content">
                    <h3><a href="#">Eachann Jhon</a></h3>
                    <span>Gastroenterologists</span>

                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="antrian-bpjs" class="appointment-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="appointment-content">
            <span class="sub-title">Antrian Online</span>
            <h2>Periksa Antrian BPJS</h2>

            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="icon">
                                <i class="flaticon-user"></i>
                            </div>
                            <label>Rekam Medik</label>
                            <input type="text" class="form-control" placeholder="Tuliskan No. RM" id="name" name="name">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="icon">
                                <i class="fi fi-rr-id-badge"></i>
                            </div>
                            <label>NIK</label>
                            <input type="number" class="form-control" placeholder="Tuliskan NIK" id="email" name="email">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="icon">
                                <i class="fi fi-sr-stethoscope"></i>
                            </div>
                            <label>Poliklinik</label>

                            <select>
                                <option>#</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="icon">
                                <i class="fi fi-bs-hand-holding-heart"></i>
                            </div>
                            <label>BPJS</label>
                            <input type="number" class="form-control" placeholder="Tuliskan No. BPJS" id="text" name="text">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="submit-btn">
                            <button class="btn btn-primary" disabled>Submit <i class="flaticon-right-chevron"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="feedback-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Feedback</span>
            <h2>Testimoni</h2>
            <p>Penilaian Anda sangat berharga bagi kami</p>
        </div>

        <div class="feedback-slides">
            <div class="client-thumbnails">
                <div>
                    <div class="item">
                        <div class="img-fill"><img src="{{ asset('img/user.png') }}" alt="client"></div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="{{ asset('img/user.png') }}" alt="client"></div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="{{ asset('img/user.png') }}" alt="client"></div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="{{ asset('img/user.png') }}" alt="client"></div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="{{ asset('img/user.png') }}" alt="client"></div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="{{ asset('img/user.png') }}" alt="client"></div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="{{ asset('img/user.png') }}" alt="client"></div>
                    </div>

                    <div class="item">
                        <div class="img-fill"><img src="{{ asset('img/user.png') }}" alt="client"></div>
                    </div>
                </div>
            </div>

            <div class="client-feedback">
                <div>
                    <div class="item">
                        <div class="single-feedback">
                            <h3>Muthi'ah Amra Rabbiha</h3>
                            <span>6 Mei 2022</span>
                            <p>Menjadi alternatif untuk pelayanan kesehatan bernuansa islami</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <h3>Ninik Indriyani</h3>
                            <span>22 Juni 2022</span>
                            <p>gedung baru bersih, pelayanannya bagus, bisa memakai BPJS. semoga bermanfaat bagi warga Sukoharjo dan sekitarnya..</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <h3>Ahmad H Machsuni</h3>
                            <span>26 Juni 2022</span>
                            <p>Rumah sakit islami yg bagus di pusat Kota Sukoharjo</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <h3>Qoi Ruli</h3>
                            <span>5 Juli 2022</span>
                            <p>Mantaap tingkatkan, jaya pku muhammadiyah sukoharjo</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <h3>Ahmad Rafiiq</h3>
                            <span>13 Agustus 2022</span>
                            <p>pelayanan cukup memuaskan, tersedia mesin atm, gedung bersih, dan antrian tertata</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <h3>Ferdi Mustofa</h3>
                            <span>2 September 2022</span>
                            <p>Terimakasih saya dilayani dengan ramah, semoga bisa ditingkatkan dan dipertahankan</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <h3>Muh Mirza K</h3>
                            <span>10 September 2022</span>
                            <p>Tindakannya cepat, anak saya langsung ditangani dan alurnya cepat dan tanggap. terima kasih rspkuskh</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <h3>Lilis Setianingsih</h3>
                            <span>21 Oktober 2022</span>
                            <p>Pendaftaran profesional ramah santun tidak berbelit" Cepat dan mudah.. Alhamdulillah sangat puas untuk saya yang baru pertama kali periksa ke rumah sakit ini.. Termakasih pku semoga layanan seperti ini tersedia di seluruh rumah sakit</p>
                        </div>
                    </div>
                </div>

                <button class="prev-arrow slick-arrow">
                    <i class='flaticon-left-arrow'></i>
                </button>

                <button class="next-arrow slick-arrow">
                    <i class='flaticon-arrow-pointing-to-right'></i>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="faq-area">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="faq-image">
                    <img src="{{ asset('assets/img/faq-img1.jpg') }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="faq-accordion">
                    <span class="sub-title">Jawaban dari Kami</span>
                    <h2>Pertanyaan yang sering ditanyakan</h2>

                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                My physician is a faculty member—what does that mean?
                            </a>

                            <p class="accordion-content show">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What is an academic medical center?
                            </a>

                            <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What doctor will I see?
                            </a>

                            <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What is a medical student?
                            </a>

                            <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                How are residents supervised?
                            </a>

                            <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partner-area ptb-100 bg-f4f9fd">
    <div class="container">
        <div class="section-title">
            <h2>Mitra Kami</h2>
            <p>Daftar link kerjasama Rumah Sakit PKU Muhammadiyah Sukoharjo</p>
        </div>

        <div class="customers-partner-list">
            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/1.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/2.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/3.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/4.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/5.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/6.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/7.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/8.png') }}" alt="image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="{{ asset('assets/img/partner/9.png') }}" alt="image">
                </a>
            </div>
        </div>
    </div>
</section> --}}

<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Berita Terkini</span>
            <h2>Ikuti berita terbaru kami</h2>
            <p>Berikut ini merupakan berita terkini Rumah Sakit PKU Muhammadiyah Sukoharjo yang dapat anda lihat di bawah ini</p>
        </div>

        <div class="row" id="berita">
            {{-- <div></div> --}}

        </div>
    </div>
</section>

<section class="partner-area ptb-100 bg-f4f9fd">
    <div class="container">
        <div class="section-title">
            <span>E-Poster</span>
            <h2>Poster Kesehatan</h2>
            <p>Tetap sehat dan bahagia bersama kami</p>
        </div>
        <div class="portfolio-item row">
            {{-- <div class="item col-lg-3 col-md-4 col-6 col-sm">
                <div class="single-doctor-box" style="padding: 10px">
                    <a href="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <div class="single-doctor-box" style="padding: 10px">
                    <a href="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" alt="">
                    </a>
                </div>
            </div> --}}
        </div>
        <div class="col-md-12">
            <div class="more-services-btn">
                <a href="javascript:void(0);" class="btn btn-light">Selengkapnya <i class="flaticon-right-chevron"></i></a>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready( function () {
        $.ajax(
            {
                url: "/api/show/berita",
                type: 'GET',
                dataType: 'json', // added data type
                success: function(res) {
                    $("#berita").empty();
                    console.log(res.berita.length);
                    if(res.berita.length == 0){
                        $("#berita").append(`
                            <div class="col-md-12"><center>Berita tidak tersedia untuk saat ini</center></div>
                        `);
                    } else {
                        for (let i = 0; i < res.berita.length; i++) {
                            $("#berita").append(`
                                <div class="col-md-4">
                                    <div class="single-blog-post">
                                        <div class="post-image">
                                            <a href="artikel/berita/${res.berita[i].id}"><img src="/storage/${(res.berita[i].filename).substring(7,1000)}" alt="image"></a>
                                        </div>

                                        <div class="post-content">
                                            <div class="post-meta">
                                                <ul>
                                                    <li>By: <a href="javascript:void(0)">${res.berita[i].nama}</a></li>
                                                    <li>${res.berita[i].tgl}</li>
                                                </ul>
                                            </div>

                                            <h3><a href="/artikel/berita/${res.berita[0].id}">${res.berita[i].judul}</a></h3>
                                            <p>${res.berita[i].deskripsi.substring(0,150)}...</p>
                                        </div>
                                    </div>
                                </div>
                            `);
                        };
                        $("#berita").append(`
                            <div class="col-md-12">
                                <div class="more-services-btn">
                                    <a href="/artikel/berita/semua" class="btn btn-light">Berita lainnya <i class="flaticon-right-chevron"></i></a>
                                </div>
                            </div>
                        `);
                    }
                        // for (let i = 1; i < res.berita.length; i++) {
                        //     $("#berita").append(`
                        //         <div class="col-lg-4 col-md-6">
                        //             <div class="single-blog-post">
                        //                 <div class="post-image">
                        //                     <a href="artikel/berita/${res.berita[0].id}"><img src="storage/${(res.berita[0].filename).substring(7,1000)}" alt="image"></a>
                        //                 </div>

                        //                 <div class="post-content">
                        //                     <div class="post-meta">
                        //                         <ul>
                        //                             <li>By: <a href="#">${res.berita[0].nama}</a></li>
                        //                             <li>${res.berita[0].tgl}</li>
                        //                         </ul>
                        //                     </div>

                        //                     <h3><a href="artikel/berita/${res.berita[0].id}">${res.berita[0].judul}</a></h3>
                        //                     <p>${res.berita[0].deskripsi.substring(0,150)}...</p>
                        //                 </div>
                        //             </div>
                        //         </div>
                        //     `);
                        // for (let i = 1; i < res.berita.length; i++) {
                        //     console.log(i);
                        //     $("#berita"+i).empty();
                        //     $("#berita"+i).append(`
                        //     <img src="storage/${(res.berita[i].filename).substring(7,1000)}" class="card-img-top" style="height: 140px">
                        //     <div class="card-body d-flex flex-column">
                        //         <a>${res.berita[i].judul}</a><br>
                        //         <sub><i class="fas fa-feather"></i>&nbsp;&nbsp;${res.berita[i].nama} &nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;${res.berita[i].tgl}</sub>
                        //         <a style="margin-top: 10px" href="artikel/berita/${res.berita[i].id}" class="btn btn-warning text-white btn-sm">Selengkapnya&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></a>
                        //     </div>
                        //     `);
                        // }

                }
            }
        );
        $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');

         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });
    });
</script>
@endsection
