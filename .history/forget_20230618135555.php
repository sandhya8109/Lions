<?php
include('nav.php') ?>
<form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form"
    style="box-shadow: 0 0 9px rgb(91, 139, 190);">
    <h3 class="mb-4">Forgot Password?</h3>

    <div class="row">
        <div class="col-lg-12">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
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
<?php
include('footer.php') ?>