<?php

if(get_theme_mod('procedure_area_disable') != 'on' ){
	?>
	<!-- procedure Area Start -->
	<?php 
	if( get_theme_mod('procedure_areaTpadding',true) ) {
		$procedure_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('procedure_areaTpadding')).';';
	}
	if( get_theme_mod('procedure_areaBpadding',true) ) {
		$procedure_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('procedure_areaBpadding')).';';
	}
	?>		
	<div class="procedure-area" id="procedure" style="<?php echo esc_attr($procedure_areaTpadding); ?>" "<?php echo esc_attr($procedure_areaBpadding); ?>">
		<div class="procedure_gradiant"></div>
		<?php
		$showStatic = true;
		for( $i = 1; $i < 3; $i++ ){
			$url = get_theme_mod('procedure_page_url_'.$i, '#');
			$link = get_theme_mod('procedure_page_link'.$i);
			$procedure_page_id = get_theme_mod('procedure_page_icon'.$i); 
			if(!empty($procedure_page_id)){
				$showStatic = false;
				break;
			}
		}
		$procedure_page_maintitle = get_theme_mod('procedure_page_maintitle', 'HOW IT WORKS');
		$procedure_pagesubtitle = get_theme_mod('procedure_page_subtitle', 'Our Procedure');
		$procedure_pagetext = get_theme_mod('procedure_page_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .');
		?>
		<div class="container">  
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-6 col-sm-8 textcenter">
					<?php if($procedure_page_maintitle){ ?>
					<div class="section-title">
						<h2><?php echo ($procedure_page_maintitle);  ?></h2>
					</div>
					<?php }?>
						<?php if($procedure_pagesubtitle){ ?>	
					<div class="section-subtitle">
						<h3><?php echo ($procedure_pagesubtitle);  ?></h3>
					</div>
					<?php }?>
					<div class="section-area-text">
						<p><?php echo ($procedure_pagetext);  ?></p>
					</div>
				</div>
			</div>

			<div class="procedure-single-area">  
				<?php
				$cols = get_theme_mod('procedure_npp_count', 2);
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
					$colCls = 'col-md-4 col-sm-6 col-xs-12';
					break;
					default: 
					$colCls = 'col-md-3 col-sm-6 col-xs-12';
					break;
				}
				$icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');
				?>

				<?php
				for( $i = 1; $i <= $cols; $i++ ){

					if( get_theme_mod('procedure_page_TitleColor'.$i,true) ) {
						$procedure_page_TitleColor = 'color:'.esc_attr(get_theme_mod('procedure_page_TitleColor'.$i)).';';
					}

					if( get_theme_mod('procedure_page_ContentColor'.$i,true) ) {
						$procedure_page_ContentColor = 'color:'.esc_attr(get_theme_mod('procedure_page_ContentColor'.$i)).';';
					}

					if( get_theme_mod('procedure_page_ButtonColor'.$i,true) ) {
						$procedure_page_ButtonColor = 'color:'.esc_attr(get_theme_mod('procedure_page_ButtonColor'.$i)).';';
					}

					if( get_theme_mod('procedure_page_ButtonBorderColor'.$i,true) ) {
						$procedure_page_ButtonBorderColor = 'border-color:'.esc_attr(get_theme_mod('procedure_page_ButtonBorderColor'.$i)).';';
					}

					if( get_theme_mod('procedure_page_BoxBorderColor'.$i,true) ) {
						$procedure_page_BoxBorderColor = 'border-color:'.esc_attr(get_theme_mod('procedure_page_BoxBorderColor'.$i)).';';
					}

					if($showStatic === false){
						$url = get_theme_mod('procedure_page_url_'.$i, '#');

						$procedure_page_title = get_theme_mod('procedure_page_title_'.$i, 'Join Our Regular Test Series!');
						$procedure_page_id = get_theme_mod('procedure_page'.$i); 
						$procedure_page_icon = get_theme_mod('procedure_page_icon'.$i);
						if($procedure_page_icon){
							?>
							<div class="<?php echo $colCls;?> p-area padding0">
								<div class="p-single-bx wow bounceInUp" style="<?php echo esc_attr($procedure_page_BoxBorderColor); ?>">
									<div class="p-single-bx-inner">
											<span class="<?php echo $procedure_page_icon; ?>"></span>
										
										<div class="single-top">
											<h4 class="title inner-area-title" style="<?php echo esc_attr($procedure_page_TitleColor); ?>">
												<?php echo $procedure_page_title; ?>
											</h4>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					}else{?>
						<div class="<?php echo $colCls;?> p-area padding0">
							<div class="p-single-bx wow bounceInUp">
								<div class="p-single-bx-inner">
										<span class="fa fa-users"></span>
									<div class="single-top">
										<h4 class="title inner-area-title">Join Our Regular Test Series!
										</h4>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>	
							<div class="holder">
  <div class="ellipse"></div>
  <div class="ellipse ellipse2"></div>
</div>			
						</div>
					<?php }

				}?>
			</div>
			<div class="clearfix"></div>
				<?php
				      $procedurebutton = get_theme_mod('procedure_btn_txt', 'Enroll Now'); 
				      $procedurebtnlink = get_theme_mod('procedure_btnlink', '#');
				    ?>

				      <?php if( get_theme_mod('procedure_button_display','show' ) == 'show') :
				        ?>  
				        <div class="procedure-btn textcenter">
				          <a href="<?php echo $procedurebtnlink ?>" target="_blank">      
				            <?php echo ($procedurebutton );  ?><i class="fa fa-arrow-right" aria-hidden="true"></i>
				          </a></div>
				        <?php endif ?>
		</div>
	</div> 
	<!-- procedure Area Start -->
	<script>
		jQuery.noConflict();
		$(function(){
			function pareaHeight(){
				var ht = 0;
				$('#procedure .p-area').each(function(i){
					var tHt = $(this).height();
					if(ht<tHt){
						ht=tHt;
					}
				});
				$('#procedure .p-area').height(ht+'px');
			}
			pareaHeight();
		});
		$( window ).resize(function(){
			pareaHeight();
		});
	</script>
	
<?php } 