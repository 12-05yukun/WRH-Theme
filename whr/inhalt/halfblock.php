<div class='halfblock <?php if($block['padded']){echo 'row-small';}?>'>
  <?php if($block['image_aligement']=='right'){?>
    <div class='block-content'>
      <?php echo $block['text']?>
      <?php if($block['link']){?>
         <a href='<?php echo $block['link']['url']?>'><?php echo $block['link']['title']?></a>
      <?php }?>
    </div>
    <div class='block-image' style='background-image:url(<?php echo $block['image']?>)'></div>
  <?php }else{?>
    <div class='block-image' style='background-image:url(<?php echo $block['image']?>)'></div>
    <div class='block-content'>
      <?php echo $block['text']?>
      <?php if($block['link']){?>
         <a href='<?php echo $block['link']['url']?>'><?php echo $block['link']['title']?></a>
      <?php }?>
    </div>
  <?php } ?>
</div>