<?php include('nav.php')
    ?>
<!--Volunteer start-->
<section class="volunteer-section section-padding" id="section_4" style="background-color:var(--section-bg-color);">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="mb-4" style="color:#00529b; padding-left:40px;">Signup Form</h2>

                <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form"
                    style="box-shadow: 0 0 9px rgb(91, 139, 190);">
                    <h3 class="mb-4">Become a Member today</h3>

                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="firstName" id="firstName" class="form-control"
                                placeholder="First Name" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="lastName" id="lastName" class="form-control"
                                placeholder="Last Name" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                required>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <input type="text" name="location" id="location" class="form-control" placeholder="Location"
                                required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <input type="text" name="number" id="number" class="form-control"
                                placeholder="Contact Number" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control"
                                placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <button type="submit" class="form-control">Submit</button>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <p class="text-center">Already have an account? <a href="#">Sign in</a></p>
                        </div>
                    </div>
                </form>


            </div>

            <div class="col-lg-6 col-12">
                <style>
                    .volunteer-image {
                        margin-top: 190px;
                    }

                    @media screen and (max-width: 991px) .volunteer-image {
                        margin-top: 0px;
                    }
                </style>
                <img src="images/bluelion.jpg" class="volunteer-image img-fluid" alt="">


            </div>

        </div>
    </div>
</section>
<!--Login form -->
<?php include('footer.php')
    ?>