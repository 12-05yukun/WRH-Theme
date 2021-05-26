<?php 
$blogs = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'post'
));
?>

<div class='row blog-list'>
  <div class='blog-list-page'>
  <?php foreach($blogs as $blog){
    $date=get_field('date',$blog);
    $day=substr($date,8,10);
    $year=substr($date,0,4);
    $month=substr(date('F', strtotime($date)),0,3);
    ?>
    <a class='blog-container' href='<?php echo the_permalink($blog->ID)?>'>
      <div class='blog-image' style='background-image:url(<?php echo get_field('image',$blog)?>)'>
       <?php if($date){?>
        <div class='date-flag'>
           <div style='font-size:28px;line-height:24px'><?php echo $day?></div>
           <div  style='font-size:16px;line-height:20px'><?php echo $month?></div>
           <div  style='font-size:16px;line-height:20px'><?php echo $year?></div>
        </div>
       <?php }?>
      </div>
      <div class='blog-info'>
        <h3><?php echo get_field('title',$blog)?></h3>
        <div class='blog-text'><?php echo get_field('excerpt',$blog)?></div>
        <div class='more'>WEITERLESEN</div>
      </div>
    </a>
  <?php }?>
  </div>
</div>

<script>
jQuery(document).ready(function ($) {
     
        ScrollReveal().reveal('.blog-container', { delay: 200,interval: 200,origin: "bottom",distance: "20px", });
})
</script>

