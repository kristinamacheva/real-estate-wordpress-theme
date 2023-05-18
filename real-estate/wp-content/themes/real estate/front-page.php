<?php
    get_header();
?>

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item item-100vh active">
                <img src="<?php bloginfo('template_directory'); ?>/img/banner/img-2.jpg" alt="banner-slider-1">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content container banner-content-left banner-info-section">
                        <h1>Намерете мечтаното си жилище</h1>
                        <p>При нас ще намерите перфектния имот, който да отговаря на всичките Ви изисквания.</p>
                        <div class="tabbing tab-btn banner-tab-btn">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="accordion accordion-flush" id="accordionFlushExample7">
                                        <div class="search-area">
                                            <div class="search-area-inner">
                                                <form method="GET" action="http://localhost/real-estate/tursene-imoti/">
                                                    <div class="w-32 form-group b-right">
                                                        <input type="text" name="keyword" class="input-text search-fields" placeholder="Напишете ключова дума"
                                                        value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
                                                    </div>
                                                    <div class="w-17 form-group b-right">
                                                        <select class="selectpicker search-fields" name="propType">
                                                            <option value="" selected>Вид имот</option>
                                                            <?php
                                                            $propTerms = get_terms([
                                                                'taxonomy' => 'property-types',
                                                                'hide_empty => true',
                                                            ]);
                                                            
                                                            foreach ($propTerms as $propTerm):?>
                                                                <option 
                                                                <?php if(isset($_GET['propType']) && ($_GET['propType'] == $propTerm -> name)): ?> 
                                                                    selected = "selected"   
                                                                <?php endif; ?>                          
                                                                    value="<?php echo $propTerm -> name?>"><?php echo $propTerm -> name?>
                                                                </option>
                                                            <?php endforeach; ?>    
                                                        </select>
                                                    </div>
                                                    <div class="w-17 form-group b-right">
                                                        <select class="selectpicker search-fields" name="location">
                                                            <option value="" selected>Населено място</option>
                                                                <?php
                                                                    global $wpdb;
                                                                    $locations = $wpdb->get_col( "
                                                                        SELECT pm.meta_value
                                                                        FROM {$wpdb->postmeta} pm
                                                                        WHERE pm.meta_key = 'prop-post-place'
                                                                    " );
                                                                    $locations = array_unique($locations);
                                                                ?>
                                                                <?php foreach ($locations as $location): ?>
                                                                    <option 
                                                                        <?php if(isset($_GET['location']) && ($_GET['location'] == $location)): ?> 
                                                                            selected 
                                                                        <?php endif; ?>                          
                                                                        value="<?php echo $location ?>"><?php echo $location ?>
                                                                    </option>
                                                                <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <div class="w-17 form-group b-right">
                                                        <select class="selectpicker search-fields" name="status">
                                                            <option value="">Статус</option>
                                                            <option 
                                                            <?php $selling = 'Продава'?>
                                                            <?php if (isset($_GET['status']) && ($_GET['status'] == $selling)):?>
                                                                selected
                                                            <?php endif; ?>value="Продава">Продава</option>
                                                            <option 
                                                            <?php $renting = 'Под наем'?>
                                                            <?php if (isset($_GET['status']) && ($_GET['status'] == $renting)):?>
                                                                    selected
                                                                <?php endif; ?>value="Под наем">Под наем</option>
                                                        </select>
                                                    </div> 
                                                    <div class="w-17 w-17-2 form-group b-right b-right2">
                                                        <button class="search-button" type="submit">Търсене</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end -->


<?php
$propArgs = array(  
        'post_type' => 'properties',
        'post_status' => 'publish',
        'posts_per_page' => 9, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );
$loop = new WP_Query( $propArgs ); 
?>

<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Нашите имоти</h1>
            <p class="mb-30">Разгледайте най-новите имоти, които предлагаме.</p>
            <ul class="list-inline-listing filters filters-listing-navigation">
                <li class="active btn filtr-button filtr" data-filter="all">Всички</li>
                <?php

                $propTerms = get_terms('property-types');
                if(!empty($propTerms)){
                    if(!is_wp_error( $propTerms )){
                        foreach ($propTerms as $propTerm):?>
                            <li data-filter="<?php echo $propTerm -> term_id ?>" class="btn btn-inline filtr-button filtr"><?php echo $propTerm -> name?></li>
                        <?php endforeach;
                    }
                }
                ?>  
            </ul>
        </div>
        <div class="row wow fadeInUp delay-04s">
            <div class="filtr-container">

            <?php if ( $loop -> have_posts() ) : while ( $loop ->have_posts() ) : $loop ->the_post(); 
    
                $terms = wp_get_object_terms($post->ID, 'property-types');
                $termCount = sizeof ($terms);
                ?>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 filtr-item" data-category="1 <?php 
                if(!empty($terms)){
                    if(!is_wp_error( $terms )){
                        for ($i=0; $i < $termCount ; $i++) { 
                            echo ', ' . $terms[$i] -> term_id ;           
                        }            
                    }
                }
                ?>">
                    <div class="property fp2">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">
                            <?php                           
                            if(!empty($terms)){
                                if(!is_wp_error( $terms )){
                                    for ($i=0; $i < $termCount ; $i++) { 
                                        if ($i == 0) {
                                            echo $terms[$i] -> name;
                                        } else {
                                            echo ', ' . $terms[$i] -> name ; 
                                        }            
                                    }     
                                }
                            }
                            ?>
                            </div>
                            <div class="property-tag button sale"><?php the_field('status'); ?></div>
                            <div class="property-price"><?php the_field('price'); ?> <?php the_field('currency'); ?></div>
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('prop-grid-size', array('class' => 'img-fluid'));
                            } 
                            ?>
                            <div class="property-overlay">
                                <a href="<?php the_permalink(); ?>" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <?php if (get_gallery()):
                                        $imgCount = post_gallery_count(get_the_ID());
                                        $gallery = get_gallery();

                                        for ($i = 0; $i < $imgCount; $i++):
                                            $currentImg = $gallery[$i];
                                            if ($i == 0):
                                    ?>
                                                <a href="<?php echo $currentImg->large_url ?>" class="overlay-link">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            <?php else :?>
                                                <a href="<?php echo $currentImg->large_url ?>" class="hidden"></a>

                                    <?php endif; endfor; endif;?>

                                </div>  
                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- info -->
                            <div class="info">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i><?php the_field('address'); ?>
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span> <?php the_field('prop-area'); ?></span>
                                    </li>
                                    <?php  
                                    if (get_field('floor')) {?>
                                        <li>
                                            <i class="flaticon-apartment"></i>
                                            <span> <?php the_field('floor'); ?></span>
                                        </li>
                                    <?php 
                                    }?>
                                    <?php  
                                    if (get_field('bedrooms')) {?>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span> <?php the_field('bedrooms'); ?></span>
                                        </li>
                                    <?php 
                                    }?>
                                    <?php  
                                    if (get_field('bathrooms')) {?>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span> <?php the_field('bathrooms'); ?></span>
                                        </li>
                                    <?php 
                                    }?>
                                    <?php  
                                    if (get_field('yard')) {?>
                                        <li>
                                            <i class="flaticon-park"></i>
                                            <span> <?php the_field('yard'); ?></span>
                                        </li>
                                    <?php 
                                    }?>
                                    <?php  
                                    if (get_field('balcony')) {?>
                                        <li>
                                            <i class="flaticon-building"></i>
                                            <span> <?php the_field('balcony'); ?></span>
                                        </li>
                                    <?php 
                                    }?>
                                </ul>
                            </div>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left">
                                    <a href="#"><i class="fa fa-user"></i><?php the_author(); ?></a>
                                </span>
                                <span class="right">
                                    <i class="fa fa-calendar"></i><?php the_time(get_option('date_format')); ?>
                                </span>
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
<!-- Featured properties end -->

<!-- Our service there start -->
<div class="our-service-there">
    <div class="our-service-there-inner">
        <div class="container">
            <!-- Main title -->
            <div class="main-title main-title-5">
                <h1>Защо да ни се доверите?</h1>
                <p>Ние сме доказали се специалисти в областта на недвижимите имоти.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft delay-04s">
                    <div class="bg-service-color">
                        <div class="services-info-4">
                            <div class="icon">
                                <i class="flaticon-people-1"></i>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="#"><?php the_field('heading-one', '53'); ?></a>
                                </h3>
                                <p><?php the_field('para-one', '53'); ?></p>
                            </div>
                        </div>
                        <div class="services-info-4">
                            <div class="icon">
                                <i class="flaticon-symbol-1"></i>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="#"><?php the_field('heading-two', '53'); ?></a>
                                </h3>
                                <p><?php the_field('para-two', '53'); ?></p>
                            </div>
                        </div>
                        <div class="services-info-4 mb-0">
                            <div class="icon">
                                <i class="flaticon-apartment"></i>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="#">
                                        <?php the_field('heading-three', '53'); ?>
                                    </a>
                                </h3>
                                <p><?php the_field('para-three', '53'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight delay-04s">
                    <div class="cap2">
                        <img src="<?php bloginfo('template_directory'); ?>/img/avatar/avatar-8.png" alt="avatar-6" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our service there end -->

<!-- Popular places start -->
<div class="popular-places comon-slick content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Популярни места</h1>
            <p>Разгледайте някои от местата, за които предлагаме имоти.</p>
        </div>
        <div class="slick row wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

            <?php query_posts('cat=9'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="item">
                <div class="popular-places-box-2">  
                    <?php 
                    $image = get_field('location-img');
                    $size = 'location-thumb-img'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    } 
                    ?>

                    <div class="ling-section">
                        <h3>
                            <a href="#"><?php the_title() ?></a>
                        </h3>
                        <p class="member-socials"><?php the_field('info'); ?></p>
                        <a href="#" class="read-more-btn">Преглед</a>
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
<!-- Popular places end -->

<!-- Agent section start -->
<div class="agent-section content-area-17 comon-slick">
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
                                <a href="#"><?php the_title(); ?></a>
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

<!-- Testimonial 3 section start-->
<div class="testimonials-3 content-area-7 comon-slick">
    <div class="container">
        <!-- Main title -->
        <div class="main-title main-title-5">
            <h1>Отзиви</h1>
            <p>Какво казват нашите клиенти.</p>
        </div>
        <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

        <?php query_posts('cat=3'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="item slide-box wow fadeInRight delay-04s">
                <div class="testimonials-inner">
                    <div class="user">
                        <a href="#">
                            <?php 
                                 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                   the_post_thumbnail();
                                 } 
                            ?>
                        </a>
                    </div>
                    <div class="testimonial-info">
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <p>Клиент</p>
                        <p><?php echo the_content(); ?></p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-full"></i>
                            <span>Рейтинг</span>
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
<!-- Testimonial 3 end -->

<?php
$blogArgs = array(  
        'post_type' => 'blog',
        'post_status' => 'publish',
        'posts_per_page' => 6, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );
$loop = new WP_Query( $blogArgs ); 
?>

<!-- Blog start -->
<div class="blog comon-slick content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Нашият Блог</h1>
            <p>Вижте някои от последните ни публикации.</p>
        </div>
        <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

        <?php if ( $loop -> have_posts() ) : while ( $loop ->have_posts() ) : $loop ->the_post(); 
        ?>

            <div class="item slide-box wow fadeInUp delay-04s">
                <div class="blog-3">
                    <div class="blog-image">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('blog-gird', array('class' => 'img-fluid w-100'));
                            } 

                            $terms = wp_get_object_terms($post->ID, 'blog-post-types');
                            $termCount = sizeof ($terms);
                        ?>
                        <div class="date-box">
                        <?php                           
                            if(!empty($terms)){
                                if(!is_wp_error( $terms )){
                                    for ($i=0; $i < $termCount ; $i++) { 
                                        if ($i == 0) {
                                            echo $terms[$i] -> name;
                                        } else {
                                            echo ', ' . $terms[$i] -> name ; 
                                        }            
                                    }     
                                }
                            }
                        ?>
                        </div>
                        <div class="post-meta clearfix">
                            <span><a href="#"><i class="fa fa-user"></i></a> <?php the_author(); ?></span>
                            <span><a href="#"><i class="fa fa-calendar"></i></a> </i> <?php the_time(get_option('date_format')); ?></span>
                        </div>
                    </div>
                    <div class="detail">
                        <h4>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <p><?php the_field('summary'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Вижте повече...</a>
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
<!-- Blog end -->


<?php
    get_footer();
?>