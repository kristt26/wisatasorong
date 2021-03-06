<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Dinas Pariwisata Kota Sorong</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="<?=base_url('public/guest/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/fontawesome-all.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/swiper.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/magnific-popup.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/guest/css/styles.css')?>" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="public/guest/images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">
<?php
if (!$this->session->userdata('is_login')) {
    redirect('authentication');
}
?>
    <!-- Preloader -->
    <!-- <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> -->
    <!-- end of preloader -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="<?=base_url('welcome')?>"><img src="<?=base_url('public/guest/images/logo.png')?>"
                alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url()?>">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('visimisi')?>">VISI MISI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('wisata/index')?>">WISATA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('umkm/index')?>">UMKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url(!$this->session->userdata('is_login') ? 'authentication' : 'authentication/logout')?>"> <?=!$this->session->userdata('is_login') ? 'LOGIN' : 'LOGOUT'?></a>
                </li>
            </ul>
            <!-- <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span> -->
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>DESTINASI <span>WISATA SORONG</span></h1>
                            <p class="p-heading p-large">DINAS PARIWISATA DAN EKONOMI KREATIF KOTA SORONG</p>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Description -->
    <!-- <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-binoculars fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Environment Analysis</h4>
                            <p>The starting point of any success story is knowing your current position in the business environment</p>
                        </div>
                    </div>
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Development Planning</h4>
                            <p>After completing the environmental analysis the next stage is to design and  plan your development strategy</p>
                        </div>
                    </div>
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-chart-pie fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Execution & Evaluation</h4>
                            <p>In this phase you will focus on executing the actions plan and evaluating the results after each marketing campaign</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->


    <!-- Services -->
    <!-- <div id="wisata" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">WISATA SORONG</div>
                    <h2>&nbsp;</h2>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-12">
                    <?php for ($i = 0; $i < (count($wisatas) > 3 ? 3 : count($wisatas)); $i++): ?>
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="<?=base_url('public/img/galeri/') . $wisatas[$i]['foto']?>"
                                alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?=$wisatas[$i]['nama']?></h3>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="<?=base_url('wisata/detail/') . $wisatas[$i]['id']?>">DETAILS</a>
                        </div>
                    </div>
                    <?php endfor;?>

                </div>
            </div>
        </div>
    </div> -->

    <!-- Details 1 -->
    <!-- <div id="umkm" class="cards-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">UMKM KOTA SORONG</div>
                    <h2>&nbsp;</h2>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-12">

                    <?php for ($i = 0; $i < (count($umkms) > 3 ? 3 : count($umkms)); $i++): ?>
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="<?=base_url('public/img/galeri/') . $umkms[$i]['foto']?>"
                                alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?=$umkms[$i]['nama']?></h3>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="<?=base_url('umkm/detail/') . $umkms[$i]['id']?>">DETAILS</a>
                        </div>
                    </div>
                    <?php endfor;?>

                </div>
            </div>
        </div>
    </div> -->
    <!-- end of details 1 -->

    <!-- Testimonials -->
    <!-- <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Read Our Customer Testimonials</h2>
                    <p class="p-heading">Our clients are our partners and we can not imagine a better future for our
                        company without helping them reach their objectives</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="<?=base_url('public/guest/images/testimonial-1.jpg')?>"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">The guys from Aria helped with getting my
                                                business off the ground and turning into a profitable company.</div>
                                            <div class="testimonial-author">Jude Thorn - Founder</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="<?=base_url('public/guest/images/testimonial-2.jpg')?>"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I purchased the Growth Accelerator service
                                                pack a few years ago and I renewed the contract each year. </div>
                                            <div class="testimonial-author">Marsha Singer - Marketer</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="<?=base_url('public/guest/images/testimonial-3.jpg')?>"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Aria's CEO personally attends client meetings
                                                and gives his feedback on business growth strategies.</div>
                                            <div class="testimonial-author">Roy Smith - Developer</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="<?=base_url('public/guest/images/testimonial-4.jpg')?>"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">At the beginning I thought the prices are a
                                                little high for what they offer but they over deliver each and every
                                                time.</div>
                                            <div class="testimonial-author">Ronald Spice - Owner</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="<?=base_url('public/guest/images/testimonial-5.jpg')?>"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I recommend Aria to every business owner or
                                                growth leader that wants to take his company to the next level.</div>
                                            <div class="testimonial-author">Lindsay Rune - Manager</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image"
                                            src="<?=base_url('public/guest/images/testimonial-6.jpg')?>"
                                            alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">My goals for using Aria's services seemed high
                                                when I first set them but they've met them with no problems.</div>
                                            <div class="testimonial-author">Ann Black - Consultant</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Call Me -->


    <div id="galery" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">GALERY</div>
                    <h2>&nbsp;</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                        <a class="button" data-filter=".Wisata"><span>WISATA</span></a>
                        <a class="button" data-filter=".UMKM"><span>UMKM</span></a>
                    </div>
                    <!-- end of button group -->
                    <div class="grid">
                        <?php foreach ($galery as $key => $value): ?>
                        <div class="element-item <?=$value['type']?>">
                            <a class="popup-with-move-anim" href="#foto-<?=$value['id']?>">
                                <div class="element-item-overlay"><span><?=$value['nama']?></span></div><img
                                    src="<?=base_url('public/img/galeri/') . $value['file']?>" alt="<?=$value['nama']?>" style="width: 100%; height: 100%;">
                            </a>
                        </div>
                        <?php endforeach;?>
                        <!-- <div class="element-item development">
                            <a class="popup-with-move-anim" href="#foto-2">
                                <div class="element-item-overlay"><span>Classic Industry</span></div><img
                                    src="<?=base_url('public/guest/images/foto-2.jpg')?>" alt="alternative">
                            </a>
                        </div>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#foto-3">
                                <div class="element-item-overlay"><span>BoomBap Audio</span></div><img
                                    src="<?=base_url('public/guest/images/foto-3.jpg')?>" alt="alternative">
                            </a>
                        </div>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#foto-4">
                                <div class="element-item-overlay"><span>Van Moose</span></div><img
                                    src="<?=base_url('public/guest/images/foto-4.jpg')?>" alt="alternative">
                            </a>
                        </div>
                        <div class="element-item design development marketing seo">
                            <a class="popup-with-move-anim" href="#foto-5">
                                <div class="element-item-overlay"><span>Joy Moments</span></div><img
                                    src="<?=base_url('public/guest/images/foto-5.jpg')?>" alt="alternative">
                            </a>
                        </div>
                        <div class="element-item design marketing seo">
                            <a class="popup-with-move-anim" href="#foto-6">
                                <div class="element-item-overlay"><span>Spark Events</span></div><img
                                    src="<?=base_url('public/guest/images/foto-6.jpg')?>" alt="alternative">
                            </a>
                        </div>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#foto-7">
                                <div class="element-item-overlay"><span>Casual Wear</span></div><img
                                    src="<?=base_url('public/guest/images/foto-7.jpg')?>" alt="alternative">
                            </a>
                        </div>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#foto-8">
                                <div class="element-item-overlay"><span>Zazoo Apps</span></div><img
                                    src="<?=base_url('public/guest/images/foto-8.jpg')?>" alt="alternative">
                            </a>
                        </div> -->
                    </div> <!-- end of grid -->
                    <!-- end of filter -->

                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->

    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <?php foreach ($galery as $key => $value): ?>
    <div id="foto-<?=$value['id']?>" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">??</button>
            <div class="col-lg-12">
                <img class="img-fluid" src="<?=base_url('public/img/galeri/') . $value['file']?>" alt="alternative">
            </div>
        </div>
    </div>
    <?php endforeach;?>
    <!-- Team -->

    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?=base_url('public/img/galeri/') . $wisatas[0]['foto']?>" alt="alternative">
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <div class="section-title">ABOUT</div>
                        <p>
                        Alamat : jalan pramuka, Remu Utara, Kec. Sorong, Kota Sorong, Papua Barat. 98412
                        </p>
                        <p>Website ini diperuntukkan untuk para pencinta alam yang ingin mencari informasi mengenai objeck wisata yang berapada di kota sorong</p>
                        <div id="counter">
                            <div class="cell">
                                <div class="counter-value number-count" data-count="<?=$counter['user']?>">1</div>
                                <div class="counter-info">Users</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="<?=$counter['counthari']?>">1</div>
                                <div class="counter-info">Login</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="<?=$counter['counttotal']?>">1</div>
                                <div class="counter-info">Total</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <!-- <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>You can stop by our office for a cup of coffee and just use the contact form below for any
                            questions and inquiries</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>22nd Innovative Street, San
                                Francisco, CA 94043, US</li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 126</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 128</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">office@aria.com</a></li>
                        </ul>
                        <h3>Follow Aria On Social Media</h3>

                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-pinterest fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-behance fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">

                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Aria's
                            stated <a href="privacy-policy.html">Privacy Policy</a> and <a
                                href="terms-conditions.html">Terms Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div> -->
    <!-- Footer -->
    <!-- <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Few Words About Aria</h4>
                        <p class="white">We're passionate about delivering the best business growth services for
                            companies just starting out as startups or industry players that have established their
                            market position a long tima ago.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="#your-link">startupguide.com</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="white" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Tools</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">businessgrowth.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">influencers.com</a>
                            </li>
                            <li class="media">
                                <a class="white" href="#your-link">optimizer.net</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Partners</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="#your-link">unicorns.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">staffmanager.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">association.gov</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright ?? 2021 <a href="https://inovatik.com">LA NURMAN TRI HASRI</a></p>
                </div>
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="<?=base_url('public/guest/js/jquery.min.js')?>"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?=base_url('public/guest/js/popper.min.js')?>"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?=base_url('public/guest/js/bootstrap.min.js')?>"></script> <!-- Bootstrap framework -->
    <script src="<?=base_url('public/guest/js/jquery.easing.min.js')?>"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?=base_url('public/guest/js/swiper.min.js')?>"></script> <!-- Swiper for image and text sliders -->
    <script src="<?=base_url('public/guest/js/jquery.magnific-popup.js')?>"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="<?=base_url('public/guest/js/morphext.min.js')?>"></script>
    <!-- Morphtext rotating text in the header -->
    <script src="<?=base_url('public/guest/js/isotope.pkgd.min.js')?>"></script> <!-- Isotope for filter -->
    <script src="<?=base_url('public/guest/js/validator.min.js')?>"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?=base_url('public/guest/js/scripts.js')?>"></script> <!-- Custom scripts -->
</body>

</html>