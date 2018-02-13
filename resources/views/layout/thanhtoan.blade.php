@include('layout.header')
		<div class="container text-center" style="background-color: white; padding-top: 5%;">
			@if(Auth::check())
			<div class="col-md-5 col-sm-12">
				
				<h1>Thông tin giao hàng</h1>
				
                        <form method="POST" action="{{route('thanhtoan')}}">
						  <div class="form-group">
						    <h3 style="text-align: left; font-size: 20px; font-weight: bold">Tên</h3>
						    <input style="float: left;" type="text" class="form-control" id="name" 
						    @if(Auth::check())
						    	value="{{Auth::user()->full_name}}" disabled="disabled" 
						    @else
						    value="{{ old('name') }}"
						    @endif

						    aria-describedby="emailHelp" placeholder="Nhập tên bạnl">
						    
						  </div>
						  <div class="form-group">
						     <h3 style="text-align: left; font-size: 20px; font-weight: bold">Email</h3>
						    <input type="email" class="form-control" id="exampleInputPassword1"
						    	@if(Auth::check())
						    	value="{{Auth::user()->email}}" disabled="disabled" 
						    @endif

						     placeholder="VD:abcxyz@gmail.com">
						  </div>
						  
						  
						  <div class="form-group">
						     <h3 style="text-align: left; font-size: 20px; font-weight: bold">Địa chỉ nhận hàng</h3>
						    <input type="text"  class="form-control" 
						    @if(Auth::check())
						    	value="{{Auth::user()->address}}" disabled="disabled" 
						    @endif
						    id="exampleInputPassword1" placeholder="VD: Hà Nội">
						  </div>

						  <div class="form-group">
						    <h3 style="text-align: left; font-size: 20px; font-weight: bold">Số điện thoại</h3>
						    <input type="number" class="form-control" @if(Auth::check())
						    	value="{{Auth::user()->phone}}" disabled="disabled" 
						    @endif id="exampleInputPassword1" placeholder="VD: 09324xxx">
						  </div>

						  <div class="form-group">
						     <h3 style="text-align: left; font-size: 20px; font-weight: bold">Phương thức thanh toán</h3>
						   		<select class="form-control" name="payment">
						   			<option value="COD">Trả tiền khi giao hàng</option>
						   			<option value="ATM">Chuyển khoản ngân hàng</option>
						   		</select>
						  </div>
						  <div class="form-group">
    						<h3 style="text-align: left; font-size: 20px; font-weight: bold">Yêu cầu</h3>
						    <textarea class="form-control" name="note" rows="3"></textarea>
						  </div>

						  <div class="form-group">
						    
						    <input type="hidden" name="_token" value="{{csrf_token()}}">
						  </div>
						  <button type="submit" class="btn btn-success">Xác nhận</button>
						</form>
						<br>

                    </div>
			
			
			<div class="col-md-7 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						
						<span>Số lượng</span>
						<span>Loại</span>
						<span>Tổng giá</span>
					</li>
					<?php $i=1;?>
					@foreach($product_cart as $product)
					<li class="row">

						<span class="quantity">{{$product['qty']}}</span>
						<span class="itemName">{{$product['item']['name']}}</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">{{$product['price']}} vnđ</span>
					</li>
					@endforeach
					<li class="row totals">
						<span class="itemName">Tổng cộng:</span>
						<span class="price">{{Session('cart')->totalPrice}} vnđ</span>
						
					</li>
				</ul>
			</div>

		</div>
		

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		@else

			<div class="container-fluid">
					<h1 style="font-size: 40px; font-weight: bold;">Vui lòng đăng nhập để thanh toán</h1>
					<br>
					<small style="font-size: 20px;text-decoration:inherit;">Bạn chưa có tài khoản??</small>
					<br>
					<br>
					<a href="{{url('dang-nhap#toregister')}}"><button class="btn btn-warning" >Đăng ký tại đây</button></a>
					<br>
					<br>
					<a href="{{url('/')}}">
					<button class="btn btn-success">
						<< Trở lại trang chủ <<
					</button>
					</a>
					<br>
					<br>
			</div>

		@endif

	</div>
@include('layout.footer')