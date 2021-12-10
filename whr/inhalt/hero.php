<div class="hero" style="background-image:url(<?php echo $block['placeholder'];?>)">
<div style='background-image:url(<?php echo get_field('logo_big','option')?>)' class='logo'></div>
    <div class="content">
        <div class="headline"><?php echo $block['headline'];?></div>
        <div class="text"><?php echo $block['subline'];?></div>
       
    </div>
    <?php if($block['circle']['circle_aktiv']) {?>
        <a href="<?php echo $block['circle']['circle_link']['url'];?>" target="<?php echo $block['circle']['circle_link']['target'];?>" class="circle">
        <div class="inner">
            <?php echo $block['circle']['circle_content'];?>
    </div>
        </a>
    <?php } ?> 
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
        <a style="overflow:hidden;display:block;width:145px;z-index:3;border:0px;right:0px;position:absolute;bottom: -170px;right: 1%;" href="/bewertungen">
            <img style="margin-bottom:25px;width: 100%;" src="https://www.theaterhotel-wien.at/wp-content/themes/theaterhotel/img/Libertas_Baumsiegel.png">


    </a>
    <?php }?>
</div>
<style>
    .hero .circle {
        background-color: #a8925e;
        color: #FFF;
        height:200px;
        width:200px;
        border-radius:50%;
        position:absolute;
        z-index:99;
        text-align:center;
        display:flex;
        justify-content:center;
        align-items:center;
        left:10vw;
        bottom:15vh;
        transform:rotate(-15deg);
        font-size:12px;
    }
    @media(max-width:800px) {
        .hero .circle {
            border-radius:0px;
            transform:none;
            bottom:0;
            height:auto;
            padding:1rem 1rem;
        }
    }
    .hero .circle:hover {
        background: #383838;
    }
    .hero .circle * {
        margin:0;
    }
</style>
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
