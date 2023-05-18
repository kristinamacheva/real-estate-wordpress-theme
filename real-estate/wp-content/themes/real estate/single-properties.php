<?php
    get_header();
?>

<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();?>

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

<!-- Properties details page start -->
<div class="content-area  properties-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">

                <?php if (get_gallery()):?>
                <!-- Properties desciption start -->
                <div class="product-slider-box cds-2 clearfix mb-2">
                    <div class="product-img-slide">
                        <div class="slider-for2">
                            <?php foreach ( get_gallery() as $attachment ) : ?>
                                <div class="thumb-slide">
                                    <img class="img-fluid w-100" src="<?php echo $attachment->large_url ?>" alt="<?php echo $attachment->alt ?> ">
                                </div>
                            <?php endforeach ?>                           
                        </div>
                        <div class="slider-nav2">
                            <?php foreach ( get_gallery() as $attachment ) : ?>
                                <div class="thumb-slide">
                                    <img src="<?php echo $attachment->large_url ?>" alt="<?php echo $attachment->alt ?>">
                                </div>
                            <?php endforeach ?>                            
                        </div>
                    </div>
                </div>
                <!-- Properties desciption end -->
                <?php endif; ?>

                <!-- Header Properties start -->
                <div class="heading-properties clearfix sidebar-widget sw2">
                    <div class="pull-left">
                        <h3><?php the_title(); ?></h3>
                        <p>
                            <i class="fa fa-map-marker"></i><?php the_field('address'); ?>
                        </p>
                    </div>
                    <div class="pull-right">
                        <h3><span><?php the_field('price'); ?> <?php the_field('currency'); ?></span></h3>
                    </div>
                </div>
                <!-- Header Properties end -->

                <!-- Properties details section start -->
                <div class="Properties-details-section sidebar-widget sw2">
                    

                    <!-- Property description start -->
                    <div class="property-description tabbing tabbing-box tb2">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Описание</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Състояние</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Удобства</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample7">
                                    <div class="accordion-item">
                                        <div class="properties-description">
                                            <div class="main-title-4">
                                                <h1><span>Обща информация</span></h1>
                                            </div>
                                            <p><?php the_content(); ?></p>
                                            <br>
                                            <div class="main-title-4">
                                                <h1><span>Детайли</span></h1>
                                            </div>
                                            <p class="mb-0"><?php the_field('additional-description'); ?></p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample2">
                                    <div class="accordion-item">
                                        <div class="properties-condition">
                                            <div class="main-title-4">
                                                <h1><span>Състояние</span></h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <?php
                                                    $conditions = get_field('condition-col1');
                                                    if( $conditions ): ?>
                                                    <ul class="condition">
                                                        <?php foreach( $conditions as $condition ): ?>
                                                            <li>
                                                                <i class="fa fa-check-square"></i><?php echo $condition; ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <?php
                                                    $conditions = get_field('condition-col2');
                                                    if( $conditions ): ?>
                                                    <ul class="condition">
                                                        <?php foreach( $conditions as $condition ): ?>
                                                            <li>
                                                                <i class="fa fa-check-square"></i><?php echo $condition; ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <?php
                                                    $conditions = get_field('condition-col3');
                                                    if( $conditions ): ?>
                                                    <ul class="condition">
                                                        <?php foreach( $conditions as $condition ): ?>
                                                            <li>
                                                                <i class="fa fa-check-square"></i><?php echo $condition; ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample3">
                                    <div class="accordion-item">
                                        <div class="properties-amenities">
                                            <div class="main-title-4">
                                                <h1><span>Удобства</span></h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <?php
                                                    $amenities = get_field('amenities-col1');
                                                    if( $amenities ): ?>
                                                    <ul class="amenities">
                                                        <?php foreach( $amenities as $amenity ): ?>
                                                            <li>
                                                                <i class="fa fa-check-square"></i><?php echo $amenity; ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <?php
                                                    $amenities = get_field('amenities-col2');
                                                    if( $amenities ): ?>
                                                    <ul class="amenities">
                                                        <?php foreach( $amenities as $amenity ): ?>
                                                            <li>
                                                                <i class="fa fa-check-square"></i><?php echo $amenity; ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <?php
                                                    $amenities = get_field('amenities-col3');
                                                    if( $amenities ): ?>
                                                    <ul class="amenities">
                                                        <?php foreach( $amenities as $amenity ): ?>
                                                            <li>
                                                                <i class="fa fa-check-square"></i><?php echo $amenity; ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Property description end -->
                </div>
                <!-- Properties details section end -->

                <!-- Location start -->
                <div class="location sidebar-widget sw2">
                    <div class="map">
                        <!-- Main Title 2 -->
                        <div class="main-title-4">
                            <h1><span>Местоположение</span></h1>
                        </div>
                        <div id="map" class="contact-map">
                            <?php $address = get_field('address'); ?>
                            <iframe id="map" class="contact-map" src="https://www.google.com/maps?q=[<?php echo $address; ?>]&output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <!-- Location end -->
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <!-- Sidebar start -->
                <div class="sidebar right">
                    <!-- Advanced search start -->
                    <div class="sidebar-widget advanced-search">
                        <div class="main-title-4">
                            <h1>Търсене</h1>
                        </div>
                        <form method="GET" action="http://localhost/real-estate/tursene-imoti/">
                            <div class="form-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Ключова дума"value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
                            </div>
                            <div class="form-group">
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
                                                    selected   
                                                <?php endif; ?>                          
                                                value="<?php echo $propTerm -> name?>"><?php echo $propTerm -> name?>
                                            </option>
                                        <?php endforeach; ?>    
                                </select>
                            </div>
                            <div class="form-group">
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
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="status">
                                    <option value="">Статус</option>
                                        <option 
                                            <?php $selling = 'Продава'?>
                                            <?php if (isset($_GET['status']) && ($_GET['status'] == $selling)):?>
                                                selected
                                            <?php endif; ?>
                                            value="Продава">Продава
                                        </option>
                                        <option 
                                            <?php $renting = 'Под наем'?>
                                            <?php if (isset($_GET['status']) && ($_GET['status'] == $renting)):?>
                                                selected
                                            <?php endif; ?>
                                            value="Под наем">Под наем</option>
                                </select>
                            </div>
                                
                            <div class="form-group mb-0">
                                <button type="submit" class="button-md button-theme btn-3 w-100">Търсене</button>
                            </div>
                        </form>
                    </div>
                    <!-- Advanced search end -->

                    <!-- Category posts start -->
                    <div class="sidebar-widget category-posts">
                        <div class="main-title-4">
                            <h1>Популярни категории</h1>
                        </div>
                        <ul class="list-unstyled list-cat">
                        <?php
                        $propTerms = get_terms('property-types');
                        if(!empty($propTerms)){
                            if(!is_wp_error( $propTerms )){
                                foreach ($propTerms as $propTerm):?>
                                    <li><a href="<?php echo get_category_link($propTerm -> term_id)?>"><?php echo $propTerm -> name?></a></li>
                                <?php endforeach;   
                            }
                        }
                        ?> 
                        </ul>
                    </div>
                    <!-- Category posts end -->

                    <!-- Popular posts start -->
                    <div class="sidebar-widget popular-posts">
                        <div class="main-title-4">
                            <h1>Нови имоти</h1>
                        </div>
                        <?php
                        $propArgs = array(  
                            'post_type' => 'properties',
                            'post_status' => 'publish',
                            'posts_per_page' => 3, 
                        );
                        $loop = new WP_Query( $propArgs ); 
                        ?>

                        <?php if ( $loop -> have_posts() ) : while ( $loop ->have_posts() ) : $loop ->the_post(); ?>

                        <div class="d-flex mb-3 popular-posts-box">
                            <div class="detail align-self-center">
                                <h4>
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                </h4>
                                <div class="listing-post-meta">
                                    <?php the_time(get_option('date_format')); ?> | <a href="<?php the_permalink() ?>"><?php the_field('price'); ?> <?php the_field('currency'); ?></a>
                                </div>
                            </div>
                        </div>
                        <?php 
                            endwhile;
                            endif;
                        ?>
                    </div>
                    <!-- Popular posts end -->

                    <!-- Helping box Start -->
                    <div class="sidebar-widget helping-box clearfix">
                        <div class="main-title-4">
                            <h1>Свържете се с нас</h1>
                        </div>
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <h4>Адрес</h4>
                            <p>Пловдив, бул. „България“ 236</p>
                        </div>
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Телефон</h4>
                            <p><a href="tel:089 880 7434">089 880 7434</a> </p>
                        </div>
                    </div>
                    <!-- Helping box end -->
                </div>
                <!-- Sidebar end -->
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->

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
    }
}
?>

<?php
    get_footer();
?>