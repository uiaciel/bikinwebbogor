@extends('layouts.app')
@section('content')
    <!-- hero area -->
    <section class="hero-section hero" data-background=""
        style="background-image: url(/assets/images/hero-area/banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zindex-1">
                    <h1 class="mb-3">Sudah Waktunya Usaha Kamu Mendunia!</h1>
                    <p class="mb-4">Pembuatan Website, Optimasi Google Bussiness, Pembuatan Content Digital<br>
                        dengan harga terjangkau sesuai kebutuhan anda.</p>
                    <a href="#" class="btn btn-secondary btn-lg">explore us</a>
                    <!-- banner image -->
                    <img class="img-fluid w-100 banner-image" src="/assets/images/hero-area/banner-img.png"
                        alt="banner-img">
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <div id="scene">
            <img class="img-fluid hero-bg-1 up-down-animation" src="/assets/images/background-shape/feature-bg-2.png"
                alt="">
            <img class="img-fluid hero-bg-2 left-right-animation" src="/assets/images/background-shape/seo-ball-1.png"
                alt="">
            <img class="img-fluid hero-bg-3 left-right-animation" src="/assets/images/background-shape/seo-half-cycle.png"
                alt="">
            <img class="img-fluid hero-bg-4 up-down-animation" src="/assets/images/background-shape/green-dot.png"
                alt="">
            <img class="img-fluid hero-bg-5 left-right-animation" src="/assets/images/background-shape/blue-half-cycle.png"
                alt="">
            <img class="img-fluid hero-bg-6 up-down-animation" src="/assets/images/background-shape/seo-ball-1.png"
                alt="">
            <img class="img-fluid hero-bg-7 left-right-animation" src="/assets/images/background-shape/yellow-triangle.png"
                alt="">
            <img class="img-fluid hero-bg-8 up-down-animation" src="/assets/images/background-shape/service-half-cycle.png"
                alt="">
            <img class="img-fluid hero-bg-9 up-down-animation" src="/assets/images/background-shape/team-bg-triangle.png"
                alt="">
        </div>
    </section>
    <!-- /hero-area -->
    {{--
    @yield('slider')
    <main>
        @yield('content')
    </main> --}}


    <!-- feature -->
    <section class="section feature mb-0" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Semua Layanan Kami</h2>
                    <p class="mb-100">Tidak harus ambil semua layanan, cukup pilih salah satu layanan yang kamu butuhkan
                        terlebih dahulu.<br>Harga terjangkau, sesuai dengan kebutuhan dan perencanaan anggaran anda.</p>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-split-v-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Pembuatan Website</h4>
                            <p>Jasa pembuatan dan maintenace website yang sesuai kebutuhan kamu</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layers-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Iklan Digital</h4>
                            <p>Ikan di Google, Youtube, Instagram ataupun Facebook jadi lebih mudah</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layers-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Content Sosial Media</h4>
                            <p>Jasa Pembuatan Konten untuk sosial media seperti Instagram, Facebook dan Lainnya.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layers-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Optimasi SEO</h4>
                            <p>Search Engine Optimize membantu Website kamu dapat banyak kunjungan</p>
                        </div>
                    </div>
                </div>

                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-ruler-pencil feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Optimasi Google Bussiness</h4>
                            <p>Optimasi Google Bisnis supaya kamu semakin mudah ditemukan.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layout-cta-left feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Optimasi Whatsapp Bussiness</h4>
                            <p>Kelola Katalog dan Pelanggan jadi lebih mudah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="feature-bg-1 up-down-animation" src="/assets/images/background-shape/feature-bg-1.png" alt="bg-shape">
        <img class="feature-bg-2 left-right-animation" src="/assets/images/background-shape/feature-bg-2.png"
            alt="bg-shape">
    </section>
    <!-- /feature -->

    <!-- service -->
    <section class="section-lg service">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <h2 class="section-title">Buat Website kamu sekarang juga!</h2>
                    <p class="mb-4">
                        Bangun citra digital bisnis Anda dengan layanan pembuatan website profesional kami! Kami
                        menyediakan solusi kustom dan responsive untuk memenuhi kebutuhan bisnis Anda. Percayakan
                        pembuatan website Anda pada tim ahli kami dan nikmati pengalaman online
                        yang lebih baik!"
                    </p>
                    <ul class="pl-0 service-list">
                        <li><i class="ti-layout-tab-window text-purple"></i>Tampilan yang Responsive</li>
                        <li><i class="ti-layout-placeholder text-purple"></i>Optimasi Terbaik</li>
                        <li><i class="ti-support text-purple"></i>Dukungan Support 24/7</li>
                    </ul>
                </div>
                <div class="col-md-7 order-1 order-md-2">
                    <img class="img-fluid layer-3" src="/assets/images/service/service.png" alt="service">
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid service-bg" src="/assets/images/backgrounds/service-bg.png" alt="service-bg">
        <!-- background shapes -->
        <img class="service-bg-shape-1 up-down-animation" src="/assets/images/background-shape/service-half-cycle.png"
            alt="background-shape">
        <img class="service-bg-shape-2 left-right-animation" src="/assets/images/background-shape/feature-bg-2.png"
            alt="background-shape">
    </section>
    <!-- /service -->

    <!-- marketing -->
    <section class="section-lg seo">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="seo-image">
                        <img class="img-fluid" src="/assets/images/marketing/marketing.png" alt="form-img">
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="section-title">Buat Iklan dan Kelola Pelanggan</h2>
                    <p>Iklan membantu usaha kamu semakin mudah ditemukan pelanggan
                    </p>
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid seo-bg" src="/assets/images/backgrounds/seo-bg.png" alt="seo-bg">
        <!-- background-shape -->
        <img class="seo-bg-shape-1 left-right-animation" src="/assets/images/background-shape/seo-ball-1.png"
            alt="bg-shape">
        <img class="seo-bg-shape-2 up-down-animation" src="/assets/images/background-shape/seo-half-cycle.png"
            alt="bg-shape">
        <img class="seo-bg-shape-3 left-right-animation" src="/assets/images/background-shape/seo-ball-2.png"
            alt="bg-shape">
    </section>
    <!-- /marketing -->

    <!-- pricing -->
    <section class="section-lg pb-0 pricing" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Harga Paket Pembuatan Website</h2>
                    <p class="mb-50">Harga sudah termasuk Gratis Domain .com, Kapasitas Hosting 5GB dan Proteksi
                        SSL<br>Semua paket juga sudah termasuk Layanan Support 24/7 via Whatsapp.</p>
                </div>
                <div class="col-lg-10 mx-auto">
                    <div class="row justify-content-center">
                        <!-- pricing table -->
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-1">
                                <h3>Basic</h3>
                                <h1><span>Rp.</span>1,5jt</h1>
                                <p>Jenis Website STATIS dengan 1 halaman berisi Header, Menu, Slider, Profile, Produk,
                                    Gallery dan Form Contact
                                </p>
                                <a href="#" class="btn pricing-btn px-2">Lebih detail</a>
                            </div>
                        </div>
                        <!-- pricing table -->
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-2">
                                <h3>Standart</h3>
                                <h1><span>Rp.</span>2jt</h1>
                                <p>Jenis Website Statis dengan 5 halaman, tiap halaman bisa berisi lebih banyak
                                    informasi untuk tiap konten.
                                </p>
                                <a href="#" class="btn pricing-btn px-2">Lebih Detail</a>
                            </div>
                        </div>
                        <!-- pricing table -->
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-3">
                                <h3>Profesional</h3>
                                <h1><span>Rp.</span>3jt</h1>
                                <p>Jenis Website Dinamis dengan 5 Halaman + 10 Artikel Marketing digital dan didukung
                                    halaman login untuk kelola website
                                </p>
                                <a href="#" class="btn pricing-btn px-2">Lebih detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="pricing-bg-shape-1 up-down-animation" src="/assets/images/background-shape/seo-ball-1.png"
            alt="background-shape">
        <img class="pricing-bg-shape-2 up-down-animation" src="/assets/images/background-shape/seo-half-cycle.png"
            alt="background-shape">
        <img class="pricing-bg-shape-3 left-right-animation" src="/assets/images/background-shape/team-bg-triangle.png"
            alt="background-shape">
    </section>
    <!-- /pricing -->

    <!-- team -->
    <section class="section-lg team" id="team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Layanan Optimasi</h2>
                    <p class="mb-100">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu<br> fugiat nulla pariatur. Excepteur sint occaecat </p>
                </div>
            </div>
            <div class="col-10 mx-auto">
                <div class="team-slider">
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="align-self-center">
                                <h4>Google Bisnis</h4>
                                <h6 class="text-color">Digital Tool</h6>
                            </div>
                        </div>
                        <p>Tingkatkan Kunjungan dan Pembelian Toko Offline kamu dengan Optimasi Google Bisnis Sekarang
                            Juga.</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="align-self-center">
                                <h4>Whatsapp Bisnis</h4>
                                <h6 class="text-color">Digital Tool</h6>
                            </div>
                        </div>
                        <p>Kelola Katalog Digital dan Bangun Hubungan dengan Calon Pelangganmu di Platform Chat
                            Whatsapp.</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="align-self-center">
                                <h4>Optimasi SEO</h4>
                                <h6 class="text-color">Programmer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="/assets/images/team/team-1.jpg"
                                    alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Erik Ligas</h4>
                                <h6 class="text-color">Programmer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="/assets/images/team/team-2.jpg"
                                    alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>John Doe</h4>
                                <h6 class="text-color">web developer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. S eparated they</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- backgound image -->
        <img src="/assets/images/backgrounds/team-bg.png" alt="team-bg" class="img-fluid team-bg">
        <!-- background shapes -->
        <img class="team-bg-shape-1 up-down-animation" src="/assets/images/background-shape/seo-ball-1.png"
            alt="background-shape">
        <img class="team-bg-shape-2 left-right-animation" src="/assets/images/background-shape/seo-ball-1.png"
            alt="background-shape">
        <img class="team-bg-shape-3 left-right-animation" src="/assets/images/background-shape/team-bg-triangle.png"
            alt="background-shape">
        <img class="team-bg-shape-4 up-down-animation img-fluid" src="/assets/images/background-shape/team-bg-dots.png"
            alt="background-shape">
    </section>
    <!-- /team -->

    <!-- client logo slider -->
    <section class="section">
        <div class="container">
            <div class="client-logo-slider align-self-center">
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/assets/images/clients-logo/client-logo-1.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/assets/images/clients-logo/client-logo-2.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/assets/images/clients-logo/client-logo-3.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/assets/images/clients-logo/client-logo-4.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/assets/images/clients-logo/client-logo-5.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/assets/images/clients-logo/client-logo-1.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/assets/images/clients-logo/client-logo-2.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/assets/images/clients-logo/client-logo-3.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/assets/images/clients-logo/client-logo-4.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/assets/images/clients-logo/client-logo-5.png" alt="client-logo"></a>
            </div>
        </div>
    </section>
    <!-- /client logo slider -->

    <!-- newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Subscribe to our newsletter</h2>
                    <p class="mb-5">Receive updates, news and deals</p>
                </div>
                <div class="col-lg-8 col-sm-10 col-12 mx-auto">
                    <form action="#">
                        <div class="input-wrapper position-relative">
                            <input type="email" class="newsletter-form" id="newsletter"
                                placeholder="Enter your email">
                            <button type="submit" value="send" class="btn newsletter-btn">subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="newsletter-bg-shape left-right-animation" src="/assets/images/background-shape/seo-ball-2.png"
            alt="background-shape">
    </section>
    <!-- /newsletter -->
@endsection
