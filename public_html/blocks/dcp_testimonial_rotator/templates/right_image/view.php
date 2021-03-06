<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php /* This block was made with Designer Content Pro. Visit http://theblockery.com/dcp for documentation. */ ?>

<div class="testWrapper">

<div class="orbit-container">
    
<ul class="example-orbit-content" data-orbit>

<?php foreach ($controller->getRepeatingItems() as $item): ?>


		<li data-orbit-slide="headline-1 <?php echo ++$i;?> ">
    
        <div class="grid-9 columns">
		<?php $item->quote_content->display(); ?>
<p class="testName"><strong><?php $item->quote_name->display(); ?></strong> | 
<em><?php $item->quote_location->display(); ?></em> |
<?php $item->quote_company->display(); ?></p>
        </div>
            <div class="grid-3 columns">
        <?php $item->quote_image->display(); ?>
        </div>
        
        </li>

<?php endforeach; ?>

        </ul>
</div>

</div>

<script>
$(document).foundation({
  orbit: {
    animation: 'slide',
    timer_speed: 5000,
    pause_on_hover: true,
    animation_speed: 650,
    navigation_arrows: true,
    bullets: true
  }
});
</script>
