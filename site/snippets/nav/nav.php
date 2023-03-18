<nav class="nav">
    
    <!-- Logo + language selector -->
    <?php snippet("nav/_logo-language") ?>



    <!-- Sliding nav -->
    <div class="nav-links">
        <div>
            <?php if($page->template()->name() === "project") {

                // Project info
                snippet("nav/_project-info");
            } else {

                // Company
                snippet("nav/_departments");
            } ?>



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



        <!-- Copyright -->
        <?php if($companyInfo = $site->contactInfo()->toObject()): ?>
            <p class="copyright p">© <?= $companyInfo->name() ?> <?php echo date("Y"); ?></p>
        <?php endif; ?>
    </div>
</nav>