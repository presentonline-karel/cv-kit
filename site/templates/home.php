<?php if (!$kirby->user()) go('/login') ?>



<?php snippet("general/header") ?>

<!-- Container Home -->
<div id="container" class="container container-home">

    <!-- Nav -->
    <?php snippet("general/nav") ?>



    <main>

        <!-- Filter section -->
        <section class="filter-section">
            <h1>
                <?php if ($kirby->language()->code() == "nl") {
                    echo ("Alle werknemers");
                } elseif ($kirby->language()->code() == "en") {
                    echo ("All employees");
                } elseif ($kirby->language()->code() == "fr") {
                    echo ("Tous les employés");
                } ?>
            </h1>

            <div class="employees-filter">
                <form class="filter-form">
                    <input class="filter-form__input input-filter" type="text" placeholder="Search on employees name" />
                </form>

                <div class="filter-tags flex">
                    <p>
                        <?php if ($kirby->language()->code() == "nl") {
                            echo ("of functietitel");
                        } elseif ($kirby->language()->code() == "en") {
                            echo ("or job title");
                        } elseif ($kirby->language()->code() == "fr") {
                            echo ("ou titre de l'emploi");
                        } ?>
                    </p>

                    <div class="tags">
                        <button class="tag tag-m filter-tag">Frontend Developer</button>
                        <button class="tag tag-m filter-tag">Project Manager</button>
                        <button class="tag tag-m filter-tag">ux/ui designer</button>
                        <button class="tag tag-m filter-tag">Function</button>
                    </div>
                </div>
            </div>

            <p class="filter-results-title">3 results for "<span class="search-term">Cedric Lenders</span>"</p>
        </section>



        <!-- Teams section -->
        <?php if ($departments = $site->departments()->toStructure()) : ?>
            <section class="teams-section">

                <!-- Searchable employees -->
                <div id="allEmployees" class="team section fade-section filter-results">
                    <h4 class="section__title">
                        <?php if ($kirby->language()->code() == "nl") {
                            echo ("Resultaten");
                        } elseif ($kirby->language()->code() == "en") {
                            echo ("Results");
                        } elseif ($kirby->language()->code() == "fr") {
                            echo ("Résultats");
                        } ?>
                    </h4>

                    <?php if($publishedEmployees = $site->employeesPublished()->toPages()): ?>
                        <div class="employees">

                            <?php foreach ($publishedEmployees as $employee) : ?>
                                <a class="employee" href="<?= $employee->url() ?>">
                                    <div class="employee-container">
                                        <div class="employee-picture-container">

                                            <?php if ($profilePicture = $employee->profilePicture()->toFile()) : ?>
                                                <img class="employee-picture" src="<?= $profilePicture->url() ?>" alt="<?= $profilePicture->alt() === "" ? $profilePicture->alt() : $employee->name(); ?>" />
                                            <?php else : ?>
                                                <img class="employee-picture" src="../../assets/img/employee-picture-placeholder.jpg" alt="<?= $employee->name() ?>" />
                                            <?php endif; ?>
                                        </div>

                                        <div class="content">
                                            <h5 class="employee-name"><?= $employee->name() ?></h5>
                                            <p class="function"><?= $employee->jobTitle() ?></p>

                                            <button class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <button class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>



                <!-- Employees in teams -->
                <?php foreach ($departments as $department) : ?>
                    <div id="management" class="team section fade-section">
                        <h4 class="section__title"><?= $department->name() ?></h4>

                        <?php if ($employees = $department->employees()->toPages()) : ?>
                            <div class="employees">

                                <?php foreach ($employees as $employee) : ?>
                                    <a class="employee" href="<?= $employee->url() ?>">
                                        <div class="employee-container">
                                            <div class="employee-picture-container">
                                                <?php if ($profilePicture = $employee->profilePicture()->toFile()) : ?>
                                                    <img class="employee-picture" src="<?= $profilePicture->url() ?>" alt="<?= $profilePicture->alt() === "" ? $profilePicture->alt() : $employee->name(); ?>" />
                                                <?php else : ?>
                                                    <img class="employee-picture" src="../../assets/img/employee-picture-placeholder.jpg" alt="<?= $employee->name() ?>" />
                                                <?php endif; ?>
                                            </div>

                                            <div class="content">
                                                <h5 class="employee-name"><?= $employee->name() ?></h5>
                                                <p class="function"><?= $employee->jobTitle() ?></p>

                                                <button class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                            </div>
                                        </div>

                                        <button class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
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

<?php snippet("general/footer") ?>