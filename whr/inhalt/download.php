<div class='row download'>
        <h1>Unsere Broschüren</h1>
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