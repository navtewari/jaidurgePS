<div class="banner2">	  
    <?php $this->load->view('templates/menu'); ?>
</div>
<!---->
<div class="gallery">
    <div class="container">        
        <?php foreach ($gallery as $item) { ?>
        <h2><?php echo $item->CATEGORY;?>-Gallery</h2>
        <div style="float: right; margin-bottom: 2em;"><a href="<?php echo site_url('web/gallery')?>"  style="color:#ff6600"><i class="fa fa-undo" aria-hidden="true"></i> Back to Gallery</a></div>
        <div style="clear:both;"></div>
        <?php break; } ?> 
        <link rel="stylesheet" href="<?php echo base_url('assets/css/swipebox.css');?>">
        <script src="<?php echo base_url('assets/js/jquery.swipebox.min.js');?>"></script> 
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
        <div class="event-pics">
            <?php foreach ($gallery as $item) { ?> 
            <a href="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" class="b-link-stripe b-animate-go  swipebox"  title="THe Jai Durge Educational Public School">
                <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt="" class="img-responsive">
            </a>            
            <?php }?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>