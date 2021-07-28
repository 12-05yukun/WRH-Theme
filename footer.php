			<!-- footer -->
			<footer class="footer" role="contentinfo">
        <div class='footer-info'>
					<div class='footer-erleben'>
						<h3>Romantik erleben.</h3>
						<div>Buchen Sie jetzt Ihren Aufenthalt zum besten Preis auf unserer Website.</div>
						<a href='<?php echo get_field('buchen','option')?>' class='whr-button'>JETZT BUCHEN</a>
					</div>
					<div class='footer-kontakt'>
						<h3>Kontakt</h3>
						<div><?php the_field('kontakt', 'option');?></div>
					</div>
					<div class='footer-adress'>
					  <h3>Adresse</h3>
						<div><?php the_field('adress', 'option');?></div>
					</div>
				</div>
		    <div class='footer-policy-container'>
					 <div class='footer-copyrights'>(c) 2021 Weinromantikhotel Richtershof</div>
					 <div class='footer-policy'> 
                                         <?php wp_nav_menu( array( 'menu' => 'footer-menu') ); ?>
                                         </div>
	      </div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<div id="scrollUp"  class="scroll-up">

		</div>
	</body>
</html>
