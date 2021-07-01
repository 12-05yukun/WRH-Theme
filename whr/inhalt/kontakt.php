<?php 
$name=get_field( 'name', $block['partner']->ID );
$image=get_field( 'image', $block['partner']->ID );
$position=get_field( 'position', $block['partner']->ID );
$phone=get_field( 'phone', $block['partner']->ID );
$email=get_field( 'email', $block['partner']->ID );
?>
   

<div class='row kontakt'>
  <div>
    <h2><?php echo $block['headline']?></h2>
    <div><?php echo $block['text']?></div>
    <?php if($block['link']){?>
     <a class='link' href='<?php echo $block['link']['url']?>'><?php echo $block['link']['title']?></a>
    <?php }?>
  </div>
    <div>
  <div class='partner-box'>
      <div class='partner-info'>
        <div class='partner-title'>IHR ANSPRECHPARTNER</div>
        <div class='partner-name'><?php echo $name?></div>
        <div class='partner-position'><?php echo $position?></div>
        <?php if($phone){?>
        <div class='partner-phone'><a href='tel:<?php echo $phone?>'><?php echo $phone?></a></div><?php }?>
        <?php if($email){?>
        <div class='partner-email'><a href='mailto:<?php echo $email?>'><?php echo $email?></a></div><?php }?>
      </div>
      <div class='partner-image' style='background-image:url(<?php echo $image?>)'></div>
    </div>
  </div>
  
</div>