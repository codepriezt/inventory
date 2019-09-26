@extends('Admin.layouts.auth')
@section('page-content')
@include('Admin.home.components.header')
@include('Admin.Product.components.sub-header')
<div class="col-md-9">
                            <div class="automobile-account-profile">
                                <form method="post" action="{{route('admin.signup')}}">
                                  
                                    <ul>
                                        <li>
                                           
                                                <div class="automobile-account-user-text">
                                                    <h5>Create Admin</h5>
                                                </div>
                                            
                                        </li>
                                        <li class="automobile-account-full">
                                            <div class="automobile-section-heading">
                                                <h2 class="automobile-color">Basic Info</h2>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Name:</label>
                                            <input value="" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" tabindex="0" type="text" name="name">  
                                        </li>

                                        <li>
                                            <label>Email:</label>
                                            <input value="" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" tabindex="0" type="email" name="email">  
                                        </li>

                                        <li>
                                            <label>Password:</label>
                                            <input value="" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" tabindex="0" type="password" name="password">  
                                        </li>

                                        <li>
                                            <label>Type</label>
                                            <div class="automobile-select-full-width">
                                                <select name ="type" valu>
                                                  <option>Select type</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="submit" value="Create Admin">
                                        </li>
                                    </ul>
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
@include('Main.home.components.footer')
@endsection