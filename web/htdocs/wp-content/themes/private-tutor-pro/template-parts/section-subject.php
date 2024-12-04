<?php   
if(get_theme_mod('subject_area_disable') != 'on' ){ ?>
	<?php 
	if( get_theme_mod('subject_areaTpadding',true) ) {
		$subject_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('subject_areaTpadding')).';';
	}
	if( get_theme_mod('subject_areaBpadding',true) ) {
		$subject_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('subject_areaBpadding')).';';
	}
	?>	

	<div class="subject-area text-center" id="subject" style="<?php echo esc_attr($subject_areaTpadding); ?>" "<?php echo esc_attr($subject_areaBpadding); ?>">

		<div class="subject-single-area" > 
			<?php
			$subjects_page_id = get_theme_mod('subjects_page');	
			$subjects_maintitle = get_theme_mod('subjects_maintitle', 'My Subjects');
			$subjects_subtitle = get_theme_mod('subjects_subtitle', 'CHOOSE AND EXPLORE');

			?>
			<div class="container">
				<div class="row justify-content-center">
					<?php if($subjects_maintitle || $subjects_subtitle){ ?>
					<div class="col-xl-6 col-lg-6 col-sm-8">
						<div class="section-title">
							<h3><?php echo ($subjects_subtitle);  ?></h3>
							<h2><?php echo ($subjects_maintitle);  ?></h2>
							<div class="titleborder"></div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
			<div class="container">
				<?php 
				$showStatic = true;
				$cols = get_theme_mod('subject_npp_count', 5);
				$cols++;
				switch($cols){
					case 1:
					$colCls = 'col-md-12 col-sm-12';
					break;
					case 2:	
					$colCls = 'col-md-6 col-sm-6';
					break;
					case 3:
					case 5:
					case 6:
					case 9:
					case 11:
					case 13:
					case 15:
					case 17:
					case 19:
					case 21:
					case 23:
					$colCls = 'col-md-4 col-sm-6';
					break;
					default: 
					$colCls = 'col-md-3 col-sm-6';
					break;
				}
				for( $i = 1; $i <= $cols; $i++ ){
					$subjects_page_id = get_theme_mod('subjects_page'.$i); 
					$subjects_page_icon = get_theme_mod('subjects_page_icon'.$i);
					$subjects_page_icon1 = get_theme_mod('subjects_page_icon1'.$i);
					if($subjects_page_id){
						$showStatic = false;
						echo subjectShortCode($subjects_page_id, $isCustomizer=true, $i);
					}
				}
				if($showStatic === true){
					for( $i = 1; $i <= $cols; $i++ ){ ?>
						<div class="<?php echo $colCls;?> single-subject-bx wow zoomIn">
							<div class="single-subject">
								<div class="subject-icon">
									<a href="#">	
										<i class="fa fa-cogs"></i>
									</a>
									<a href="#">
										<img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri().'/images/appointment.jpg');?>" alt="subjects" />
									</a>
								</div>

								<h4 class="post-title inner-area-title wow fadeInDown">Physics</h4>
								<p class="section-area-text">Lorem ipsumst dolors consectetur adipisicing sed does eiusmodes tempor incididunt labore.</p>
								<div class="subject-content">
	                        		<ul class="sub-btn">
	                           			<li> <a href="#"><i class="fa fa-chevron-right"></i></a></li>
						           </ul>
						       </div>
							</div>
							
						</div>
						<?php 
					}
				} ?>
			</div>
			<div class="clearfix"></div>
			    <?php
      $allsubbutton = get_theme_mod('Subject_allbtn_txt', 'EXPLORE MORE'); 
      $allsubbuttonlink = get_theme_mod('Subject_allbtnlink', '#');
      ?>

      <?php if( get_theme_mod('allsub_button_display','show' ) == 'show') :
        ?>  
        <div class="allsub-btn textcenter">
          <a href="<?php echo $allsubbuttonlink ?>" target="_blank">      
            <?php echo ($allsubbutton );  ?>
          </a></div>
        <?php endif ?>
		</div>
		<div class="clearfix"></div>
	</div>
		<script>
		jQuery.noConflict();
		$(function(){
			function singlesubjectHeight(){
				var ht = 0;
				$('#subject .single-subject').each(function(i){
					var tHt = $(this).height();
					if(ht<tHt){
						ht=tHt;
					}
				});
				$('#subject .single-subject').height(ht+'px');
			}
			singlesubjectHeight();
		});
		$( window ).resize(function(){
			singlesubjectHeight();
		});
	</script>

<?php }