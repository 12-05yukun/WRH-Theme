<div class='row content-group'>
  <h1><?php echo $block['headline']?></h1>
  <p><?php echo $block['text']?></p>
  <div class='content-group-items'>
    <?php if ($block['items']){ foreach($block['items'] as $item){?>
        <a href='<?php echo $item['link']['url']?>' class='item'>
          <div class='item-image' style='background-image:url(<?php echo $item['image']?>)'></div>
          <p><?php echo $item['text']?></p>
         <div class='more'> <?php echo $item['link']['title']?></div>
       </a> 
    <?php }?>
    <?php }?>
  </div>
</div>


<script>
jQuery(document).ready(function ($) {
        ScrollReveal().reveal(".content-group", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
        });
        ScrollReveal().reveal('.item', { delay: 200,interval: 200,origin: "bottom",distance: "20px", });
})
</script>