<div class="header">
    <div class="logo">
        <a href="<?php echo site_url('web');?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""/></a>
    </div>
    <div class="top-menu">
        <span class="menu"></span>
        <ul class="navig">
            <li class="<?php if ($menu == 1) { echo "active";}?>"><a href="<?php echo site_url('web');?>">Home</a></li>
            <li class="<?php if ($menu == 2) { echo "active";}?>"><a href="<?php echo site_url('web/about'); ?>">About</a></li>
            <li class="<?php if ($menu == 3) { echo "active";}?>"><a href="<?php echo site_url('web/admission'); ?>">Admissions</a></li>
            <li class="<?php if ($menu == 4) { echo "active";}?>"><a href="<?php echo site_url('web/features'); ?>">Features</a></li>
            <li class="<?php if ($menu == 5) { echo "active";}?>"><a href="<?php echo site_url('web/gallery'); ?>">Gallery</a></li>
            <li class="<?php if ($menu == 6) { echo "active";}?>"><a href="<?php echo site_url('web/contact'); ?>">Contact</a></li>
        </ul>
    </div>
    <!-- script-for-menu -->
    <script>
        $("span.menu").click(function () {
            $("ul.navig").slideToggle("slow", function () {
            });
        });
    </script>
    <!-- script-for-menu -->

    <div class="clearfix"></div>
</div>