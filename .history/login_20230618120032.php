<?php include('nav.php')
    ?>
<!--Volunteer start-->
<section class="volunteer-section section-padding" id="section_4" style="background-color:var(--section-bg-color);">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="mb-4" style="color:#00529b);">Login Form</h2>

                <form class=" custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form"
                    style="box-shadow: 0 0 9px rgb(91, 139, 190);">
                    <h3 class="mb-4">Become a member today</h3>

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="name@gmail.com" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <input type="password" name="password" class="input" required placeholder="Password">
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <a href="password-recovery.php">Forgot Password?</a>

                        <button type="submit" class="form-control">Submit</button>
                        <a href="signup.php">
                            <p>Don't have an account? Register!</p>
                        </a>


                </form>
            </div>

            <div class="col-lg-6 col-12">
                <img src="images/bluelion.jpg" class="volunteer-image img-fluid" alt="">


            </div>

        </div>
    </div>
</section>
<!--Login form -->
<?php include('footer.php')
    ?>