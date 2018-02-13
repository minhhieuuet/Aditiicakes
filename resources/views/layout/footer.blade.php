<!-- start footer -->
<!-- start footer -->
<style>
	#btnFB:hover
	{
		transition: 0.5s;
		opacity:0.5;
		color:#8b9dc3;
		
	}
	#btnGG:hover
	{
		transition: 0.5s;
		opacity:0.5;
		color: #ff0000;
		
	}
	#btnTW:hover
	{
		transition: 0.5s;
		opacity:0.5;
		color: #00AFF0;
		
	}
	#btnHome:hover
	{
		transition: 0.5s;
		opacity:0.5;
		color: yellow;
		
	}
</style>
<div class="footer_bg">
<div class="wrap">	
	<div class="footer">
		<!-- start grids_of_4 -->	
		<div class="grids_of_4">
			<?php $i=0; $j=0;?>
			@foreach($loaisp as $lsp)
				@if($i==4) 
					<?php break;?>
				 @endif
			<div class="grid1_of_4">

				<?php $i++;?>
				<h4>{{$lsp->name}}</h4>
				<ul class="f_nav">
					@foreach($lsp->products as $sp)
					@if($j==8) 
					<?php break;?>
				 @endif
					<li><a href="{{url('san-pham/'.$sp->id)}}">{{$sp->name}}</a></li>
					<?php $j++;?>
					@endforeach
				</ul>

				<?php $j=0;?>
				
			</div>
				@endforeach

			<div class="clear"></div>
		</div>
	</div>
</div>
</div>	
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<div style="text-align: center;">
			<a href="{{url('trang-chu')}}">
			<i class="fa fa-home" aria-hidden="true" id="btnHome"style="font-size:40px;margin:5px;"></i></a>
			<a href="https://www.facebook.com/giveup.nevo">
			<i id="btnFB"class="fa fa-facebook-official" style="font-size:36px;margin:5px;"></i>
			</a>
			<a href="#">
			<i id="btnGG" class="fa fa-google-plus" aria-hidden="true"style="font-size:26px;margin:5px;"></i>
			</a>
			<a href="#">
			<i class="fa fa-twitter" aria-hidden="true"style="font-size:36px;margin:5px;" id="btnTW"></i>
			</a>
		</div>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		  
   

  </a>
		<div class="copy">
			<p class="link">&copy;2018 Do Minh Hieu | <a href="{{url('trang-chu')}}"> ADITII CAKES</a></p>
		</div>
		<div class="clear"></div>
	</div>
</div>