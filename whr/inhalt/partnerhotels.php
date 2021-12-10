<div class='row partner-hotels'>
<?php if($block['hotels']){?>
        <?php }?>
        <h2 ><?php echo $block['titel']?> </h2>
        <div class='partner-hotels-container ak'>
                <?php $i = 0;?>
        <?php foreach($block['hotels'] as $hotels){?>
                <?php $i++;?>
                <figure class="partner-hotels-figurebox item-<?php echo $i;?> ">
			<a href='<?php echo $hotels['link']?>' target="_blank" class="">
                        <img class="" src='<?php echo $hotels['bild']?>' alt= '<?php echo $hotels['bezeichnung']?>' title='<?php echo $hotels['bezeichnung']?>'/></a>
                        <figcaption class="img-caption"><?php echo $hotels['bezeichnung']?></figcaption>
</figure>
                
        <?php } ?>
        </div>
</div>

