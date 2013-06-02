    </div><!-- .container -->
</div><!-- #wrapper -->
<div id="footer-wrapper">
	<div id="footer-header">
		<div id="footer-body">
			<div class="container">
				<div class="tab">
					<div class="sunday">Sunday Worship @ 10:30AM</div>
					<div class="divide">//</div>
					<div class="wednesday">Wednesday Youth @ 7PM</div>
				</div><!-- .tab -->
				<footer class="row-fluid">
				    <div class="span8">
				    	<h2><span>Visit Us</span><span class="divide">//</span><span>All Are Welcome!</span></h2>
				    	<address>
				    		<h4>309 S Bahnson Ave Sioux Falls, SD 57103</h4>
				    		<h4>PH <span>605.335.5800<span></h4>
							<div id="map" style="height: 215px;"></div>
				    	</address>
			    		<script type="text/javascript">
			    			var styles = [
								{
									featureType: 'landscape',
									elementType: 'all',
									stylers: [
										{ hue: '#2d2e2e' },
										{ saturation: -96 },
										{ lightness: -80 },
										{ visibility: 'on' }
									]
								},{
									featureType: 'poi',
									elementType: 'all',
									stylers: [
										{ hue: '#2d2e2e' },
										{ saturation: -97 },
										{ lightness: -77 },
										{ visibility: 'off' }
									]
								},{
									featureType: 'road.local',
									elementType: 'all',
									stylers: [
										{ hue: '#444646' },
										{ saturation: -99 },
										{ lightness: -73 },
										{ visibility: 'simplified' }
									]
								},{
									featureType: 'road.arterial',
									elementType: 'all',
									stylers: [
										{ hue: '#737676' },
										{ saturation: -99 },
										{ lightness: -41 },
										{ visibility: 'on' }
									]
								},{
									featureType: 'administrative',
									elementType: 'all',
									stylers: [
										{ hue: '#000000' },
										{ saturation: 0 },
										{ lightness: -100 },
										{ visibility: 'off' }
									]
								},{
									featureType: 'road.highway',
									elementType: 'all',
									stylers: [
										{ hue: '#959696' },
										{ saturation: -100 },
										{ lightness: -8 },
										{ visibility: 'on' }
									]
								},{
									featureType: 'water',
									elementType: 'all',
									stylers: [
										{ hue: '#004a74' },
										{ saturation: 100 },
										{ lightness: -70 },
										{ visibility: 'on' }
									]
								}
							];
							var harvestLatLang = new google.maps.LatLng(43.5455, -96.683);
							var options = {
								mapTypeControlOptions: {
									mapTypeIds: [ 'Styled']
								},
								center: harvestLatLang,
								zoom: 14,
								mapTypeId: 'Styled'
							};
							var div = document.getElementById('map');
							var map = new google.maps.Map(div, options);
							var icon = '<?php echo get_template_directory_uri(); ?>/assets/img/google-map-icon.png';
							var marker = new google.maps.Marker({position: harvestLatLang, map: map, icon: icon});
							var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
							map.mapTypes.set('Styled', styledMapType);
			    		</script>
				    </div>
				    <div class="span4">
					    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/follow-us-placeholder.png" alt="" />
					</div>
			    </footer>
			</div><!-- .container -->
		</div><!-- #footer-body -->
	</div><!-- #footer-header -->
</div><!-- #footer-wrapper -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>


<?php wp_footer(); ?>
</body>
</html>
