<div class="banner2">	  
    <?php $this->load->view('templates/menu'); ?>
</div>
<!---->
<div class="gallery">
    <div class="container">
        <h2>Gallery</h2>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/swipebox.css');?>">
        <script src="<?php echo base_url('assets/js/jquery.swipebox.min.js');?>"></script> 
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
        <div class="event-pics">
            <?php for($loop=1;$loop<=4;$loop++){?>
            <a href="<?php echo base_url('assets/images/'.$loop.'.jpg');?>" class="b-link-stripe b-animate-go  swipebox"  title="THe Jai Durge Educational Public School">
                <img src="<?php echo base_url('assets/images/'.$loop.'.jpg');?>" alt="" class="img-responsive">
            </a>            
            <?php }?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>