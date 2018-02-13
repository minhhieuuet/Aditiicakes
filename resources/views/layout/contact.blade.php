@include('layout.header')
<div class="main_bg">
<div class="wrap">	
<div class="main">
	 	 <div class="contact">				
					<div class="contact_info">
						<h2>Địa chỉ</h2>
			    	 		<div class="map">
					   			<!-- <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#777777;text-align:left;font-size:13px;font-family: 'Source Sans Pro', sans-serif;">View Larger Map</a></small> -->
					   			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8612387157514!2d105.78051891405869!3d21.038237485993264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab354920c233%3A0x5d0313a3bfdc4f37!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4c!5e0!3m2!1svi!2s!4v1518083880786" width="100%" height="250" frameborder="0" marginheight="0" marginwidth="0" style="border:0" allowfullscreen></iframe>
					   		</div>
      				</div>
				  <div class="contact-form">
			 	  	 	<h2>Liên hệ với chúng tôi</h2>
			 	 	    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>Tên</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Email</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Số điện</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Nội dung</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="" value="Gửi"></span>
						  </div>
					    </form>
				    </div>
  				<div class="clear"></div>		
			  </div>
		</div>
</div>
</div>		
@include('layout.footer')