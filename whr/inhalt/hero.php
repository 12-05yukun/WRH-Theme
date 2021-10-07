<div class="hero" style="background-image:url(<?php echo $block['placeholder'];?>)">
<div style='background-image:url(<?php echo get_field('logo_big','option')?>)' class='logo'></div>
    <div class="content">
        <div class="headline"><?php echo $block['headline'];?></div>
        <div class="text"><?php echo $block['subline'];?></div>
       
    </div>
    <?php if($block['video']){?>
       <video autoplay loop muted playsinline src="<?php echo $block['video'];?>">
       </video>
    <?php } ?>
    <?php if($block['sidebar']){?>
      <div class='hero-sidebar'>
         <?php foreach($block['sidebar'] as $icon){ ?>
             <a style='background-color:<?php if($icon['background']=='gold'){ echo '#a8925e'; }else{echo 'transparent';}?>' href='<?php echo $icon['link']['url']?>' class='hero-sidebar-box'>
               <img src='<?php echo $icon['icon'] ?>'> </img>
               <div><?php echo $icon['link']['title']?></div>
             </a>
         <?php } ?>
        </div>
    <?php }?>
</div>

<script>
jQuery(document).ready(function ($) {
        ScrollReveal().reveal(".hero .content", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
                reset: true,
                duration:900
	});
})
</script>
