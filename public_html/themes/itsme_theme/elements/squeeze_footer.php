<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>



<footer>

<div class="row footerRow">
<div class="grid-4 columns">
<p class="footer-copyright">&copy;<?php  echo date('Y')?> <?php  echo SITE?>.</p>
</div>

<div class="grid-8 columns">

footer
</div>



</div>
</footer>

    <script src="<?php  echo $this->getThemePath(); ?>/js/jquery.js"></script>
    <!--<script src="js/foundation.min.js"></script>-->
    <script src="<?php  echo $this->getThemePath(); ?>/js/foundation/foundation.js"></script>
     <script src="<?php  echo $this->getThemePath(); ?>/js/foundation/foundation.interchange.js"></script>
    <script>
      $(document).foundation();
    </script>


	
<?php   Loader::element('footer_required'); ?>

</body>
</html>
