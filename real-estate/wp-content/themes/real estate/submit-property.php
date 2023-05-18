<?php
/**
* Template Name: Submit Property Page
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
<!-- Sub Banner end -->

<!-- Submit Property start -->
<div class="content-area-7 submit-property advanced-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="notification-box">
                    <h3>Нямате профил?</h3>
                    <p>Регистрирайте се! С този профил може да ползвате всички услуги на сайта.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="submit-address">
                    <?php
                            echo do_shortcode('[contact-form-7 id="67" title="Продай имот"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Submit Property end -->


<?php
    get_footer();
?>