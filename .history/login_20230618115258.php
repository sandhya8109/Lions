<?php include('nav.php')
    ?>
<!--Volunteer start-->
<section class="volunteer-section section-padding" id="section_4" style="background-color:var(--section-bg-color);">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="mb-4" style="color:#00529b);">Volunteer</h2>

                <form class=" custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form"
                    style="box-shadow: 0 0 9px rgb(91, 139, 190);">
                    <h3 class="mb-4">Become a volunteer today</h3>

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
                                placeholder="Subject" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="input-group input-group-file">
                                <input type="file" class="form-control" id="inputGroupFile02">

                                <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                <i class="bi-cloud-arrow-up ms-auto"></i>
                            </div>
                        </div>
                    </div>

                    <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message"
                        placeholder="Comment (Optional)"></textarea>

                    <button type="submit" class="form-control">Submit</button>
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