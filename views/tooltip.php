<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>
<span id="<?php echo $id; ?>" title="<?php echo htmlentities($text); ?>"><?php echo $title; ?></span>
<script>
  jQuery(document).ready(function($) {
    $('#<?php echo $id; ?>').tooltipster({
      contentAsHTML: <?php echo $opts->contentAsHTML; ?>,
      position: "<?php echo $opts->position; ?>",
      trigger: "<?php echo $opts->trigger; ?>",
      arrow: <?php echo $opts->arrow; ?>,
      animation: "<?php echo $opts->animation; ?>",
      autoClose: <?php echo $opts->autoClose; ?>,
      debug: <?php echo $opts->debug; ?>,
      speed: <?php echo $opts->speed; ?>,
      theme: "<?php echo $opts->theme; ?>",
      delay: <?php echo $opts->delay; ?>,
      hideOnClick: <?php echo $opts->hideOnClick; ?>,
      icon: "<?php echo $opts->icon; ?>",
      iconCloning: <?php echo $opts->iconCloning; ?>,
      iconDesktop: <?php echo $opts->iconDesktop; ?>,
      iconTheme: "<?php echo $opts->iconTheme; ?>",
      iconTouch: <?php echo $opts->iconTouch; ?>,
      interactive: <?php echo $opts->interactive; ?>,
      interactiveTolerance: <?php echo $opts->interactiveTolerance; ?>,
      minWidth: <?php echo $opts->minWidth; ?>,
      maxWidth: <?php echo $opts->maxWidth; ?>,
      multiple: <?php echo $opts->multiple; ?>,
      offsetX: <?php echo $opts->offsetX; ?>,
      offsetY: <?php echo $opts->offsetY; ?>,
      onlyOne: <?php echo $opts->onlyOne; ?>,
      timer: <?php echo $opts->timer; ?>,
      touchDevices: <?php echo $opts->touchDevices; ?>,
      updateAnimation: <?php echo $opts->updateAnimation; ?>,
    });
  });
</script> 

