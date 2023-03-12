<?php snippet("general/header") ?>



<!-- Container Login -->
<div id="container" class="container container-login">

    <!-- Content -->
    <div class="content">

        <!-- Nav -->
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
            </div>
        </nav>



        <!-- Error -->
        <?php if ($error) : ?>
            <div class="alert"><?= $page->alert()->html() ?></div>
        <?php endif ?>



        <!-- Header -->
        <div class="content__body">
            <div class="header">
                <h1>CV kit</h1>
                <p>Welcome back! Please enter your details.</p>
            </div>

            <form method="post" action="<?= $page->url() ?>">
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?= get('email') ? esc(get('email'), 'attr') : '' ?>" placeholder="surename.firstname@company.be">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="<?= get('password') ? esc(get('password'), 'attr') : '' ?>" placeholder="password">
                </div>
                
                <button class="button button-primary" type="submit" name="login" value="Login">Login</button>
            </form>

            <div class="access-cta">
                <p>Toegang nodig?  |  <a href="#">Neem contact op.</a></p>
            </div>
        </div>



        <!-- Copyright -->
        <?php if($companyInfo = $site->contactInfo()->toObject()): ?>
            <p class="copyright p">© <?= $companyInfo->name() ?> <?php echo date("Y"); ?></p>
        <?php endif; ?>
    </div>
</div>



<?php snippet("general/footer") ?>