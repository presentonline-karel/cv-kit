<section class="employee-languages section fade-section">
    <h3 class="section__title">
        <?php if ($kirby->language()->code() == "nl") {
            echo ("Talen");
        } elseif ($kirby->language()->code() == "en") {
            echo ("Languages");
        } elseif ($kirby->language()->code() == "fr") {
            echo ("Langues");
        } ?>
    </h3>

    <?php if ($languages = $page->languages()->toStructure()) : ?>
        <div class="languages">

            <?php foreach ($languages as $language) : ?>
                <div class="prog-bar-wrapper progress-<?= $language->langPerc() ?>">
                    <span class="prog-bar__content">
                        <span class="lang-code"><?= $language->langCode() ?></span>
                        <span class="percentage"><span class="language-percentage-number"><?= $language->langPerc() ?></span>%</span>
                    </span>

                    <div class="prog-bar">
                        <div class="left-side half-circle"></div>
                        <div class="right-side half-circle"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>