<?php

if(get_theme_mod('contact_area_disable') != 'on' ){
	?>
	<!-- contact Area Start -->
	<?php 
	if( get_theme_mod('contact_areaTpadding',true) ) {
		$contact_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('contact_areaTpadding')).';';
	}
	if( get_theme_mod('contact_areaBpadding',true) ) {
		$contact_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('contact_areaBpadding')).';';
	}	
	if( get_theme_mod('contact_secopacity',true) ) {
		$contact_secopacity = 'opacity:'.esc_attr(get_theme_mod('contact_secopacity')).';';
	}
	?>		
	<div class="contact-area" id="contact">
		<?php
		$showStatic = true;
		for( $i = 1; $i < 3; $i++ ){
			$url = get_theme_mod('contact_page_url_'.$i, '#');
			$link = get_theme_mod('contact_page_link'.$i);
			$contact_page_id = get_theme_mod('contact_page_icon'.$i); 
			if(!empty($contact_page_id)){
				$showStatic = false;
				break;
			}
		}
		$contact_page_maintitle = get_theme_mod('contact_page_maintitle', 'GET IN TOUCH WITH US');
		$contact_pagesubtitle = get_theme_mod('contact_page_subtitle', 'Reach Us Out & We will get <span>Back to you ASAP !</span>');
		$contact_pagetext = get_theme_mod('contact_page_text', 'Lorem ipsum dolor sit amet, consectetur  adipiscing sed  do eiusmod tempor  incididunt ut labore et dolore aliquasmod tempor.');
		$contact_pagetextlist = get_theme_mod('contact_page_textlist', '<ul>
			<li>Quickly Aggregate B2B users.</li>
			<li>Appropriately empower dynamic leadership.</li>
			<li>Here’s what they have to say about us.</li>
			</ul>');
		?>
		<div class="container">  
			<div class="row">
				<div class="col-md-7">
						
					<div class="appont-mg">
						<?php 
						$contact_form_shortcode = get_theme_mod('contact_form_shortcode', 'Add your form shortcode on customiser');
						?>
						<div class="ht-contact-member-wrap">
							<?php echo do_shortcode($contact_form_shortcode);?>
							<div class="clearfix"></div>
						</div>
							<?php 
							$contact_formimage = get_theme_mod('contact_formimage');
							if(!empty($contact_formimage)){
								echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($contact_formimage).'" class="img-responsive secondry-bg-img" />';
							}else{
								echo '<img alt="contacte" src="'.get_template_directory_uri().'/images/contact2.jpg" class="img-responsive" />';
							}

							?>
					</div>
					<div class="contactarea-img">
							<?php 
							$contact_image = get_theme_mod('contact_image');
							if(!empty($contact_image)){
								echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($contact_image).'" class="img-responsive secondry-bg-img" />';
							}else{
								echo '<img alt="contacte" src="'.get_template_directory_uri().'/images/contact.png" class="img-responsive" />';
							}

							?>
						</div>
				</div>
				<div class="col-md-5">
					<div class="contact-detail">
							<?php if($contact_page_maintitle){ ?>
							<div class="section-title">
								<h2><?php echo ($contact_page_maintitle);  ?></h2>
							</div>
							<?php }?>
								<?php if($contact_pagesubtitle){ ?>	
							<div class="section-subtitle">
								<h3><?php echo ($contact_pagesubtitle);  ?></h3>
							</div>
							<?php }?>
							<div class="section-area-text">
								<p><?php echo ($contact_pagetext);  ?></p>
							</div>
							<div class="section-area-textlist">
								<?php echo ($contact_pagetextlist);  ?>
							</div>
							<div class="clearfix"></div>
					</div>

				</div>
			</div>
	<div class="clearfix"></div>
		</div>
	</div> 
	<!-- contact Area Start -->
<script>
	var matchHeight = function () {
	
	function init() {
		eventListeners();
		matchHeight();
	}
	
	function eventListeners(){
		$(window).on('resize', function() {
			matchHeight();
		});
	}
	
	function matchHeight(){
		var groupName = $('[feature-match-height]');
		var groupHeights = [];
		
		groupName.css('min-height', 'auto');
		
		groupName.each(function() {
			groupHeights.push($(this).outerHeight());
		});
		
		var maxHeight = Math.max.apply(null, groupHeights);
		groupName.css('min-height', maxHeight);
	};
	
	return {
		init: init
	};
	
} ();

$(document).ready(function() {
	matchHeight.init();
});
</script>
	
<?php } 