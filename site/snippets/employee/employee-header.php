<section class="employee-header">
    <div class="breadcrumbs">
        <?php $departmentId = strtolower(str_replace(" ", "", $page->department())); ?>

        <a class="breadcrumb" href="<?= $site->url() . "/#" . $departmentId ?>"><?= $page->department()->name() ?></a>
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <span class="breadcrumb active"><?= $page->name() ?></span>
    </div>

    <div class="employee-header__person flex">
        <div class="flex">
            <?php if ($profilePicture = $page->profilePicture()->toFile()) : ?>
                <img class="profile-picture" src="<?= $profilePicture->url() ?>" alt="<?= $profilePicture->alt() === "" ? $profilePicture->alt() : $page->name(); ?>" />
            <?php endif; ?>

            <div class="person">
                <h4><?= $page->name() ?></h4>
                <p class="function"><?= $page->jobTitle() ?></p>
            </div>
        </div>

        <div class="contact-tags tags flex">
            <a class="tag tag-l" href="tel:<?= $page->telNumber() ?>"><i class="fa fa-phone icon-big" aria-hidden="true"></i><?= $page->telNumber() ?></a>
            <a class="tag tag-l" href="mailto:<?= $page->email() ?>"><i class="fa fa-envelope icon-big" aria-hidden="true"></i><?= $page->email() ?></a>
        </div>
    </div>
</section>