<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<?php wp_footer(); ?>

<!-- Signup -->
<section id="signup" class="section" data-type="background" data-speed="4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3 text-center">
                <h2>Are you ready to take your coding skills to the <strong class="">Next Level?</strong>
                </h2>
                <p><a href="" class="btn btn-lg d-grid btn-success">Yes, Sign me up!</a></p>
            </div>
        </div>
    </div>
</section>


<!-- footer -->
<footer id="footer" class="section">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-3">
                <a href="#"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo.png" alt=""></a>
            </div>
            <div class="col-sm-6">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="#" class="text-decoration-none">Home</a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none">Blog</a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none">Resources</a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none">Contact</a></li>
                    <li class="list-inline-item"><a href="#" class="text-decoration-none signup-link">Sign Up
                            Now!</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <p class="text-end">&copy; 2021 Brad Hussy</p>
            </div>
        </div>
    </div>
</footer>

<!-- Models -->
<div id="">
    <!-- Opt in modal -->

    <!--=== Modal ===-->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="exampleModalLabel"><i class="bi bi-envelope-fill"></i>
                        Subscribe to
                        our mailing list
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Simply enter you name and email! As a thank you for joining us,
                        we're going to give you one
                        of our best-selling courses <br> <em class="fw-bolder">for free!</em></p>
                    <form action="form-inline">
                        <div class="form-group">
                            <label class="visually-hidden" for="subscribe-name">Your first name</label>
                            <input type="text" class="form-control mt-2" id="subscriber-name"
                                placeholder="Your First Name">
                        </div>
                        <div class="form-group">
                            <label class="visually-hidden" for="subscribe-email">Your email</label>
                            <input type="text" class="form-control mt-2" id="subscriber-email" placeholder="Your Email">
                        </div>
                        <div class="d-grid">
                            <input type="submit" class="btn btn-danger mt-2">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-center">
                        <small class="lead">By providing email you consent to getting occasional emails and
                            newsletters.</small> <br>
                        <em>No spam. Just good stuff. we respect you privacy &amp; you may unsubscribe anytime.</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>
</body>

</html>