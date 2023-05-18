<!-- Footer start -->
<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer info-->
        <div class="footer-info">
            <div class="row">
                <!-- About us -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-item fi2">
                        <div class="main-title-4">
                            <h1>Свържете се с нас</h1>
                        </div>
                        <ul class="personal-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Адрес: град Пловдив, бул. „България“ 236
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                Имейл: <a href="mailto:info@keyspot.com">info@keyspot.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                Телефон: <a href="tel:089 880 7434">089 880 7434</a>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                Телефон: 032 55 22 44
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Links -->
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-4">
                            <h1>Бързи връзки</h1>
                        </div>
                        <ul class="links">
                            <li>
                                <a href="<?php echo home_url(); ?>">Начало</a>
                            </li>
                            <li>
                                <a href="http://localhost/real-estate/za-nas/">За нас</a>
                            </li>
                            <li>
                                <a href="http://localhost/real-estate/properties/">Недвижими имоти</a>
                            </li>
                            <li>
                                <a href="http://localhost/real-estate/kontakti/">Контакти</a>
                            </li>
                            <li>
                                <a href="http://localhost/real-estate/blog/">Блог</a>
                            </li>                           
                        </ul>
                    </div>
                </div>
                <!-- Links -->
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-4">
                            <h1>Видове имоти</h1>
                        </div>
                        <ul class="links">
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
                </div>
                <!-- Subscribe -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-4">
                            <h1>Бюлетин</h1>
                        </div>
                        <div class="newsletter clearfix">
                            <p>Абонирайте се, за да се присъедините към нашата общност.</p>
                            <form class="form-inline d-flex" action="#">
                                <input class="form-control" type="email" id="email" placeholder="Имейл...">
                                <button class="btn button-theme" type="submit"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <p>&copy;  2022 <a href="http://themevessel.com/" target="_blank">Theme Vessel</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="social-list clearfix">
                        <li>
                            <a href="#" class="facebook-bg">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter-bg">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="linkedin-bg">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="google-bg">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="rss-bg">
                                <i class="fa fa-rss"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row modal-raw g-0">
                    <div class="col-lg-5 modal-left">
                        <div class="modal-left-content">
                            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe w-100" src="https://www.youtube.com/embed/V7IrnC9MISU" allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/img-1.jpg" alt="model-photo" class="w-100 img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/img-2.jpg" alt="model-photo" class="w-100 img-fluid">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 modal-right">
                        <div class="modal-right-content bg-white">
                            <div class="heading comon-section">
                                <h2>Find Your Dream House</h2>
                                <p class="location">123 Kathal St. Tampa City,</p>
                            </div>
                            <div class="features comon-section">
                                <strong class="price">
                                    $178,000
                                </strong>
                                <section>
                                    <h3>Features</h3>
                                </section>
                                <ul class="bullets">
                                    <li><i class="flaticon-air-conditioner"></i>Air conditioning</li>
                                    <li><i class="flaticon-wifi"></i>Wifi</li>
                                    <li><i class="flaticon-transport"></i>Parking</li>
                                    <li><i class="flaticon-people-2"></i>Pool</li>
                                    <li><i class="flaticon-weightlifting"></i>Gym</li>
                                    <li><i class="flaticon-building"></i>Alarm</li>
                                    <li><i class="flaticon-old-telephone-ringing"></i>Balcony</li>
                                    <li><i class="flaticon-monitor"></i>TV</li>
                                </ul>
                            </div>
                            <div class="0verview comon-section cs-none">
                                <section>
                                    <h3>Overview</h3>
                                </section>
                                <dl>
                                    <dt>Model</dt>
                                    <dd>Maxima</dd>
                                    <dt>Condition</dt>
                                    <dd>Brand New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                                <a href="properties-details.html" class="btn button-sm button-theme">Show Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-submenu.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/rangeslider.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mb.YTPlayer.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-select.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollUp.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/leaflet.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/leaflet-providers.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/leaflet.markercluster.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/dropzone.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.filterizr.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/maps.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/sidebar.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php bloginfo('template_directory'); ?>/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="<?php bloginfo('template_directory'); ?>/js/ie10-viewport-bug-workaround.js"></script>
<?php wp_footer(); ?>
</body>
</html>