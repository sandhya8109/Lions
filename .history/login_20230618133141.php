<?php include('nav.php')
    ?>
<!--Volunteer start-->
<section class="volunteer-section section-padding" id="section_4" style="background-color:var(--section-bg-color);">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="mb-4" style="color:#00529b; padding-left:40px; ">Login Form</h2>
                <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form"
                    style="box-shadow: 0 0 9px rgb(91, 139, 190);">
                    <h3 class="mb-4">Become a Member today</h3>

                    <div class="row">
                        <div class="col-lg-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me">
                                <label class="form-check-label" for="remember-me">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <p class="forgot-password"><a href="#">Forgot Password?</a></p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <button type="submit" class="form-control">Submit</button>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <p class="text-center">Don't have an account? <a href="#">Sign up</a></p>
                        </div>
                    </div>
                </form>


            </div>

            <div class="col-lg-6 col-12">
                <img src="images/bluelion.jpg" class="volunteer-image img-fluid" alt="">

                <div class="custom-block-body text-center">
                    <h4 class="text-white mt-lg-3 mb-lg-3">Wanna Help??</h4>

                    <p class="text-white">We are more than 2,600+ men and women serving.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Login form -->
<?php include('footer.php')
    ?>