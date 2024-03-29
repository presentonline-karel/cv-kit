<section class="employee-header fade-section">
    <div class="breadcrumbs breadcrumbs-home">
        <?php $departmentId = strtolower(str_replace(" ", "", $page->department())); ?>

        <a class="breadcrumb" href="<?= $site->url() . "/#" . $departmentId ?>"><?= $page->department()->name() ?></a>
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <span class="breadcrumb active"><?= $page->name() ?></span>
    </div>

    <div class="breadcrumbs breadcrumbs-project">
        <?php $departmentId = strtolower(str_replace(" ", "", $page->department())); ?>

        <a class="breadcrumb" href="<?= $_SERVER['HTTP_REFERER'] . "/#" . $departmentId ?>"><?= $page->department()->name() ?></a>
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <span class="breadcrumb active"><?= $page->name() ?></span>
    </div>

    <div class="employee-header__person flex">
        <div class="flex">
            <?php if ($profilePicture = $page->profilePicture()->toFile()) : ?>
                <img class="profile-picture" src="<?= $profilePicture->url() ?>" alt="<?= $profilePicture->alt() === "" ? $profilePicture->alt() : $page->name(); ?>" />
            <?php else : ?>
                <img class="profile-picture" src="../../assets/img/employee-default-profilePicture.svg" alt="<?= $page->name() ?>" />
            <?php endif; ?>

            <div class="person">
                <h4><?= $page->name() ?></h4>
                <p class="function"><?= $page->jobTitle() ?></p>
            </div>
        </div>

        <div class="contact-tags tags flex">
            <a class="tag tag-l" href="tel:<?= $page->telNumber() ?>">
                <?php snippet("helpers/icon-builder", ["icon" => "phone"]) ?>
                <?= $page->telNumber() ?>
            </a>
            <a class="tag tag-l" href="mailto:<?= $page->email() ?>">
                <?php snippet("helpers/icon-builder", ["icon" => "envelope"]) ?>
                <?= $page->email() ?>
            </a>
        </div>
    </div>
</section>