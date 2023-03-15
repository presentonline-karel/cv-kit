<nav class="nav">
    <div class="logo-lang-container">

        <!-- Logo -->
        <?php if($logo = $site->logo()->toFile()): ?>
            <a class="logo-container" href="<?= $site->url() ?>" aria-label="Home">
                <img class="logo" src="<?= $logo->url() ?>" alt="<?= $logo->alt() === "" ? $logo->alt() : $logo->name(); ?>" />
            </a>
        <?php endif; ?>

        <!-- Languages -->
        <div class="languages-container">
            <button class="language-active">
                <span class="language-active__code"><?= $kirby->language()->code() ?></span><i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>

            <?php snippet("general/languages") ?>
        </div>

        <!-- Burger -->
        <?php snippet("nav/burger") ?>
    </div>



    <!-- Sliding nav -->
    <div class="nav-links">
        <div>

            <!-- Company -->
            <div class="company">
                <a class="button button-tertiary clickable-nav-item" href="<?= $site->url() ?>/#allEmployees">
                    <h4><?= t("allEmployees") ?></h4>
                    
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>

                <?php if($departments = $site->departments()->toStructure()): ?>
                    <div class="company__teams flex-column">

                        <?php foreach($departments as $department): ?>
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

                                <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                <i class="fa fa-chevron-right desktop" aria-hidden="true"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>



            <!-- Contact -->
            <div class="company__contact">

                <!-- Links -->
                <?php snippet("nav/contact-links") ?>

                <!-- Socials -->
                <?php if($socials = $site->socials()->toStructure()): ?>
                    <?php snippet("general/socials", ["socials" => $socials]) ?>
                <?php endif; ?>
            </div>
        </div>



        <!-- Copyright -->
        <?php if($companyInfo = $site->contactInfo()->toObject()): ?>
            <p class="copyright p">© <?= $companyInfo->name() ?> <?php echo date("Y"); ?></p>
        <?php endif; ?>
    </div>
</nav>