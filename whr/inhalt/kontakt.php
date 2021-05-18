<?php 
$name=get_field( 'name', $block['partner']->ID );
$image=get_field( 'image', $block['partner']->ID );
$position=get_field( 'position', $block['partner']->ID );
$phone=get_field( 'phone', $block['partner']->ID );
$email=get_field( 'email', $block['partner']->ID );
?>
   

<div class='row kontakt'>

  <div>
    <h3><?php echo $block['headline']?></h3>
    <div><?php echo $block['text']?></div>
    <?php if($block['link']){?>
     <a href='<?php echo $block['link']['url']?>'><?php echo $block['link']['title']?></a>
    <?php }?>
  </div>
    <div>
  <div class='partner-box'>
      <div class='partner-info'>
        <div class='partner-title'>IHR ANSPRECHPARTNER</div>
        <div class='partner-name'><?php echo $name?></div>
        <div class='partner-position'><?php echo $position?></div>
        <div class='partner-phone'><?php echo $phone?></div>
        <div class='partner-email'>E-Mail schreiben</div>
      </div>
      <div class='partner-image' style='background-image:url(<?php echo $image?>)'></div>
    </div>
  </div>
  
</div>