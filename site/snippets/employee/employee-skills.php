<section class="skills-section section fade-section">
    <h3 class="section__title">
        <?php if ($kirby->language()->code() == "nl") {
            echo ("Vaardigheden");
        } elseif ($kirby->language()->code() == "en") {
            echo ("Skills");
        } elseif ($kirby->language()->code() == "fr") {
            echo ("Compétences");
        } ?>
    </h3>

    <?php if ($skills = $page->skills()->toStructure()) : ?>
        <div class="skills">

            <?php foreach ($skills as $skill) : ?>
                <div class="skill">
                    <div class="skill__content">
                        <div class="skill__content__title"><?= $skill->skill() ?></div>
                        <div class="skill__content__percentage"><?= $skill->skillPerc() ?>%</div>
                    </div>

                    <div class="skill__full-bar bar"></div>
                    <div class="skill__percentage-bar bar" style="width: <?= $skill->skillPerc() ?>%"></div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>