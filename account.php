<?php include ('header.php'); ?>

    <!-- Breadcumb -->
    <div class="breadcumb-area bg-image text-center">
        <div class="container">
            <div class="row">
                <div class="co-lg-12">
                    <div class="banner-content">
                        <h1 class="title">My Account</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcumb -->

    <div class="account-tab-area-start section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="nav accout-dashborard-nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa-regular fa-chart-line"></i>Dashboard</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa-regular fa-bag-shopping"></i>Order</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa-sharp fa-regular fa-tractor"></i> Track Your Order</button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa-sharp fa-regular fa-location-dot"></i>My Address</button>
                        <button class="nav-link" id="v-pills-settingsa-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settingsa" type="button" role="tab" aria-controls="v-pills-settingsa" aria-selected="false"><i class="fa-light fa-user"></i>Account Details</button>
                        <button class="nav-link" id="v-pills-settingsb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settingsb" type="button" role="tab" aria-controls="v-pills-settingsb" aria-selected="false"><a href="login.php"><i class="fa-light fa-right-from-bracket"></i>log Out</a></button>
                    </div>
                </div>
                <div class="col-lg-9 pl--50 pl_md--10 pl_sm--10 pt_md--30 pt_sm--30">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="dashboard-account-area">
                                <h2 class="title">Hello Raisa! (Not Raisa?) <a href="login.php">Log Out.</a></h2>
                                <p class="disc">
                                    From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="order-table-account">
                                <div class="h2 title">Your Orders</div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1357</td>
                                                <td>March 45, 2020</td>
                                                <td>Processing</td>
                                                <td>$125.00 for 2 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2468</td>
                                                <td>June 29, 2020</td>
                                                <td>Completed</td>
                                                <td>$364.00 for 5 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2366</td>
                                                <td>August 02, 2020</td>
                                                <td>Completed</td>
                                                <td>$280.00 for 3 item</td>
                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <div class="tracing-order-account">
                                <h2 class="title">Orders tracking</h2>
                                <p>
                                    To keep up with the status of your order, kindly input your OrderID in the designated box below and click the "Track" button. This unique identifier can be found on your receipt as well as in the confirmation email that was sent to you.
                                </p>
                                <form action="#" class="order-tracking">
                                    <div class="single-input">
                                        <label for="order-id">Order Id</label>
                                        <input type="text" placeholder="Found in your order confirmation email" required>
                                    </div>
                                    <div class="single-input">
                                        <label for="order-id">Billing email</label>
                                        <input type="text" placeholder="Email You use during checkout">
                                    </div>
                                    <button class="main-btn btn-primary">Track</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                            <div class="shipping-address-billing-address-account">
                                <div class="half">
                                    <h2 class="title">Billing Address</h2>
                                    <p class="address">
                                        3522 Interstate <br>
                                        75 Business Spur, <br>
                                        Sault Ste. <br>
                                        Marie, MI 49783 <br>
                                        New York
                                    </p>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="half">
                                    <h2 class="title">Shipping Address</h2>
                                    <p class="address">
                                        3522 Interstate <br>
                                        75 Business Spur, <br>
                                        Sault Ste. <br>
                                        Marie, MI 49783 <br>
                                        New York
                                    </p>
                                    <a href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settingsa" role="tabpanel" aria-labelledby="v-pills-settingsa-tab" tabindex="0">
                            <form action="#" class="account-details-area">
                                <h2 class="title">Account Details</h2>
                                <div class="input-half-area">
                                    <div class="single-input">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="single-input">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>

                                <input type="text" placeholder="Display Name" required>
                                <input type="email" placeholder="Email Address *" required>
                                <input type="email" placeholder="Email Address *">
                                <input type="password" placeholder="Current Password *" required>
                                <input type="password" placeholder="New Password *">
                                <input type="password" placeholder="Confirm Password *">
                                <button class="main-btn btn-primary">Save Change</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settingsb" role="tabpanel" aria-labelledby="v-pills-settingsb-tab" tabindex="0">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include ('footer.php'); ?>