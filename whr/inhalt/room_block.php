<div class='halfblock <?php if($block['padded']){echo 'row-small';}?> room-block'>
  <?php if($block['image_aligement']=='right'){?>
    <div class='block-content'>
      <?php echo $block['text']?>
      <?php if($block['link']){?>
         <a href='<?php echo $block['link']['url']?>'><?php echo $block['link']['title']?></a>
      <?php }?>
    </div>
    <div class='room-slicker'>
     <?php foreach($block['image_list'] as $image){?>
         <div class='block-image' style='background-image:url(<?php echo $image['image']?>)'></div>
     <?php }?>
   </div>s
  <?php }else{?>
        <div class='room-slicker'>
     <?php foreach($block['image_list'] as $image){?>
         <div class='block-image' style='background-image:url(<?php echo $image['image']?>)'></div>
     <?php }?>
     </div>
    <div class='block-content'>
      <?php echo $block['text']?>
      <?php if($block['link']){?>
         <a href='<?php echo $block['link']['url']?>'><?php echo $block['link']['title']?></a>
      <?php }?>
    </div>
  <?php } ?>
</div>