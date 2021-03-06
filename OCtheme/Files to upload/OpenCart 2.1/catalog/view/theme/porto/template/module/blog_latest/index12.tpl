<?php
if($this->registry->has('theme_options') == false) { 
 header("location: themeinstall/index.php"); 
 exit; 
}
$theme_options = $this->registry->get('theme_options');
?>
<div class="sidebar" style="padding: 0px">
	<div class="widget-block">
		<div class="widget">
		    <h3 class="widget-title"><?php echo $heading_title; ?></h3>
		    <div class="owl-carousel post-slider close-dots">
		    	<?php foreach($articles as $article):?>
		        <div class="post-item clearfix">
		            <div class="post-image thumbnail">
		                <div class="thumb-info">
		                    <a href="<?php echo $article['href']; ?>">
		                        <?php if($article['thumb']):?>
		                            <img alt="" src="<?php echo $article['thumb'] ?>">
		                        <?php endif; ?>
		                    </a>
		                </div>
		            </div><!-- End .post-image -->
		            <div class="post-date">
		                <span class="day"><?php echo date('d', strtotime($article['date_published'])) ?></span>
		                <span class="month"><?php echo date('M', strtotime($article['date_published'])) ?></span>
		            </div><!-- end .post-date -->
		            <h4>
		                <a href="<?php echo $article['href']; ?>"><?php echo $article['title'] ?></a>
		            </h4>
		            <p class="post-excerpt"><?php echo substr($article['description'],0,101); ?>... <a class="read-more" href="<?php echo $article['href']; ?>"><?php echo $button_read_more; ?> <i class="fa fa-angle-right"></i></a></p>
		        </div><!-- end .post-item -->
		        <?php endforeach; ?>
		    </div><!-- End .owl-carousel -->
		</div><!-- End .widget -->
	</div>
</div>