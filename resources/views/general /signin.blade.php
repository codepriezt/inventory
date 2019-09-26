@extends('general .layouts.app')
@section('page-content')
<div class="login-5" id=app>
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-5 col-md-12 col-pad-0 bg-img none-992">
                <a href="#">
                    <img src="assets/img/logos/logo.png" class="logo" alt="logo">
                </a>
                <h3>Welcome Back</h3>
                <p>To Keep connected with us please login with your personal info</p>
                <a href="{{route('signup.index')}}" class="btn-outline">Register</a>
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
                        <form action="" method="">
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address" v-model="email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password" v-model ="password">
                            </div>
                            <div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-md btn-theme" @click.prevent="handleUser">Login</button>
                            </div>
                        </form>
                        <p class="none-2">Don't have an account?<a href="{{route('signup.index')}}"> Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-content')
<script>

 const app = new Vue({
        el : '#app',

        data : {
            email : '',
            password: '',
                 
            },

        methods : {
            handleUser() {
                      axios.post('api/auth/login', 
                      { email:this.email, password: this.password}
                      ).then((response) => {
                        
                       if(response.status == 200){     
                          axios.get('/products')

                          this.email = '';
                         
                       }
                    })
                        .catch(function(error) {
                                console.log(error)
                            })
                       
                
              }
            }                   
 });
</script>

@endsection