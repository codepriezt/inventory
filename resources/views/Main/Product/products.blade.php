@extends('Main.layouts.auth')
@section('page-content')
@include('Main.home.components.header')
@include('Main.Product.components.sub-header')
<div class="col-md-9">
                            <div class="automobile-account-packages">
                                <ul class="packages-heading">
                                    
                                    <li>Title</li>
                                    <li>Category</li>
                                    <li>Unit</li> 
                                    <li>price</li>
                                    <li>Action</li>
                                </ul>
                                
                                @if($product->count() == 0)
                                <h4>No product Up for Display Presently</h4>
                                @else
                                @foreach($product as $product)
                                <ul>
                                    
                                    <li>{{$product->title}} <span class="expired">{{$product->status}}</span></li>
                                    <li>{{$product->category->name}}</li>
                                    <li>{{$product->unit}}</li> 
                                    <li>{{$product->price}}</li>
                                    <li><a href="{{route('singleProduct.index',['id'=>$product->id])}}" class="btn btn-info">View</a></li>
                                    <li><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit</a></li>
                                </ul>

                     <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <form method="POST" action="{{route('product.edit' ,['productId'=>$product->id])}}" id="edit">
                                <div class="modal-body">
                                    <div class= "form-group">
                                            <label>Title:</label>
                                            <input value="{{$product->title}}" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" tabindex="0" type="text" name="title"> 
                                            @inputError(['errors' => $errors, 'field' => 'title'])@endinputError 
                                        </div>
                                        <div class = "form-group">
                                            <label>Unit</label>
                                            <div class="automobile-select-full-width">
                                                <select name ="unit" >
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                        <div class="automobile-account-full">
                                            <label>Description</label>
                                            <textarea placeholder="" name="description">{{$product->description}}</textarea>
                                            @inputError(['errors' => $errors, 'field' => 'description'])@endinputError
                                        </div>
                                       
                                        <div class = "form-group">
                                            <label>Price:</label>
                                            <input value="{{$product->price}}" onblur="if(this.value == '') { this.value =''; }" onfocus="if(this.value =='') { this.value = ''; }" tabindex="0" type="text" name="price">
                                            @inputError(['errors' => $errors, 'field' => 'price'])@endinputError  
                                        </div>   
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">update</button>
                                    @csrf
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                            </div>
                        </div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->