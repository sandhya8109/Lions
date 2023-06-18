<?php include('nav.php')
    ?>
<!--Volunteer start-->
<section class="volunteer-section section-padding" id="section_4" style="background-color:var(--section-bg-color);">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="mb-4" style="color:#00529b);">Signup Form</h2>

                <form class=" custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form"
                    style="box-shadow: 0 0 9px rgb(91, 139, 190);">
                    <h3 class="mb-4">Become a member today</h3>

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <input type="text" name="volunteer-name" id="volunteer-name" class="form-control"
                                placeholder="Name" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="name@gmail.com" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control"
                                placeholder="password" required>
                        </div>

                        <div class="col-lg-6 col-12">

                            <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control"
                                placeholder="confirm Password" required>
                        </div>


                    </div>

                    <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message"
                        placeholder="Reason you want to be part of us (Optional)"></textarea>

                    <button type="submit" class="form-control">Submit</button>
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