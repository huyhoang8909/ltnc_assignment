 <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">
        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                <a data-rel="prettyphoto" href="<?php echo base_url('items').'/'.$item->IMAGE ?>">
                    <img class="img-responsive" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide2">
                <a data-rel="prettyphoto" href="<?php echo base_url('items').'/'.$item->IMAGE ?>">
                    <img class="img-responsive" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide3">
                <a data-rel="prettyphoto" href="<?php echo base_url('items').'/'.$item->IMAGE ?>">
                    <img class="img-responsive" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>
            </div><!-- /.single-product-gallery-item -->
        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                    <img width="67" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                    <img width="67" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                    <img width="67" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                    <img width="67" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                    <img width="67" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                   <img width="67" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                    <img width="67" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                   <img width="67" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                    <img width="67" alt="" src="<?php echo base_url('items').'/'.$item->IMAGE ?>" data-echo="<?php echo base_url('items').'/'.$item->IMAGE ?>" />
                </a>
            </div><!-- /#owl-single-product-thumbnails -->

            <div class="nav-holder left hidden-xs">
                <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
            </div><!-- /.nav-holder -->
            
            <div class="nav-holder right hidden-xs">
                <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
            </div><!-- /.nav-holder -->

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->