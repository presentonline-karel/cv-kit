<nav class="nav">
    <div class="logo-lang-container">

        <!-- Logo -->
        <a class="logo-container" href="<?= $site->url() ?>" aria-label="Home">
            <img class="logo" src="/assets/img/PO-flat-default.png" alt="Logo" />
        </a>

        <!-- Languages -->
        <div class="languages-container">
            <button class="language-active">
                <i class="fa fa-globe" aria-hidden="true"></i><span class="language-active__code">NL</span>
            </button>

            <?php snippet("general/languages") ?>
        </div>

        <!-- Burger -->
        <div class="burger">
            <div class="burger-line line1"></div>
            <div class="burger-line line2"></div>
            <div class="burger-line line3"></div>
        </div>
    </div>



    <!-- Sliding nav -->
    <div class="nav-links">
        <div>
            <div class="company">
                <a class="button button-tertiary clickable-nav-item" href="#allEmployees"><h4>All employees</h4><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <div id="allEmployees" class="company__teams flex-column">
                    <a class="nav-team clickable-nav-item" href="#management">
                        <div class="nav-team-container">
                            <div class="icon-container">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>

                            <div class="content">
                                <h5>Management</h5>

                                <div class="tags">
                                    <div class="tag tag-s"><i class="fa fa-user" aria-hidden="true"></i>4</div>
                                    <!-- <div class="tag tag-s"><i class="fa fa-eur" aria-hidden="true"></i>4.000</div> -->
                                </div>
                            </div>
                        </div>

                        <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </a>

                    <a class="nav-team clickable-nav-item" href="#frontendDevelopers">
                        <div class="nav-team-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5>Frontend developers</h5>

                                <div class="tags">
                                    <div class="tag tag-s"><i class="fa fa-user" aria-hidden="true"></i>4</div>
                                    <!-- <div class="tag tag-s"><i class="fa fa-eur" aria-hidden="true"></i>4.000</div> -->
                                </div>
                            </div>
                        </div>

                        <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </a>

                    <a class="nav-team clickable-nav-item" href="#backendDevelopers">
                        <div class="nav-team-container">
                            <div class="icon-container">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>

                            <div class="content">
                                <h5>Backend developers</h5>

                                <div class="tags">
                                    <div class="tag tag-s"><i class="fa fa-user" aria-hidden="true"></i>4</div>
                                    <!-- <div class="tag tag-s"><i class="fa fa-eur" aria-hidden="true"></i>4.000</div> -->
                                </div>
                            </div>
                        </div>

                        <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </a>

                    <a class="nav-team clickable-nav-item" href="#projectManagers">
                        <div class="nav-team-container">
                            <div class="icon-container">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>

                            <div class="content">
                                <h5>Project managers</h5>

                                <div class="tags">
                                    <div class="tag tag-s"><i class="fa fa-user" aria-hidden="true"></i>4</div>
                                    <!-- <div class="tag tag-s"><i class="fa fa-eur" aria-hidden="true"></i>4.000</div> -->
                                </div>
                            </div>
                        </div>

                        <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </a>
                </div>
            </div>

            <div class="company__contact">
                <h4>Contact Present Online</h4>

                <div class="buttons">
                    <a class="button button-secundary callButton"><span><i class="fa fa-phone icon-big" aria-hidden="true"></i>Call us</span> <i class="icon-hover fa fa-arrow-right" aria-hidden="true"></i></a>
                    <a class="button button-secundary emailButton"><span><i class="fa fa-envelope icon-big" aria-hidden="true"></i>Email us</span> <i class="icon-hover fa fa-arrow-right" aria-hidden="true"></i></a>
                    <a class="button button-secundary websiteButton"><span><i class="fa fa-globe icon-big" aria-hidden="true"></i>Visit our website - presentonline.be</span> <i class="icon-hover fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>

                <div class="socials">
                    <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="social" href="https://www.linkedin.com/in/karel-decoene-395478187/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <p class="copyright p">©PresentOnline. All rights reserved.</p>
    </div>
</nav>