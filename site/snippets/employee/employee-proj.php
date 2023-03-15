<section class="projects-section card-section section fade-section swiper">
    <div class="projects-section__header card-section__header">
        <h3 class="section__title"><?= t("projects") ?></h3>

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