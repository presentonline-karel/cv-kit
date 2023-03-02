<?php snippet("general/header") ?>

<!-- Container Employee -->
<div id="container" class="container container-employee">

    <!-- Nav -->
    <?php snippet("general/nav") ?>



    <main>

        <!-- Employee header -->
        <section class="employee-header">
            <div class="breadcrumbs">
                <span class="breadcrumb">Backend developers</span>
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <span class="breadcrumb active">Cedric Lenders</span>
            </div>

            <div class="employee-header__person flex">
                <img class="profile-picture" src="/assets/img/karel.webp" alt="Karel" />

                <div class="person">
                    <h4>Cedric Lenders</h4>
                    <p class="function">Backend developer</p>
                </div>
            </div>
        </section>



        <!-- Employee introduction -->
        <section class="employee-introduction">
            <h3>Senior Back-end dev with DevOps skillset</h3>
            <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi.</p>

            <div class="socials">
                <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>

            <div class="contact-info">
                <a class="contact-info__item" href="#"><i class="fa fa-phone" aria-hidden="true"></i>0476280902</a>
                <a class="contact-info__item" href="#"><i class="fa fa-envelope" aria-hidden="true"></i>karel.decoene@presentonline.be</a>
            </div>

            <div class="stats">
                <div class="stat">
                    <div class="number-container"><span class="number">100+</span></div>
                    <div class="number-label">Projects</div>
                </div>

                <div class="stat">
                    <div class="number-container"><span class="number">10+</span></div>
                    <div class="number-label">YoE</div>
                </div>

                <div class="stat">
                    <div class="number-container"><span class="number">8+</span></div>
                    <div class="number-label">Promos</div>
                </div>

                <div class="stat">
                    <div class="number-container"><span class="number">200+</span></div>
                    <div class="number-label">Item</div>
                </div>
            </div>
        </section>



        <!-- Employee languages -->
        <section class="employee-languages">
            <h3>Languages</h3>

            <div class="languages">
                <div class="prog-bar-wrapper progress-30">
                    <span class="prog-bar__content">
                        <span class="lang-code">NL</span>
                        <span class="percentage">30%</span>
                    </span>

                    <div class="prog-bar">
                        <div class="left-side half-circle"></div>
                        <div class="right-side half-circle"></div>
                    </div>
                </div>

                <div class="prog-bar-wrapper progress-60">
                    <span class="prog-bar__content">
                        <span class="lang-code">EN</span>
                        <span class="percentage">60%</span>
                    </span>

                    <div class="prog-bar">
                        <div class="left-side half-circle"></div>
                        <div class="right-side half-circle"></div>
                    </div>
                </div>

                <div class="prog-bar-wrapper progress-90">
                    <span class="prog-bar__content">
                        <span class="lang-code">FR</span>
                        <span class="percentage">90%</span>
                    </span>

                    <div class="prog-bar">
                        <div class="left-side half-circle"></div>
                        <div class="right-side half-circle"></div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Employee skills -->
        <section class="skills-section">
            <h3>Skills</h3>

            <div class="skills">
                <div class="skill">
                    <div class="skill__content">
                        <div class="skill__content__title">HTML</div>
                        <div class="skill__content__percentage">95%</div>
                    </div>

                    <div class="skill__full-bar bar"></div>
                    <div class="skill__percentage-bar bar" style="width: 95%"></div>
                </div>

                <div class="skill">
                    <div class="skill__content">
                        <div class="skill__content__title">CSS</div>
                        <div class="skill__content__percentage">90%</div>
                    </div>

                    <div class="skill__full-bar bar"></div>
                    <div class="skill__percentage-bar bar" style="width: 90%"></div>
                </div>

                <div class="skill">
                    <div class="skill__content">
                        <div class="skill__content__title">PHP</div>
                        <div class="skill__content__percentage">80%</div>
                    </div>

                    <div class="skill__full-bar bar"></div>
                    <div class="skill__percentage-bar bar" style="width: 80%"></div>
                </div>

                <div class="skill">
                    <div class="skill__content">
                        <div class="skill__content__title">React</div>
                        <div class="skill__content__percentage">70%</div>
                    </div>

                    <div class="skill__full-bar bar"></div>
                    <div class="skill__percentage-bar bar" style="width: 70%"></div>
                </div>
            </div>
        </section>



        <!-- Employee projects -->
        <section class="projects-section card-section swiper">
            <div class="projects-section__header card-section__header">
                <h3>Projects</h3>

                <div class="arrows">
                    <i class="nav-arrow swiper-nav-arrow fa fa-arrow-left swiper-button-prev" aria-hidden="true"></i>
                    <i class="nav-arrow swiper-nav-arrow fa fa-arrow-right swiper-button-next" aria-hidden="true"></i>
                </div>
            </div>

            <div class="projects cards swiper-wrapper">
                <div class="project card swiper-slide">
                    <div>
                        <h4>Toyota/Lexus insurance form</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi. Donec dictum bibendum tristique. Ut sagittis euismod mi.</p>

                        <div class="tags flex">
                            <div class="tag tag-m">HTML</div>
                            <div class="tag tag-m">CSS</div>
                            <div class="tag tag-m">JavaScript</div>
                        </div>
                    </div>

                    <a class="project__url card__link" href="#">lexus-insurance.be</a>
                </div>

                <div class="project card swiper-slide">
                    <div>
                        <h4>Impact</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi.</p>

                        <div class="tags flex">
                            <div class="tag tag-m">HTML</div>
                            <div class="tag tag-m">CSS</div>
                            <div class="tag tag-m">JavaScript</div>
                        </div>
                    </div>

                    <a class="project__url card__link" href="#">lexus-insurance.be</a>
                </div>

                <div class="project card swiper-slide">
                    <div>
                        <h4>Dignify</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi.</p>

                        <div class="tags flex">
                            <div class="tag tag-m">HTML</div>
                            <div class="tag tag-m">CSS</div>
                            <div class="tag tag-m">JavaScript</div>
                        </div>
                    </div>

                    <a class="project__url card__link" href="#">lexus-insurance.be</a>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </section>



        <!-- Employee experience -->
        <section class="experience-section card-section swiper">
            <div class="projects-section__header card-section__header">
                <h3>Work experience</h3>

                <div class="arrows">
                    <i class="arrow nav-arrow fa fa-arrow-left swiper-button-prev" aria-hidden="true"></i>
                    <i class="arrow nav-arrow fa fa-arrow-right swiper-button-next" aria-hidden="true"></i>
                </div>
            </div>

            <div class="work-experience cards swiper-wrapper">
                <div class="experience card swiper-slide">
                    <div class="experience__header">
                        <h4>Creative technologist <span>@ Present Online</span></h4>
                        <div class="card__period">May 2018 - Present</div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi.</p>

                    <div class="tags">
                        <div class="tag tag-m">HTML</div>
                        <div class="tag tag-m">CSS</div>
                        <div class="tag tag-m">JavaScript</div>
                    </div>
                </div>

                <div class="experience card swiper-slide">
                    <div class="experience__header">
                        <h4>Creative technologist <span>@ Present Online</span></h4>
                        <div class="card__period">May 2018 - Present</div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi.</p>

                    <div class="tags">
                        <div class="tag tag-m">HTML</div>
                        <div class="tag tag-m">CSS</div>
                        <div class="tag tag-m">JavaScript</div>
                    </div>
                </div>

                <div class="experience card swiper-slide">
                    <div class="experience__header">
                        <h4>Creative technologist <span>@ Present Online</span></h4>
                        <div class="card__period">May 2018 - Present</div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi.</p>

                    <div class="tags">
                        <div class="tag tag-m">HTML</div>
                        <div class="tag tag-m">CSS</div>
                        <div class="tag tag-m">JavaScript</div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </section>



        <!-- Employee education -->
        <section class="education-section card-section swiper">
            <div class="education-section__header card-section__header">
                <h3>Education</h3>

                <div class="arrows">
                    <i class="arrow nav-arrow fa fa-arrow-left swiper-button-prev" aria-hidden="true"></i>
                    <i class="arrow nav-arrow fa fa-arrow-right swiper-button-next" aria-hidden="true"></i>
                </div>
            </div>

            <div class="education__items cards swiper-wrapper">
                <div class="education-item card swiper-slide">
                    <div class="education-item__header">
                        <h4>Creative technologist <span>@ Present Online</span></h4>
                        <div class="card__period">May 2018 - Present</div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi.</p>

                    <div class="tags">
                        <div class="tag tag-m">HTML</div>
                        <div class="tag tag-m">CSS</div>
                        <div class="tag tag-m">JavaScript</div>
                    </div>

                    <a class="education-item__pdf card__link" href="#">Download PDF</a>
                </div>

                <div class="education-item card swiper-slide">
                    <div class="education-item__header">
                        <h4>Creative technologist <span>@ Present Online</span></h4>
                        <div class="card__period">May 2018 - Present</div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi.</p>

                    <div class="tags">
                        <div class="tag tag-m">HTML</div>
                        <div class="tag tag-m">CSS</div>
                        <div class="tag tag-m">JavaScript</div>
                    </div>

                    <a class="education-item__pdf card__link" href="#">Download PDF</a>
                </div>

                <div class="education-item card swiper-slide">
                    <div class="education-item__header">
                        <h4>Creative technologist <span>@ Present Online</span></h4>
                        <div class="card__period">May 2018 - Present</div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum bibendum tristique. Ut sagittis euismod mi.</p>

                    <div class="tags">
                        <div class="tag tag-m">HTML</div>
                        <div class="tag tag-m">CSS</div>
                        <div class="tag tag-m">JavaScript</div>
                    </div>

                    <a class="education-item__pdf card__link" href="#">Download PDF</a>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </section>



        <!-- CTA section -->
        <?php snippet("blocks/cta") ?>



        <!-- Discover more -->
        <section class="discover-more-section">
            <h3>Discover more teammembers</h3>

            <div class="more-team-members">
                <a class="employee" href="#">
                    <div class="employee-container">
                        <div class="employee-picture-container">
                            <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                        </div>

                        <div class="content">
                            <h5>Karel Decoene</h5>
                            <p class="function">Function</p>
                        </div>
                    </div>

                    <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </a>

                <a class="employee" href="#">
                    <div class="employee-container">
                        <div class="employee-picture-container">
                            <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                        </div>

                        <div class="content">
                            <h5>Karel Decoene</h5>
                            <p class="function">Function</p>
                        </div>
                    </div>

                    <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </a>

                <a class="employee" href="#">
                    <div class="employee-container">
                        <div class="employee-picture-container">
                            <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                        </div>

                        <div class="content">
                            <h5>Karel Decoene</h5>
                            <p class="function">Function</p>
                        </div>
                    </div>

                    <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </a>

                <a class="employee" href="#">
                    <div class="employee-container">
                        <div class="employee-picture-container">
                            <img class="employee-picture" src="/assets/img/karel.webp" alt="Karel" />
                        </div>

                        <div class="content">
                            <h5>Karel Decoene</h5>
                            <p class="function">Function</p>
                        </div>
                    </div>

                    <button class="button button-tertiary">Read<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </a>
            </div>
        </section>
    </main>
</div>



<?= js("build/js/swipers/swiper-card-section.js", ["defer" => true]) ?>

<?php snippet("general/footer") ?>