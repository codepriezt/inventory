@extends('Main.layouts.auth')
@section('page-content')
@include('Main.home.components.header')
@include('Main.Product.components.sub-header')
<div class="col-md-9">
                            <div class="automobile-account-profile">
                                <form method="post" action="{{route('addproduct')}}">
                                  
                                    <ul>
                                        <li>
                                           
                                                <div class="automobile-account-user-text">
                                                    <h5>Create Product</h5>
                                                </div>
                                            
                                        </li>
                                        <li class="automobile-account-full">
                                            <div class="automobile-section-heading">
                                                <h2 class="automobile-color">Basic Info</h2>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Title:</label>
                                            <input value="" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" tabindex="0" type="text" name="title">  
                                        </li>
                                       
                                        <li>
                                            <label>Category</label>
                                            <div class="automobile-select-full-width">
                                            
                                                <select name = "category_id">
                                            @foreach($category as $category)

                                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                                @endforeach
                                                    
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <label>Unit</label>
                                            <div class="automobile-select-full-width">
                                                <select name ="unit">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </li>
                                       
                                        <li class="automobile-account-full">
                                            <label>Description</label>
                                            <textarea placeholder="" name="description"></textarea>
                                        </li>
                                       
                                        <li>
                                            <label>Price:</label>
                                            <input value="" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" tabindex="0" type="text" name="price">  
                                        </li>
                                        <li>
                                            <input type="submit" value="Create Product">
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