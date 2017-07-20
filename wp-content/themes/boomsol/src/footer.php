			<!-- footer -->
			<footer class="footer" role="contentinfo">

				

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
      	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
		<!-- analytics --> 
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		jQuery(function($){
			  $('.slick-slider').slick({    
			    autoplay:true,     
			    speed: 750,
			    arrows: false, 
			    infinite: true,    
			    slidesToShow: 1,
			    autoplaySpeed: 5000,
			    asNavFor: '.slider2'
			  });

			  $('.slider2').slick({    
			    autoplay:true,     
			    speed: 750,
			    arrows: false, 
			    infinite: true,    
			    slidesToShow: 1,
			    autoplaySpeed: 5000,
			    asNavFor: '.slick-slider'
			  });


			$('.left').click(function(){
			  $('.slick-slider').slick('slickPrev');
			})

			$('.right').click(function(){
			  $('.slick-slider').slick('slickNext');
			})
			});

			 $(document).ready(function(){
			      $('.slider-text').slick({
			        dots: true,
			        speed: 550,
			        autoplay:true
    
    
		      });
		    });
		</script>


	</body>
</html>
