<div class='treatments'>
        <h2><?php echo $block['type']?></h2>
        <div class='treatments-container'>
                <?php foreach($block['treatment'] as $treatment){?>
                        <div class='treatment-box'>
                                <div class='title'><?php echo $treatment['title']?></div>
                                <div class='time'>Dauer: ca. <?php echo $treatment['time']?> Min.</div>
                                <div class='detail'><?php echo $treatment['detail']?></div>
                                <div class='price'>€ <?php echo $treatment['price']?>,-- pro Person</div>
                        </div>
                <?php }?>
        </div>

</div>
<script>
jQuery(document).ready(function ($) {
        ScrollReveal().reveal(".treatments h2", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
	});
        ScrollReveal().reveal('.treatment-box', { origin: "bottom",distance: "20px",delay: 200,interval: 200 });
})
</script>