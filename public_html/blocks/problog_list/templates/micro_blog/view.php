<?php       
defined('C5_EXECUTE') or die(_("Access Denied."));
extract($blog_settings);
global $c;
	if (count($cArray) > 0) { ?>
	<div class="ccm-blog-list">
	
	<?php       
	for ($i = 0; $i < count($cArray); $i++ ) {
		$cobj = $cArray[$i];
		
		extract($blogify->getBlogVars($cobj));
		
		$content = $controller->getContent($cobj,$blog_settings);
		?>
		     <div class="content-sbBlog-wrap">
		       <div class="content-sbBlog-innerwrap">
		        <?php       if($comments){ ?>
	  			<div class="content-sbBlog-commentcount"><?php       echo $comment_count;?></div>
	  			<?php       } ?>
		      	<div class="addthis_toolbox addthis_default_style">
				<?php      
				if($tweet){
				?>
				<span  class="st_twitter" st_url="<?php       echo BASE_URL.$url?>" st_title="<?php       echo $blogTitle?>"></span>
				<?php      
				}
				if($fb_like){
				?>
				<span  class="st_facebook" st_url="<?php       echo BASE_URL.$url?>" st_title="<?php       echo $blogTitle?>"></span>
				<?php      
				}
				if($google){
				?>
				<span  class="st_plusone" st_url="<?php       echo BASE_URL.$url?>" st_title="<?php       echo $blogTitle?>"></span>
				<?php      
				}
				?>
				</div>
				<script type="text/javascript">var switchTo5x=true;</script>
				<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
				<?php       if($sharethis){ ?>
				<script type="text/javascript">stLight.options({publisher:'<?php       echo $sharethis;?>'});</script>
				<?php       } ?>
	  			<div id="content-sbBlog-contain">
	  				<div id="content-sbBlog-title">
			    		<h1 class="ccm-page-list-title"><a href="<?php       echo $url?>"><?php       echo $blogTitle?></a></h1>
			    		<div id="content-sbBlog-date">
			    		<?php       echo date('M d, Y',strtotime($blogDate));  ?>
			    		</div>
					</div>
					<br class="clearfloat" />
					<div class="categories" >
						<?php      
						echo t('Category').': '.'<a href="'.BASE_URL.$search.'categories/'.str_replace(' ','_',$cat).'/">'.$cat.'</a>';
						?>
						<br/><br/>
					</div>
					<div id="content-sbBlog-post">
					<?php       
						if($thumb){
							echo '<div class="thumbnail">';
							print '<img src="'.$image.'" alt="mobile_photo" class="mobile_photo"/>';
							echo '</div>';
							print '';
						}	
					?>
			  		<?php       
						echo $blogify->closetags($content);
			  		?>
			  		</div>
			  	</div>
			  	<br class="clearfloat" />
			  	<a class="readmore" href="<?php       echo $url?>"><?php      echo t('View Post')?></a>
			  	<div class="tags">
			  	<?php      echo t('Tags')?> : 
				<?php       
				if(!empty($tag_list)){
					$x = 0;
					foreach($tag_list as $akct){
						if($x){echo ', ';}
						echo '<a href="'.BASE_URL.$search.str_replace(' ','_',$akct->getSelectAttributeOptionValue()).'/">'.$akct->getSelectAttributeOptionValue().'</a>';
						$x++;
							
					}
				}
				?>
 				</div>
			  </div>
			</div>
			<div class="footer_shadow">
				<div class="shadow_right"></div>
			</div>
			<br class="clearfloat" />
	<?php       		
	} 
	$u = new User();
	$subscribed = $c->getAttribute('subscription');
	if($subscribe && $u->isLoggedIn()){
		if($subscribed && in_array($u->getUserID(),$subscribed)){
			$subscribed_status = true;
		}
		?>
		<div id="subscribe_to_blog" class="ccm-ui">
			<a href="<?php      echo $subscribe_link; ?>?blog=<?php      echo $c->getCollectionID(); ?>&user=<?php      echo $u->getUserID(); ?>" onClick="javascript:;" class="subscribe_to_blog btn btn-mini" data-status="<?php      if($subscribed_status){ echo 'unsubscribe';}else{ echo 'subscribed';}?>"> <?php      if($subscribed_status){echo t('Unsubscribe from this Blog'); }else{ echo t('Subscribe to this BLog'); }?> </a>
		</div>
		<?php     
	}
	if(!$previewMode && $controller->rss) { 
			$rssUrl = $controller->getRssUrl($b);
			?>
			<div class="rssIcon">
				<?php      echo t('Get this feed')?> &nbsp;<a href="<?php       echo $rssUrl?>" target="_blank"><img src="<?php      echo $uh->getBlockTypeAssetsURL($bt, 'images/rss.png')?>" width="14" height="14" /></a>
			</div>
			<link href="<?php       echo $rssUrl?>" rel="alternate" type="application/rss+xml" title="<?php       echo $controller->rssTitle?>" />
	<?php       
	} 
	?>
</div>
<?php       } 
	
	if ($paginate && $num > 0 && is_object($pl)) {
		$pl->displayPaging();
	}
	
?>

<script type="text/javascript">
/*<![CDATA[*/
	$(document).ready(function(){
		$('.subscribe_to_blog').live('click tap',function(e){
			e.preventDefault();
			var url = $(this).attr('href');
			$.ajax(url,{
				error: function(r) {
					console.log(r);
				},
				success: function(r) {
					console.log(r);
					if($('.subscribe_to_blog').attr('data-status') == 'subscribed'){
						$('.subscribe_to_blog').html('<?php      echo t('Unsubscribe from this Blog'); ?>');
						$('.subscribe_to_blog').attr('data-status','unsubscribe');
					}else{
						$('.subscribe_to_blog').html('<?php      echo t('Subscribe to this Blog'); ?>');
						$('.subscribe_to_blog').attr('data-status','subscribed');
					}
				}
			});
		});
	});
/*]]>*/
</script>
