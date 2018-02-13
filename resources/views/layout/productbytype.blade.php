<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

@include('layout.header')
<!-- start main -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
	.pagination li
	{	
		float:left;
		margin: 0 auto;
	}
	a:hover
	{
		text-decoration: none;
		color:red;
	}
</style>
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">{{$type->name}}</h2>
		<!-- start grids_of_3 -->
		<?php $i=0; ?>
		
		@foreach($product as $index =>$value)
		 @if(($index)%3==0||$index==0)<div class="grids_of_3">@endif
			
			<div class="grid1_of_3">
				<a href="{{asset('san-pham/'.$value->id)}}">
					<img src="{{asset('image/product/'.$value->image)}}" width="300px" height="300px"  alt="{{$value->name}}" title="{{$value->description}}" />
					<h3>{{$value->name}}</h3>
					<div class="price">
						@if($value->promotion_price!=0)<h4>Giá cũ: <strike>{{$value->promotion_price}}</strike><small> vnđ</small></h4>@endif
						<h4 style="color:red; font-weight: bold;">{{$value->unit_price}}<small> vnđ</small><span>Đặt hàng</span></h4>
						
					</div>
					<span class="b_btm"></span>
				</a>
			</div>

			
		@if(($index+1)%3==0)
			<div class="clear"></div>

		</div>
		@endif
		@endforeach
		<div class="clear"></div>
		<div class="row">
		<div class="col-xs-5"></div>
		<div class="pagination" class="col-xs-1">{{$product->links()}}</div>
		
		</div>
		</div>
				
		
	</div>

</div>
</div>		

<!-- start footer -->
@include('layout.footer')
</div>
</div>
</body>
</html>