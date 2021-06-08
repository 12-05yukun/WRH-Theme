<?php
$jobs = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'		=> 'job'
));
$level=get_field_object('field_60bf4b7462232');
?>


<div class='row joblist'>
      <h1>Karriere</h1>
      <div class='joblist-filter'>
              <div class='filter-button selected' id='profi-button'>Profi-Jobs im Richtershof</div>
              <div class='filter-button' id='ausbild-button'>Ausbildung im Richtershof</div>
      </div>
      <div class='joblist-container profi'>
        <?php foreach($jobs as $job){?>
                <?php if(get_field('job_level',$job)=='profi'){?>
                        <a href='<?php echo the_permalink($job->ID)?>' class='job-container'>
                               <div class='title'> <?php echo get_field('title',$job)?></div>
                               <div class='ort'><?php echo get_field('ort',$job)?></div>
                               <div class='start'>Eintritt ab:  <?php echo get_field('start',$job)?></div>
                        </a>
                <?php }?>
        <?php }?>
      </div>
      <div class='joblist-container ausbild'>
      <?php foreach($jobs as $job){?>
                <?php if(get_field('job_level',$job)=='ausbildung'){?>
                        <a href='<?php echo the_permalink($job->ID)?>' class='job-container'>
                               <div class='title'> <?php echo get_field('title',$job)?></div>
                               <div class='ort'><?php echo get_field('ort',$job)?></div>
                               <div class='start'>Eintritt ab:  <?php echo get_field('start',$job)?></div>
                        </a>
                <?php }?>
        <?php }?>
      </div>
</div>

<script>
        jQuery(document).ready(function ($) {
               $('#profi-button').click(function(e){
                       if($(e.target).hasClass('selected')){return ;}else{
                               $('#ausbild-button').removeClass('selected')
                               $(e.target).addClass('selected');

                               $('.profi').css('display','flex');
                               $('.ausbild').css('display','none')
                       }
               })
               $('#ausbild-button').click(function(e){
                       if($(e.target).hasClass('selected')){return ;}else{
                               $('#profi-button').removeClass('selected')
                               $(e.target).addClass('selected');
                               $('.ausbild').css('display','flex');
                               $('.profi').css('display','none')
                       }
               })

        })
</script>