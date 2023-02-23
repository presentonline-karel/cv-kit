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
                    <input class="filter-form__input" type="text" placeholder="Search on employees name" />
                </form>

                <div class="filter-tags flex">
                    <p>Or job title</p>

                    <div class="tags">
                        <button class="tag tag-m">frontend developer</button>
                        <button class="tag tag-m">project manager</button>
                        <button class="tag tag-m">ux/ui designer</button>
                    </div>
                </div>
            </div>

            <!-- <p class="filter-results-title">3 results for "<span class="search-term">Cedric Lenders</span>"</p> -->
        </section>



        <!-- Teams section -->
        <section class="teams-section">
            <div class="team">
                <h4>Management</h4>

                <div class="employees flex-column">
                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5>Karel Decoene</h5>
                                <p class="function">Function</p>
                            </div>
                        </div>

                        <a class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5>Karel Decoene</h5>
                                <p class="function">Function</p>
                            </div>
                        </div>

                        <a class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5>Karel Decoene</h5>
                                <p class="function">Function</p>
                            </div>
                        </div>

                        <a class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="team">
                <h4>Frontend developers</h4>

                <div class="employees flex-column">
                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5>Karel Decoene</h5>
                                <p class="function">Function</p>
                            </div>
                        </div>

                        <a class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5>Karel Decoene</h5>
                                <p class="function">Function</p>
                            </div>
                        </div>

                        <a class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5>Karel Decoene</h5>
                                <p class="function">Function</p>
                            </div>
                        </div>

                        <a class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="team">
                <h4>Backend developers</h4>

                <div class="employees flex-column">
                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5>Karel Decoene</h5>
                                <p class="function">Function</p>
                            </div>
                        </div>

                        <a class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5>Karel Decoene</h5>
                                <p class="function">Function</p>
                            </div>
                        </div>

                        <a class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="employee">
                        <div class="employee-container">
                            <div class="employee-picture-container">
                                <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                            </div>

                            <div class="content">
                                <h5>Karel Decoene</h5>
                                <p class="function">Function</p>
                            </div>
                        </div>

                        <a class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </section>



        <!-- CTA section -->
        <section class="cta fade-section">
            <div class="cta__content">
                <h2>Looking for something specific? <span>Maybe reach out to us directly.</span></h2>

                <div class="buttons">
                    <a class="button button-primary"><span><i class="icon-big fa fa-phone" aria-hidden="true"></i>Call us</span></a>
                    <a class="button button-primary"><span><i class="icon-big fa fa-envelope" aria-hidden="true"></i>Email us</span></a>
                </div>
            </div>
        </section>
    </main>
</div>

<?php snippet("general/footer") ?>