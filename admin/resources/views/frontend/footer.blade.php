<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe2.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe3.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('images/home/iframe4.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('images/home/map.png')}}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="{{ url('/page/contact')}}">Contact Us</a></li>
								<li><a href="{{ url('/page/order-status')}}">Order Status</a></li>
								<li><a href="{{url('/page/change-location')}}">Change Location</a></li>
								<li><a href="{{url('/page/faq')}}">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{url('/page/t-shirts')}}">T-Shirt</a></li>
								<li><a href="{{url('/page/mens')}}">Mens</a></li>
								<li><a href="{{url('/page/womens')}}">Womens</a></li>
								<li><a href="{{url('/page/gift-cards')}}">Gift Cards</a></li>
								<li><a href="{{url('/page/shoes')}}">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{url('/page/terms-o-use')}}">Terms of Use</a></li>
								<li><a href="{{url('/page/privacy-policy')}}">Privacy Policy</a></li>
								<li><a href="{{url('/page/refund-policy')}}">Refund Policy</a></li>
								<li><a href="{{url('/page/billing-system')}}">Billing System</a></li>
								<li><a href="{{url('/page/tickect-system')}}">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{url('/page/company-information')}}">Company Information</a></li>
								<li><a href="{{url('/page/careers')}}">Careers</a></li>
								<li><a href="{{url('/page/store-location')}}">Store Location</a></li>
								<li><a href="{{url('/page/affillate-program')}}">Affillate Program</a></li>
								<li><a href="{{url('/page/copyright')}}">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="javascript:void(0);" class="searchform">
							{{ csrf_field()}}
								<input onfocus="enableSubscriber();" onfocusout="chkSubscriber();" name="email"  id="email" type="email" placeholder="Your email address" required=""/>
								<button  onclick="chkSubscriber();addSubscriber();" id="btnSubmit" type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<div id="statusSubscribe" style="display:none;padding-top:5px"></div>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	<script>
	function chkSubscriber(){
		var subscriber_email=$('#email').val();
		$.ajax({
			type:'post',
			url:'/check-subscriber-email',
			data:{subscriber_email:subscriber_email},
			success:function(resp){
				if(resp=="exists"){
					// alert("Email already exists");
					
					$('#statusSubscribe').show();
					$('#btnSubmit').hide();
				    $('#statusSubscribe').html("<span><font color='red'>Error:Email already exists</font></span>");
				}
			},
			
		});
	
	 }
	 function addSubscriber(){
		var subscriber_email=$('#email').val();
		$.ajax({
			type:'post',
			url:'/add-subscriber-email',
			data:{subscriber_email:subscriber_email},
			success:function(resp){
				if(resp=="exists"){
					// alert("Email already exists");
					
					$('#statusSubscribe').show();
					$('#btnSubmit').hide();
				    $('#statusSubscribe').html("<span><font color='red'>Email already exists</font></span>");
				}
				else if(resp=="Saved"){
					$('#statusSubscribe').show();
				    $('#statusSubscribe').html("<span><font color='green'>Thanks for subscribing</font></span>");
				}
			},
			
		});
	
	 }
	function enableSubscriber(){
		
		$('#btnSubmit').show();
		$('#statusSubscribe').hide();
	}
	</script>
	