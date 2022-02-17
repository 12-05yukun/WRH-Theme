<?php
  $jobs = get_posts(array(
    'posts_per_page'	=> -1,
    'post_type'		=> 'job'
  ));
  $level=get_field_object('field_60bf4b7462232');
  $name=get_field( 'name', $block['partner_profi']->ID );
  $image=get_field( 'image', $block['partner_profi']->ID );
  $position=get_field( 'position', $block['partner_profi']->ID );
  $phone=get_field( 'phone', $block['partner_profi']->ID );
  $email=get_field( 'email', $block['partner_profi']->ID );
  $name2=get_field( 'name', $block['partner_azubi']->ID );
  $image2=get_field( 'image', $block['partner_azubi']->ID );
  $position2=get_field( 'position', $block['partner_azubi']->ID );
  $phone2=get_field( 'phone', $block['partner_azubi']->ID );
  $email2=get_field( 'email', $block['partner_azubi']->ID );
?>


<div class='row joblist'>
    <h1>Karriere</h1>
    <div class='joblist-filter'>
            <div class='filter-button selected' id='profi-button'>Profi-Jobs im Richtershof</div>
            <div class='filter-button' id='ausbild-button'>Ausbildung im Richtershof</div>
    </div>
<div class='joblist-container profi'> 
  <div class='row kontakt' style="padding:0;margin:0">
  <div>
    <h2><?php echo $block['headline_profi']?></h2>
	  <div class="job-container-test">
		   <?php foreach($jobs as $job){?>
                <?php if(get_field('job_level',$job)=='profi'){
                  $start = get_field('ab_sofort', $job) ? "Ab sofort, oder nach Vereinbarung":get_field('start', $job);?>

                        <a href='<?php echo the_permalink($job->ID)?>' class='job-container'>
                               <div class='title'> <?php echo get_field('title',$job)?></div>
                               <div class='ort'><?php echo get_field('ort',$job)?></div>
                               <div class='start'>Eintritt ab:  <?php echo $start;?></div>
                        </a>
                <?php }?>
        <?php }?> 
	  </div>
    
  </div>
      <div>
      <div style="max-width:400px;margin:0 auto;" class="logos">
          <?php echo $block['logos'];?>
        </div>
        <div class='partner-box'>
          <div class='partner-info'>
            <div class='partner-title'>IHR ANSPRECHPARTNER</div>
            <div class='partner-name'><?php echo $name?></div>
            <div class='partner-position'><?php echo $position?></div>
            <?php if($phone){?>
            <div class='partner-phone'><a href='tel:<?php echo $phone?>'><?php echo $phone?></a></div><?php }?>
            <?php if($email){?>
            <div class='partner-email'><a href='mailto:<?php echo $email?>'><?php echo $email?></a></div><?php }?>
          </div>
          <div class='partner-image' style='background-image:url(<?php echo $image?>)'></div>
        </div>
        <div style="max-width:400px;margin:0 auto;"><?php echo $block['text_profi']?></div>
    <?php if($block['link']){?>
     <a class='link' href='<?php echo $block['link_profi']['url']?>'><?php echo $block['link_profi']['title']?></a>
    <?php }?>
      </div>
	  </div>
</div>
<div class='joblist-container ausbild'>
      <div class='row kontakt' style="padding:0;margin:0">
        <div>
          <h2><?php echo $block['headline_azubi']?></h2>
          <div class="job-container-test">
		   <?php foreach($jobs as $job){?>
                <?php if(get_field('job_level',$job)=='ausbildung'){
                  $start = get_field('ab_sofort', $job) ? "Ab sofort, oder nach Vereinbarung":get_field('start', $job);?>

                        <a href='<?php echo the_permalink($job->ID)?>' class='job-container'>
                               <div class='title'> <?php echo get_field('title',$job)?></div>
                               <div class='ort'><?php echo get_field('ort',$job)?></div>
                               <div class='start'>Eintritt ab:  <?php echo $start;?></div>
                        </a>
                <?php }?>
        <?php }?> 
	  </div>
                </div>

     
    <div>
    <div style="max-width:400px;margin:0 auto;" class="logos">
          <?php echo $block['logos'];?>
        </div>
  <div class='partner-box'>
      <div class='partner-info'>
        <div class='partner-title'>IHR ANSPRECHPARTNER</div>
        <div class='partner-name'><?php echo $name2?></div>
        <div class='partner-position'><?php echo $position2?></div>
        <?php if($phone2){?>
        <div class='partner-phone'><a href='tel:<?php echo $phone2;?>'><?php echo $phone2;?></a></div><?php }?>
        <?php if($email2){?>
        <div class='partner-email'><a href='mailto:<?php echo $emai2;?>'><?php echo $email2;?></a></div><?php }?>
      </div>
      <div class='partner-image' style='background-image:url(<?php echo $image2;?>)'></div>
    </div>
    <div style="max-width:400px;margin:0 auto"><div><?php echo $block['text_azubi']?></div>
          <?php if($block['link']){?>
          <a class='link' href='<?php echo $block['link_azubi']['url']?>'><?php echo $block['link_azubi']['title']?></a>
          <?php }?>
        </div>
  </div>
  </div>
  
      </div>
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
			        $('.ausbild').css('transform','none');
                               $('.ausbild').css('opacity','1');
                       }
               })

        })
</script>

<style>
  .joblist-container  * {
    transform:none!important;
    opacity:1!important;
  }

  iframe {
    max-width:100%;
    height:auto;
  }
</style>
