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
        <!-- Sub Banner end -->
        <div class="article-post">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </div>
        
<?php
    }
}
?>

<?php
    get_footer();
?>