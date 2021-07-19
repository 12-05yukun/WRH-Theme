<?php 
$angebots =$block['angebot'];
$filters=get_field_object('field_60b0a67bba69f');
$filter_check=[];
foreach($angebots as $an){
        foreach(get_field('kategorie',$an) as $kat){$filter_check[]=$kat;}
}
?>

<div class='row angebot-list'>
  <h1><?php echo $block['headline']?></h1>
  <p><?php echo $block['content']?></p>
  <div class='angebot-filters-container'>
     <div class='angebot-filters'>
        <div choice='all' class='angebot-choice selected'>
               Alle
        </div>
      
     <?php foreach($filters['choices'] as $key => $choice){ ?>
      <?php if(in_array($key,$filter_check)){?>
        <div choice='<?php echo $key?>' class='angebot-choice'>
                <?php echo $choice;?>
        </div>
     <?php }}?>     
     </div>
  </div>
  <div class='angebot-list-items'>
    <?php if ($angebots){ foreach($angebots as $angebot){ $punkte=get_field('punkte',$angebot);  $permalink = get_field('link', $angebot)  ? get_field('link', $angebot)['url']: get_permalink( $angebot->ID );?>
      <a target="_blank" class='all item visible <?php foreach(get_field('kategorie',$angebot) as $kat){echo ' '.$kat;}?>' href='<?php echo  $permalink; ?>'>
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
           <div class='more'><?php echo get_field('link',$angebot)['title']?></div>
           <?php }?>
        </div>
    </a> 
    <?php }?>
    <?php }?>
  </div>
</div>

<script>
jQuery(document).ready(function ($) {
        ScrollReveal().reveal(".angebot-list", {
		delay: 200,
		origin: "bottom",
		distance: "20px",
		
	});
        ScrollReveal().reveal('.item', { origin: "bottom",distance: "20px",delay: 200,interval: 200 });

        $('.angebot-choice').click(function(e){
                $('.angebot-choice.selected').removeClass('selected');
                $(e.target).addClass("selected");
                let choice=$(e.target).attr("choice");
                $(`.item`).removeClass('visible')
                $(`.item.${choice}`).addClass('visible')
        })

       
})
</script>