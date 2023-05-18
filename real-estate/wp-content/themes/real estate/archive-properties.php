<?php
    get_header();
?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Недвижими имоти</h1>
                <ul class="breadcrumbs">
                    <li><a href="<?php echo home_url(); ?>">Начало</a></li>
                    <li class="active">Недвижими имоти</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties section body start -->
<div class="properties-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="row">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property fp2">
                            <!-- Property img -->
                            <div class="property-img">  
                            <div class="property-tag button alt featured">
                            <?php
                            $terms = wp_get_object_terms($post->ID, 'property-types');
                            $termCount = sizeof ($terms);
                                                    
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
                                <div class="img-fluid">
                                    <?php 
                                        if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('prop-grid-size', array('class' => 'img-fluid'));
                                        } 
                                    ?>
                                </div>
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
                                            <i class="fa fa-map-marker"></i> <?php the_field('address'); ?>
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
            <div class="col-lg-4 col-md-12 col-xs-12">
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
<!-- Properties section body end -->

<?php
    get_footer();
?>