<?php
/**
* Template Name: About Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
    get_header();
?>	

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1><?php the_title(); ?></h1>
                <ul class="breadcrumbs">
                    <li><a href="<?php echo home_url(); ?>">Начало</a></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- About city estate start -->
<div class="about-city-estate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="properties-detail-slider simple-slider pds-2">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <?php 
                                $image = get_field('pic-1');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                if( $image ) {
                                    echo wp_get_attachment_image( $image, $size, false, array('class' => 'd-block w-100 img-fluid'));
                                }
                            ?>   
                            </div>
                            <div class="carousel-item">
                            <?php 
                                $image = get_field('pic-2');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                if( $image ) {
                                    echo wp_get_attachment_image( $image, $size, false, array('class' => 'd-block w-100 img-fluid'));
                                }
                            ?>   
                            </div>
                            <div class="carousel-item">
                            <?php 
                                $image = get_field('pic-3');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                if( $image ) {
                                    echo wp_get_attachment_image( $image, $size, false, array('class' => 'd-block w-100 img-fluid'));
                                }
                            ?>   
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 align-self-center">
                <div class="about-text">
                    <h3>Добре дошли в нашия сайт!</h3>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About city estate end -->

<!-- Agent section start -->
<div class="agent-section content-area comon-slick">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Нашите Брокери</h1>
            <p>Запознайте се с нашия екип.</p>
        </div>
        <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            <?php query_posts('cat=22'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="item slide-box wow fadeInRight delay-04s">
                <div class="agent-1">
                    <div class="member-thumb">
                        <?php 
                            if ( has_post_thumbnail() ) {
                                 the_post_thumbnail('prop-grid-size', array('class' => 'img-fluid w-100'));
                            } 
                        ?>
                    </div>
                    <div class="member-content-wrap">
                        <div class="member-name-designation">
                            <h4 class="member-name">
                                <a href="agent-single.html"><?php the_title(); ?></a>
                            </h4>
                            <p class="member-designation">Брокер</p>
                            <div class="social-list clearfix">
                                <a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i></a>
                                <a href="<?php the_field('email'); ?>"><i class="fa fa-google-plus"></i></a>
                                <a href="<?php the_field('youtube'); ?>"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-hover-content">
                        <div class="member-thumb">
                        <?php 
                            if ( has_post_thumbnail() ) {
                                 the_post_thumbnail('prop-grid-size', array('class' => 'img-fluid w-100 h-100'));
                            } 
                        ?>
                        </div>
                        <div class="member-name-designation">
                            <h4 class="member-name">
                                <a href="agent-single.html"><?php the_title(); ?></a>
                            </h4>
                            <p class="member-designation">Брокер</p>
                        </div>
                        <div class="member-socials">
                            <a href="<?php the_field('facebook'); ?>" class="facebook-bg"><i class="fa fa-facebook "></i></a>
                            <a href="<?php the_field('twitter'); ?>" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            <a href="<?php the_field('email'); ?>" class="rss-bg"><i class="fa fa-google-plus"></i></a>
                            <a href="<?php the_field('youtube'); ?>" class="google-bg"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php 
            endwhile;
            endif;
        ?>
        
        </div>
    </div>
</div>
<!-- Agent section end -->

<!-- Counters 3 strat -->
<div class="counters-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 align-self-center">
                <div class="sec-title-three">
                    <div class="main-title main-title-5 mb-0">
                        <h1><?php the_field('count-heading', '57'); ?></h1>
                        <P><?php the_field('count-text', '57'); ?></P>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                <div class="counters-3-inner">
                    <div class="counter-box-3 d-flex">
                        <i class="flaticon-tag"></i>
                        <div class="detail">
                            <h1 class="counter"><?php the_field('sales-count', '57'); ?></h1>
                            <p>Продажби</p>
                        </div>
                    </div>
                    <div class="counter-box-3 d-flex">
                        <i class="flaticon-symbol-1"></i>
                        <div class="detail">
                            <h1 class="counter"><?php the_field('ads-count', '57'); ?></h1>
                            <p>Обяви</p>
                        </div>
                    </div>
                    <div class="counter-box-3 d-flex">
                        <i class="flaticon-people"></i>
                        <div class="detail">
                            <h1 class="counter"><?php the_field('clients-count', '57'); ?></h1>
                            <p>Клиенти</p>
                        </div>
                    </div>
                    <div class="counter-box-3 d-flex">
                        <i class="flaticon-people-1"></i>
                        <div class="detail">
                            <h1 class="counter"><?php the_field('brokers-count', '57'); ?></h1>
                            <p>Брокери</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters 3 end -->

<div class="clearfix"></div>
<!-- Testimonials 2 -->
<div class="testimonials-2 comon-slick">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Отзиви</h1>
            <p>Какво казват нашите клиенти.</p>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

                     <?php query_posts('cat=3'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="item slide-box">
                        <div class="testimonials-box">
                            <div class="detail clearfix">
                                <P><i class="fa fa-quote-left"></i> <?php echo the_content(); ?> <i class="fa fa-quote-right"></i></P>
                                <div class="user-info d-flex">
                                    <a class="pr-3" href="#">
                                        <div class="flex-shrink-0 me-3">
                                        <?php 
                                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                            the_post_thumbnail();
                                            } 
                                        ?>
                                        </div>
                                    </a>
                                    <div class="detail align-self-center">
                                        <h5>
                                            <a href="#"><?php the_title(); ?></a>
                                        </h5>
                                        <p>Клиент</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php 
                        endwhile;
                        endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 2 end -->
<div class="clearfix"></div>

<!-- Intro section start -->
<div class="intro-section">
    <div class="intro-section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-7 col-sm-12">
                    <h3>Искате да продадете свой имот?</h3>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12">
                    <a class="btn-2 btn-white" href="contact.html">
                        <span>Свържете се с нас</span> <i class="arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro section end -->

<?php
    get_footer();
?>