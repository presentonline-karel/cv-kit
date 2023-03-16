<?php snippet("general/header") ?>



<!-- Container Login -->
<div id="container" class="container container-login">

    <!-- Content -->
    <div class="content">

        <!-- Nav -->
        <nav class="nav">
            <div class="logo-lang-container">

                <!-- Logo -->
                <?php if ($logo = $site->logo()->toFile()) : ?>
                    <a class="logo-container" href="<?= $site->url() ?>" aria-label="Home">
                        <img class="logo" src="<?= $logo->url() ?>" alt="<?= $logo->alt() === "" ? $logo->alt() : $logo->name(); ?>" />
                    </a>
                <?php endif; ?>

                <!-- Languages -->
                <div class="languages-container">
                    <button class="language-active">
                        <span class="language-active__code"><?= $kirby->language()->code() ?></span><i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </button>

                    <?php snippet("general/languages") ?>
                </div>
            </div>
        </nav>



        <!-- Error -->
        <?php if ($error) : ?>
            <div class="alert">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <h5><?= $page->alert()->html() ?></h5>
            </div>
        <?php endif ?>



        <!-- Header -->
        <div class="content__body">
            <div class="header">
                <h1><?= $page->pageTitle() ?></h1>
                <p><?= $page->message() ?></p>
            </div>

            <form method="POST" action="<?= $page->url() ?>">
                <div>
                    <label for="email"><?= $page->emailLabel() ?></label>
                    <input type="email" id="email" name="email" value="<?= get('email') ? esc(get('email'), 'attr') : '' ?>" placeholder="<?= $page->emailPlaceholder() ?>">
                </div>
                <div>
                    <label for="password"><?= $page->passwordLabel() ?></label>
                    <input type="password" id="password" name="password" value="<?= get('password') ? esc(get('password'), 'attr') : '' ?>" placeholder="<?= $page->passwordPlaceholder() ?>">
                </div>

                <button class="button button-primary" type="submit" name="login" value="Login">
                    <span>
                        <?= $page->submitButtonText() ?>

                        <?php if ($page->submitButtonIcon() == "chevronRight") { ?>
                            <i class="fa fa-chevron-right"></i>
                        <?php } elseif ($page->submitButtonIcon() == "arrowRight") { ?>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <?php } ?>
                    </span>
                </button>
            </form>

            <div class="access-cta">
                <?php $button = $page->accesLink()->toStructure()->first(); ?>

                <p>
                    <?= $page->accessText() ?> | 

                    <a 
                        href="<?php if ($button->destination() == "internal") {
                            echo ($button->internalPage()->toPage()->url() . $button->idPage());
                        } elseif ($button->destination() == "external") {
                            echo ($button->externalUrl());
                        } elseif ($button->destination() == "call") {
                            echo ("tel:" . $site->telephone());
                        } elseif ($button->destination() == "email") {
                            echo ("mailto:" . $site->email());
                        } ?>"

                        <?php if ($button->destination() == "external") {
                            ?> target="_blank" <?php
                        } ?>
                    >
                        <?= $button->anchor() ?>
                    </a>
                </p>
            </div>
        </div>



        <!-- Copyright -->
        <?php if ($companyInfo = $site->contactInfo()->toObject()) : ?>
            <p class="copyright p">© <?= $companyInfo->name() ?> <?php echo date("Y"); ?></p>
        <?php endif; ?>
    </div>


    <!-- Image -->
    <div class="image-container noselect" <?php if($page->typeOfImage() == "custom") { ?> style="background-image: url('<?= $page->customImage()->toFile()->url()?>')" <?php } ?>>
        <?php if($page->typeOfImage() != "custom"): ?>
            <img src="../../assets/img/Login-Default-Mockup.png" alt="Default mockup Upthrust CV Kit" />
        <?php endif; ?>
    </div>
</div>



<?= js("build/js/general/language-dropdown.js", ["defer" => true]) ?>
</body>
</html>