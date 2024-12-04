<?php

if(get_theme_mod('counter_area_disable') != 'on' ){
	?>
	<!-- counter Area Start -->
	<?php 
	if( get_theme_mod('counter_areaTpadding',true) ) {
		$counter_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('counter_areaTpadding')).';';
	}
	if( get_theme_mod('counter_areaBpadding',true) ) {
		$counter_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('counter_areaBpadding')).';';
	}
	?>		
	<div class="counter-area text-center" id="counter" style="<?php echo esc_attr($counter_areaTpadding); ?>" "<?php echo esc_attr($counter_areaBpadding); ?>">

		 <?php
	          $showStatic = true;
	          for( $i = 1; $i < 9; $i++ ){
	            $counter_page_id = get_theme_mod('counter_page_num'.$i); 
	            if(!empty($counter_page_id)){
	              $showStatic = false;
	              break;
	            }
	          }
         ?>

		<div class="container">  
			<div class="counter-single-area">  
				<?php
				$cols = get_theme_mod('counter_npp_count', 3);
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
 				<div class="row counter-post-boxes">
                      <?php
                      for( $i = 1; $i <= $cols; $i++ ){
                        if($showStatic === false){
                            $counter_page_id = get_theme_mod('counter_page'.$i);
                          $counter_page_title = get_theme_mod('counter_page_title'.$i, 'Satisfaction Rate');
                          $counter_page_num = get_theme_mod('counter_page_num'.$i, '100');
                       
                      if($counter_page_num){
                          ?>

                            <div class="<?php echo $colCls;?> counter-top">
                              <div class="cd-single wow fadeInRight">
                                 <div class="cd-num count"><?php echo $counter_page_num; ?>  </div>
                                  <div class="clearfix"></div>
                                  <div class="cd-title"><?php echo $counter_page_title; ?>  </div>
                              <div class="clearfix"></div>
                            </div>
                              <div class="clearfix"></div>
                          </div>
                            <?php

                      }
                          
                      }else{?>
                        <div class="<?php echo $colCls;?> counter-top">
                              <div class="cd-single wow fadeInRight">
                                 <div class="cd-num count">100%</div>
                                  <div class="clearfix"></div>
                                  <div class="cd-title">Satisfaction Rate</div>
                              <div class="clearfix"></div>
                            </div>
                              <div class="clearfix"></div>
                        </div>
                      <?php }
                    }?>
                    <div class="clearfix"></div>
                  </div>



			</div>
		</div>
	</div> 
	<!-- counter Area Start -->
	<script>
		jQuery.noConflict();
		$(function(){
			function singletopHeight(){
				var ht = 0;
				$('#counter .single-top').each(function(i){
					var tHt = $(this).height();
					if(ht<tHt){
						ht=tHt;
					}
				});
				$('#counter .single-top').height(ht+'px');
			}
			singletopHeight();
		});
		$( window ).resize(function(){
			singletopHeight();
		});
	</script>
<script>
  $(document).ready(function() {

  var counters = $(".count");
  var countersQuantity = counters.length;
  var counter = [];

  for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
  }

  var count = function(start, value, id) {
    var localStart = start;
    setInterval(function() {
      if (localStart < value) {
        localStart++;
        counters[id].innerHTML = localStart;
      }
    }, 40);
  }

  for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
  }
});
</script>
	
<?php } 