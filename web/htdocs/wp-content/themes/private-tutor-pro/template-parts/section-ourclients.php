
<?php

if(get_theme_mod('ourclient_area_disable') != 'on' ){
	?>
	<!-- ourclient Area Start -->
	<?php 
	if( get_theme_mod('ourclient_areaTpadding',true) ) {
		$ourclient_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('ourclient_areaTpadding')).';';
	}
	if( get_theme_mod('ourclient_areaBpadding',true) ) {
		$ourclient_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('ourclient_areaBpadding')).';';
	}
	?>		
	<div class="ourclient-area bg-img-1 text-center" id="ourclient" style="<?php echo esc_attr($ourclient_areaTpadding); ?>" "<?php echo esc_attr($ourclient_areaBpadding); ?>">

		<?php
		$showStatic = true;
		for( $i = 1; $i < 3; $i++ ){
			$url = get_theme_mod('ourclient_page_url_'.$i, '#');
			$link = get_theme_mod('ourclient_page_link'.$i);
			$ourclient_page_id = get_theme_mod('ourclient_page_icon'.$i); 
			if(!empty($ourclient_page_id)){
				$showStatic = false;
				break;
			}
		}
		?>
		<div class="container">  
			<div class="ourclient-single-area wow bounceInUp">  
				<?php
				$cols = get_theme_mod('ourclient_npp_count', 5);
				$cols++;
							// echo '$cold: '.$cols;
				switch($cols){
					case 1:
					$colCls = 'col-md-12 col-sm-12 col-xs-12';
					break;
					case 2:	
					$colCls = 'col-md-6 col-sm-6 col-xs-6';
					break;
					case 3:
					case 9:
					$colCls = 'col-md-4 col-sm-4 col-xs-6';
					break;
					case 5:
					case 6:
					case 9:
					case 10:
					case 11:
					case 12:
					$colCls = 'col-md-2 col-sm-2 col-xs-6';
					break;
										case 13:
					$colCls = 'col-md-2 col-sm-2 col-xs-6';
					break;
										case 14:
					$colCls = 'col-md-2 col-sm-2 col-xs-6';
					break;
										case 15:
					$colCls = 'col-md-2 col-sm-2 col-xs-6';
					break;
										case 16:
					$colCls = 'col-md-2 col-sm-2 col-xs-6';
					break;
										case 17:
					$colCls = 'col-md-2 col-sm-2 col-xs-6';
					break;
										case 18:
					$colCls = 'col-md-2 col-sm-2 col-xs-6';
					break;
										case 19:
					$colCls = 'col-md-2 col-sm-2 col-xs-6';
					break;
										case 20:
					$colCls = 'col-md-2 col-sm-2 col-xs-6';
					break;
					
					default: 
					$colCls = 'col-md-3 col-sm-3 col-xs-6';
					break;
				}
				$icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');
				?>

				<?php
				for( $i = 1; $i <= $cols; $i++ ){

					if($showStatic === false){
						$url = get_theme_mod('ourclient_page_url_'.$i, '#');
				
						$ourclient_page_id = get_theme_mod('ourclient_page'.$i); 
						$ourclient_page_icon = get_theme_mod('ourclient_page_icon'.$i);
						if($ourclient_page_icon){
							?>
							<div class="<?php echo $colCls;?> wow pulse pd-0" data-wow-duration="2s">
								<div class="ourclients-post">
									<a href="<?php echo esc_url(!empty($url)?$url:'#');?>"><figure class="clientlogobx">
										<img src="<?php echo esc_url($ourclient_page_icon); ?>" class="img-responsive" />								
									</figure></a>
									<div class="clearfix"></div>
								</div>
							</div>
							<?php
						}
					}else{?>
						<div class="<?php echo $colCls;?> wow pulse pd-0" data-wow-duration="2s">
							<div class="ourclients-post">
								<a href="#"><figure class="clientlogobx">
									<img src="<?php echo esc_html(get_template_directory_uri()); ?>/images/logo1.png" class="img-responsive" />
								</figure></a>
								<div class="clearfix"></div>	
							</div>
							
						</div>
					<?php }

				}?>
			</div>
		</div>
	</div> 
	<!-- ourclient Area end -->
	
<?php } 