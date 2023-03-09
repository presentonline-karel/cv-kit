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
                <a class="button button-tertiary clickable-nav-item" href="#allEmployees">
                    <h4>
                        <?php if ($kirby->language()->code() == "nl") {
                            echo ("Alle werknemers");
                        } elseif ($kirby->language()->code() == "en") {
                            echo ("All employees");
                        } elseif ($kirby->language()->code() == "fr") {
                            echo ("Tous les employés");
                        } ?>
                    </h4>
                    
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>

                <div class="company__teams flex-column">
                    <a class="nav-team clickable-nav-item" href="#management">
                        <div class="nav-team-container">
                            <div class="icon-container">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>

                            <div class="content">
                                <h5>Management</h5>

                                <div class="tags">
                                    <div class="tag tag-s"><i class="fa fa-user" aria-hidden="true"></i>4</div>
                                    <!-- <div class="tag tag-s"><i class="fa fa-eur" aria-hidden="true"></i>4.000</div> -->
                                </div>
                            </div>
                        </div>

                        <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        <i class="fa fa-chevron-right desktop" aria-hidden="true"></i>
                    </a>

                    <a class="nav-team clickable-nav-item" href="#frontendDevelopers">
                        <div class="nav-team-container">
                            <div class="icon-container">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>

                            <div class="content">
                                <h5>Frontend developers</h5>

                                <div class="tags">
                                    <div class="tag tag-s"><i class="fa fa-user" aria-hidden="true"></i>4</div>
                                    <!-- <div class="tag tag-s"><i class="fa fa-eur" aria-hidden="true"></i>4.000</div> -->
                                </div>
                            </div>
                        </div>

                        <button class="button button-tertiary mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        <i class="fa fa-chevron-right desktop" aria-hidden="true"></i>
                    </a>

                    <a class="nav-team clickable-nav-item" href="#backendDevelopers">
                        <div class="nav-team-container">
                            <div class="icon-container">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>

                            <div class="content">
                                <h5>Backend developers</h5>

                                <div class="tags">
                                    <div class="tag tag-s"><i class="fa fa-user" aria-hidden="true"></i>4</div>
                                    <!-- <div class="tag tag-s"><i class="fa fa-eur" aria-hidden="true"></i>4.000</div> -->
                                </div>
                            </div>
                        </div>

                        <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        <i class="fa fa-chevron-right desktop" aria-hidden="true"></i>
                    </a>

                    <a class="nav-team clickable-nav-item" href="#projectManagers">
                        <div class="nav-team-container">
                            <div class="icon-container">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>

                            <div class="content">
                                <h5>Project managers</h5>

                                <div class="tags">
                                    <div class="tag tag-s"><i class="fa fa-user" aria-hidden="true"></i>4</div>
                                    <!-- <div class="tag tag-s"><i class="fa fa-eur" aria-hidden="true"></i>4.000</div> -->
                                </div>
                            </div>
                        </div>

                        <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        <i class="fa fa-chevron-right desktop" aria-hidden="true"></i>
                    </a>
                </div>
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