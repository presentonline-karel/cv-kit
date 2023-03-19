<nav class="nav">
    
    <!-- Logo + language selector -->
    <?php snippet("nav/_logo-language") ?>



    <!-- Sliding nav -->
    <div class="nav-links">
        <div>
            <!-- Project info || Departments -->
            <?php snippet("nav/_project-info") ?>
            <?php snippet("nav/_departments") ?>
            <?php snippet("nav/_general-project-info") ?>



            <!-- Contact -->
            <div class="company__contact">

                <!-- Links -->
                <?php snippet("nav/_contact-links") ?>

                <!-- Socials -->
                <?php if($socials = $site->socials()->toStructure()): ?>
                    <?php snippet("general/socials", ["socials" => $socials]) ?>
                <?php endif; ?>
            </div>
        </div>



        <div class="copyright__logout">

            <!-- Copyright -->
            <?php if($companyInfo = $site->contactInfo()->toObject()): ?>
                <p class="copyright p">© <?= $companyInfo->name() ?> <?php echo date("Y"); ?></p>
            <?php endif; ?>

            <!-- Logout button mobile -->
            <a href="/logout" class="button button-primary logout-button">
                <span><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</span>
            </a>
        </div>
    </div>
</nav>