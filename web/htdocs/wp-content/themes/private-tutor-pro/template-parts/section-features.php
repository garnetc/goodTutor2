<?php

if(get_theme_mod('features_area_disable') != 'on' ){
	?>
	<!-- features Area Start -->
	<?php 
	if( get_theme_mod('features_areaTpadding',true) ) {
		$features_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('features_areaTpadding')).';';
	}
	if( get_theme_mod('features_areaBpadding',true) ) {
		$features_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('features_areaBpadding')).';';
	}	
	if( get_theme_mod('features_secopacity',true) ) {
		$features_secopacity = 'opacity:'.esc_attr(get_theme_mod('features_secopacity')).';';
	}
	?>		
	<div class="features-area" id="features">
		<?php
		$showStatic = true;
		for( $i = 1; $i < 3; $i++ ){
			$url = get_theme_mod('features_page_url_'.$i, '#');
			$link = get_theme_mod('features_page_link'.$i);
			$features_page_id = get_theme_mod('features_page_icon'.$i); 
			if(!empty($features_page_id)){
				$showStatic = false;
				break;
			}
		}
		$features_page_maintitle = get_theme_mod('features_page_maintitle', 'OUR FEATURES');
		$features_pagesubtitle = get_theme_mod('features_page_subtitle', 'World best Virtual Learning <span>Network education eLearning!</span>');
		$features_pagetext = get_theme_mod('features_page_text', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do eiusmod tempor  incididunt ut labore et dolore. magna aliquasmod tempor  incididunt ut labore et dolore.');
		?>
		<div class="container">  
			<div class="row">
			<div class="col-md-6">
				<?php if($features_page_maintitle){ ?>
				<div class="section-title">
					<h2><?php echo ($features_page_maintitle);  ?></h2>
				</div>
				<?php }?>
					<?php if($features_pagesubtitle){ ?>	
				<div class="section-subtitle">
					<h3><?php echo ($features_pagesubtitle);  ?></h3>
				</div>
				<?php }?>
				<div class="section-area-text">
					<p><?php echo ($features_pagetext);  ?></p>
				</div>
				<?php
				      $featuresbutton1 = get_theme_mod('features_btn_txt1', 'Enroll Now'); 
				      $featuresbtnlink1 = get_theme_mod('features_btnlink1', '#');
				    ?>

				      <?php if( get_theme_mod('features_button_display1','show' ) == 'show') :
				        ?>  
				        <div class="features-btn">
				          <a href="<?php echo $featuresbtnlink1 ?>" target="_blank">      
				            <?php echo ($featuresbutton1 );  ?><i class="fa fa-arrow-right" aria-hidden="true"></i>
				          </a></div>
				        <?php endif ?>
				        <?php
				      $featuresbutton2 = get_theme_mod('features_btn_txt2', 'Know More'); 
				      $featuresbtnlink2 = get_theme_mod('features_btnlink2', '#');
				    ?>

				      <?php if( get_theme_mod('features_button_display2','show' ) == 'show') :
				        ?>  
				        <div class=" f2-btn">
				          <a href="<?php echo $featuresbtnlink2 ?>" target="_blank">      
				            <?php echo ($featuresbutton2 );  ?>
				          </a></div>
				        <?php endif ?>
			</div>
			<div class="col-md-6">
			<div class="featured-single-area">  
				<?php
				$cols = get_theme_mod('features_npp_count', 3);
				$cols++;
							// echo '$cold: '.$cols;
				switch($cols){
					case 1:
					$colCls = 'col-md-12 col-sm-12 col-xs-12';
					break;
					case 2:	
					$colCls = 'col-md-6 col-sm-6 col-xs-12';
					break;
					case 3:
					case 5:
					case 6:
					case 9:
					case 11:
					case 13:
					case 15:
					$colCls = 'col-md-6 col-sm-6 col-xs-12';
					break;
					default: 
					$colCls = 'col-md-6 col-sm-6 col-xs-12';
					break;
				}
				$icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');
				?>

				<?php
				for( $i = 1; $i <= $cols; $i++ ){

					if( get_theme_mod('features_page_TitleColor'.$i,true) ) {
						$features_page_TitleColor = 'color:'.esc_attr(get_theme_mod('features_page_TitleColor'.$i)).';';
					}

					if( get_theme_mod('features_page_ContentColor'.$i,true) ) {
						$features_page_ContentColor = 'color:'.esc_attr(get_theme_mod('features_page_ContentColor'.$i)).';';
					}

					if( get_theme_mod('features_page_ButtonColor'.$i,true) ) {
						$features_page_ButtonColor = 'color:'.esc_attr(get_theme_mod('features_page_ButtonColor'.$i)).';';
					}

					if( get_theme_mod('features_page_ButtonBorderColor'.$i,true) ) {
						$features_page_ButtonBorderColor = 'border-color:'.esc_attr(get_theme_mod('features_page_ButtonBorderColor'.$i)).';';
					}

					if( get_theme_mod('features_page_BoxBorderColor'.$i,true) ) {
						$features_page_BoxBorderColor = 'border-color:'.esc_attr(get_theme_mod('features_page_BoxBorderColor'.$i)).';';
					}

					if($showStatic === false){
						$url = get_theme_mod('features_page_url_'.$i, '#');

						$features_page_title = get_theme_mod('features_page_title_'.$i, 'Design & Coding');
						$features_page_id = get_theme_mod('features_page'.$i); 
						$features_page_icon = get_theme_mod('features_page_icon'.$i);
						if($features_page_icon){
							?>
							<div class="<?php echo $colCls;?> fs-area padding0">
								<div feature-match-height="groupName" class="fs-single-bx wow bounceInUp" style="<?php echo esc_attr($features_page_BoxBorderColor); ?>">
									<div class="fs-single-bx-inner">
											<a class="icon" href="<?php echo esc_url(!empty($url)?$url:'#');?>"><span class="<?php echo $features_page_icon; ?>"></span></a>
										
										<div class="single-top">
											<h4 class="title inner-area-title" style="<?php echo esc_attr($features_page_TitleColor); ?>">
												<?php echo $features_page_title; ?>
											</h4>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					}else{?>
						<div class="<?php echo $colCls;?> fs-area padding0">
							<div feature-match-height="groupName" class="fs-single-bx wow bounceInUp">
								<div class="fs-single-bx-inner">
										<a class="icon" href="#"><span class="fa fa-list-alt"></span></a>
									<div class="single-top">
										<h4 class="title inner-area-title">Demo Classes
										</h4>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							
						</div>
					<?php }

				}?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
		</div>
	</div> 
	<!-- features Area Start -->
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