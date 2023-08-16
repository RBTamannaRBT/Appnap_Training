<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>Change Password</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="{{ asset('backend/css/fonts/linecons/css/linecons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/xenon-core.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/xenon-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/xenon-components.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/xenon-skins.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">

    <script src="{{ asset('backend/js/jquery-1.11.1.min.js') }}"></script>
</head>
<body class="page-body login-page login-light">


<div class="login-container">

    <div class="row">

        <div class="col-sm-6">

            <!-- Errors container -->
            <div class="errors-container">


            </div>

            <!-- Add class "fade-in-effect" for login form effect -->
            <form action="{{ url('view_change_password') }}" method="post" role="form" id="changePassword" class="login-form fade-in-effect">

                @csrf

                <div class="login-header">
                    <a href="dashboard-1.html" class="logo">
                        <img src="backend/images/logo-white-bg@2x.png" alt="" width="80" />
                        <!-- <span>log in</span> -->
                        <div> Change Password </div>
                    </a>

                    <!-- <p>Dear user, log in to access the admin area!</p> -->
                </div>


                <div class="form-group">
                    <label class="control-label" for="password">Current Password</label>
                    <input type="password" class="form-control" name="password" id="password" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label class="control-label" for="password">New Password</label>
                    <input type="password" class="form-control" name="password" id="password" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label class="control-label" for="password">Confirm Password</label>
                    <input type="password" class="form-control" name="password" id="password" autocomplete="off" />
                </div>
                
            
                <div class="form-group">
                    <button type="submit" class="btn btn-primary  btn-block text-left">
                        <i class="fa-lock"></i>
                        Submit
                    </button>
                </div>

            </form>
        </div>

    </div>

</div>



<!-- Bottom Scripts -->
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('backend/js/resizeable.js') }}"></script>
<script src="{{ asset('backend/js/joinable.js') }}"></script>
<script src="{{ asset('backend/js/xenon-api.js') }}"></script>
<script src="{{ asset('backend/js/xenon-toggles.js') }}"></script>
<script src="{{ asset('backend/js/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/toastr/toastr.min.js') }}"></script>


<!-- JavaScripts initializations and stuff -->
<script src="{{ asset('backend/js/xenon-custom.js') }}"></script>

</body>
</html>


















<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mb-5">Bootstrap 4 Forms</h2>
            <ul class="nav nav-fill">
                <a class="nav-item" href="#formLogin">Login</a>
                <a class="nav-item" href="#formRegister">Sign-up</a>
                <a class="nav-item" href="#formChangePassword">Password</a>
                <a class="nav-item" href="#formResetPassword">Reset</a>
                <a class="nav-item" href="#formPayment">Payment</a>
                <a class="nav-item" href="#formUserEdit">User</a>
                <a class="nav-item" href="#formContact">Contact</a>
                <a class="nav-item" href="#formComplex">Complex</a>
            </ul>
            <hr class="mb-5">
            <div class="row">
                
                <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formChangePassword"></span>
                    <hr class="mb-5">

                    <!-- form card change password -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputPasswordOld">Current Password</label>
                                    <input type="password" class="form-control" id="inputPasswordOld" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">New Password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew" required="">
                                    <span class="form-text small text-muted">
                                            The password must be 8-20 characters, and must <em>not</em> contain spaces.
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">Verify</label>
                                    <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                                    <span class="form-text small text-muted">
                                            To confirm, type the new password again.
                                        </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card change password -->

                </div>

            </div>
            <!--/row-->

        <br><br><br><br>

        </div>
        <!--/col-->
    </div>
    <!--/row-->
    <hr>
    <p class="text-center">The End.<br>
        <a class="small text-info d-inline-block" href="https://www.codeply.com/bootstrap-4-examples">More Bootstrap 4 Examples</a>
    </p>
    
</div>
<!--/container-->