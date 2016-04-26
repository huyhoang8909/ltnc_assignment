<!-- ============================================================= TOP NAVIGATION ============================================================= -->
<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
                <li><a href="<?php echo site_url(); ?>"><?php e(lang('bf_home')); ?></a></li>
                <li><a href="index.php?page=blog">Blog</a></li>
                <li><a href="index.php?page=faq">FAQ</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#pages">Pages</a>
                    <ul class="dropdown-menu" role="menu">
                        <?php foreach ( $pages as $key => $packagePage ) : ?>
                        <li><a href="index.php?page=<?php echo $key;?>&amp;style=<?php echo $_GET['style'];?>"><?php echo $packagePage;?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <ul class="right">
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-language">English</a>
                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Turkish</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tamil</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">French</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Russian</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-currency">Dollar (US)</a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Euro (EU)</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Turkish Lira (TL)</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Indian Rupee (INR)</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Dollar (US)</a></li>
                    </ul>
                </li>
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