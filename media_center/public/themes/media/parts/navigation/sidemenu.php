<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown">
    <div class="head"><i class="fa fa-list"></i>Danh mục sản phẩm</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">

            <?php if (!empty($data['all_categories'])): ?>
                <?php foreach ($data['all_categories'] as $category): ?>

                    <li class="dropdown menu-item">

                        <a href="<?php echo base_url('bycategory/'.$category->CATEGORY_ID) ?>"><?php echo $category->CATEGORY_NAME ?></a>
                       
                    </li><!-- /.menu-item -->
                <?php endforeach; ?>
            <?php endif; ?>

        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->