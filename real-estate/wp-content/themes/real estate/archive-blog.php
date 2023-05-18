<?php
    get_header();
?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Блог</h1>
            <ul class="breadcrumbs">
                <li><a href="<?php echo home_url(); ?>">Начало</a></li>
                <li class="active">Блог</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Blog body start -->
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <!-- Blog 1 start -->
                <div class="blog-1">
                    <div class="blog-inner">
                        <div class="blog-overflow">
                            <div class="blog-photo">
                                <?php 
                                    if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('prop-grid-size', array('class' => 'img-fluid w-100'));
                                    } 
                                ?>
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                            </h3>
                            <ul class="post-meta clearfix">
                                <li>
                                    <i class="fa fa-user-o"></i> <?php the_author(); ?>
                                </li>
                                <li>
                                    <i class="fa fa-calendar-check-o"></i> <?php the_time(get_option('date_format')); ?>
                                </li>
                            </ul>
                            <p><?php the_field('summary'); ?></p>
                        </div>
                    </div>
                </div>
                <!-- Blog 1 end -->
            <?php 
                endwhile;
                endif;
            ?>
            
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="sidebar">
                    <!-- Search box start-->
                    <div class="sidebar-widget search-box">
                        <?php if(!dynamic_sidebar('right-sidebar')): ?>
                        <?php endif;?>
                    </div>
                    <!-- Search box end-->

                    <!-- Category posts start -->
                    <div class="sidebar-widget category-posts">
                        <div class="main-title-4">
                            <h1>Популярни категории</h1>
                        </div>
                        <ul class="list-unstyled list-cat">
                        <?php
                        $blogTerms = get_terms('blog-post-types');
                        if(!empty($blogTerms)){
                            if(!is_wp_error( $blogTerms )){
                                foreach ($blogTerms as $blogTerm):?>
                                    <li><a href="<?php echo get_category_link($blogTerm -> term_id)?>"><?php echo $blogTerm -> name?></a></li>
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
            </div>
        </div>
    </div>
</div>
<!-- Blog body end -->

<?php
    get_footer();
?>