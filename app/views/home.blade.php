<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Party Planner</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">

</head>

<body data-spy="scroll">

<div class="container">
            <ul id="gn-menu" class="gn-menu-main">
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                <li class="gn-search-item">
                                    <input placeholder="Search" type="search" class="gn-search">
                                    <a class="gn-icon gn-icon-search"><span>Search</span></a>
                                </li>
                                <li>
                                    <a href="#about" class="gn-icon gn-icon-download">About</a>
                                </li>
                                <li><a href="#service" class="gn-icon gn-icon-cog">Service</a></li>
                                <li><a href="#works" class="gn-icon gn-icon-help">Works</a></li>
                                <li>
                                    <a href="#contact" class="gn-icon gn-icon-archive">Contact</a>
                                </li>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <li><a href="index.html">Party Planner</a></li>
                @if(Auth::check())
                    <li><a href="index.html">Logout</a></li>
                @else
                    <li><a href="index.html">Login</a></li>
                @endif
                
                @if(Auth::check())
                <li><a href="index.html"></a>My Account</li>
                @endif
            </ul>
    </div>

    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="slogan">
            <h1>Party Planner</h1>
            <p>Your one stop destination to create awesome parties out of the box</p>
            <a href="#about" class="btn btn-skin scroll">Learn more</a>
        </div>  
    </section>
    <!-- /Section: intro -->

 
    
    
    <!-- Section: services -->
    <section id="service" class="home-section text-center">
        
        <div class="heading-about marginbot-50">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
        
                    <div class="section-heading">
                    <h2>Our Services</h2>
                    <p>Lorem ipsum dolor sit amet, no nisl mentitum recusabo per, vim at blandit qualisque dissentiunt. Diam efficiantur conclusionemque ut has</p>
                    </div>
            
                </div>
            </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">
            
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-users fa-3x"></i>
                    </div>
                    <div class="service-desc">
                        <h5>Vendor Contacts</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                    </div>
                </div>
    
            </div>
            <div class="col-sm-3 col-md-3">
    
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-glass fa-3x"></i>
                    </div>
                    <div class="service-desc">
                        <h5>Party Inspiration</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-3 col-md-3">

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-cog fa-3x"></i>
                    </div>
                    <div class="service-desc">
                        <h5>Drag and Drop</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                    </div>
                </div>
            
            </div>
            <div class="col-sm-3 col-md-3">
    
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fa fa-share fa-3x"></i>
                    </div>
                    <div class="service-desc">
                        <h5>Confirmations</h5>
                        <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                    </div>
                </div>
            
            </div>
        </div>      
        </div>
    </section>
    <!-- /Section: services -->
    
        
    <!-- Section: works -->
    <section id="works" class="home-section text-center bg-gray">
        <div class="heading-works marginbot-50">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
        
                    <div class="section-heading">
                    <h2>Party Inspiration</h2>
                    <p>Lorem ipsum dolor sit amet, no nisl mentitum recusabo per, vim at blandit qualisque dissentiunt. Diam efficiantur conclusionemque ut has</p>
                    </div>
        
                </div>
            </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                        <div class="col-md-3">
                            <a href="img/works/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/1.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/works/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/2.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/works/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/3.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/works/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/4.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/works/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/5.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/works/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/6.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/works/7.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/7.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="img/works/8.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
                                <img src="img/works/8.jpg" class="img-responsive" alt="img">
                            </a>
                        </div>
                    </div>
    
                </div>
            </div>  
        </div>
    </section>
    <!-- /Section: works -->

   <!-- Section: about -->
    <section id="about" class="home-section text-center bg-gray">
        <div class="heading-about marginbot-50">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
        
                    <div class="section-heading">
                    <h2>Meet The Dev Team</h2>
                    <p>Lorem ipsum dolor sit amet, no nisl mentitum recusabo per, vim at blandit qualisque dissentiunt. Diam efficiantur conclusionemque ut has</p>
                    </div>
            
                </div>
            </div>
            </div>
        </div>
        <div class="container">

        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4">

                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Benny Cardenas</h5>
                        <p class="subtitle">Pixel Crafter</p>
                        <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>
        
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4">

                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Keyasha Brothern</h5>
                        <p class="subtitle">Ruby on Rails</p>
                        <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive" /></div>
                    </div>

                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4">
        
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Max Mayfield</h5>
                        <p class="subtitle">jQuery Ninja</p>
                        <div class="avatar"><img src="img/team/3.jpg" alt="" class="img-responsive" /></div>
                    </div>
                </div>
        
            </div>
        </div>
        </div>
    </section>
    <!-- /Section: about -->

    <!-- Section: contact -->
    <section id="contact" class="home-section text-center">
        <div class="heading-contact marginbot-50">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
    
                    <div class="section-heading">
                    <h2>Get in touch</h2>
                    <p>Lorem ipsum dolor sit amet, no nisl mentitum recusabo per, vim at blandit qualisque dissentiunt. Diam efficiantur conclusionemque ut has</p>
                    </div>
                
                </div>
            </div>
            </div>
        </div>
        <div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-offset-2">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
            
            <div class="widget-contact row">
                 <div class="col-lg-6">
                <address>
                  <strong>Ninestars Ltd.</strong><br>
                  Big Villa 334 Awesome, Beautiful Suite 1200<br>
                  San Francisco, CA 94107<br>
                  <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
                </div>
                
                <div class="col-lg-6">
                <address>
                  <strong>Email</strong><br>
                  <a href="mailto:#">email.name@example.com</a><br />
                   <a href="mailto:#">name.name@example.com</a>
                </address>  
            
                </div>
            </div>  
        </div>

    </div>  

        </div>
    </section>
    <!-- /Section: contact -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
        
                    <p>Copyright &copy; 2014 Ninestars - by <a href="http://bootstraptaste.com">Bootstraptaste</a></p>
                </div>
            </div>  
        </div>
    </footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script> 
    <script src="js/classie.js"></script>
    <script src="js/gnmenu.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/stellar.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>
