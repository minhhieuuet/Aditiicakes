<!DOCTYPE HTML>
<html>
<head>
<title>Aditii | Bánh ngon cho mọi nhà</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" type="text/css" href="{{asset('thanhtoan/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('thanhtoan/css/custom.css')}}"/>
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="{{asset('layout/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="{{asset('layout/js/jquery.min.js')}}"></script>
<!-- start slider -->		
	<link href="{{asset('layout/css/slider.css')}}" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="{{asset('layout/js/modernizr.custom.28468.js')}}"></script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="{{asset('thanhtoan/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('thanhtoan/js/customjs.js')}}"></script>
	<script type="text/javascript" src="{{asset('layout/js/jquery.cslider.js')}}"></script>
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider();
		});
	</script>
		<!-- Owl Carousel Assets -->
		<link href="{{asset('layout/css/owl.carousel.css')}}" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="{{asset('layout/js/owl.carousel.js')}}"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: true,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
		<!-- start top_js_button -->
		<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
		<script type="text/javascript" src="{{asset('layout/js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('layout/js/easing.js')}}"></script>
		   <script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
</head>
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=176178986467001&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="{{url('trang-chu')}}"><img src="{{asset('layout/images/logo.png')}}	" alt=""/> </a>
		</div>
		<!-- Login button -->
		@if(!isset($user))
		<a href="{{url('dang-nhap')}}"><div style="float:right" title="Đăng nhập"><i class="fa fa-sign-in" style="font-size:48px; margin-right:5px; color:#00CCFF; "></i></div></a>
		@else
		<!-- nguoi dung -->
		<a style="cursor: pointer;"><div data-toggle="modal" data-target="#myModal" style="float:right" title="{{$user->full_name}}"><i class="fa fa-user" style="font-size:40px; margin-right:5px; color:#00CCFF; "></i><b style="font-size: 15px;">{{$user->full_name}}</b></div></a>

		@endif
		<div class="h_icon">

		<ul class="icon1 sub-icon1">
			<li><a class="active-icon c1" href=""><i>@if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif</i></a>
				<ul class="sub-icon1 list">
					@if(!Session::has('cart'))
					<li><h3>Đơn hàng trống</h3><a href=""></a></li>
					@else

					@foreach($product_cart as $product)
					<li><h3>{{$product['item']['name']}}</h3> </li> <a href="{{route('xoagiohang',$product['item']['id'])}}" style="font-size:20px; float:right;text-decoration: none">x</a>
					<li>Số lượng:<b style="color:red;font-weight: bold;"> {{$product['qty']}} </b>*{{$product['item']['unit_price']}}</li>
					
					<hr>
					
					@endforeach
					<li>Tổng tiền: <b style="font-weight: bold;color: red;font-size: 30px;">{{Session('cart')->totalPrice}}</b> vnđ</li>
					<li> <br></li>
					<li><a href="{{route('thanhtoan')}}"><button type="button" style="margin-left:30%;" class="btn btn-success">Thanh toán</button></a></li>
					@endif
				</ul>
				
			</li>

			
		</ul>

		</div>

		


		<div class="h_search">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div>

		
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				@foreach($loaisp as $value)
				<li class="active"><a href="{{asset('loai-san-pham/'.$value->id)}}">{{$value->name}}</a></li> |
				@endforeach
				<!-- <li><a href="sale.html">sale</a></li> |
				<li><a href="handbags.html">handbags</a></li> |
				<li><a href="accessories.html">accessories</a></li> |
				<li><a href="wallets.html">wallets</a></li> |
				<li><a href="sale.html">sale</a></li> |
				<li><a href="index.html">mens store</a></li> |
				<li><a href="shoes.html">shoes</a></li> |
				<li><a href="sale.html">vintage</a></li> |
				<li><a href="service.html">services</a></li> |-->
				<li><a href="{{url('lien-he')}}">Liên hệ</a></li> 
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	                  		@foreach($loaisp as $value)
	            	        <li class="nav-item"><a class="active" href="loai-san-pham/{{$value->id}}">{{$value->name}}</a></li>
							@endforeach
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="{{asset('layout/js/responsive.menu.js')}}"></script>
         </div>		  
	<div class="clear"></div>

	@if(isset($user))
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="font-size: 20px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thông tin người dùng {{$user->full_name}}</h4>
        </div>
        <div class="modal-body" style="font-size: 16px;" >
          <p>Tên : {{$user->full_name}}</p>
          <p>Email:{{$user->email}}</p>
          <p>Địa chỉ : {{$user->address}}</p>
          <p>Số điện thoại : {{$user->phone}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          <a href="{{route('dang-xuat')}}"><button type="button" class="btn btn-danger">Đăng xuất</button></a>
        </div>
      </div>
      
    </div>
</div>
	@endif
</div>
</div>