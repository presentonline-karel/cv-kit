<section class="education-section card-section section fade-section swiper">
    <div class="education-section__header card-section__header">
        <h3 class="section__title"><?= t("education") ?></h3>

        <div class="arrows">
            <!-- <i class="arrow nav-arrow fa fa-arrow-left swiper-button-prev" aria-hidden="true"></i> -->
            <?php snippet("helpers/icon-builder", ["icon" => "arrow-left", "addClasses" => "arrow nav-arrow swiper-button-prev"]) ?>
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
                                <?= t("present") ?>
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
                            <?= t("downloadCertificate") ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="swiper-pagination"></div>
</section>