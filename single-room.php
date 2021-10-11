
<?php 
get_header();
$field = get_field_object('ausstattung');
$values = get_field('ausstattung');
?>

<div class='pageheader' style='background-image:url(<?php echo get_field('image')?>)'>
  <div class='pageheader-content'>
    <h1><?php echo get_field('title')?></h1>
  </div>
</div>

<div class='halfblock room-block'>

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
</div>
<?php if(get_field('additional_suites')) {
  foreach(get_field('additional_suites') as $room) {?>
  <div class='halfblock room-block align-<?php echo $room['alignment'];?>'>

        <div class='room-slicker'>
     <?php foreach($room['imagelist'] as $image){?>
         <div class='block-image' style='background-image:url(<?php echo wp_get_attachment_url($image);?>)'></div>
     <?php }?>
     </div>
    <div class='block-content'>
      <?php echo $room['text'];?>
  
    </div>
</div>
  <?php }
}?>
<div class="half-block room-block">

</div>


<?php get_footer();?>

