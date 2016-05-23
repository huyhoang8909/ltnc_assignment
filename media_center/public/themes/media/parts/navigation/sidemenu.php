<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown">
    <div class="head"><i class="fa fa-list"></i>Danh mục sản phẩm</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
         
            <?php if (!empty($data['all_categories'])): ?>
                <?php foreach ($data['all_categories'] as $category): ?>
            
                    <li class="dropdown menu-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category->CATEGORY_NAME  ?></a>
                        <ul class="dropdown-menu mega-menu">
                            <li class="yamm-content">
                                <?php echo theme_view('parts/navigation/megamenu-vertical') ?>

                            </li>
                        </ul>
                    </li><!-- /.menu-item -->
                <?php endforeach; ?>
            <?php endif; ?>
            
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->