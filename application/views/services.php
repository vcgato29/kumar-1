<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Services | KRSConnect</title>

        <?php $this->load->view('elements/css-icon'); ?>

    </head><!--/head-->

    <body>

        <header id="header">
            <?php $this->load->view('elements/topBar'); ?>

            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url()?>application/views/libs/images/logo.png" alt="logo"></a>
                    </div>

                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url(); ?>/loadViewsController/loadAboutus">About Us</a></li>
                            <li class="active"><a href="<?php echo site_url(); ?>/loadViewsController/loadServices">Services</a></li>
                            <li><a href="<?php echo site_url(); ?>/loadViewsController/loadBlog">Blog</a></li> 
                            <li><a href="<?php echo site_url(); ?>/loadViewsController/loadContact">Contact</a></li>                        
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->

        </header><!--/header-->

        <section id="feature" class="transparent-bg">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Our Services</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>

                <div class="row">
                    <div class="features">
                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-bullhorn"></i>
                                <h2>Fresh and Clean</h2>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-comments"></i>
                                <h2>Retina ready</h2>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-cloud-download"></i>
                                <h2>Easy to customize</h2>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-leaf"></i>
                                <h2>Adipisicing elit</h2>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-cogs"></i>
                                <h2>Sed do eiusmod</h2>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-heart"></i>
                                <h2>Labore et dolore</h2>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                            </div>
                        </div><!--/.col-md-4-->
                    </div><!--/.services-->
                </div><!--/.row--> 


                <div class="get-started center wow fadeInDown">
                    <h2>Ready to get started</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua. <br>  Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="request">
                        <h4><a href="#">Request a free Quote</a></h4>
                    </div>
                </div><!--/.get-started-->

                <div class="clients-area center wow fadeInDown">
                    <h2>What our client says</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>

                <div class="row">
                    <div class="col-md-4 wow fadeInDown">
                        <div class="clients-comments text-center">
                            <img src="images/client1.png" class="img-circle" alt="">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                            <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInDown">
                        <div class="clients-comments text-center">
                            <img src="images/client2.png" class="img-circle" alt="">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                            <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInDown">
                        <div class="clients-comments text-center">
                            <img src="images/client3.png" class="img-circle" alt="">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                            <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                        </div>
                    </div>
                </div>

            </div><!--/.container-->
        </section><!--/#feature-->


        <?php $this->load->view('elements/bottom'); ?>

        <?php $this->load->view('elements/footer'); ?>

        <?php $this->load->view('elements/scripts'); ?>

    </body>
</html>