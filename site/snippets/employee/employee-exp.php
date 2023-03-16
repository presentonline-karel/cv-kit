<section class="experience-section card-section section fade-section swiper">
    <div class="projects-section__header card-section__header">
        <h3 class="section__title"><?= t("workExperience") ?></h3>

        <div class="arrows">
            <?php snippet("helpers/icon-builder", ["icon" => "arrow-left", "addClasses" => "arrow nav-arrow swiper-button-prev"]) ?>
            <?php snippet("helpers/icon-builder", ["icon" => "arrow-right", "addClasses" => "arrow nav-arrow swiper-button-next"]) ?>
            <!-- <i class="arrow nav-arrow fa fa-arrow-right swiper-button-next" aria-hidden="true"></i> -->
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
                                    <?= t("present") ?>
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