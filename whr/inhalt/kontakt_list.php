<?php 
$partners =$block['list']
?>

<div class='kontakt-list'>
<?php foreach($partners as $partner){?>
        <div class='kontakt-box'>
                <div class='kontakt-img' style='background-image:url(<?php echo get_field('image',$partner)?>)'></div>
                <div class='kontakt-content'>
                        <div class='kontakt-name'><?php echo get_field('name',$partner)?></div>
                        <div class='kontakt-position'><?php echo get_field('position',$partner)?></div>
                        <div class='kontakt-way'>
                        <?php if(get_field('phone',$partner)){?>
                             <div class='partner-phone'><a href='tel:<?php echo get_field('phone',$partner)?>'><?php echo get_field('phone',$partner)?></a></div><?php }?>
                        <?php if(get_field('email',$partner)){?>
                             <div class='partner-email'><a href='mailto:<?php echo get_field('email',$partner)?>'><?php echo get_field('email',$partner)?></a></div><?php }?>
                        </div>
                </div>
        </div>
<?php }?>
</div>