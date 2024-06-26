<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Responsive Portfolio
 */

//  Variables Decalares here for Acf

$name = get_field('enter_your_name');
$profession = get_field('role');
$cv_url = get_field('enter_cv_or_resume_url_here');
$image_top_right_banner = get_field('image_top_banner_right');
$size_top_right_banner = 'full'; //thumbnail,medium,large,full or custom size 

get_header() ?>

<!-- Banner section  -->
<section id="home" class="banner_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-lg-1 order-2 banner-content">
                    <h2 class="text-uppercase position-relative">Hell0</h2>
                    <h1 class="text-uppercase">I am <?php echo $name;?></h1>
                    <h5 class="text-uppercase"><?php echo $profession;?></h5>
                    <div class="mt-5">
                        <a class="main-btn primary-btn" href="#">Hire Me</a>
                        <a class="main-btn secondary-btn ms-4" href="<?php echo esc_attr($cv_url); ?>">Get CV</a>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="top-right-img">
                        <?php
                        if( !empty( $image_top_right_banner ) ): ?>
                        <img src="<?php echo esc_url($image_top_right_banner['url']); ?>" alt="" class="img-fluid">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!-- Banner section exit  -->
    
    <!-- About section  -->
    <section id="about" class="about_wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-us.webp" alt="about-us" srcset="" class="img-fluid">
                </div>
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h3>let’s <br>Introduce about <br>myself</h3>
                    <p><?php echo wp_kses_post( get_field('about_description') ); ?></p>
                    <a href="https://drive.usercontent.google.com/download?id=13jjRN5k4FdHeARLe1suvXzjHnqfsLV3l&export=download&authuser=0&confirm=t&uuid=a64094a8-36ee-47cc-9277-02e431b766a0&at=APZUnTXUtySCUnxaHw8IqYQgmhww:1708966137870" class="main-btn primary-btn mt-4">Download CV</a>
                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client-img/logo1.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client-img/logo2.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client-img/logo3.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client-img/logo4.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client-img/logo5.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client-img/logo6.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client-img/logo7.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client-img/logo8.webp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/client-img/logo9.webp" class="img-fluid">
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="offset-lg-2 col-lg-4 col-md-10">
                    <div class="client-info">
                        <div class="d-flex">
                            <span class="large">5</span>
                            <span class="smll">Years<br>Experience<br>Working</span>
                        </div>
                        <div class="call-now d-flex py-4">
                            <div>
                                <span class="fa fa-phone-alt"></span>
                            </div>
                            <div class="ms-4">
                                <p>Call us now</p>
                                <h5>(+91)-9084499957</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section exit  -->

    <!-- Services section  -->
    <section id="services" class="services_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h2>SERVICE OFFERS</h2>
                    <p>Is give may shall likeness made yielding spirit a itself togeth created after sea <br
                            class="d-none d-lg-block">
                        is in beast beginning signs open god you're gathering ithe</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services-img/mouse.webp" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Web Development</h5>
                        <p>I offer a comprehensive range of services, including custom theme development, 
                         plugin integration, website optimization, and ongoing maintenance and support.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services-img/ui-ux.webp" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">SPEED/PERFOMANCE</h5>
                        <p>As a dedicated WordPress developer,
                        I specialize in enhancing website speed and performance to ensure optimal user experiences and maximize your online presence.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services-img/website.webp" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">WEB DESIGN</h5>
                        <p>Elevate Your Website with Stunning Designs Powered by WordPress Page Builders.
                        such as WPBakery, Divi Builder, and Elementor.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services-img/seo.webp" class="img-fluid">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">SEO OPTIMIZE</h5>
                        <p>Enhance Your Online Visibility with Proven SEO Strategies.
                        To truly succeed online, your website needs to be easily discoverable by your target audience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section exit  -->

    <!-- Portfolio Section  -->
    <section id="portfolio" class="portfolio_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-left mb-md-5 mb-2">
                    <h2>QUALITY WORK <br>RECENTLY DONE PROJECT</h2>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">Customizing Themes for different domains</button>
                      </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Develop Wordpress Theme And Plugin</button>
                    </li>                    
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false">Projects Build using Site builders</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false">Build Template Bootstrap 5</button>
                      </li>
                </ul>

                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/ithinkecommerce.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://thinkecommerce.ithinkservices.com/">"Think Ecommerce: Your Responsive Online Store WordPress Theme"</a></h5>
                                <p>"Think Ecommerce is a user-friendly WordPress theme designed for online stores. It's built to look great and work smoothly on any device, 
                                    so your customers can shop from their computer, tablet, or phone with ease."
                                </p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/slider-plugin.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://slider.ithinkservices.com/">"Think Slider: Design Your Own Stunning Image Sliders for WordPress"</a></h5>
                                <p>"CustomSlider is a powerful WordPress plugin that lets you create beautiful image sliders with ease. Whether you're showcasing your latest products, 
                                    highlighting your portfolio,"</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/food-ordering.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://food.ithinkservices.com/">Food Ordering</a></h5>
                                <p>"Welcome to your customized food ordering site, meticulously crafted using WordPress themes to bring your culinary vision to life.</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/pharmacy-ordering.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://pharma.ithinkservices.com/">Pharmacy Ordering</a></h5>
                                <p>"Welcome to your convenient online pharmacy ordering platform, meticulously crafted using WordPress to provide seamless 
                                    access to essential healthcare products and services.</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/tour-site.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://tour.ithinkservices.com/">Tour and Travel Booking</a></h5>
                                <p>Embark on your next adventure with confidence, courtesy of our meticulously crafted tour and travel booking site, designed and customized using the power of WordPress.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/agency-site.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://ithinkservices.com/">Agency Site</a></h5>
                                <p>Discover our range of services, from web design to digital marketing, all crafted with care to elevate your brand. With intuitive navigation and engaging visuals, exploring our site is a breeze.</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/real-estate.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://realestate.ithinkservices.com/">Real Estate Listing</a></h5>
                                <p>"Explore your dream home with our user-friendly real estate listing site, powered by WordPress. Easily browse through a diverse range of properties, from cozy apartments to spacious villas, all in one convenient place.</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/blog-affiliate.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://socialjaankari.com/">Blog Affiliate Site</a></h5>
                                <p>"Welcome to our captivating blog affiliate marketing site, where stunning design meets seamless functionality, all powered by WordPress.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/pharmacy-ordering.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://pharma.ithinkservices.com/">Customize theme by using Elementor</a></h5>
                                <p>"Build Or Setup Online Pharmacy Ordering store by using Elementor Page Builder and Woo-Commerce Plugin"</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/wp-bakery-ecom.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://wpecommerce.ithinkservices.com/">Customize theme by using Wp Bakery</a></h5>
                                <p>"Build Or Setup E-commerce store by using Wp Bakery Page builder and Woo-Commerce Plugin"</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/divi-theme.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://diviecommerce.ithinkservices.com/">Customize theme by using Divi Theme Builder</a></h5>
                                <p>"Build Or Setup E-commerce store for Clothing by using Divi Theme Page builder and Woo-commerce Plugin"</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/E-commerce-template.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://vivek-msn.github.io/E-Commerce-Template/">E-Commerce Template</a></h5>
                                <p>"Our project is a modern, responsive template built from scratch using Bootstrap 5, HTML, CSS, and a touch of JavaScript. This template offers a clean and sleek design, with flexible layout options to suit various purposes</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/resturant-template.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://vivek-msn.github.io/Food-and-restaurant-template/">Food and Restaurant template</a></h5>
                                <p>"Our project is a modern, responsive template built from scratch using Bootstrap 5, HTML, CSS, and a touch of JavaScript. This template offers a clean and sleek design, with flexible layout options to suit various purposes"</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/portfolio/jewellery-template.png" alt="" class="img-fluid w-100">
                                    <div class="overlay"><i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4"><a href="https://vivek-msn.github.io/E-commerce-Jewellery/">E-Commerce Jewellery</a></h5>
                                <p>"Our project is a modern, responsive template built from scratch using Bootstrap 5, HTML, CSS, and a touch of JavaScript. This template offers a clean and sleek design, with flexible layout options to suit various purposes"</p>
                            </div>
                        </div>
                        
                    </div>
                 </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section exit  -->

    <!-- Blog Section  -->
    <section id="blog" class="blog_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h2>BLOG</h2>
                    <p>Is give may shall likeness made yielding spirit a itself togeth created after sea <br
                            class="d-none d-lg-block">
                        is in beast beginning signs open god you're gathering ithe</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog/blog.webp" alt="blog" class="img-fluid">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                <h5 class="text-white mb-0">Social Life</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog/blog1.webp" alt="blog" class="img-fluid">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                <h5 class="text-white mb-0">POLITICS</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog/blog2.webp" alt="blog" class="img-fluid">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                <h5 class="text-white mb-0">FOOD</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog/blog.webp" alt="blog" class="img-fluid">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                 <h5 class="text-white mb-0">Social Life</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section exit  -->

    <?php get_footer() ?>