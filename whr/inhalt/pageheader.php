<div class='pageheader' style='background-image:url(<?php echo $block['image']?>)'>
  <div class='pageheader-content'>
    <h1><?php echo $block['headline']?></h1>
    <p class='content-text'><?php echo $block['subline']?></p>
  </div>
</div>

<script>
jQuery(document).ready(function ($) {
        ScrollReveal().reveal(".pageheader-content", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
		reset: true,
	});
})
</script>