	<footer class="footer">
        <div class="footer__container container">
            <div class="footer__top-bar">
                <div class="footer__logo">
			        <?php the_custom_logo() ?>
                </div>
                <?php
			        wp_nav_menu(
				        array(
					        'theme_location' => 'footer',
					        'menu_id'        => 'footer',
                            'container'      => '',
                           'menu_class'     => 'footer__menu'
				        )
			        );
			    ?>
            </div>
            <div class="footer__content">
                <h2 class="footer__content-title">
                    Subscribe to our news letter to get latest updates and news
                </h2>
                <form class="footer__content-form" action="">
                    <label class="footer__content-form-label" for=footer__content-form-input">
                        <input class="footer__content-form-input" type="text" placeholder="Enter Your Email">
                    </label>
                    <button class="footer__content-form-btn" type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
            <div class="footer__bottom-bar">

                    <div class="footer__contacts">
                        <div class="footer__address">
                        <span class="footer__address-link" href="#">
                            Finstreet 118 2561 Fintown
                        </span>
                        </div>
                        <div class="footer__mail-and-tel">
                            <a class="footer__mail-link" href="mailto:hello@finsweet.com  ">
                                Hello@finsweet.com
                            </a>
                            <a class="footer__tel-link" href="tel:02079932905">
                                020 7993 2905
                            </a>
                        </div>
                    </div>
                    <ul class="footer__social-links">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>

            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
