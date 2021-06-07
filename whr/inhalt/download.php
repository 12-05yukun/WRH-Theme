<div class='row download'>
        <div class='download-list'>
           <?php foreach($block['downloads'] as $download){?>
                <div class='download-box'>
                        <div class='download-image'>
                                <img src='<?php echo $download['image']?>' />
                        </div>
                        <div class='download-title'><?php echo $download['title']?></div>
                        <a target='__blank' href='<?php echo $download['link']?>' download>Herunterladen</a>
                </div>
           <?php }?>
        </div>
</div>

<script>
jQuery(document).ready(function ($) {
        ScrollReveal().reveal(".download h1", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
	});
        ScrollReveal().reveal('.download-box', { origin: "bottom",distance: "20px",delay: 200,interval: 200 });
})
</script>
