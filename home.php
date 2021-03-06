<?php if (!defined('CMS')) exit; ?>
<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>
<?php echo $this->subview('_header.php'); ?>
    <div class="col_12">
        <?php echo $this->generateManagedString('homeString1', 'p', 'ImpressPages theme Blank', 'homeString'); ?>
        <?php echo $this->generateManagedText('homeText1', 'div', '<p>ImpressPages is a sexy web content management tool<br /> with drag&drop and in-place editing.</p><p><a href="#">Start</a></p>', 'homeText'); ?>
    </div>
    <?php
    if ($this->getThemeOption('homeBlocks', 0) > 0) {
        echo $this->subview('_homeBlocks.php')->render();
    }
    ?>
    <?php
    if ($this->getThemeOption('homeBlocks2', 0) > 0) {
        echo $this->subview('_homeBlocks2.php')->render();
    }
    ?>
    <div class="main col_12">
        <?php echo $site->generateBlock('main'); ?>
    </div>
    <div class="clear"></div>
<?php echo $this->subview('_footer.php'); ?>
