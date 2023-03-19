<?php if (!$kirby->user()) go('/login') ?>



<?php snippet("general/header") ?>

<!-- Container Home -->
<div id="container" class="container container-home container-project">

    <!-- Nav -->
    <?php snippet("nav/nav") ?>



    <main>

        <?php $employees = $page->assignedEmployees()->toPages(); ?>
        <?php $departments = []; ?>

        <?php foreach ($employees as $employee) {
            if (!in_array($employee->department()->toString(), $departments)) {
                array_push($departments, $employee->department()->toString());
            }
        } ?>



        <!-- Filter section -->
        <section class="filter-section">
            <h1><?= t("selectedEmployees") ?></h1>

            <div class="employees-filter">
                <form class="filter-form">
                    <input class="filter-form__input input-filter" type="text" placeholder="<?= t("searchOnEmployeesName") ?>" />
                </form>

                <div class="filter-tags flex">
                    <p><?= t("jobTitleHandle") ?></p>

                    <?php if ($functions = $site->departmentOptions()->toStructure()) : ?>
                        <div class="tags">

                            <?php foreach ($departments as $department) : ?>
                                <button class="tag tag-m filter-tag"><?= $department ?></button>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <p class="filter-results-title">3 results for "<span class="search-term">Employee Name</span>"</p>
        </section>



        <!-- Teams section -->
        <?php if (count($departments) > 0) : ?>
            <section class="teams-section">

                <!-- Searchable employees -->
                <div id="allEmployees" class="team section fade-section filter-results">
                    <h4 class="section__title"><?= t("results") ?></h4>

                    <div class="employees">

                        <?php foreach ($employees as $employee) : ?>
                            <a class="employee employee-search-results" href="<?= $employee->url() ?>">
                                <div class="employee-container">
                                    <div class="employee-picture-container">

                                        <?php if ($profilePicture = $employee->profilePicture()->toFile()) : ?>
                                            <img class="employee-picture" src="<?= $profilePicture->url() ?>" alt="<?= $profilePicture->alt() === "" ? $profilePicture->alt() : $employee->name(); ?>" />
                                        <?php else : ?>
                                            <img class="employee-picture" src="../../assets/img/employee-default-profilePicture.svg" alt="<?= $employee->name() ?>" />
                                        <?php endif; ?>
                                    </div>

                                    <div class="content">
                                        <h5 class="employee-name"><?= $employee->name() ?></h5>
                                        <p class="function"><?= $employee->jobTitle() ?></p>
                                        <p class="department"><?= $employee->department() ?></p>

                                        <button class="button button-tertiary button-desktop">
                                            <?= t("read") ?>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>

                                <button class="button button-tertiary button-mobile"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>



                <!-- Employees in teams -->
                <?php foreach ($departments as $department) : ?>
                    <?php $departmentId = strtolower(str_replace(" ", "", $department)); ?>

                    <div id="<?= $departmentId ?>" class="team section fade-section">
                        <h4 class="section__title"><?= $department ?></h4>

                        <div class="employees">
                            <?php foreach ($employees as $employee) {
                                if ($employee->department()->toString() === $department) : ?>
                                    <a class="employee" href="<?= $employee->url() ?>">
                                        <div class="employee-container">
                                            <div class="employee-picture-container">
                                                <?php if ($profilePicture = $employee->profilePicture()->toFile()) : ?>
                                                    <img class="employee-picture" src="<?= $profilePicture->url() ?>" alt="<?= $profilePicture->alt() === "" ? $profilePicture->alt() : $employee->name(); ?>" />
                                                <?php else : ?>
                                                    <img class="employee-picture" src="../../assets/img/employee-default-profilePicture.svg" alt="<?= $employee->name() ?>" />
                                                <?php endif; ?>
                                            </div>

                                            <div class="content">
                                                <h5 class="employee-name"><?= $employee->name() ?></h5>
                                                <p class="function"><?= $employee->jobTitle() ?></p>

                                                <button class="button button-tertiary button-desktop">
                                                    <?= t("read") ?>
                                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <button class="button button-tertiary button-mobile"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                    </a>
                            <?php endif;
                            } ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>



        <!-- CTA -->
        <?php if ($site->ctaDisplayToggle()->toBool() === true) : ?>
            <?php snippet("blocks/cta") ?>
        <?php endif; ?>
    </main>
</div>



<?= js("build/js/util/filter-employees-function.js", ["defer" => true]) ?>
<?= js("build/js/util/filter-employees-name.js", ["defer" => true]) ?>
<?= js("build/js/util/current-page-is-project.js", ["defer" => true]) ?>

<?php snippet("general/footer") ?>