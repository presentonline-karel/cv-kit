<section class="cta fade-section fade-section">
    <div class="cta__content">
        <h2>
            <?= $site->ctaTitleDefault() ?><br>
            <span><?= $site->ctaTitleColor() ?></span>
        </h2>

        <div class="buttons">
            <a class="button button-primary" href="tel:<?= $site->contactInfo()->toObject()->phoneNumber() ?>">
                <span>
                    <i class="icon-big fa fa-phone" aria-hidden="true"></i>
                    
                    <?php if ($kirby->language()->code() == "nl") {
                        echo ("Bellen");
                    } elseif ($kirby->language()->code() == "en") {
                        echo ("Call");
                    } elseif ($kirby->language()->code() == "fr") {
                        echo ("Appeler");
                    } ?>
                </span>
            </a>

            <a class="button button-primary" href="mailto:<?= $site->contactInfo()->toObject()->email() ?>">
                <span>
                    <i class="icon-big fa fa-envelope" aria-hidden="true"></i>

                    Email
                </span>
            </a>
        </div>
    </div>
</section>