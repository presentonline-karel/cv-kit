<?php $relatedEmployees = $page->siblings()->filterBy("department", $page->department())->not($page); ?>

<?php if (count($relatedEmployees) > 0) : ?>
    <section class="discover-more-section section fade-section">
        <h3 class="section__title">
            <?php if ($kirby->language()->code() == "nl") {
                echo ("Ontdek meer werknemers");
            } elseif ($kirby->language()->code() == "en") {
                echo ("Discover more employees");
            } elseif ($kirby->language()->code() == "fr") {
                echo ("Découvrir plus d'employés");
            } ?>
        </h3>

        <div class="more-team-members">
            <?php foreach ($relatedEmployees as $employee) : ?>
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

                            <button class="button button-tertiary button-desktop">
                                <?php if ($kirby->language()->code() == "nl") {
                                    echo ("Lees");
                                } elseif ($kirby->language()->code() == "en") {
                                    echo ("Read");
                                } elseif ($kirby->language()->code() == "fr") {
                                    echo ("Lire");
                                } ?>

                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                    <button class="button button-tertiary button-mobile"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>