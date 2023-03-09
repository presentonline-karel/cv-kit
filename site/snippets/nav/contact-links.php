<?php if ($companyInfo = $site->contactInfo()->toObject()) : ?>
    <h4>
        <?php if ($kirby->language()->code() == "nl") {
            echo ("Contacteer");
        } elseif ($kirby->language()->code() == "en") {
            echo ("Contact");
        } elseif ($kirby->language()->code() == "fr") {
            echo ("Contact");
        } ?>

        <?= $companyInfo->name() ?>
    </h4>

    <!-- Mobile -->
    <div class="buttons mobile">

        <!-- tel -->
        <a class="button button-secundary callButton" href="tel:<?= $companyInfo->phoneNumber() ?>">
            <span>
                <i class="fa fa-phone icon-big" aria-hidden="true"></i>

                <?php if ($kirby->language()->code() == "nl") {
                    echo ("Bellen");
                } elseif ($kirby->language()->code() == "en") {
                    echo ("Call");
                } elseif ($kirby->language()->code() == "fr") {
                    echo ("Appeler");
                } ?>
            </span>

            <i class="icon-hover fa fa-arrow-right" aria-hidden="true"></i>
        </a>

        <!-- mail -->
        <a class="button button-secundary emailButton" href="mailto:<?= $companyInfo->email() ?>">
            <span>
                <i class="fa fa-envelope icon-big" aria-hidden="true"></i> Email
            </span>

            <i class="icon-hover fa fa-arrow-right" aria-hidden="true"></i>
        </a>

        <!-- website -->
        <a class="button button-secundary websiteButton" href="<?= $companyInfo->website() ?>" target="_blank">
            <span>
                <i class="fa fa-globe icon-big" aria-hidden="true"></i>
                <?= trim($companyInfo->website(), "https://") ?>
            </span>

            <i class="icon-hover fa fa-arrow-right" aria-hidden="true"></i>
        </a>
    </div>

    <!-- Desktop -->
    <div class="links desktop">
        <a class="link__call link" href="tel:<?= $companyInfo->phoneNumber() ?>"><i class="fa fa-phone icon-big" aria-hidden="true"></i><?= $companyInfo->phoneNumber() ?></a>
        <a class="link__email link" href="mailto:<?= $companyInfo->email() ?>"><i class="fa fa-envelope icon-big" aria-hidden="true"></i><?= $companyInfo->email() ?></a>
        <a class="link__email link" href="<?= $companyInfo->website() ?>" target="_blank"><i class="fa fa-globe icon-big" aria-hidden="true"></i><?= trim($companyInfo->website(), "https://") ?></a>
    </div>
<?php endif; ?>