<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>



<section class="footerRow">
            
            <div class="row">
    		<div class="grid-4 columns">
    		
            
             		<a href="<?php echo DIR_REL; ?>/">hello@itsmedia.co.uk</a>
        			
    		</div>
            <div class="grid-4 columns">
            
            <a href="<?php echo DIR_REL; ?>/">That would be telling!</a>

    		</div>
            
            <div class="grid-4 columns">
    			
           		<div class="social">       
        			<a href="#" rel="nofollow" target="_blank" class="youLink"></a>
        			<a href="#" rel="nofollow" target="_blank" class="inLink"></a>
        			<a href="#" rel="nofollow" target="_blank" class="fbLink"></a>
        			<a href="#" rel="nofollow" target="_blank" class="twittLink"></a>
				</div>
                
    		</div>
            
            
            </div>
            
            
           <div class="grid-12 columns">
    			<p class="footer-copyright">&copy;<?php  echo date('Y')?> <?php  echo SITE?>. Website Design and Developed by
                <a href="<?php echo DIR_REL; ?>/"> Matt Eldridge </a> Powered by <a href="<?php echo DIR_REL; ?>/">Concrete5 CMS</a>
                <a href="<?php echo DIR_REL; ?>/">I Love Concret 5</a>
                 </p>
	
    		</div>

				
		</section>
        
        
        
        
	
		</div><!-- /container -->
		
        
          <!-- open/close -->
		<div class="overlay overlay-hugeinc">
			<button type="button" class="overlay-close">Close</button>
			<nav>
				<ul>
					<li><a href="<?php echo DIR_REL; ?>/">Home</a></li>
					<li><a href="<?php echo DIR_REL; ?>/about">About</a></li>
					<li><a href="<?php echo DIR_REL; ?>/">Work</a></li>
                    <li><a href="<?php echo DIR_REL; ?>/">Blog</a></li>
					<li><a href="<?php echo DIR_REL; ?>/">Clients</a></li>
					<li></li>
				</ul>
			</nav>
</div>

    <!--<script src="js/foundation.min.js"></script>-->
    <script src="<?php  echo $this->getThemePath(); ?>/js/foundation/foundation.js"></script>
    <script src="<?php  echo $this->getThemePath(); ?>/js/foundation/foundation.orbit.js"></script> 
    
    <script type="text/javascript" src="<?php  echo $this->getThemePath(); ?>/js/parallax/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="<?php  echo $this->getThemePath(); ?>/js/parallax/waypoints.min.js"></script>
	<script type="text/javascript" src="<?php  echo $this->getThemePath(); ?>/js/parallax/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php  echo $this->getThemePath(); ?>/js/parallax/scripts.js"></script>



    
<script type="text/javascript" src="<?php  echo $this->getThemePath(); ?>/js/classie.js"></script>
	
    
	
<?php   Loader::element('footer_required'); ?>

</body>
</html>
