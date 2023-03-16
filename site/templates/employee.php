<?php if (!$kirby->user()) go('/login') ?>



<?php snippet("general/header") ?>

<!-- Container Employee -->
<div id="container" class="container container-employee">

    <!-- Nav -->
    <?php snippet("nav/nav") ?>



    <main class="main-employee">

        <!-- Employee header -->
        <?php snippet("employee/employee-header") ?>



        <!-- Employee introduction -->
        <?php snippet("employee/employee-intro") ?>



        <!-- Employee languages -->
        <?= snippet("employee/employee-lang") ?>



        <!-- Employee skills -->
        <?php snippet("employee/employee-skills") ?>



        <!-- Employee projects -->
        <?php snippet("employee/employee-proj") ?>



        <!-- Employee experience -->
        <?php snippet("employee/employee-exp") ?>



        <!-- Employee education -->
        <?php snippet("employee/employee-educ") ?>



        <!-- CTA section -->
        <?php if ($site->ctaDisplayToggle()->toBool() === true) : ?>
            <?php snippet("blocks/cta") ?>
        <?php endif; ?>



        <!-- Related employees -->
        <?php snippet("employee/employee-related-empl") ?>
    </main>
</div>



<?= js("build/js/swipers/swiper-card-section.js", ["defer" => true]) ?>
<?= js("build/js/general/toggle-scrolled-class.js", ["defer" => true]) ?>

<?php snippet("general/footer") ?>