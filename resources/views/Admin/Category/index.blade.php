@extends('Admin.layouts.auth')
@section('page-content')
@include('Admin.home.components.header')
@include('Admin.Product.components.sub-header')
<div class="col-md-9">
                            <div class="automobile-account-profile">
                                <form method ="post" action ="{{route('create.category')}}">
                                @csrf
                                    <ul>
                                        <li>
                                           
                                                <div class="automobile-account-user-text">
                                                    <h5>Create Product Category</h5>
                                                </div>
                                            
                                        </li>
                                        <li class="automobile-account-full">
                                            <div class="automobile-section-heading">
                                                <h2 class="automobile-color">Basic</h2>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Name:</label>
                                            <input value="" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" tabindex="0" type="text" name ="name">  
                                        </li>
                                        <li>
                                            <input type="submit" value="Add Category">
                                        </li>
                                        </ul>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>

@include('Main.home.components.footer')
@endsection