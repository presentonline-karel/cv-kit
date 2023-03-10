<?php if (!$kirby->user()) go('/login') ?>



<?php snippet("general/header") ?>

<!-- Container Employee -->
<div id="container" class="container container-employee">

    <!-- Nav -->
    <?php snippet("nav/nav") ?>



    <main class="main-employee">

        <!-- Employee header -->
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



        <!-- Employee introduction -->
        <section class="employee-introduction">
            <h3><?= $page->introTitle() ?></h3>
            <p class="intro"><?= $page->intro() ?></p>

            <!-- Socials -->
            <?php snippet("general/socials", ["socials" => $page->socials()->toStructure()]) ?>

            <div class="contact-info">
                <a class="contact-info__item" href="tel:<?= $page->telNumber() ?>"><i class="fa fa-phone" aria-hidden="true"></i><?= $page->telNumber() ?></a>
                <a class="contact-info__item" href="mailto:<?= $page->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?= $page->email() ?></a>
            </div>

            <?php if ($stats = $page->stats()->toStructure()) : ?>
                <div class="stats">

                    <?php foreach ($stats as $stat) : ?>
                        <div class="stat">
                            <div class="number-container"><span class="number"><?= $stat->number() ?>+</span></div>
                            <div class="number-label"><?= $stat->numberLabel() ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>



        <!-- Employee languages -->
        <section class="employee-languages section fade-section">
            <h3 class="section__title">
                <?php if ($kirby->language()->code() == "nl") {
                    echo ("Talen");
                } elseif ($kirby->language()->code() == "en") {
                    echo ("Languages");
                } elseif ($kirby->language()->code() == "fr") {
                    echo ("Langues");
                } ?>
            </h3>

            <?php if ($languages = $page->languages()->toStructure()) : ?>
                <div class="languages">

                    <?php foreach ($languages as $language) : ?>
                        <div class="prog-bar-wrapper progress-<?= $language->langPerc() ?>">
                            <span class="prog-bar__content">
                                <span class="lang-code"><?= $language->langCode() ?></span>
                                <span class="percentage"><span class="language-percentage-number"><?= $language->langPerc() ?></span>%</span>
                            </span>

                            <div class="prog-bar">
                                <div class="left-side half-circle"></div>
                                <div class="right-side half-circle"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>



        <!-- Employee skills -->
        <section class="skills-section section fade-section">
            <h3 class="section__title">
                <?php if ($kirby->language()->code() == "nl") {
                    echo ("Vaardigheden");
                } elseif ($kirby->language()->code() == "en") {
                    echo ("Skills");
                } elseif ($kirby->language()->code() == "fr") {
                    echo ("Compétences");
                } ?>
            </h3>

            <?php if ($skills = $page->skills()->toStructure()) : ?>
                <div class="skills">

                    <?php foreach ($skills as $skill) : ?>
                        <div class="skill">
                            <div class="skill__content">
                                <div class="skill__content__title"><?= $skill->skill() ?></div>
                                <div class="skill__content__percentage"><?= $skill->skillPerc() ?>%</div>
                            </div>

                            <div class="skill__full-bar bar"></div>
                            <div class="skill__percentage-bar bar" style="width: <?= $skill->skillPerc() ?>%"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>



        <!-- Employee projects -->
        <section class="projects-section card-section section fade-section swiper">
            <div class="projects-section__header card-section__header">
                <h3 class="section__title">
                    <?php if ($kirby->language()->code() == "nl") {
                        echo ("Projecten");
                    } elseif ($kirby->language()->code() == "en") {
                        echo ("Projects");
                    } elseif ($kirby->language()->code() == "fr") {
                        echo ("Projets");
                    } ?>
                </h3>

                <div class="arrows">
                    <i class="nav-arrow swiper-nav-arrow fa fa-arrow-left swiper-button-prev" aria-hidden="true"></i>
                    <i class="nav-arrow swiper-nav-arrow fa fa-arrow-right swiper-button-next" aria-hidden="true"></i>
                </div>
            </div>

            <?php if ($projects = $page->projects()->toStructure()) : ?>
                <div class="projects cards swiper-wrapper">

                    <?php foreach ($projects as $project) : ?>
                        <div class="project card swiper-slide">
                            <div>
                                <h4><?= $project->title() ?></h4>
                                <p><?= $project->description() ?></p>

                                <?php if ($project->tags()->isNotEmpty()) : ?>
                                    <div class="tags flex">
                                        <?php foreach ($project->tags()->split() as $tag) : ?>
                                            <div class="tag tag-m"><?= $tag ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <?php if ($project->link()->isNotEmpty()) : ?>
                                <a class="project__url card__link" href="<?= $project->link() ?>" target="_blank"><?= trim($project->link(), "https://") ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="swiper-pagination"></div>
        </section>



        <!-- Employee experience -->
        <section class="experience-section card-section section fade-section swiper">
            <div class="projects-section__header card-section__header">
                <h3 class="section__title">
                    <?php if ($kirby->language()->code() == "nl") {
                        echo ("Werkervaring");
                    } elseif ($kirby->language()->code() == "en") {
                        echo ("Work experience");
                    } elseif ($kirby->language()->code() == "fr") {
                        echo ("Expérience de travail");
                    } ?>
                </h3>

                <div class="arrows">
                    <i class="arrow nav-arrow fa fa-arrow-left swiper-button-prev" aria-hidden="true"></i>
                    <i class="arrow nav-arrow fa fa-arrow-right swiper-button-next" aria-hidden="true"></i>
                </div>
            </div>

            <?php if ($experiences = $page->experiences()->toStructure()) : ?>
                <div class="work-experience cards swiper-wrapper">

                    <?php foreach ($experiences as $experience) : ?>
                        <div class="experience card swiper-slide">
                            <div>
                                <div class="experience__header">

                                    <!-- Job -->
                                    <h4>
                                        <?= $experience->jobTitle() ?>

                                        <?php if ($experience->companyWebsiteToggle()->toBool()) : ?>
                                            <span>
                                                <a href="<?= $experience->companyWebsite() ?>" target="_blank">
                                                    @ <?= $experience->company() ?>
                                                </a>
                                            </span>
                                        <?php else : ?>
                                            <span>@ <?= $experience->company() ?></span>
                                        <?php endif; ?>
                                    </h4>

                                    <!-- Period -->
                                    <?php if ($experience->currentJobToggle()->toBool()) : ?>
                                        <div class="card__period">
                                            <?= date('M Y', strtotime($experience->experienceStartDate())) ?>
                                            -
                                            <?php if ($kirby->language()->code() == "nl") {
                                                echo ("Heden");
                                            } elseif ($kirby->language()->code() == "en") {
                                                echo ("Present");
                                            } elseif ($kirby->language()->code() == "fr") {
                                                echo ("Présent");
                                            } ?>
                                        </div>
                                    <?php else : ?>
                                        <div class="card__period">
                                            <?= date('M Y', strtotime($experience->experienceStartDate())) ?>
                                            -
                                            <?= date('M Y', strtotime($experience->experienceEndDate())) ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <p><?= $experience->description() ?></p>
                            </div>

                            <?php if ($experience->tags()->isNotEmpty()) : ?>
                                <div class="tags flex">
                                    <?php foreach ($experience->tags()->split() as $tag) : ?>
                                        <div class="tag tag-m"><?= $tag ?></div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="swiper-pagination"></div>
        </section>



        <!-- Employee education -->
        <section class="education-section card-section section fade-section swiper">
            <div class="education-section__header card-section__header">
                <h3 class="section__title">
                    <?php if ($kirby->language()->code() == "nl") {
                        echo ("Opleiding");
                    } elseif ($kirby->language()->code() == "en") {
                        echo ("Education");
                    } elseif ($kirby->language()->code() == "fr") {
                        echo ("Formation");
                    } ?>
                </h3>

                <div class="arrows">
                    <i class="arrow nav-arrow fa fa-arrow-left swiper-button-prev" aria-hidden="true"></i>
                    <i class="arrow nav-arrow fa fa-arrow-right swiper-button-next" aria-hidden="true"></i>
                </div>
            </div>

            <?php if ($educationItems = $page->educationItems()->toStructure()) : ?>
                <div class="education__items cards swiper-wrapper">

                    <?php foreach ($educationItems as $educationItem) : ?>
                        <div class="education-item card swiper-slide">
                            <div class="education-item__header">
                                <h4><?= $educationItem->study() ?> <span>@ <?= $educationItem->academy() ?></span></h4>

                                <?php if ($educationItem->currentEducationToggle()->toBool()) : ?>
                                    <div class="card__period">
                                        <?= date('M Y', strtotime($educationItem->educationStartDate())) ?>
                                        -
                                        <?php if ($kirby->language()->code() == "nl") {
                                            echo ("Heden");
                                        } elseif ($kirby->language()->code() == "en") {
                                            echo ("Present");
                                        } elseif ($kirby->language()->code() == "fr") {
                                            echo ("Présent");
                                        } ?>
                                    </div>
                                <?php else : ?>
                                    <div class="card__period">
                                        <?= date('M Y', strtotime($educationItem->educationStartDate())) ?>
                                        -
                                        <?= date('M Y', strtotime($educationItem->educationEndDate())) ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <p><?= $educationItem->description() ?></p>

                            <?php if ($educationItem->tags()->isNotEmpty()) : ?>
                                <div class="tags flex">
                                    <?php foreach ($educationItem->tags()->split() as $tag) : ?>
                                        <div class="tag tag-m"><?= $tag ?></div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($certificate = $educationItem->certificate()->toFile()) : ?>
                                <a class="education-item__pdf card__link" href="<?= $certificate->url() ?>" download>
                                    <?php if ($kirby->language()->code() == "nl") {
                                        echo ("Download diploma");
                                    } elseif ($kirby->language()->code() == "en") {
                                        echo ("Download certificate");
                                    } elseif ($kirby->language()->code() == "fr") {
                                        echo ("Télécharger le diplôme");
                                    } ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="swiper-pagination"></div>
        </section>



        <!-- CTA section -->
        <?php if ($site->ctaDisplayToggle()->toBool() === true) : ?>
            <?php snippet("blocks/cta") ?>
        <?php endif; ?>



        <!-- Related employees -->
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
    </main>
</div>



<?= js("build/js/swipers/swiper-card-section.js", ["defer" => true]) ?>

<?php snippet("general/footer") ?>