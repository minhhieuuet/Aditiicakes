<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!-- start header -->
@include('layout.header')
<!-- start slider -->
			<!-- <div id="da-slider" class="da-slider">
				@foreach($slide as $value)
				<div class="da-slide">
					<h2>{{$value->link}}</h2>
					<p>{{$value->desctiption}}</p>
					<a href="details.html" class="da-link" style="text-decoration: none;">Go</a>
					<div class="da-img"><img src="{{asset('image/product/'.$value->image)}}" alt="image01" /></div>
				</div>
				@endforeach
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div> -->
        <div style="position: relative; z-index: 99; width: 100%; height: 100% ">
      <iframe style="pointer-events: none;" frameborder="0" height="600px" width="100%"  
        src="https://youtube.com/embed/VW2CmHsN0bo?autoplay=1&loop=1&cc_load_policy=1rel=0&amp;controls=0&amp;showinfo=0&playlist=VW2CmHsN0bo&?modestbranding=0&mute=1">
      </iframe>
 </div>
<!----start-cursual---->
<div class="wrap">
<!----start-img-cursual---->
	<div id="owl-demo" class="owl-carousel" style="font-size: 12px;">

		@foreach($sliderproduct as $product)
		<div class="item">

				<a href="{{url('san-pham/'.$product->id)}}">
				<img class="imgBorder" alt="{{$product->name}}" title="{{$product->name}}"    src="{{asset('image/product/'.$product->image)}}" height="200px" width="80%" style="margin-left:10%; margin-right: 10%; z-index: 9999;position: relative;" >
				</a>			
				<n><img src="{{asset('layout/images/glassCover.png')}}" height="40px" width="100%"  style="margin-top: -20px;z-index: -99;"></n>
			<!-- <div class="cau_left" style="margin-bottom: 0px;">
				 <h4><a href="details.html">{{$product->name}}</a></h4>
				<a href="details.html" class="btn" style="margin-top: 5px;">Mua</a>
			</div> -->
		</div>	
		
		@endforeach	
	</div>
	<!----//End-img-cursual---->
</div>
<!-- start main1 -->
<!-- Main 1 -->
@foreach($typeproducts as $value)
<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		<img src="https://loading.io/assets/img/animation/icon/showcase/nuclear.svg" width="30px" height="30px" style="float: left;">
		<a href="{{url('loai-san-pham/'.$value->id)}}" title="Xem thêm" style="text-decoration: none;"><h2>{{$value->name}}</h2></a>

	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<!-- start grids_of_3 -->
		<?php $i=0; ?>

		<div class="grids_of_3" >
			@foreach($value->products as $product)
		@if($i++==3) @break @endif
			<div class="grid1_of_3">
				<a href="{{url('san-pham/'.$product->id)}}" style="text-decoration: none;">
					<img src="{{asset('image/product/'.$product->image)}}" alt="" width="200px" height="200px" />
					<h3>{{$product->name}}</h3>
					<div class="price">
						<h4  style="font-size: 20px;">{{$product->unit_price}} vnđ / {{$product->unit}}<span>Chi tiết</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>

		@endforeach

			<div class="clear"></div>
		</div>
		
		
	</div>
</div>
</div> 
@endforeach


<!-- start footer -->

@include('layout.footer')
</div>
</body>
</html>
