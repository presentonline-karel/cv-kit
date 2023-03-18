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

    <!-- Burger -->
    <?php snippet("nav/_burger") ?>
</div>