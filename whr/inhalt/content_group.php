<div class='row content-group'>
  <h1><?php echo $block['headline']?></h1>
  <p><?php echo $block['text']?></p>
  <div class='content-group-items'>
    <?php if ($block['items']){ foreach($block['items'] as $item){?>
      <div class='item'>
       <div class='item-image' style='background-image:url(<?php echo $item['image']?>)'></div>
       <p><?php echo $item['text']?></p>
       <a href='<?php echo $item['link']['url'] ?>'><?php echo $item['link']['title']?></a>
    </div> 
    <?php }?>
    <?php }?>
  </div>
</div>
