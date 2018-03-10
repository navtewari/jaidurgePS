<div class="banner2">	  
    <?php $this->load->view('templates/menu'); ?>
</div>
<!---->
<div class="gallery">
    <div class="container">
        <h2>Our Gallery</h2>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/swipebox.css');?>">
        <script src="<?php echo base_url('assets/js/jquery.swipebox.min.js');?>"></script> 
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
        <div class="event-pics">
            <?php foreach ($gallery_category as $item) { ?> 
            <a href="<?php echo site_url('web/gallery_detail/'.$item->CATEG_ID);?>">
                <div class="col-md-12 agileinfo_portfolio_grid" style="margin-top:2em;">                                   
                    <div class="w3_agile_portfolio_grid1">
                        <div class="agileits_portfolio_sub_grid agileits_w3layouts_team_grid">	                           
                            <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-responsive"><br>
                            <h3 align="center"><?php echo $item->CATEGORY; ?></h3>
                            <?php if($item->DESC !=''){?>
                            <p align="center"><?php echo $item->DESC; ?></p>
                            <?php }?>
                        </div>                        
                    </div>                
                </div>
            </a>
            <?php } ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>