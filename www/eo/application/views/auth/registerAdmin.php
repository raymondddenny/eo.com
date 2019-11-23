<body>
    <div class="page-holder d-flex align-items-center">
        <div class="container col-lg-5">
            <div class="row align-items-center py-5">
                <div class="col-lg px-lg-4">
                    <h1 class="text-base text-primary text-uppercase mb-4">Bubbly Dashboard</h1>
                    <h2 class="mb-4">Welcome Abroad!</h2>

                    <!-- THE REGISTRATION BUTTON WILL SEND THE DATA TO AUTHADMIN/REGISTER METHOD TO CHECK THE FORM -->
                    <form id="loginForm" action="<?= base_url('authadmin/register'); ?>" class="mt-4" method="post">
                        <!-- FULLNAME -->
                        <div class="form-group mb-4">
                            <input type="text" id="fullname" name="fullname" placeholder="Full Name" class="form-control border-0 shadow form-control-lg">
                            <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <!-- EMAIL ADDRESS -->
                        <div class="form-group mb-4">
                            <input type="text" name="email" id="email" placeholder="Email address" class="form-control border-0 shadow form-control-lg">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <!-- ACCOUNT ADDRESS -->
                        <div class="form-group mb-4">
                            <input type="text" name="address" id="address" placeholder="Your address" class="form-control border-0 shadow form-control-lg">
                            <?= form_error('address', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group row">
                            <!-- PASSWORD 1 -->
                            <div class="form-group mb-4 col-sm-6">
                                <input type="password" id="password1" name="password1" placeholder="Password" class="form-control border-0 shadow form-control-lg text-violet">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <!-- PASSWORD 2 -->
                            <div class="form-group mb-4 col-sm-6">
                                <input type="password" id="password2" name="password2" placeholder="Repeat Password" class="form-control border-0 shadow form-control-lg text-violet">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary shadow px-5 col-lg">Register Account</button>
                    </form>
                    <hr>
                    <div class="text-right">
                        <a href="#" class="text">Forgot Password?</a>
                    </div>
                    <div class="text-right">
                        <a class="font-weight-normal" href="<?= base_url('authadmin'); ?>">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
            <p class="mt-5 mb-0 text-gray-400 text-center">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a> & Denny Raymond - Leon Chrisdion</p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)                 -->
        </div>
    </div>