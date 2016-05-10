<!-- ============================================================= TOP NAVIGATION ============================================================= -->
<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="<?php echo site_url(); ?>"><?php e(lang('bf_home')); ?></a></li>
                <li><a href="index.php?page=blog">Blog</a></li>
                <li><a href="index.php?page=faq">FAQ</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <ul class="right">
                <?php if (empty($current_user)) : ?>
                    <li><a href="<?php echo site_url(LOGIN_URL); ?>">Sign In</a></li>
                    <?php $site_open = $this->settings_lib->item('auth.allow_register'); ?>
                    <?php if ( $site_open ) : ?>
                        <li><?php echo anchor(REGISTER_URL, 'Sign up'); ?></li>
                    <?php endif; ?>
                <?php else : ?>
                <li <?php echo check_method('profile'); ?>><a href="<?php echo site_url('users/profile'); ?>"><?php e(lang('bf_user_settings')); ?></a></li>
                <li><a href="<?php echo site_url('logout'); ?>"><?php e(lang('bf_action_logout')); ?></a></li>
                <?php endif; ?>

            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav><!-- /.top-bar -->
<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->