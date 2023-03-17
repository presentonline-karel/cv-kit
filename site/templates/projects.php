<?php if (!$kirby->user()) go('/login') ?>



<?php snippet("general/header") ?>

<div id="container" class="container container-error">

    <?php snippet("nav/nav") ?>



    <div class="error-content">
        <?php if($page->defaultSmiley()->isNotEmpty()): ?>
            <div class="sad-face"><?= $page->defaultSmiley() ?></div>
        <?php endif; ?>

        <h1><?= $page->defaultTitle() ?></h1>
        <p><?= $page->defaultParagraph() ?></p>

        <?php if ($defaultButton = $page->defaultButton()->toStructure()) : ?>
            <?php foreach ($defaultButton as $button) : ?>
                <?php snippet("helpers/button", ["button" => $button]) ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php snippet("general/footer") ?>