<?php if (!$kirby->user()) go('/login') ?>



<?php snippet("general/header") ?>

<div id="container" class="container container-error container-projects">

    <?php snippet("nav/nav") ?>


    <div class="projects-content">
        <?php
        $allProjects = $site->children()->template("project");
        $user = Find::user();
        $userProjects = [];

        foreach ($allProjects as $project) : ?>
            <?php if($projectUsers = $project->peopleWithAccess()->toUsers()): ?>
                <?php foreach ($projectUsers as $projectUser) : ?>
                    <?php if($projectUser = $user): ?>
                        <?php array_push($userProjects, $project); ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>



    <?php if (count($userProjects) > 0) : ?>
        <div class="error-content user-projects">
            <h2>Your projects</h2>

            <div class="projects">
                <?php foreach($userProjects as $project): ?>
                    <a href="<?= $project->url() ?>" class="project">
                        <div class="icon-container">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>

                        <div class="content">
                            <h4><?= $project->projectTitle() ?></h4>
                            <p><?= $project->projectProduct() ?></p>

                            <button class="button button-tertiary"><?= t("read") ?><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php else : ?>
        <div class="error-content">
            <?php if ($page->defaultSmiley()->isNotEmpty()) : ?>
                <div class="sad-face"><?= $page->defaultSmiley() ?></div>
            <?php endif; ?>

            <h1><?= $page->defaultTitle() ?></h1>
            <p><?= $page->defaultParagraph() ?></p>

            <?php if ($defaultButton = $page->defaultButton()->toStructure()) : ?>
                <?php foreach ($defaultButton as $button) : ?>
                    <?php snippet("helpers/button", ["button" => $button]) ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>



<?= js("build/js/util/current-page-is-projects.js", ["defer" => true]) ?>

<?php snippet("general/footer") ?>