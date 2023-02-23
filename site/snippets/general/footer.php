        <footer class="footer">
            <div class="footer__content">
                <div class="footer__content__brand flex">

                    <!-- Logo -->
                    <a class="logo-container" href="<?= $site->url() ?>" aria-label="Home">
                        <img class="logo" src="/assets/img/PO-flat-default.png" alt="Logo" />
                    </a>

                    <!-- Arrow up -->
                    <a class="arrow-up" href="#container">
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    </a>
                </div> 

                <p class="footer__content__signOff">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi.
                </p>

                <div class="socials">
                    <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>

            <p class="footer__copyright">©PresentOnline. All rights reserved.</p>
        </footer>

        <?= js("build/js/general/nav.js", ["defer" => true]) ?>
    </body>
</html>