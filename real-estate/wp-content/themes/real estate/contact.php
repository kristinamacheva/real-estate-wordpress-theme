<?php
/**
* Template Name: Contact Page
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

<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1><?php the_title(); ?></h1>
            <p><?php echo the_content(); ?></p>
        </div>
        <div class="bg-white">
            <div class="row g-0">
                <div class="col-lg-7 col-md-12 col-sm-12 col-pad2">
                    <!-- Contact form start -->
                    <div class="contact-form contact-pad">
                        <h3>Изпратете ни съобщение</h3>
                        <?php
                            echo do_shortcode('[contact-form-7 id="22" title="Форма за контакти 1"]');
                        ?>
                    </div>
                    <!-- Contact form end -->
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-pad2">
                    <!-- Contact details start -->
                    <div class="contact-details">
                        <h3>Бърза връзка с нас</h3>
                        <div class="ci-box d-flex">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="detail align-self-center">
                                <h4>Адрес</h4>
                                <p><?php the_field('address'); ?></p>
                            </div>
                        </div>
                        <div class="ci-box d-flex">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="detail align-self-center">
                                <h4>Телефон</h4>
                                <p><?php the_field('phone'); ?></p>
                            </div>
                        </div>
                        <div class="ci-box d-flex">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="detail align-self-center">
                                <h4>Имейл</h4>
                                <p><?php the_field('email'); ?></p>
                            </div>
                        </div>

                        <h3>Последвайте ни</h3>
                        <div class="social-media clearfix">
                            <div class="social-list">
                                <div class="icon facebook">
                                    <div class="tooltip">Facebook</div>
                                    <a href="<?php the_field('facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>                   
                                </div>
                                <div class="icon twitter">
                                    <div class="tooltip">Twitter</div>
                                    <a href="<?php the_field('twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>  
                                </div>
                                <div class="icon instagram">
                                    <div class="tooltip">Instagram</div>
                                    <a href="<?php the_field('instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>  
                                </div>
                                <div class="icon youtube mr-0">
                                    <div class="tooltip">Youtube</div>
                                    <a href="<?php the_field('youtube'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact details end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->

<!-- Google map start -->
<div class="section">
    <div class="map">
        <div id="map" class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4797.827682460793!2d24.713649706847182!3d42.15719308403119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acce20719cf3e1%3A0x614581f6f00d030d!2z0J_Qu9C-0LLQtNC40LLRgdC60Lgg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDigJ7Qn9Cw0LjRgdC40Lkg0KXQuNC70LXQvdC00LDRgNGB0LrQuOKAnCDigJMg0J3QvtCy0LAg0YHQs9GA0LDQtNCw!5e0!3m2!1sbg!2sbg!4v1668549186793!5m2!1sbg!2sbg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- Google map end -->

<?php
    get_footer();
?>