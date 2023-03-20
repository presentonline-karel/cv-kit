<?php $user = Find::user(); ?>

<div class="general-project-info">
    <h3>Hi <?= $user->name() ?>, welcome back.</h3>
    <p><?= $page->projectsExplanation()->kt()->inline() ?></p>
</div>