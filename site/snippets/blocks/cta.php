<section class="cta fade-section fade-section">
    <div class="cta__content">
        <h2>
            <?= $site->ctaTitleDefault() ?><br>
            <span><?= $site->ctaTitleColor() ?></span>
        </h2>

        <?php if ($ctaButtons = $site->ctaButtons()->toStructure()) : ?>
            <div class="buttons">
                <?php foreach ($ctaButtons as $button) : ?>
                    <?php snippet("helpers/button", ["button" => $button]) ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>