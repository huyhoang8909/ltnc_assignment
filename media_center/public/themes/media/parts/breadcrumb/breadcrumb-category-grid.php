<!-- ========================================= BREADCRUMB ========================================= -->
<?php if (isset($headerStyle) && $headerStyle == 1): ?>
    <div id="top-mega-nav">
        <div class="container">
            <nav>
                <ul class="inline">
                    <li class="dropdown le-dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-list"></i> shop by department
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="#">Computer Cases & Accessories</a></li>
                            <li><a href="#">CPUs, Processors</a></li>
                            <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                            <li><a href="#">Graphics, Video Cards</a></li>
                            <li><a href="#">Interface, Add-On Cards</a></li>
                            <li><a href="#">Laptop Replacement Parts</a></li>
                            <li><a href="#">Memory (RAM)</a></li>
                            <li><a href="#">Motherboards</a></li>
                            <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                            <li><a href="#">Motherboard Components</a></li>
                        </ul>
                    </li>

                    <li class="breadcrumb-nav-holder"> 
                        <ul>
                            <li class="dropdown breadcrumb-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">laptops &amp; computers </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">PDA</a>
                                        <a href="#">accesories</a>
                                        <a href="#">tablets</a>
                                        <a href="#">games</a>
                                        <a href="#">consoles</a>
                                    </li>
                                </ul>
                            </li><!-- /.breadcrumb-item -->

                            <li class="dropdown breadcrumb-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Desktop PC </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">PDA</a>
                                        <a href="#">accesories</a>
                                        <a href="#">tablets</a>
                                        <a href="#">games</a>
                                        <a href="#">consoles</a>
                                    </li>
                                </ul>
                            </li><!-- /.breadcrumb-item -->

                            <li class="breadcrumb-item">
                                <a href="#">Gaming</a>
                            </li><!-- /.breadcrumb-item -->

                            <li class="breadcrumb-item current">
                                <a href="#">VAIO Fit Laptop - Windows</a>
                            </li><!-- /.breadcrumb-item -->
                        </ul>
                    </li><!-- /.breadcrumb-nav-holder -->

                </ul><!-- /.inline -->
            </nav>

        </div><!-- /.container -->
    </div><!-- /#top-mega-nav -->
<?php else : ?>


    <div id="breadcrumb-alt">
        <div class="container">
            <div class="breadcrumb-nav-holder minimal">
                <ul>
                    <li class="dropdown breadcrumb-item">
                        <?php foreach ($data['all_categories'] as $dt): ?>
                        <a href="<?php echo base_url('bycategory/'.$dt->CATEGORY_ID) ?>" >
                                <?php echo $dt->CATEGORY_NAME ?>                        </a>

                        <?php endforeach; ?>
                      
                    </li>

                </ul><!-- /.breadcrumb-nav-holder -->
            </div>
        </div><!-- /.container -->
    </div>
<?php endif; ?>
<!-- ========================================= BREADCRUMB : END ========================================= -->