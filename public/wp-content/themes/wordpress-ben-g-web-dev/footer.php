<footer class="footer">
    <div class="footer__logo-box">
        <picture class="footer__logo">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/logo-2019-large-white.png 1x, <?php echo get_template_directory_uri(); ?>/assets/logo-2019-large-white.png 2x" media="(max-width: 37.5em)">
            <img srcset="<?php echo get_template_directory_uri(); ?>/assets/logo-2019-large-white.png 1x, <?php echo get_template_directory_uri(); ?>/assets/logo-2019-large-white.png 2x" alt="blahbalj" >
        </picture>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="#" class="footer__link">Home</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">About Us</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Contact</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright">
                    Website by <a href="#" class="footer__link">Ben Grzybowski</a> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex perferendis et blanditiis, ab obcaecati reiciendis in ipsam.
                </p>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/mtn-outline-white.png" style="width:100%"alt="">
</footer>
</main>
<?php wp_footer(); ?>
</body>
</html>