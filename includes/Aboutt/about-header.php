
<header class="menu">

  <div class="container">

  <div class="row">

      <div class="col-md-4">
   
      <a title="<?= $companyName; ?>" href="<?= BASE_URL; ?>">
                                        <img  src="assets/images/logo.jpg" title="<?= $area; ?> Minicabs, <?= $area; ?> Taxis" alt="<?= $area; ?> Minicabs, <?= $area; ?> Taxis" />
                                    </a>
      </div>
      <div class="col-md-4 hero-menu">
      <ul>

      <li> <a href="#">Home</a> </li>
      <li> <a href="about.php">About</a> </li>
      <li> <a href="#">Service</a> </li>
      <li> <a href="#">Airports</a> </li>
      </ul>
   

   </div>
   <div class="col-md-4 hero-btn1">
   
   <div class="header-upper-right clearfix float-right">
                                <div class="button ">
                                    <strong id="booking-title">Book Your <?= $area; ?> Minicab </strong>
                                    <a class="btn-three hidden-booking-btn" title="Call us now to book <?= $area; ?> Taxi" href="<?= $bookingUrl ?>"><span class="icon-clock1"></span> <?= $phoneNo; ?> </a>

                                    <a class="btn-three hidden-booking-btn" title="Get quote for your <?= $area; ?> Taxi " href="<?= $bookingUrl ?>"><span class="fa fa-list"></span> Get Quote </a>

                                    <a class="btn-three" title="Book your <?= $area; ?> Taxi Online" href="<?= $bookingUrl ?>"><span class="fa fa-laptop"></span> Book Online</a>

                                </div>
                            </div>


   </div>

  </div>

  </div>


</header>



<!-- <header class="main-header style3">
               
                <div class="header-upper-style3">
                    <div class="container clearfix">
                        <div class="outer-box clearfix">
                            <div class="header-upper-left float-left">
                                <div class="logo">
                                    <a title="<?= $companyName; ?>" href="<?= BASE_URL; ?>">
                                        <img  src="assets/images/logo.jpg" title="<?= $area; ?> Minicabs, <?= $area; ?> Taxis" alt="<?= $area; ?> Minicabs, <?= $area; ?> Taxis" />
                                    </a>
                                </div>
                            </div>
                            <div class="header-upper-middle clearfix float-left">
                                <ul class="header-contact-info-style2 clearfix">
                                    <li>
                                        <div class="single-item">
                                            <div class="icon"><span class="icon-medal"></span></div>
                                            <div class="text">
                                                <strong>Trusted Minicab Service</strong>
                                                
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-item">
                                            <div class="icon"><span class="icon-cost"></span></div>
                                            <div class="text">
                                                 <strong>Affordable Minicab Prices</strong>
                                                
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="header-upper-right clearfix float-right">
                                <div class="button">
                                    <strong id="booking-title">Book Your <?= $area; ?> Minicab </strong>
                                    <a class="btn-three hidden-booking-btn" title="Call us now to book <?= $area; ?> Taxi" href="<?= $bookingUrl ?>"><span class="icon-clock1"></span> <?= $phoneNo; ?> </a>

                                    <a class="btn-three hidden-booking-btn" title="Get quote for your <?= $area; ?> Taxi " href="<?= $bookingUrl ?>"><span class="fa fa-list"></span> Get Quote </a>

                                    <a class="btn-three" title="Book your <?= $area; ?> Taxi Online" href="<?= $bookingUrl ?>"><span class="fa fa-laptop"></span> Book Online</a>

                                </div>
                            </div> -->



                          

                        </div>
                    </div>
                </div>


                <!-- <div class="header-lower-style2">
                    <div class="container">
                        <div class="outer-box clearfix">
                            <div class="header-lawer-left float-left">
                                <div class="nav-outer clearfix">
                                    <nav class="main-menu style2 s3 dropdown-menus2 navbar-expand-lg">
                                        
                                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">

                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4617">
                                                    <a title="Download Our Android App - <?= $companyName; ?>" href="<?= $androidAppUrl; ?>" class="hvr-underline-from-left1"><i class="fa fa-android"></i> Android App</a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4617">
                                                    <a title="Download Our Iphone App - <?= $companyName; ?>" href="<?= $iphoneAppUrl; ?>" class="hvr-underline-from-left1"><i class="fa fa-apple"></i> iPhone App</a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4617">
                                                    <a title="Get Free Quotation Online - <?= $companyName; ?>" href="<?= $bookingUrl; ?>" class="hvr-underline-from-left1"><i class="fa fa-list"></i> Get Quote</a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4617">
                                                    <a title="Book Your <?= $area ?> Minicab Online - <?= $companyName; ?>" href="<?= $bookingUrl; ?>" class="hvr-underline-from-left1"><i class="fa fa-globe"></i>  Book Online</a>
                                                </li>



                                              


                                            </ul>
                                        </div>
                                    </nav>
                                    <div class="menu-right-content-style3"></div>
                                </div>
                            </div>
                            <div class="header-lawer-right float-right">
                                <div class="phone-number-box">
                                    <div class="icon"><span class="icon-clock1"></span></div>
                                    <div class="text">
                                        <strong>Call Us On</strong>
                                        
                                        <a title="Call us on <?= $phoneNo; ?> to book your local <?= $area; ?> Taxi" href="tel:<?= $phoneNo; ?>">

                                            <strong style="color: black;"><?= $phoneNo; ?></strong>

                                        </a>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

 -->

            </header>


        