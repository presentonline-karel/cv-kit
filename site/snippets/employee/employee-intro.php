<section class="employee-introduction">
    <h3><?= $page->introTitle() ?></h3>
    <p class="intro"><?= $page->intro() ?></p>

    <!-- Socials -->
    <?php snippet("general/socials", ["socials" => $page->socials()->toStructure()]) ?>

    <div class="contact-info">
        <a class="contact-info__item" href="tel:<?= $page->telNumber() ?>"><i class="fa fa-phone" aria-hidden="true"></i><?= $page->telNumber() ?></a>
        <a class="contact-info__item" href="mailto:<?= $page->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?= $page->email() ?></a>
    </div>

    <?php if ($stats = $page->stats()->toStructure()) : ?>
        <div class="stats">

            <?php foreach ($stats as $stat) : ?>
                <div class="stat">
                    <div class="number-container"><span class="number"><?= $stat->number() ?>+</span></div>
                    <div class="number-label"><?= $stat->numberLabel() ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>