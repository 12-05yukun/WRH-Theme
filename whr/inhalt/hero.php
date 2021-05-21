<div class="hero" style="background-image:url(<?php echo $block['placeholder'];?>)">
<div style='background-image:url(<?php echo get_field('logo_big','option')?>)' class='logo'></div>
    <div class="content">
        <div class="headline"><?php echo $block['headline'];?></div>
        <div class="text"><?php echo $block['subline'];?></div>
       
    </div>
    <?php if($block['video']){?>
       <video autoplay loop muted src="<?php echo $block['video'];?>">
       </video>
    <?php } ?>
    <?php if($block['sidebar']){?>
      <div class='hero-sidebar'>
         <?php foreach($block['sidebar'] as $icon){ ?>
             <a style='background-color:<?php if($icon['background']=='gold'){ echo '#a8925e'; }else{echo 'transparent';}?>' href='<?php echo $icon['link']['url']?>' class='hero-sidebar-box'>
               <img src='<?php echo $icon['icon'] ?>'> </img>
               <div><?php echo $icon['link']['title']?></div>
             </a>
         <?php } ?>
        </div>
    <?php }?>
</div>

<div class='booking-bar'>
   <div class='booking-calendar'>
         <input type="text" id="start-text-calendar" class="calendar" ></input>
         <div class='start-date-container'>
                  <div class='label'>Ankunft</div>
                  <div id='start-date'></div>
         </div>
         <div>
                 <div class='label'>Abreise</div>
                 <div id='end-date'></div>
        </div>
   </div>
   <div class='booking'>
      <div class='gast'>Gäste</div>
      <select name="gast" id="gast">
        <?php for($i=1;$i<10;$i++){?>
        <option value="<?php echo $i?>"><?php echo $i?></option>
        <?php }?>
     </select>
  </div>
  <div class='button-group'> 
     <div class='whr-button' id='find-room'>ZIMMER FINDEN</div>
     <div class='whr-button' id='table-booking'>TISCH RESERVIEREN</div>
  </div>
</div>