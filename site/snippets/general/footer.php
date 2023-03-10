        <footer class="footer fade-section">
            <div class="footer__content">
                <div class="footer__content__brand flex">

                    <!-- Logo -->
                    <?php if($logo = $site->logo()->toFile()): ?>
                        <a class="logo-container" href="<?= $site->url() ?>" aria-label="Home">
                            <img class="logo" src="<?= $logo->url() ?>" alt="<?= $logo->alt() === "" ? $logo->alt() : $logo->name(); ?>" />
                        </a>
                    <?php endif; ?>

                    <!-- Arrow up -->
                    <a class="arrow-up" href="#container">
                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    </a>
                </div> 

                <p class="footer__content__signOff"><?= $site->companyDescription() ?></p>

                <!-- Socials -->
                <?php snippet("general/socials") ?>
            </div>

            <!-- Copyright -->
            <?php if($companyInfo = $site->contactInfo()->toObject()): ?>
                <p class="footer__copyright">© <?= $companyInfo->name() ?> <?php echo date("Y"); ?></p>
            <?php endif; ?>
        </footer>

        <?= js("build/js/general/nav.js", ["defer" => true]) ?>
        <?= js("build/js/general/section-fade.js", ["defer" => true]) ?>
        <?= js("build/js/general/language-dropdown.js", ["defer" => true]) ?>
    </body>
</html>