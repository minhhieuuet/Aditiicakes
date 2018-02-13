@include('layout.header')
<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				<div class="product-view">
				    <div class="product-essential">
				        <div class="product-img-box">
				    <div class="more-views" style="float:left;">
				        <div class="more-views-container">
				        <ul>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>            
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a> 
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>  
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>
				            </li>
				          </ul>
				        </div>
				    </div>
				    <div class="product-image"> 
				        <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="images/0001-2.jpg" title="Women Shorts" alt="Women Shorts">
				           	<img src="{{asset('image/product/'.$product->image)}}" alt="Women Shorts" title="Women Shorts" />
				        </a>
				   </div>
					<!-- <script type="text/javascript">
						var prodGallery = jQblvg.parseJSON('{"prod_1":{"main":{"orig":"images/0001-2.jpg","main":"images/large/0001-2.jpg","thumb":"images/small/0001-2.jpg","label":""},"gallery":{"item_0":{"orig":"images/0001-2.jpg","main":"images/large/0001-2.jpg","thumb":"images/small/0001-2.jpg","label":""},"item_1":{"orig":"images/0001-1.jpg","main":"images/large/0001-1.jpg","thumb":"images/small/0001-1.jpg","label":""},"item_2":{"orig":"images/0001-5.jpg","main":"images/large/0001-5.jpg","thumb":"images/small/0001-5.jpg","label":""},"item_3":{"orig":"images/0001-3.jpg","main":"images/large/0001-3.jpg","thumb":"images/small/0001-3.jpg","label":""},"item_4":{"orig":"images/0001-4.jpg","main":"images/large/0001-4.jpg","thumb":"images/small/0001-4.jpg","label":""}},"type":"simple","video":false}}'),
						    gallery_elmnt = jQblvg('.product-img-box'),
						    galleryObj = new Object(),
						    gallery_conf = new Object();
						    gallery_conf.moreviewitem = '<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt=""><img src="" src_main="" width="64" height="85" title="" alt="" /></a>';
						    gallery_conf.animspeed = 200;
						jQblvg(document).ready(function() {
						    galleryObj[1] = new prodViewGalleryForm(prodGallery, 'prod_1', gallery_elmnt, gallery_conf, '.product-image', '.more-views', 'http:');
						        jQblvg('.product-image .cs-fancybox-thumbs').absoluteClick();
						    jQblvg('.cs-fancybox-thumbs').fancybox({ prevEffect : 'none', 
						                             nextEffect : 'none',
						                             closeBtn : true,
						                             arrows : true,
						                             nextClick : true, 
						                             helpers: {
						                               thumbs : {
						                                   width: 64,
						                                   height: 85,
						                                   position: 'bottom'
						                               }
						                             }
						                             });
						    jQblvg('#wrap').css('z-index', '100');
						            jQblvg('.more-views-container').elScroll({type: 'vertical', elqty: 4, btn_pos: 'border', scroll_speed: 400 });
						        
						});
						
						function initGallery(a,b,element) {
						    galleryObj[a] = new prodViewGalleryForm(prods, b, gallery_elmnt, gallery_conf, '.product-image', '.more-views', '');
						};
					</script> -->
				</div>
				</div>
				</div>
				<!-- end product_slider -->
			</div>
			<!-- start span1_of_1 -->
			
			<div class="span1_of_1_des"> 
				  <div class="desc1">
					<h3 style="font-size: 40px; color:red">{{$product->name}} </h3>
					<h4 style="font-size: 30px;">Loại: {{$product->typeproducts->name}}<h4>
					<p style="font-size: 20px;">{{$product->description}}.</p>
					<br>
					<h3 style="font-size: 30px;">Giá:<b style="color:red;"> {{$product->unit_price}} vnđ/{{$product->unit}}</b></h3>
					<div class="available">
						
						
						<div class="btn_form">
							<form action="{{route('themgiohang',$product->id)}}">
								<input class="alert aler-success" type="submit" value="Nhấn để đặt hàng" title="" />
							</form>
						</div>
						<span class="span_right"><a href="#">Đăng nhập để lưu đơn hàng </a></span>
						<div class="clear"></div>
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Chia sẻ :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="{{asset('layout/images/facebook.png')}}" title="facebook"></a></li>
								<li><a href="#"><img src="{{asset('layout/images/twitter.png')}}" title="Twiiter"></a></li>
								<li><a href="#"><img src="{{asset('layout/images/rss.png')}}" title="Rss"></a></li>
								<li><a href="#"><img src="{{asset('layout/images/gpluse.png')}}" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clear"></div>
					</div>
			   	 </div>
			   	</div>
			   	<div class="clear"></div>
			   	<!-- start tabs -->
				   	<section class="tabs">
		            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
			        <label for="tab-1" class="tab-label-1">Đánh giá</label>
			
		            
			
		            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3">
			        
	          
				    <div class="clear-shadow"></div>
					
			        <div class="content">
				        <div class="content-1">
				        	<div class="fb-comments" data-href="http://localhost/myproject/public/san-pham/{{$product->id}}" width="100%" data-numposts="5"></div>
							<div class="clear"></div>
						</div>
				        
				        
			        </div>
			        </section>
		         	<!-- end tabs -->
			   	</div>
			   	<!-- start sidebar -->
			 <div class="left_sidebar">
					<div class="sellers">
						<h4>Bánh bán chạy</h4>
						<div class="single-nav">
			                <ul>
			                	@foreach($listproducts as $list)
			                   <li><a href="{{asset('san-pham/'.$list->id)}}">{{$list->name}}</a></li>
			                    @endforeach	                    
			                </ul>
			              </div>
						  <div class="banner-wrap bottom_banner color_link">
								<a href="#" class="main_link">
								<figure><img src="images/delivery.png" alt=""></figure>
								<h5><span>Free ships</span><br>với đơn hàng hơn 200.000</h5><p>Áp dụng với mọi sản phẩm.</p></a>
						 </div>
						 <!-- <div class="brands">
							 <h1>Brands</h1>
					  		 <div class="field">
				                 <select class="select1">
				                   <option>Please Select</option>
										<option>Lorem ipsum dolor sit amet</option>
										<option>Lorem ipsum dolor sit amet</option>
										<option>Lorem ipsum dolor sit amet</option>
				                  </select>
				            </div>
			    		</div> -->
					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>	
	<!-- end content -->
	</div>
</div>
</div>	
@include('layout.footer')