<div class="company">
    <a class="button button-tertiary clickable-nav-item" href="<?= $site->url() ?>/#allEmployees">
        <h4><?= t("allEmployees") ?></h4>

        <i class="fa fa-arrow-right" aria-hidden="true"></i>
    </a>

    <?php if ($departments = $site->departments()->toStructure()) : ?>
        <div class="company__teams flex-column">

            <?php foreach ($departments as $department) : ?>
                <?php $departmentId = strtolower(str_replace(" ", "", $department->name())); ?>

                <a class="nav-team clickable-nav-item" href="/#<?= $departmentId ?>">
                    <div class="nav-team-container">
                        <div class="icon-container">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>

                        <div class="content">
                            <h5><?= $department->name() ?></h5>

                            <div class="tags">
                                <div class="tag tag-s">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <?= count($department->employees()->toPages()); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="button button-tertiary"><?= t("read") ?><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    <i class="fa fa-chevron-right desktop" aria-hidden="true"></i>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>