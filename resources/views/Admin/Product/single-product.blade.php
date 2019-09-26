@extends('Admin.layouts.auth')
@section('page-content')
@include('Admin.home.components.header')
<div class="automobile-main-content">

<!--// Main Section \\-->
<div class="automobile-main-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="automobile-shop-wrap">
                    <div class="automobile-shop-slide">
                      <div class="automobile-shop-thumb">
                          <div class="automobile-images-thumb-layer"><span><img src="{{asset('asset_main/extra-images/widget-recent-listing-2.jpg')}}" alt=""><small>sale</small></span></div>
                          <div class="automobile-images-thumb-layer"><span><img src="{{asset('asset_main/extra-images/widget-recent-listing-2.jpg')}}" alt=""><small>sale</small></span></div>
                      </div>
                      <div class="automobile-shop-thumb-list">
                          <div class="automobile-images-list-layer"><span><img src="{{asset('asset_main/extra-images/widget-recent-listing-2.jpg')}}" alt=""></span></div>
                          <div class="automobile-images-list-layer"><span><img src="{{asset('asset_main/extra-images/widget-recent-listing-2.jpg')}}" alt=""></span></div>
                      </div>
                    </div>
                    <div class="automobile-shop-summery">
                        <div class="automobile-shop-title">
                            <h2>{{$product->title}}</h2>
                            <span>${{$product->price}} </span>
                            <small>{{$product->unit}} left</small>

                        </div>
                        <div class="star-rating eighty"><span class="star-rating-box"></span></div>
                        <small>3 reviews</small>
                        
                        <ul class="brand-info">
                            <li>Brand Category: <span>{{$product->category->name}}</span></li>
                        </ul>
                        <p>{{$product->description}}.</p>
                    </div>
                
            
                        <div class = "text-right">
                        <h4>Update Status </h4>
                        <div class>
                           <form action="{{route('status.update')}}"  method="post">
                           <input type="hidden" name="id" value="{{$product->id}}">
                          <input type="hidden" name="status" value="{{$product->status}}" disabled>
                          <input type="hidden" name="_token" value="{{csrf_token()}}">
                            @if($product->status == 'offline')
                            <button type="submit" class="btn btn-danger">{{$product->status == 'offline' ?'Make online': 'offline'}}</button>
                            @endif
                            @if($product->status == 'online')
                            <button type="submit" class="btn btn-success" >{{$product->status == 'online' ?'Make offline': 'online'}}</button>
                            @endif
                            </form>
                        </div>
                        <hr>
                        <div class = "form-group">
                        <h4>Delete Product </h4>
                        <form action="{{route('product.delete' , ['productId' => $product->id])}}" method="post">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button class=" btn btn-success" type="submit">Delete</button>
                         </form>
                        </div>
                    </div>
                    </div>                                
                </div>
               
      
                            
                            <!--// Tabs \\-->
                            <!-- <div class="automobile-section-heading"><h2 class="automobile-color">Related Products</h2></div>
                            <div class="automobile-shop automobile-shop-grid">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img1.jpg" alt=""><span>Read Details</span></a></figure>
                                        <div class="automobile-shop-grid-text">
                                            <h4><a href="shop-detail.html">Freezer 7 Pro Rev 2</a></h4>
                                            <span>$12.99 <del>$16.99</del></span>
                                            <a href="404.html" class="automobile-cart-box fa fa-shopping-cart"></a>
                                            <a href="404.html" class="fa fa-heart-o"></a>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img2.jpg" alt=""><span>Read Details</span></a></figure>
                                        <div class="automobile-shop-grid-text">
                                            <h4><a href="shop-detail.html">Car Battery 1123v</a></h4>
                                            <span>$39.99 <del>$46.99</del></span>
                                            <a href="404.html" class="automobile-cart-box fa fa-shopping-cart"></a>
                                            <a href="404.html" class="fa fa-heart-o"></a>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img3.jpg" alt=""><span>Read Details</span></a><span>sale</span></figure>
                                        <div class="automobile-shop-grid-text">
                                            <h4><a href="shop-detail.html">Green Dust Mini-Blanket</a></h4>
                                            <span>$20.00 </span>
                                            <a href="404.html" class="automobile-cart-box fa fa-shopping-cart"></a>
                                            <a href="404.html" class="fa fa-heart-o"></a>
                                        </div>
                                    </li>
                                    <li class="col-md-3">
                                        <figure><a href="shop-detail.html"><img src="extra-images/shop-grid-img4.jpg" alt=""><span>Read Details</span></a></figure>
                                        <div class="automobile-shop-grid-text">
                                            <h4><a href="shop-detail.html">Calibrator Auto M</a></h4>
                                            <span>$123.99</span>
                                            <a href="404.html" class="automobile-cart-box fa fa-shopping-cart"></a>
                                            <a href="404.html" class="fa fa-heart-o"></a>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                        </div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>

@endsection