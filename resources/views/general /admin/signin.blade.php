@extends('general .layouts.app')
@section('page-content')
<div class="login-5">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-5 col-md-12 col-pad-0 bg-img none-992">
                <a href="#">
                    <img src="assets/img/logos/logo.png" class="logo" alt="logo">
                </a>
                <h3>Welcome Back</h3>
                <p>To Keep connected with us please login with your personal info</p>
                <ul class="social-list clearfix">
                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-7 col-md-12 col-pad-0 align-self-center">
                <div class="login-inner-form">
                    <div class="details">
                        <h3>Sign into your account</h3>
                        <form action="{{route('post.signup')}}" method="post">
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password">
                            </div>
                            <div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#">Forgot Password</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-md btn-theme">Login</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection