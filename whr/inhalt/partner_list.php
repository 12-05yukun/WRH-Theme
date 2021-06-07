<div class='row partner-list'>
        <div class='partner-list-container'>
        <?php foreach($block['partner'] as $partner){?>
                <a class='partner-list-box' href='<?php echo $partner['link']?>'>
                  <img src='<?php echo $partner['image']?>' />
                  <div class='partner-popup'><?php echo $partner['partner_name']?></div>
                </a>
                
        <?php } ?>
        </div>
</div>


<script>
        jQuery(document).ready(function ($) {
        var moveLeft = 20;
	var moveDown = 10;

	$(".partner-list-box img").hover(
		function (e) {
			$(e.target).next().show();
			//.css('top', e.pageY + moveDown)
			//.css('left', e.pageX + moveLeft)
			//.appendTo('body');
		},
		function (e) {
			$(e.target).next().hide();
		}
	);
	$(".partner-list-box img").mousemove(function (e) {
		$(e.target)
			.next()
			.css("top", e.pageY + moveDown)
			.css("left", e.pageX + moveLeft);
        });

        ScrollReveal().reveal(".partner-list h1", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
	});
        ScrollReveal().reveal('.partner-list-box img', { origin: "bottom",distance: "20px",delay: 200,interval: 200 });
})
</script>
