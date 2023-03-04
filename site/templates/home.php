<?php if (!$kirby->user()) go('/login') ?>



<?php snippet("general/header") ?>

<!-- Container Home -->
<div id="container" class="container container-home">

    <!-- Nav -->
    <?php snippet("general/nav") ?>



    <main>

        <!-- Filter section -->
        <section class="filter-section">
            <h1>All employees</h1>

            <div class="employees-filter">
                <form class="filter-form">
                    <input class="filter-form__input input-filter" type="text" placeholder="Search on employees name" />
                </form>

                <div class="filter-tags flex">
                    <p>Or job title</p>

                    <div class="tags">
                        <button class="tag tag-m filter-tag">Frontend Developer</button>
                        <button class="tag tag-m filter-tag">Project Manager</button>
                        <button class="tag tag-m filter-tag">ux/ui designer</button>
                        <button class="tag tag-m filter-tag">Function</button>
                    </div>
                </div>
            </div>

            <p class="filter-results-title">3 results for "<span class="search-term">Cedric Lenders</span>"</p>
        </section>



        <!-- Teams section -->
        <section class="teams-section">
            <div id="allEmployees" class="team section fade-section filter-results">
                <h4 class="section__title">Results</h4>

                <div class="employees">
                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Matthias Van Vlerken</h5>
                                <p class="function">Project Manager</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Frontend Developer</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Matthias Van Vlerken</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Matthias Van Vlerken</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Matthias Van Vlerken</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div id="management" class="team section fade-section">
                <h4 class="section__title">Management</h4>

                <div class="employees">
                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Matthias Van Vlerken</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div id="frontendDevelopers" class="team section fade-section">
                <h4 class="section__title">Frontend developers</h4>

                <div class="employees">
                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div id="backendDevelopers" class="team section fade-section">
                <h4 class="section__title">Backend developers</h4>

                <div class="employees">
                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5 class="employee-name">Karel Decoene</h5>
                                <p class="function">Function</p>

                                <a class="button button-tertiary button-desktop">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <a class="button button-tertiary button-mobile">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </section>



        <!-- CTA section -->
        <?php snippet("blocks/cta") ?>
    </main>
</div>



<?= js("build/js/util/filter-employees-function.js", ["defer" => true]) ?>
<?= js("build/js/util/filter-employees-name.js", ["defer" => true]) ?>

<?php snippet("general/footer") ?>