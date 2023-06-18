<?php include('nav.php')
    ?>
<section class="volunteer-section section-padding" id="section_4" style="background-color: var(--section-bg-color);">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-12">
                <h2 class="mb-4" style="color: #00529b; padding-left: 40px;">Forgot your password?</h2>
                <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form"
                    style="box-shadow: 0 0 9px rgb(91, 139, 190);">
                    <h3 class="mb-4">Fill the form</h3>

                    <div class="row">
                        <div class="col-lg-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <button type="submit" class="form-control">Submit</button>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <p class="text-center">Remember your password? <a href="#">Sign in</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--Login form -->
<?php include('footer.php')
    ?>