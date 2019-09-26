@extends('general .layouts.app')
@section('page-content')
<!-- Login 5 start -->
<div class="login-5">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-5 col-md-12 col-pad-0 bg-img none-992">
                <a href="#">
                    <img src="assets/img/logos/logo.png" class="logo" alt="logo">
                </a>
                <h3>Welcome Back</h3>
                <p>To Keep connected with us please login with your personal info</p>
                <a href="{{route('signin.index')}}" class="btn-outline">Login</a>
            </div>
            <div class="col-lg-7 col-md-12 col-pad-0 align-self-center">
                <div class="login-inner-form">
                    <div class="details">
                        <h3>Create an account</h3>
                        <form action="{{route('post.signup')}}" method="post">
                        {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" name="name" class="input-text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password">
                            </div>
                            <div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="termsOfService">
                                    <label class="form-check-label" for="termsOfService">
                                        I agree to the<a href="#" class="terms">terms of service</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-md btn-theme">Register</button>
                            </div>
                        </form>
                        <p class="none-2">Already a member? <a href="{{route('signin.index')}}">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection