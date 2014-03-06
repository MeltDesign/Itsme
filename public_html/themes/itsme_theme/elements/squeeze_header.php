<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">

<head>

<?php   Loader::element('header_required'); ?>

<!-- Site Header Content //-->


	<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('main.css')?>" />
    <link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/foundation.css" />
    <script src="<?php  echo $this->getThemePath(); ?>/js/modernizr.js"></script>


</head>

<body>


<header>
<div class="wideBlue">
    
	<div class="row">

	<div class="grid-5 columns"><img src="images/Taydec-logo.png" alt="Taydec Logo"/></div>
	<div class="grid-4 columns">Call us today on 0121 2411531</div>
    <div class="grid-3 columns"><a href="#" class="freeQuoteButton">Free Quote</a></div>


	</div><!--row-->



</div><!--wideBlue-->

<nav>

<div class="row borderLine">
    
		<?php  
		$a = new GlobalArea('Header Nav');
		$a->display();
		?>

</div><!--row-->

</nav>

</header>
    

    



