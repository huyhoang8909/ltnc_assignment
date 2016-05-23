<div class="contact-row">
    <div class="phone inline">
        <i class="fa fa-phone"></i> (+800) 123 456 7890
    </div>
    <div class="contact inline">
        <i class="fa fa-envelope"></i> contact@<span class="le-color">oursupport.com</span>
    </div>
</div><!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <div class="">
    <div class="col-md-12 pull-right well">
        <form class="form-inline" action="<?php echo base_url('search') ?>" method="get">
        <div class="input-group col-sm-8">
          <input class="form-control" type="text" value="" placeholder="Search" name="q">
       <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Select <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
         <input type="hidden" name="category" class="category">
      </div><!-- /btn-group -->
        </div>
        <button class="btn btn-primary col-sm-3 pull-right" type="submit">Search</button>
      </form>
    </div>
</div>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->
<script type='text/css'>
    @media (min-width: 768px) {
	.form-inline input {
         border-radius: 6px 0 0 6px;
     }
    .form-inline select {
        border-radius: 0 6px 6px 0;
        border-left-width: 0;
    }
}
  
    </script>
    
<script>
   $( document ).ready(function() {
       $('.dropdown-menu li').click(function(e){
  e.preventDefault();
  var selected = $(this).text();
  $('.category').val(selected);  
});
   });
 
</script>