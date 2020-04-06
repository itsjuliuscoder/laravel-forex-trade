<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forex Trading</title>
        <!-- Core Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- Responsive CSS -->
        <link href="css/responsive.css" rel="stylesheet">
        <script type="text/javascript">
            //==================================
            //    ACCORDION WITH TOGGLE ICONS
            //==================================
            function toggleIcon(e) {
              $(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('fa-plus fa-minus');
            }
            $('.panel-group').on('hidden.bs.collapse', toggleIcon);
            $('.panel-group').on('shown.bs.collapse', toggleIcon);
        </script>
    </head>
    <body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">ForexTr.</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link" href="#screenshot">Screenshot</a></li> -->
                                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li> -->
                                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                </ul>
                                <div class="sing-up-button d-lg-none">
                                    <a href="#">Sign Up Free</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a href="#">Sign Up Free</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-5">
                    <div class="wellcome-heading">
                        <h2>Trade and Profit at your Convinence</h2>
                        <h3>C</h3>
                        <p>TRADE THE MARKETS BY FOLLOWING THE SIGNALS GIVEN BY OUR EXPERTS</p>
                        <a href="#" class="btn btn-danger"><i class="fa fa-trademark"></i>  Start Trading</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="get-start-area">
                        <article class="tabs">
                          <ul class="nav nav-tabs nav-tabs-redBorders">
                                <li class="active">
                                  <a data-toggle="tab" href="#home">
                                    Tab 1 
                                  </a>
                                </li>
                                <li>
                                  <a data-toggle="tab" href="#menu1">
                                    Tab 2
                                  </a>
                                </li>
                          </ul>
                          <div class="tab-content">
                                <!--tab1 - home-->
                                <div id="home" class="tab-pane fade in active">
                                      <!-- 
                                        ==============================
                                        bootstrap accordion
                                        ==============================
                                        -->
                                      <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                                            <!--panel-default-->
                                            <div class="panel panel-default">
                                              <div class="panel-heading" role="tab" id="headingOne">
                                                <h3 class="panel-title">
                                                  <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="fa fa-minus more-less" aria-hidden="true"></i>
                                                    An singulis consequat intellegat eos
                                                  </a>
                                                </h3>
                                              </div>
                                              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                  <p>
                                                    Discere insolens et est. Id prompta rationibus definiebas per. Te mei partem civibus, vix elit soleat possim ex. Minim timeam audire no sea, erant partem dicunt ex cum. Mei cu ullum sapientem, probo blandit has at.<br><br>
                                                    An singulis consequat intellegat eos. Nec elit falli propriae no, ius incorrupte repudiandae ut. Nam ne amet omnes, numquam docendi ius ut. Partem persequeris pri in. An incorrupte complectitur mediocritatem vis, sea nostro salutandi et.<br><br>
                                                    Vis ex purto exerci interesset, mei eius civibest. Id prompta rationibus definiebas per. Te mei partem civibus, vix elit soleat possim ex. Minim timeam audire no sea, erant partem dicunt ex cum. Mei cu ullum sapientem, probo blandit has at.
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <!--panel-2-->
                                            <div class="panel panel-default">
                                              <div class="panel-heading" role="tab" id="headingTwo">
                                                <h3 class="panel-title">
                                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="fa fa-plus more-less" aria-hidden="true"></i>
                                                    Probo laoreet officiis mei ei, sale civibus pro no, te vel partem docendi?
                                                  </a>
                                                </h3>
                                              </div>
                                              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                  <p>
                                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <!--panel-3-->
                                            <div class="panel panel-default">
                                              <div class="panel-heading" role="tab" id="headingThree">
                                                <h3 class="panel-title">
                                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fa fa-plus more-less" aria-hidden="true"></i>
                                                    Mucius quodsi dissentiunt in vel. Est postulant contentiones ea, nobis inermis id duo?
                                                  </a>
                                                </h3>
                                              </div>
                                              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                  <p>
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                      </div>
                                        <!-- end
                                        ==============================
                                        bootstrap accordion
                                        ==============================
                                        -->
                                </div>
                                <!--tab2-->
                                <div id="menu1" class="tab-pane fade">
                                      <!-- 
                                        ==============================
                                        bootstrap accordion
                                        ==============================
                                        -->
                                      <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                            <!--panel-default-->
                                            <div class="panel panel-default">
                                              <div class="panel-heading" role="tab" id="headingOne_2">
                                                <h3 class="panel-title">
                                                  <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                    <i class="fa fa-minus more-less" aria-hidden="true"></i>
                                                    Dicta facilisis sea, quando comprehensam vituperatoribus eu ius
                                                  </a>
                                                </h3>
                                              </div>
                                              <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                  <p>
                                                    Discere insolens et est. Id prompta rationibus definiebas per. Te mei partem civibus, vix elit soleat possim ex. Minim timeam audire no sea, erant partem dicunt ex cum. Mei cu ullum sapientem, probo blandit has at.<br><br>
                                                    An singulis consequat intellegat eos. Nec elit falli propriae no, ius incorrupte repudiandae ut. Nam ne amet omnes, numquam docendi ius ut. Partem persequeris pri in. An incorrupte complectitur mediocritatem vis, sea nostro salutandi et. Vis ex purto exerci interesset, mei eius civibus evertitur et. Consul iriure appetere at sed. Te qui modo propriae temporibus, illud modus mei cu. Epicurei adipisci no eum, cum iuvaret probatus deseruisse ei. Deleniti pericula cum ne, ea exerci complectitur est. Summo indoctum nec ut. Discere insolens et est. Id prompta rationibus definiebas per. Te mei partem civibus, vix elit soleat possim ex. Minim timeam audire no sea, erant partem dicunt ex cum. Mei cu ullum sapientem, probo blandit has at.
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <!--panel-2-->
                                            <div class="panel panel-default">
                                              <div class="panel-heading" role="tab" id="headingTwo_2">
                                                <h3 class="panel-title">
                                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                    <i class="fa fa-plus more-less" aria-hidden="true"></i>
                                                    Probo laoreet officiis mei ei, sale civibus pro no, te vel partem docendi?
                                                  </a>
                                                </h3>
                                              </div>
                                              <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                  <p>
                                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <!--panel-3-->
                                            <div class="panel panel-default">
                                              <div class="panel-heading" role="tab" id="headingThree_2">
                                                <h3 class="panel-title">
                                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                                    <i class="fa fa-plus more-less" aria-hidden="true"></i>
                                                    Mucius quodsi dissentiunt in vel. Est postulant contentiones ea, nobis inermis id duo?
                                                  </a>
                                                </h3>
                                              </div>
                                              <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                  <p>
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                      </div>
                                      <!-- end
                                      ==============================
                                      bootstrap accordion
                                      ==============================
                                      -->
                                </div>
                          </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->

    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Why Is It Special</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-mobile" aria-hidden="true"></i>
                        </div>
                        <h4>Easy to use</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-ruler-pencil" aria-hidden="true"></i>
                        </div>
                        <h4>Powerful Design</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="ti-settings" aria-hidden="true"></i>
                        </div>
                        <h4>Powerful Signals</h4>
                        <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="img/bg-img/forexbg2.jpeg" alt="About ForexTr">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <!-- <h2>Our Best Propositions for You!</h2> -->
                            <h2>About ForexTr.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Google Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-android"></i>
                                        <p class="mb-0"><span>available on</span> Google Store</p>
                                    </a>
                                </div>
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-apple"></i>
                                        <p class="mb-0"><span>available on</span> Apple Store</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2>Awesome Features</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-user" aria-hidden="true"></i>
                        <h5>Awesome Experience</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-pulse" aria-hidden="true"></i>
                        <h5>Fast and Simple</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-dashboard" aria-hidden="true"></i>
                        <h5>Clean Code</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-palette" aria-hidden="true"></i>
                        <h5>Perfect Design</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-crown" aria-hidden="true"></i>
                        <h5>Best Industry Leader</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-headphone" aria-hidden="true"></i>
                        <h5>24/7 Online Support</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->


    <!-- ***** Pricing Plane Area Start *****==== -->
    <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text  -->
                    <div class="section-heading text-center">
                        <h2>Pricing Plan</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Starter Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>29</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Basic Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>49</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan active text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Advenced Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>69</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Community Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>99</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plane Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
   <!--  <section class="our-monthly-membership section_padding_50 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="membership-description">
                        <h2>Join our Monthly Membership</h2>
                        <p>Find the perfect plan for you — 100% satisfaction guaranteed.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                        <a href="#">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Get in touch with us!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>We'll send you epic weekly blogs, whitepapers and things to make your app startup thrive, all FREE!</p>
                    </div>
                    <div class="address-text">
                        <p><span>Address:</span> 40 Baria Sreet 133/2 NewYork City, US</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Phone:</span> +11-225-888-888-66</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> info.deercreative@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Send Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>ForexTr.</h2>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©2017 Ca. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
<!-- 1 Month Plan -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">1 Month Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
            <div class="form-group">
              <input type="email" name="" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="text" name="" class="form-control" placeholder="Phone number">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="form-group col-md-6">
                <select id="inputState" name="country" class="form-control">
									<option selected>Choose Country...</option>
							    <option value="NG">Nigeria</option>
                  <option value="US">United States</option>
                  <option value="UK">United Kingdom</option>
								</select>
              </div>
            </div>
            <label="card">Card Details</label>
            <div class="form-group mt-2">
              <input type="number" name="" class="form-control" placeholder="Card Number">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Expiry">
              </div>
              <div class="form-group col-md-6">
                <input type="number" class="form-control" placeholder="CVV">
              </div>
            </div>
            <p>By clicking submit you agree to our <a href="#">Terms & Conditions</a></p>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
<!-- 3 Months -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">3 Month Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
            <div class="form-group">
              <input type="email" name="" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="text" name="" class="form-control" placeholder="Phone number">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="form-group col-md-6">
                <select id="inputState" name="country" class="form-control">
									<option selected>Choose Country...</option>
							    <option value="NG">Nigeria</option>
                  <option value="US">United States</option>
                  <option value="UK">United Kingdom</option>
								</select>
              </div>
            </div>
            <label="card">Card Details</label>
            <div class="form-group mt-2">
              <input type="number" name="" class="form-control" placeholder="Card Number">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Expiry">
              </div>
              <div class="form-group col-md-6">
                <input type="number" class="form-control" placeholder="CVV">
              </div>
            </div>
            <p>By clicking submit you agree to our <a href="#">Terms & Conditions</a></p>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
<!-- 6 Months -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">6 Month Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
            <div class="form-group">
              <input type="email" name="" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="text" name="" class="form-control" placeholder="Phone number">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="form-group col-md-6">
                <select id="inputState" name="country" class="form-control">
									<option selected>Choose Country...</option>
							    <option value="NG">Nigeria</option>
                  <option value="US">United States</option>
                  <option value="UK">United Kingdom</option>
								</select>
              </div>
            </div>
            <label="card">Card Details</label>
            <div class="form-group mt-2">
              <input type="number" name="" class="form-control" placeholder="Card Number">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Expiry">
              </div>
              <div class="form-group col-md-6">
                <input type="number" class="form-control" placeholder="CVV">
              </div>
            </div>
            <p>By clicking submit you agree to our <a href="#">Terms & Conditions</a></p>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
<!-- 12 Months -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">12 Month Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
            <div class="form-group">
              <input type="email" name="" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="text" name="" class="form-control" placeholder="Phone number">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="form-group col-md-6">
                <select id="inputState" name="country" class="form-control">
									<option selected>Choose Country...</option>
							    <option value="NG">Nigeria</option>
                  <option value="US">United States</option>
                  <option value="UK">United Kingdom</option>
								</select>
              </div>
            </div>
            <label="card">Card Details</label>
            <div class="form-group mt-2">
              <input type="number" name="" class="form-control" placeholder="Card Number">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Expiry">
              </div>
              <div class="form-group col-md-6">
                <input type="number" class="form-control" placeholder="CVV">
              </div>
            </div>
            <p>By clicking submit you agree to our <a href="#">Terms & Conditions</a></p>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
<!-- end of modals -->
<!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>
