<footer >
	<div class="blkfoot bg-black">
		<div class="container p-4 mt-14">
			<div class="row">
				<div class="col-md-5">
					<img src="<?= base_url( "assets/images/logofooter.png"); ?> " alt=""/>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia </p>
				</div>
				<div class="col-md-3">
					<div class="footertitle">QUICK LINKS</div>
					<ul class="list-unstyled font-weight-bold" style="line-height:2; font-size:13pt;">
						<li>Pulsar Central</li>
						<li>All Access</li>
						<li>Viral</li>
						<li>Pixel</li>
						<li>Scoop</li>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="footertitle">Follows Us</div>
					<img src="<?= base_url( "assets/images/twitter.png"); ?> " alt=""/>
					<img src="<?= base_url( "assets/images/facebook.png"); ?> " alt=""/>
					<img src="<?= base_url( "assets/images/googplus.png"); ?> " alt=""/>
					<img src="<?= base_url( "assets/images/instagram.png"); ?> " alt=""/>
				</div>
			</div>
		</div>
	
	</div>
	<div class="ftyellow mt-0 p-2">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>Pulser is a product of The Standard Group PLC</p>
				</div>
				<div class="col-md-6">
					<p>©<?php echo date('Y');?>  |  Privacy policy  |  Terms of service | Our Contacts</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="<?= base_url( "assets/vendor/jquery/jquery.min.js" ); ?>"></script>
<script src="<?= base_url( "assets/vendor/popper/popper.min.js" ); ?>"></script>
<script src="<?= base_url( "assets/js/bootstrap/bootstrap.min.js" ); ?>"></script>
<script src="<?= base_url( "assets/js/plugj.js" ); ?>"></script>
<script src="<?= base_url( "assets/js/owl.carousel.min.js" ); ?>"></script><!-- FontAwesome 5 -->
<script src="<?= base_url( "assets/vendor/fontawesome/js/fontawesome-all.min.js" ); ?>" defer></script>
<script src="<?= base_url( "assets/js/theme.js" ); ?>"></script>
<script>
    $("#search").on("click",function(){
        $("#searchbox").toggle();
    });
    $('.carousel').carousel({
        interval: 3000,
        pause: false
    });
    $(document).ready(function(){
	  $(".pic-wrapper").owlCarousel({
	  		items:1,
		   	autoplay:true,
    		autoplayTimeout:10000,
		    autoHeight:true
	  	});
	});
</script>
</html>
