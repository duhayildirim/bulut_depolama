<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Depo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('front')}}/assets/img/favicon.png" rel="icon">
    <link href="{{asset('front')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('front')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('front')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('front')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('front')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('front')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('front')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('front')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('front')}}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Arsha - v4.7.1
    * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">Veri Deposu</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Anasayfa</a></li>
                <li><a class="nav-link scrollto" href="#about">Hakk??m??zda</a></li>
                <li><a class="nav-link scrollto" href="#services">Hizmetler</a></li>
                <li><a class="nav-link scrollto" href="#pricing">Paketler</a></li>
                <li><a class="nav-link scrollto" href="#why-us">SSS</a></li>
                <li><a class="nav-link scrollto" href="#contact">??leti??im</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a class="getstarted scrollto" href="{{ url('/dashboard') }}">Y??netim Paneli</a></li>
                    @else
                        <li><a class="getstarted scrollto" href="{{ route('login') }}">Giri?? Yap</a></li>
                        @if (Route::has('register'))
                            <li><a class="getstarted scrollto" href="{{ route('register') }}">Kay??t Ol</a></li>
                        @endif
                    @endauth
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Bulut Depolama Platformu</h1>
                <h2>??htiyac??n??z olan sadece internet... ??stedi??iniz an istedi??iniz yerde t??m verilerinize eri??in !</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ route('login') }}" class="btn-get-started scrollto">Ba??la</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('front')}}/assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Hakk??m??zda</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Bilgisayarlar ya da telefonlardaki dosyalara, belgelere ve verilere her ge??en g??n yenileri eklenmektedir. Videolar, foto??raflar, belgeler, ??nemli i?? dosyalar?? bir araya geldi??inde ??ok??a yer kaplam???? bir hale gelmekte... Hal b??yle olunca t??m bu dosyalar??\verileri hem istenildi??i zaman kolayca eri??ilebilecek hem de g??vende olmalar??n?? sa??layacak ??ekilde yedeklemek ihtiyac?? do??mu??tur.
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Bu ihtiyac?? kar????layabilmek veya sadece kullan??lan cihaz??n depolama alan?? yeterli gelmedi??i i??in; daha geni?? depolama alan?? ve daha kal??c?? bir ????z??m i??in bulut depolama sistemlerine ba??vurmak ad??na ???Veri Depolama Platformu??? bulut sistemi tam olarak bu amaca hizmet etmektedir.
                    </p>
                    <a href="#contact" style="float: right" class="btn-learn-more">Daha Fazla Bilgi</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>En ??ok merak edilenler <small> (ilk ????)</small></h3>
                        <p>
                            Elimizden geldi??i kadar yard??mc?? olaca????z. O halde siz sormadan biz s??yleyelim. ????te merak ettikleriniz:
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>1</span> Veri deposu nedir? Ne i??e yarar? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        Bulut depolama sistemleri; artan foto??raf, veri, video, dosya gibi ihtiya??lar??n sanal ortamda g??venle muhafaza edilmesi i??in b??y??k bir ihtiyac?? kar????layan sistemlerdir.
                                        Kulland??klar?? ayg??t??n depolama alan?? yeterli gelmeyen ya da daha kal??c?? bir ????z??m arayan her kullan??c??n??n kullan??m??na uygundur. ??yle ki bir??ok internet kullan??c??s?? da asl??nda fark??nda olmadan bulut s??r??c??leri kullanmaktad??rlar.
                                        Veri Deposunun hedefi de bunlardan biri olmakt??r.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>2</span> Sizi di??erlerinden farkl?? k??lan ne? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Veri deposu kullan??c??n??n ihtiya?? duydu??u kapasite art?????? saniyeler i??inde sa??lanabilmektedir. Kolayca eri??ime sahiptir; kullan??c??lar, ??al????t??klar??-ya??ad??klar?? her yerden, kulland??klar?? her cihazdan verilerine eri??ebilmektedirler. Cihaz ve yer ba????ms??zl?????? kullan??c??lara bir web taray??c??s?? kullanarak bulunduklar?? yer ve kulland??klar?? cihazdan ba????ms??z olarak sisteme eri??ebilme imk??n?? tan??r.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>3</span> Verilerimizi nas??l g??vende tutacaks??n??z? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        En iyi ??ifreleme algoritmalar??yla sistemimizi donatt??k. 2 fakt??rl?? korumaya sahip giri?? sistemimiz ve panelinizde sizin i??in ald??????m??z bir??ok g??venlik ??nlemi mevcut.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset('front')}}/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>H??ZMETLER</h2>
                <p>Size sundu??umuz hizmetlere bir g??z at??n. Avantajlar??m??z, bizi tercih edilebilir k??l??yor.</p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Senkronizasyon</a></h4>
                        <p>B??t??n cihazlardan deponuzu kontrol eder, i??lemlerinizi ger??ekle??tirirsiniz.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Verileriniz Bizimle G??vende</a></h4>
                        <p>En iyi ??ifreleme algoritmalar??yla sistemimizi donatt??k.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Y??ksek Transfer H??z??</a></h4>
                        <p>Dosya transferlerindeki h??z??m??z, ortalaman??n ??st??nde.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4><a href="">Her Yerden Eri??im</a></h4>
                        <p>??nternetin oldu??u her yerden eri??im sa??layabilirsiniz.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>F??YATLANDIRMA</h2>
                <p>Sizler i??in belirledi??imiz, Her b??t??eye uygun ??cretlendirme politikam??z.</p>
            </div>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                        <h3>Demo</h3>
                        <h4><sup>$</sup>0<span>??cretsiz</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Her Yerden Eri??im</li>
                            <li><i class="bx bx-check"></i> B??t??n Dosya Formatlar??na Uyumlu</li>
                            <li><i class="bx bx-check"></i> Senkronizasyon </li>
                            <li><i class="bx bx-check"></i> 20GB Depolama Alan??</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Veri iletiminde 2x h??z</span></li>
                        </ul>
                        <a href="#" class="buy-btn">Hemen Ba??la</a>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3>Avantaj</h3>
                        <h4><sup>$</sup>29<span>Ayl??k</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Her Yerden Eri??im</li>
                            <li><i class="bx bx-check"></i> B??t??n Dosya Formatlar??na Uyumlu</li>
                            <li><i class="bx bx-check"></i> Senkronizasyon </li>
                            <li><i class="bx bx-check"></i> 100GB Depolama Alan??</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Veri iletiminde 2x h??z</span></li>
                        </ul>
                        <a href="#" class="buy-btn">Sat??n Al</a>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <h3>Pro</h3>
                        <h4><sup>$</sup>49<span>Ayl??k</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Her Yerden Eri??im</li>
                            <li><i class="bx bx-check"></i> B??t??n Dosya Formatlar??na Uyumlu</li>
                            <li><i class="bx bx-check"></i> Senkronizasyon </li>
                            <li><i class="bx bx-check"></i> S??n??rs??z Depolama Alan??</li>
                            <li><i class="bx bx-check"></i> Veri iletiminde 2x h??z</li>
                        </ul>
                        <a href="#" class="buy-btn">Sat??n Al</a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>??LET??????M</h2>
            </div>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Adres:</h4>
                            <p> F??rat
                            Teknoloji Geli??tirme Ar-Ge Merkezi
                            Elaz????
                            </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>1duhayildirim.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telefon:</h4>
                            <p>0 424 247 8990</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{route('contact.create')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">??sminiz</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Ba??l??k</label>
                            <input type="text" class="form-control" name="title" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Mesaj??n??z</label>
                            <textarea class="form-control" name="description" rows="10" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit">G??nder</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3></h3>
                    <p>
                        F??rat <br>
                        Teknoloji Geli??tirme Ar-Ge Merkezi<br>
                        Elaz???? <br><br>
                        <strong>Telefon:</strong> 0 424 247 8990<br>
                        <strong>Email:</strong> 1duhayildirim.com<br>
                    </p>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Anasayfa</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Hakk??m??zda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Hizmetler</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Paketler</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">SSS</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">??leti??im</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Sosyal Medya Hesaplar??m??z</h4>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>2021</span></strong> Veri Deposu
        </div>
        <div class="credits">
            Designed and coder by <a>Duha</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="{{asset('front')}}/assets/vendor/aos/aos.js"></script>
<script src="{{asset('front')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('front')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('front')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('front')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('front')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
{{--<script src="{{asset('front')}}/assets/vendor/php-email-form/validate.js"></script>--}}

<!-- Template Main JS File -->
<script src="{{asset('front')}}/assets/js/main.js"></script>

</body>

</html>
