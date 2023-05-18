<?php
    get_header();
?>

<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();?>

<!-- Sub banner start -->
<div class="sub-banner">
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
<!-- Sub Banner end -->

<!-- Blog body start -->
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <!-- Blog box start -->
                <div class="blog-box clearfix">
                    <?php 
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            $image_id = get_post_thumbnail_id(); 
							$image_attributes = wp_get_attachment_image_src( $image_id, 'full');  
					?>
							<img src="<?php echo $image_attributes[0]; ?>" width="100%">
					<?php 
                        } 
                    ?>
                    <!-- detail -->
                    <div class="detail">
                        <!--Main title -->
                        <h3 class="title">
                            <a href="#"><?php the_title(); ?></a>
                        </h3>
                        <!-- Post meta -->
                        <div class="post-meta">
                            <span><a href="#"><i class="fa fa-user"></i><?php the_author(); ?></a></span>
                            <span><a><i class="fa fa-calendar "></i><?php the_date(); ?></a></span>
                            <span><a href="<?php echo home_url(); ?>"><i class="fa fa-bars"></i> KEY SPOT</a></span>
                        </div>
                        <!-- paragraph -->
                        <?php the_content(); ?>
                        <?php  
                        	if (get_field('blockquote')) {?>
                        	<blockquote class="mb-30">
                            	<?php the_field('blockquote'); ?>
                       	 	</blockquote>
                        <?php 
                        	}
                        ?>
                        <?php  
                        	if (get_field('sub-heading-two')) {?>
                        	<h3><?php the_field('sub-heading-two'); ?></h3>
                        <?php 
                        	}
                        ?>
                        <?php  
                        	if (get_field('para-two')) {?>
                        	<p>
                            	<?php the_field('para-two'); ?>
                       	 	</p>
                        <?php 
                        	}
                        ?>

                        <div class="row clearfix t-s">
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <!-- Tags box start -->
                                <div class="tags-box">
                                    <h2>Категории</h2>
                                    <ul class="tags">
                                    <?php
                                    $terms = wp_get_object_terms($post->ID, 'blog-post-types');
                                    if(!empty($terms)){
                                        if(!is_wp_error( $terms )){
                                            foreach ($terms as $term):?>
                                                <li><a href="<?php echo get_category_link($term -> term_id)?>"><?php echo $term -> name?></a></li>
                                            <?php endforeach;   
                                        }
                                    }
                                    ?> 
                                    </ul>
                                </div>
                                <!-- Tags box end -->
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <!-- Blog Share start -->
                                <div class="social-media-area clearfix blog-share">
                                    <h2>Споделете</h2>
                                    <!-- Social list -->
                                    <div class="social-media clearfix">
                                        <div class="social-list">
                                            <div class="icon facebook">
                                                <div class="tooltip">Facebook</div>
                                                <span><i class="fa fa-facebook"></i></span>
                                            </div>
                                            <div class="icon twitter">
                                                <div class="tooltip">Twitter</div>
                                                <span><i class="fa fa-twitter"></i></span>
                                            </div>
                                            <div class="icon instagram">
                                                <div class="tooltip">Instagram</div>
                                                <span><i class="fa fa-instagram"></i></span>
                                            </div>
                                            <div class="icon youtube mr-0">
                                                <div class="tooltip">Youtube</div>
                                                <span><i class="fa fa-youtube"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Share end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog box end -->
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
    }
}
?>

<?php
    get_footer();
?>