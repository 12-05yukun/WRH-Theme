
<?php 
get_header();
$field = get_field_object('ausstattung');
$values = get_field('ausstattung');
?>

<div class='pageheader' style='background-image:url(<?php echo get_field('image')?>)'>
  <div class='pageheader-content'>
    <h1><?php echo get_field('title')?></h1>
    <p class='content-text'><?php echo get_field('subline')?></p>
  </div>
</div>

<div class='halfblock room-block'>
  <?php if(get_field('image_aligement')=='right'){?>
    <div class='block-content'>
      <?php echo get_field('text')?>
      <div class='ausstattung-title'> AUSSTATTUNG</div>
      <div class='ausstattung-list'>
          <?php
             foreach(get_field('ausstattung') as $ausstattung){
             ?>
               <div role="img" alt="heart" class='<?php echo $ausstattung?>'></div>
             <?php }?>    
      </div>
      <?php if(get_field('link')){?>
         <a href='<?php echo get_field('link')['url']?>'><?php echo get_field('link')['title']?></a>
      <?php }?>
    </div>
    <div class='room-slicker'>
     <?php foreach(get_field('imagelist') as $image){?>
         <div class='block-image' style='background-image:url(<?php echo $image['image']?>)'></div>
     <?php }?>
   </div>
  <?php }else{?>
        <div class='room-slicker'>
     <?php foreach(get_field('imagelist') as $image){?>
         <div class='block-image' style='background-image:url(<?php echo $image['image']?>)'></div>
     <?php }?>
     </div>
    <div class='block-content'>
      <?php echo get_field('text')?>
      <?php if($field['choices']){?>
      <div class='ausstattung-title'>AUSSTATTUNG</div>
      <div class='ausstattung-list'>
          <?php   
             foreach($field['choices'] as $choice => $label){
             ?>
              <?php if(in_array($choice,$values)){ ?>
               <div role="img" alt="<?php echo $label?>" class='room-ausstatt <?php echo $choice?>'></div>
               <div class='popup popup-<?php echo $label ?>'>
                <p>
                   <?php echo $label?>
                </p>
               </div>
             <?php }}?>    
      </div>
      <?php }?>
      <?php if(get_field('link')){?>
         <a href='<?php echo get_field('link')['url']?>'><?php echo get_field('link')['title']?></a>
      <?php }?>
    </div>
  <?php } ?>
</div>


<?php get_footer();?>

