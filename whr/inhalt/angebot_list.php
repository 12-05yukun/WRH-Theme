<?php 
$angebots =$block['angebot']

?>

<div class='row angebot-list'>
  <h1><?php echo $block['headline']?></h1>
  <p><?php echo $block['content']?></p>
  <div class='angebot-list-items'>
    <?php if ($angebots){ foreach($angebots as $angebot){ $punkte=get_field('punkte',$angebot);?>
      <div class='item'>
        <div class='item-image' >
           <img src='<?php echo get_field('image',$angebot)?>' />
        </div>
        <div class='angebot-list-info'>
           <h2><?php echo get_field('headline',$angebot)?></h2>
           <div class='excerpt'><?php echo get_field('excerpt',$angebot)?></div>
           <div class='angebot-list-detail'>
                   <?php if($punkte){ foreach($punkte as $punkt ) { ?>
                   <div class='punkt' style='background-image:url(<?php echo $punkt['icon']?>)' ><?php echo $punkt['text']?> </div>
                   <?php } }?>
           </div>
           <?php if (get_field('link',$angebot)){?>
           <a href='<?php echo  get_field('link',$angebot)['url']?>'><?php echo get_field('link',$angebot)['title']?></a>
           <?php }?>
        </div>
    </div> 
    <?php }?>
    <?php }?>
  </div>
</div>
