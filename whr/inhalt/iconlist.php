<div class="component-iconlist">
    <div class="inner">
        <h2><?php echo $block['headline'];?></h2>
        <div class="intro">
            <?php echo $block['intro'];?></p>
        </div>
        <div class="grid">
        <?php if($block['icons']):foreach($block['icons'] as $icon):?>
            <div class="icon">
                <img src="<?php echo $icon['icon'];?>" alt="Icon" />
                <div>
                    <?php echo $icon['text'];?>
                </div>
            </div>
        <?php endforeach;endif;?>
        </div>
    </div>

</div>