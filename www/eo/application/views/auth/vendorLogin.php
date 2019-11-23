<body>
    <div class="page-holder d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-5 col-lg-7 mx-auto mb-5 mb-lg-0">
                    <div class="pr-lg-5"><img src="<?= base_url('assets/'); ?>img/illustration.svg" alt="" class="img-fluid"></div>
                </div>
                <div class="col-lg-5 px-lg-4">
                    <h1 class="text-base text-primary text-uppercase mb-4">Vendor Dashboard</h1>
                    <h2 class="mb-4">Welcome back!</h2>
                    <form id="loginForm" action="<?= base_url('authvendor'); ?>" class="mt-4" method="post">
                        <div class="form-group mb-4">
                            <input type="text" name="email" placeholder="Email address" class="form-control border-0 shadow form-control-lg">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="password" placeholder="Password" class="form-control border-0 shadow form-control-lg text-violet">
                        </div>
                        <div class="form-group mb-4">
                        </div>
                        <button type="submit" class="btn btn-primary shadow px-5">Log in</button>
                    </form>
                    <hr>
                    <div class="text-right">
                        <p class="text-muted">Don't have an account?</p>
                        <a class="font-weight-normal" href="<?= base_url('authvendor/register'); ?>">Create an Account!</a>
                    </div>
                </div>
            </div>
            <p class="mt-5 mb-0 text-gray-400 text-center">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a> & Denny Raymond - Leon Chrisdion</p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)                 -->
        </div>
    </div>