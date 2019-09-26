@extends('Admin.layouts.auth')
@section('page-content')
@include('Admin.home.components.header')
@include('Admin.Product.components.sub-header')
<div class="col-md-9">
                            <div class="automobile-account-packages">
                                <ul class="packages-heading">
                                    
                                    <li>Name</li>
                                    <li>Email</li>
                                    <li>Type</li>
                                    <li>Status</li>
                                    <li>Action</li>
                                </ul>
                                
                                @if($user->count() == 0)
                                <h4>No User Up for Display Presently</h4>
                                
                                @else
                                @foreach($user as $user)
                                <ul>
                                    
                                    <li>{{$user->name}}</li>
                                    <li>{{$user->email}}</li>
                                    <li>{{$user->type}}</li> 
                                    <li>{{$user->status}}</li>
                                    <li><a href="{{route('singleUser.index',['id'=>$user->id])}}" class="btn btn-info">View</a></li>
                                    
                                </ul>
                                @endforeach
                                @endif
                                <a href="{{route('createUser.index')}}" class ="btn btn-info">Create User</a> 

                </div>
                
                            </div>
                        </div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->