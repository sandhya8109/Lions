<?php
include('nav.php') ?>

<main>

    <section class="donate-section">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mx-auto">
                    <form class="custom-form donate-form" action="#" method="get" role="form">
                        <h3 class="mb-4">Make a donation</h3>

                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <h5 class="mb-3">Donation Frequency</h5>
                            </div>

                            <div class="col-lg-6 col-6 form-check-group form-check-group-donation-frequency">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="DonationFrequency"
                                        id="DonationFrequencyOne" checked>

                                    <label class="form-check-label" for="DonationFrequencyOne">
                                        One Time
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-6 form-check-group form-check-group-donation-frequency">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="DonationFrequency"
                                        id="DonationFrequencyMonthly">

                                    <label class="form-check-label" for="DonationFrequencyMonthly">
                                        Monthly
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <h5 class="mt-2 mb-3">Select an amount</h5>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Rs.10
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Rs.15
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Rs.20
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault4">
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        Rs.30
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault5">
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        Rs.45
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6 form-check-group">
                                <div class="form-check form-check-radio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault6">
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        Rs.50
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 form-check-group">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">Rs</span>

                                    <input type="text" class="form-control" placeholder="Custom amount"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <h5 class="mt-1">Personal Info</h5>
                            </div>

                            <div class="col-lg-6 col-12 mt-2">
                                <input type="text" name="donation-name" id="donation-name" class="form-control"
                                    placeholder="Jname" required>
                            </div>

                            <div class="col-lg-6 col-12 mt-2">
                                <input type="email" name="donation-email" id="donation-email" pattern="[^ @]*@[^ @]*"
                                    class="form-control" placeholder="name@gmail.com" required>
                            </div>

                            <div class="col-lg-12 col-12">
                                <h5 class="mt-4 pt-1">Choose Payment</h5>
                            </div>

                            <div class="col-lg-12 col-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="DonationPayment"
                                        id="flexRadioDefault9">
                                    <label class="form-check-label" for="flexRadioDefault9">
                                        <i class="bi-credit-card custom-icon ms-1"></i>
                                        Debit or Credit card
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="DonationPayment"
                                        id="flexRadioDefault10">
                                    <label class="form-check-label" for="flexRadioDefault10">
                                        <i class="bi-paypal custom-icon ms-1"></i>
                                        Esewa
                                    </label>
                                </div>

                                <button type="submit" class="form-control mt-4">Submit Donation</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>
<?php
include('footer.php') ?>