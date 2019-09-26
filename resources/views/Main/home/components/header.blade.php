<header id="automobile-header" class="automobile-header-one">
            <div class="container">
                <div class="row">
                    <aside class="col-md-2"> <a href="{{route('index.page')}}" class="automobile-logo"><img src="{{asset('asset_main/images/logo.png')}}" alt=""></a> </aside>
                    <aside class="col-md-10">
                        <!--// Navigation \\-->
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="{{route('index.page')}}">Home</a></li>
                                    <li><a href="{{route('login.index')}}">Login</a></li>
                                    <li><a href="{{route('signup.index')}}">Sign Up</a></li>
                                    <li><a href="#">Contact Us</a>
                                        <ul class="sub-menu">
                                            <li><a href="contact-us.html">Contact Us WRS</a></li>
                                            <li><a href="contact-us-wls.html">Contact Us WLS</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!--// Navigation \\-->
                        <div class="automobile-right-section">
                            <ul class="automobile-user-section">
                                <li><a href="#" data-toggle="modal" data-target="#accountmodal"><i class="automobile-color icon-avatar3"></i> Account</a></li>
                                <li><a href="#" class="automobile-shoppingcart-btn"><i class="automobile-color icon-interface5"></i> Cart</a>
                                    <div class="automobile-cartbox"> No products in the cart. </div>
                                </li>
                            </ul>
                            <a href="vehicle.html" class="automobile-sell-btn automobile-bgcolor">Sell My Car</a>
                        </div>
                    </aside>
                </div>
            </div>
        </header>
        <!--// Header \\-->