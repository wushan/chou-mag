			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
	        			'after' => '',                                  // after the menu
	        			'link_before' => '',                            // before each link
	        			'link_after' => '',                             // after each link
	        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

				<a id="inifiniteLoader"><img src="<?php bloginfo('template_directory'); ?>/library/images/ajax-loader.gif" /></a>

			</footer>

		</div>
    <!-- End SB-Site here -->
    </div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>


		<div class="sb-slidebar sb-left">
			<?php wp_nav_menu(array(
			         'container' => false,                           // remove nav container
			         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
			         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
			         'menu_class' => 'nav top-nav cf',               // adding custom nav class
			         'theme_location' => 'main-nav',                 // where it's located in the theme
			         'before' => '',                                 // before the menu
		               'after' => '',                                  // after the menu
		               'link_before' => '',                            // before each link
		               'link_after' => '',                             // after each link
		               'depth' => 0,                                   // limit the depth of the nav
			         'fallback_cb' => ''                             // fallback function (if there is one)
			)); ?>
	      <!-- Your left Slidebar content. -->
	    </div>

		<!--LiveReload JS // Remove this in Production-->
		<!--<script src="http://127.0.0.1:35729/livereload.js?snipver=1"></script>-->
		
    <!-- Facebook API -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&appId=136783466462713&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <?php
      if (!is_single() || !is_page()):
      // our jQuery function here
    ?>
    <!-- Infinite Sroll -->
    <script type="text/javascript">
      var count = 2;
			var total = <?php echo $wp_query->max_num_pages; ?>;

			$(window).scroll(function(){
			    if  ($(window).scrollTop() == $(document).height() - $(window).height()){
			        if (count > total){
			            return false;
			        }else{
			            loadArticle(count);
			        }
			        count++;
			    }
			});

      function loadArticle(pageNumber){
      		$('a#inifiniteLoader').show('fast');
              $.ajax({
                  url: "<?php bloginfo('wpurl') ?>/wp-admin/admin-ajax.php",
                  type:'POST',
                  data: "action=infinite_scroll&page_no="+ pageNumber + '&loop_file=loop',
                  success: function(html){
                  	$('a#inifiniteLoader').hide('1000');
                      $("#main").append(html);   // This will be the div where our content will be loaded
                      _jf.flush();
                  }
              });
          return false;
      }
		</script>
    <?php
    endif;
    ?>

	</body>

</html> <!-- end of site. what a ride! -->
