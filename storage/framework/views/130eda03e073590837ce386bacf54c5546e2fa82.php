<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Depo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(asset('front')); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo e(asset('front')); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('front')); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo e(asset('front')); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('front')); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo e(asset('front')); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('front')); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('front')); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo e(asset('front')); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('front')); ?>/assets/css/style.css" rel="stylesheet">

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
                <li><a class="nav-link scrollto" href="#about">Hakkımızda</a></li>
                <li><a class="nav-link scrollto" href="#services">Hizmetler</a></li>
                <li><a class="nav-link scrollto" href="#pricing">Paketler</a></li>
                <li><a class="nav-link scrollto" href="#why-us">SSS</a></li>
                <li><a class="nav-link scrollto" href="#contact">İletişim</a></li>
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <li><a class="getstarted scrollto" href="<?php echo e(url('/dashboard')); ?>">Yönetim Paneli</a></li>
                    <?php else: ?>
                        <li><a class="getstarted scrollto" href="<?php echo e(route('login')); ?>">Giriş Yap</a></li>
                        <?php if(Route::has('register')): ?>
                            <li><a class="getstarted scrollto" href="<?php echo e(route('register')); ?>">Kayıt Ol</a></li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
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
                <h2>İhtiyacınız olan sadece internet... İstediğiniz an istediğiniz yerde tüm verilerinize erişin !</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="<?php echo e(route('login')); ?>" class="btn-get-started scrollto">Başla</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="<?php echo e(asset('front')); ?>/assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Hakkımızda</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Bilgisayarlar ya da telefonlardaki dosyalara, belgelere ve verilere her geçen gün yenileri eklenmektedir. Videolar, fotoğraflar, belgeler, önemli iş dosyaları bir araya geldiğinde çokça yer kaplamış bir hale gelmekte... Hal böyle olunca tüm bu dosyaları\verileri hem istenildiği zaman kolayca erişilebilecek hem de güvende olmalarını sağlayacak şekilde yedeklemek ihtiyacı doğmuştur.
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Bu ihtiyacı karşılayabilmek veya sadece kullanılan cihazın depolama alanı yeterli gelmediği için; daha geniş depolama alanı ve daha kalıcı bir çözüm için bulut depolama sistemlerine başvurmak adına “Veri Depolama Platformu” bulut sistemi tam olarak bu amaca hizmet etmektedir.
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
                        <h3>En çok merak edilenler <small> (ilk üç)</small></h3>
                        <p>
                            Elimizden geldiği kadar yardımcı olacağız. O halde siz sormadan biz söyleyelim. İşte merak ettikleriniz:
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>1</span> Veri deposu nedir? Ne işe yarar? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        Bulut depolama sistemleri; artan fotoğraf, veri, video, dosya gibi ihtiyaçların sanal ortamda güvenle muhafaza edilmesi için büyük bir ihtiyacı karşılayan sistemlerdir.
                                        Kullandıkları aygıtın depolama alanı yeterli gelmeyen ya da daha kalıcı bir çözüm arayan her kullanıcının kullanımına uygundur. Öyle ki birçok internet kullanıcısı da aslında farkında olmadan bulut sürücüleri kullanmaktadırlar.
                                        Veri Deposunun hedefi de bunlardan biri olmaktır.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>2</span> Sizi diğerlerinden farklı kılan ne? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Veri deposu kullanıcının ihtiyaç duyduğu kapasite artışı saniyeler içinde sağlanabilmektedir. Kolayca erişime sahiptir; kullanıcılar, çalıştıkları-yaşadıkları her yerden, kullandıkları her cihazdan verilerine erişebilmektedirler. Cihaz ve yer bağımsızlığı kullanıcılara bir web tarayıcısı kullanarak bulundukları yer ve kullandıkları cihazdan bağımsız olarak sisteme erişebilme imkânı tanır.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>3</span> Verilerimizi nasıl güvende tutacaksınız? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        En iyi şifreleme algoritmalarıyla sistemimizi donattık. 2 faktörlü korumaya sahip giriş sistemimiz ve panelinizde sizin için aldığımız birçok güvenlik önlemi mevcut.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo e(asset('front')); ?>/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>HİZMETLER</h2>
                <p>Size sunduğumuz hizmetlere bir göz atın. Avantajlarımız, bizi tercih edilebilir kılıyor.</p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Senkronizasyon</a></h4>
                        <p>Bütün cihazlardan deponuzu kontrol eder, işlemlerinizi gerçekleştirirsiniz.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Verileriniz Bizimle Güvende</a></h4>
                        <p>En iyi şifreleme algoritmalarıyla sistemimizi donattık.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Yüksek Transfer Hızı</a></h4>
                        <p>Dosya transferlerindeki hızımız, ortalamanın üstünde.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4><a href="">Her Yerden Erişim</a></h4>
                        <p>İnternetin olduğu her yerden erişim sağlayabilirsiniz.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>FİYATLANDIRMA</h2>
                <p>Sizler için belirlediğimiz, Her bütçeye uygun ücretlendirme politikamız.</p>
            </div>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                        <h3>Demo</h3>
                        <h4><sup>$</sup>0<span>ücretsiz</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Her Yerden Erişim</li>
                            <li><i class="bx bx-check"></i> Bütün Dosya Formatlarına Uyumlu</li>
                            <li><i class="bx bx-check"></i> Senkronizasyon </li>
                            <li><i class="bx bx-check"></i> 20GB Depolama Alanı</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Veri iletiminde 2x hız</span></li>
                        </ul>
                        <a href="#" class="buy-btn">Hemen Başla</a>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3>Avantaj</h3>
                        <h4><sup>$</sup>29<span>Aylık</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Her Yerden Erişim</li>
                            <li><i class="bx bx-check"></i> Bütün Dosya Formatlarına Uyumlu</li>
                            <li><i class="bx bx-check"></i> Senkronizasyon </li>
                            <li><i class="bx bx-check"></i> 100GB Depolama Alanı</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Veri iletiminde 2x hız</span></li>
                        </ul>
                        <a href="#" class="buy-btn">Satın Al</a>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <h3>Pro</h3>
                        <h4><sup>$</sup>49<span>Aylık</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Her Yerden Erişim</li>
                            <li><i class="bx bx-check"></i> Bütün Dosya Formatlarına Uyumlu</li>
                            <li><i class="bx bx-check"></i> Senkronizasyon </li>
                            <li><i class="bx bx-check"></i> Sınırsız Depolama Alanı</li>
                            <li><i class="bx bx-check"></i> Veri iletiminde 2x hız</li>
                        </ul>
                        <a href="#" class="buy-btn">Satın Al</a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>İLETİŞİM</h2>
            </div>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Adres:</h4>
                            <p> Fırat
                            Teknoloji Geliştirme Ar-Ge Merkezi
                            Elazığ
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
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">İsminiz</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Başlık</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Mesajınız</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">MESAJINIZ TARAFIMIZA İLETİLMİŞTİR!</div>
                        </div>
                        <div class="text-center"><button type="submit">Gönder</button></div>
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
                        Fırat <br>
                        Teknoloji Geliştirme Ar-Ge Merkezi<br>
                        Elazığ <br><br>
                        <strong>Telefon:</strong> 0 424 247 8990<br>
                        <strong>Email:</strong> 1duhayildirim.com<br>
                    </p>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Anasayfa</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Hakkımızda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Hizmetler</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Paketler</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">SSS</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">İletişim</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Sosyal Medya Hesaplarımız</h4>
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
<script src="<?php echo e(asset('front')); ?>/assets/vendor/aos/aos.js"></script>
<script src="<?php echo e(asset('front')); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?php echo e(asset('front')); ?>/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo e(asset('front')); ?>/assets/js/main.js"></script>

</body>

</html>
<?php /**PATH C:\Users\PC\Documents\Github\bulut_depolama\resources\views/welcome.blade.php ENDPATH**/ ?>