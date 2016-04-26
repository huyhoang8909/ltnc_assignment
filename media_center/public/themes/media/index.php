<?php echo theme_view('header'); ?>
<div class="wrapper">

    <? echo Template::message(); ?>
    <?php echo isset($content) ? $content : Template::content(); ?>
</div><!-- /.wrapper -->
<?php echo theme_view('footer'); ?>

