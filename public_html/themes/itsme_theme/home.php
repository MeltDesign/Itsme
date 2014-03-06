<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/home_header.php'); ?>
	
    
    
<section class="introDownLoad">
	<div class="row downloadWrap">
    
    <div class="grid-12 column downloadWrapHold">
    
    <h3>Download here</h3>
    <p>Text about download</p>
    
    </div>


	</div>
</section>			
            
            
<section class="intro ">
			<div class="row download">
            <div class="grid-6 columns">Download my FREE guide</div>
			</div>

            
            <div class="row">
    		<div class="grid-8 columns">
    			<h2>Im a business owner like you so I know and appreciate the s</h2>
                
                <div class="grid-6 columns">
                <p>Hi and thanks for stopping by - My names Matthew Eldridge and I'm a online business advisor - you're probably asking yourself what the hell does that mean, right?... let me explain, I've been in the web and graphic industry for over 8 years now, I've worked with some great people and companies and created some great websites for them but these business no-longer exist! hmmmm why could this be?  </p>
                </div>
                
                <div class="grid-6 columns">
                
                			<p>You can have the best website in the world, a great team, a great product or service but if no one knows you exsist how are you they going to do business with you?</p>
                <p>Thats where I come in... I'm a trained graphic and webs designer and </p>
                
                <a href="">the t</a>
                <a href="">the fresh prince of web rap</a>
                
                </div>
                
                
  
	
    		</div>
            <div class="grid-4 columns">
            

    
	
    		</div>
            <div class="grid-4 columns">
    			Intro to matt here
	
    		</div>
            </div>

				
		</section>
        
 <div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="container clearfix">       
        
        
        <section class="services">
        
           <div class="row">
           
           <div class="grid-12 column servicesIntro centered">Find out how I can help you</div>
            
            
            <?php  
			$a = new Area('Home Services');
			$a->display($c);
			?>
            
            </div><!--row-->

</section>


<section class="work">

<div class="row portHeader centered">

<h3 class="bigHeader">What I've done so far....</h3>
<p>Here's a little taste of the work I've done to date.</p>

</div>


       <div class="rowWide">
      
    		<div class="grid-3 columns">
            
            <div class="smallPortBox">
            
            Small
            
            </div>
            
            <div class="bigPortBox">
            
            Big
            
            </div>
            
        </div>
        
            <div class="grid-3 columns">
            
  
            
            <div class="bigPortBox">
            
            Big
            
            </div>
            
            <div class="smallPortBox">
            
            Small
            
            </div>
            
            
            
            </div>
            
            <div class="grid-3 columns">
            
                       	<div class="smallPortBox">
            
            Small
            
            </div>
            
                      <div class="bigPortBox">
            
            Big
            
            </div>
            

            
            
            
            Work 1
            </div>
            
            <div class="grid-3 columns">
            
            
            
           <div class="bigPortBox">
            
            Big
            
            </div>
            
           	<div class="smallPortBox">
            
            Small
            
            </div>
            
            
            </div>
    
      </div><!--row-->
</section>







</div>
</div><!-- End Parallax --> 








		<div class="row">
        
        <div class="grid-12 column">How I can help you</div>
        
        
        <div class="grid-12 columns">
        
           <?php  
			$a = new Area('Success Stories');
			$a->display($c);
			?>
        
        
        </div>
            

</div><!--row-->

    
    
    

<section class="BlogRow">
            
        	<div class="row">
            <h3 class="centered bigHeader">A few <span>thoughts</span> and <span>facts...</span> </h3>
           
    		<div class="grid-12 columns">
    		<?php  
			$a = new Area('Home Blog Posts');
			$a->display($c);
			?>
    		</div>
            
            <div class="grid-9 columns">
            
			<nav class="BlogNav">
				<?php  
				$a = new Area('Blog Post Categories');
				$a->display($c);
				?>
            	</nav>
            </div>
            
            <div class="grid-3 columns">
            <a href="#" title="itsmeblogposts">View All</a>
            </div>
            
            
            
            </div>

				
		</section>
        
        <section class="">
            
            <div class="row">
    		<div class="grid-10 columns push-1">
            
            <div class="grid-8 columns homeFootForm">
            
            Form to go here
            
            <a href="">YES I want you to give me a call</a>
            
            </div>
     

			<div class="grid-4 columns helloBoxWrapper">
            <div class="helloBox">
            <h3>Lets Talk...</h3>
            
            <p>I'd love to help you and your business to thrive... if you're interested in working with me or even just having a chat about the services I offer you can start the conversation by filling out the form to your left.</p>
            
            </div>
            
            <a href="" class="QuoteButton" >Quote A Quote</a>
            
            
            
            </div>
            
            
             <?php  
			$a = new Area('Footer Form');
			$a->display($c);
			?>
    		
	
    		</div>
  
            </div>

				
		</section>
        
        

    
    
 
			

	
<?php  $this->inc('elements/footer.php'); ?>
