<?php
/*
    Template Name: Home Page
 */

// Homepage Custom Fields
$prelaunch_price        = get_post_meta($post->ID, 'prelaunch_price', true);
$launch_price           = get_post_meta($post->ID, 'launch_price', true);
$final_price            = get_post_meta($post->ID, 'final_price', true);
$course_url             = get_post_meta($post->ID, 'course_url', true);
$button_text            = get_post_meta($post->ID, 'button_text', true);
$optin_text             = get_post_meta($post->ID, 'optin_text', true);
$optin_button_text      = get_post_meta($post->ID, 'optin_button_text', true);

get_header();
?>
    <!-- Hero section -->
    <section id="hero" data-speed="5" data-type="background">
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="">
                    </div>
                    <div class="col-md-7 hero-text">
                        <h1><?php bloginfo('name') ?></h1>
                        <p class="lead"><?php bloginfo('description'); ?></p>
                        <div class="price-timeline">
                            <div class="price active align-items-center">
                                <h4>Pre-launch Price <small>Ends soon!</small></h4>
                                <span class=""><?php echo $prelaunch_price ?></span>
                            </div>
                            <div class="price">
                                <h4>Launch Price <small>Coming soon!</small></h4>
                                <span><?php echo $launch_price ?></span>
                            </div>
                            <div class="price">
                                <h4>Final Price <small>Coming soon!</small></h4>
                                <span><?php echo $final_price ?></span>
                            </div>
                        </div>
                        <p><a href="<?php echo $course_url ?>" class="btn btn-lg btn-danger"><?php echo $button_text ?></a></p>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <!-- Opt in section -->
    <section id="optin">
        <div class="container">
            <div class="row mt-2">
                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text ?></p>
                </div>
                <div class="col sm 4">
                    <button type="button" class="btn btn-success btn-lg btn-block" data-bs-toggle="modal"
                        data-bs-target="#myModal"><?php echo $optin_button_text; ?></button>
                </div>
            </div>
        </div>



    </section>

    <!-- Boost your income -->
    <section id="boost-your-income" class="section">
        <div class="container">
            <div class="section-header text-center">
                <img class="mt-2" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-boost.png" alt="Chart">
                <h2>How you can boost your income</h2>
                <p>Whether you’re a freelance designer, entrepreneur, employee for a company, code hobbyist, or looking
                    for a new career — this course gives you an immensely valuable skill that will enable you to either:
                </p>
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <h3>Make money on the side</h3>
                        <p>So you can save up for that Hawaiian vacation you’ve been wanting, help pay off your debt,
                            your car, your mortgage, or simply just to have bonus cash laying around.</p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <h3>Create fulltime income</h3>
                        <p>WordPress developers have options. Many developers make a generous living off of creating
                            custom WordPress themes and selling them on websites like ThemeForest. Freelance designers
                            and developers can also take on WordPress projects and make an extra $1,000 - $5,000+ per
                            month.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- who benefits -->
    <section id="who benefits" class="bg-white section">
        <div class="container">
            <div class="section-header">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pad.png" alt="Pad and Pancil">
                <h2>Who should take this course</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <h2>Graphic & Web Designers</h2>
                    <p>Graphic designers are extremely talented, but ask them to code their designs and they’ll freeze
                        up! This leaves them with no other choice but to hire a web developer. Any professional graphic
                        designers knows web developers can be expensive.</p>
                    <p>If you’re a designer, learning to code your own WordPress websites can change your business
                        entirely! Now, not only are you a great designer, but you’re a skillful developer, too! This
                        puts you in a position to make an extra $1,000 – $5,000 per project.</p>
                    <h2>Entrepreneurs</h2>
                    <p>Entrepreneurs have big dreams, and in many cases, shoestring budgets. In order to survive in the
                        cut-throat world of the Startup company, it’s a necessity to have a world-class website.
                        However, world-class websites come with a large price tag.</p>
                    <p>If you can learn how to build a high-quality startup website by yourself, then you’ve just saved
                        yourself a lot of cash, tens of thousands of dollars in many cases.</p>
                    <h2>Employees</h2>
                    <p>Any company knows the education & training of their employees is key to a thriving team.</p>
                    <p>Depending on the type of company you work for, if you understand how to code, and can develop
                        CMS driven websites, that gives you negotiating power for a better position, or a higher salary.
                    </p>
                    <h2>Code Hobbyists</h2>
                    <p>It’s fun to learn challenging new skills. Code hobbyists can add dynamic websites to their
                        arsenal of tools to play with — you can even sell WordPress themes and plugins for cash! The
                        possibilities are truly endless.</p>
                    <h2>People Looking for a New Career</h2>
                    <p>Are you out of work? Looking for a more rewarding job? Desire a career that can allow you to
                        work almost anywhere in the world? Becoming a Web Developer might be the answer for you.</p>
                    <h2>Web developers are paid well, anywhere from $33,000 to more than $105,000 per year.</h2>
                    <p>They get to work at amazing companies that are changing the world, or they enjoy the ability to
                        start their own companies, become location-independent and work from home, from coffee shops, in
                        an airplane, on the beach, or wherever they want!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Features -->
    <section id="course-features" class="section">
        <div class="container">
            <div class="section-header">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">
                <h2>Course Features</h2>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <i class="ci ci-computer"></i>
                    <h4>Lifetime access to 80+ lectures</h4>
                </div>
                <div class="col-sm-2">
                    <i class="ci ci-watch"></i>
                    <h4>10+ hours of HD video content</h4>
                </div>
                <div class="col-sm-2">
                    <i class="ci ci-calendar"></i>
                    <h4>30-day money back guarantee</h4>
                </div>
                <div class="col-sm-2">
                    <i class="ci ci-community"></i>
                    <h4>Access to a community of like minded students</h4>
                </div>
                <div class="col-sm-2">
                    <i class="ci ci-instructor"></i>
                    <h4>Direct access t the Instructor</h4>
                </div>
                <div class="col-sm-2">
                    <i class="ci ci-device"></i>
                    <h4>Accessible content on mobile devices</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- === Project Features === -->
    <section id="project-features" class="section">
        <div class="container text-center">
            <h2>Final Projects Features</h2>
            <p class="lead">Throughout this entire course, you work towards building an incredibly beautiful
                website.
                Want to see the website you are going to build? You're looking at it! The website you're using right
                now
                is the website you will have built entirely by yourself, by the end of this course.</p>
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" class="" alt="design">
                    <h3>Sexy &amp; Modern Design</h3>
                    <p>You get to work with a modern, professional quality design & layout.</p>
                </div>
                <div class="col-sm-4 text-center">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" class="" alt="Code">
                    <h3>Quality HTML5 &amp; CSS3</h3>
                    <p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 & CSS3.
                    </p>
                </div>
                <div class="col-sm-4 text-center">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" class="" alt="design">
                    <h3>Easy-to-use CMS</h3>
                    <p>Allow your clients to easily update their websites by converting your static websites to dynamic
                        websites, using WordPress.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Featurette -->
    <section id="featurette" class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <h2 class="text-center">Watch the course introduction</h2>
                    <iframe width="100%" height="415" src="https://www.youtube.com/embed/4KvXrbabutg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Instructor -->
    <section id="instructor" class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <h2>Your Instructor <small class="text-muted h3">Brad Hussy</small></h2>
                    <div class="social-links mb-3">
                        <a href="http://twitter.com" class="badge social twitter"><i
                                class="bi bi-twitter text-dark"></i></a>
                        <a href="http://facebook.com" class="badge social twitter"><i
                                class="bi bi-facebook text-dark"></i></a>
                        <a href="http://plus.google.com" class="badge social twitter"><i
                                class="bi bi-google text-dark"></i></a>

                    </div>
                    <p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web
                        designer,
                        developer, blogger and digital entrepreneur.</p>
                    <p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast
                        (Vancouver,
                        Canada) to educate and equip himself with the necessary skills to become a spearhead in his
                        trade of
                        solving problems on the web, crafting design solutions, and speaking in code. </p>
                    <p> Brad's determination
                        and love for what he does has landed him in some pretty interesting places with some neat
                        people.
                        He's had the privilege of working with, and providing solutions for, numerous businesses, big &
                        small, across the Americas. </p>
                    <p> Brad builds custom websites, and provides design solutions for a
                        wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive
                        income,
                        living your life to the fullest, and provides premium quality web design tutorials and courses
                        for
                        tens of thousands of amazing people desiring to master their craft.</p>
                    <hr>
                    <h3>The Numbers <small class="text-muted">Don't lie</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    41k <span>Students</span>
                                </div>
                                <div class="num-content">
                                    500+ <span>Reviews</span>
                                </div>
                                <div class="num-content">
                                    10 <span>Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="elvis-brad" class="col-sm-4 col-md-6">
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/brad-elvis.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- testimoniels -->
    <section id="kudos" class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <h2 class="text-center">What people are saying about Brad</h2>
                    <div class="row testimoniel mt-3">
                        <div class="col-sm-4">
                            <img class="rounded-circle" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                        </div>
                        <div class="col-sm-8">
                            <blockquote class="mt-3 bg-light rounded border-start border-dark border-3">Proin nec arcu
                                ac massa tristique
                                eleifend.
                                Pellentesque
                                habitant
                                morbi
                                tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam feugiat metus
                                sit amet gravida feugiat. Vestibulum varius suscipit ligula, sed sodales libero placerat
                                vel. Quisque lacinia eros ligula, eu tincidunt ligula semper eu.
                                <cite class="text-end">&mdash; Brennan, graduate of all of Brad's courses</cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimoniel mt-3">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">
                        </div>
                        <div class="col-sm-8">
                            <blockquote class="mt-3 bg-light rounded border-start border-dark border-3">Proin nec arcu
                                ac massa tristique
                                eleifend.
                                Pellentesque
                                habitant
                                morbi
                                tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam feugiat metus
                                sit amet gravida feugiat. Vestibulum varius suscipit ligula, sed sodales libero placerat
                                vel. Quisque lacinia eros ligula, eu tincidunt ligula semper eu.
                                <cite class="text-end">&mdash; Ben, also cool</cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimoniel mt-3">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="AJ">
                        </div>
                        <div class="col-sm-8">
                            <blockquote class="mt-3 bg-light rounded border-start border-dark border-3">Proin nec arcu
                                ac massa tristique
                                eleifend.
                                Pellentesque
                                habitant
                                morbi
                                tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam feugiat metus
                                sit amet gravida feugiat. Vestibulum varius suscipit ligula, sed sodales libero placerat
                                vel. Quisque lacinia eros ligula, eu tincidunt ligula semper eu.
                                <cite class="text-end">&mdash; AJ</cite>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row testimoniel mt-3">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Ernest">
                        </div>
                        <div class="col-sm-8">
                            <blockquote class="mt-3 bg-light rounded border-start border-dark border-3">Proin nec arcu
                                ac massa tristique
                                eleifend.
                                Pellentesque
                                habitant
                                morbi
                                tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam feugiat metus
                                sit amet gravida feugiat. Vestibulum varius suscipit ligula, sed sodales libero placerat
                                vel. Quisque lacinia eros ligula, eu tincidunt ligula semper eu.
                                <cite class="text-end">&mdash; Ernest</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php
get_footer();