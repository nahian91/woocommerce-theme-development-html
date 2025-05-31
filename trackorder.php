<?php include ('header.php'); ?>

    <!-- Breadcumb -->
    <div class="breadcumb-area bg-image text-center">
        <div class="container">
            <div class="row">
                <div class="co-lg-12">
                    <div class="banner-content">
                        <h1 class="title">Track Order</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcumb -->

    <!-- track order area start -->
    <div class="track-order-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tracing-order-account">
                        <h2 class="title">Orders tracking</h2>
                        <p>
                            To keep up with the status of your order, kindly input your OrderID in the designated box below and click the "Track" button. This unique identifier can be found on your receipt as well as in the confirmation email that was sent to you.
                        </p>
                        <form action="#" class="order-tracking">
                            <div class="single-input">
                                <label for="order-id">Order Id</label>
                                <input id="order-id" type="text" placeholder="Found in your order confirmation email" required="">
                            </div>
                            <div class="single-input">
                                <label for="order-idt">Billing email</label>
                                <input id="order-idt" type="text" placeholder="Email You use during checkout">
                            </div>
                            <button class="main-btn btn-primary">Track</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- track order area start -->

    <?php include ('footer.php'); ?>