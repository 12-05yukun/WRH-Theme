
<div class='block <?php echo $block['image_aligement']?>'>
  <?php if($block['image_aligement']=='right'){?>
    <div class='block-content'>
      <?php echo $block['text']?>
      <?php if($block['link']){?>
         <a target="<?php echo $block['link']['target'];?>" class='link' href='<?php echo $block['link']['url']?>'><?php echo $block['link']['title']?></a>
      <?php }?>
    </div>
    <div class='block-image' style='background-image:url(<?php echo $block['image']?>)'></div>
  <?php }else{?>
    <div class='block-image' style='background-image:url(<?php echo $block['image']?>)'></div>
    <div class='block-content'>
      <?php echo $block['text']?>
      <?php if($block['link']){?>
         <a target="<?php echo $block['link']['target'];?>" class='link' href='<?php echo $block['link']['url']?>'><?php echo $block['link']['title']?></a>
      <?php }?>
    </div>
  <?php } ?>
</div>