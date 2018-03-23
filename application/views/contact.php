<div class="banner2">
    <?php $this->load->view('templates/menu'); ?>
</div>
<!--contact-->
<div class="contact">
    <div class="container">
        <div class="main-head-section">
            <h2>Contact</h2>            
        </div>
        <div class="contact_top">			 		
            <div class="col-md-8 contact_left">
                <h4>Quick Query</h4>                
                <form action="<?PHP echo site_url('web/contactus'); ?>" method="post">
                    <?php if ($this->session->flashdata('_msg_')) { ?>
                        <div class="row">
                            <div class="col-sm-12 border-bottom" style="text-align: center; padding: 5px; color: #ff0000; font-weight: bold; background: #ffff00; border-radius: 10px">
                                <?php echo $this->session->flashdata('_msg_'); ?>
                            </div>
                            <div class="col-sm-12">
                                &nbsp;
                            </div>
                        </div>
                    <?php } ?>
                    <div class="form_details">
                        <input type="text" class="text" name="txtname" required placeholder="Name">
                        <input type="email" class="text" name="txtemail" required placeholder="Email">
                        <input type="text" class="text" name="txtPhone" required placeholder="Phone Number">
                        <textarea name="txtmessage" value="Message" required placeholder="Message"></textarea>
                        <div class="clearfix"> </div>
                        <div class="sub-button">
                            <input type="submit" value="Send message">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 company-right">
                <div class="company_ad">
                    <h3>Address</h3>
                    <span>Jai Durge Educational Public School</span>
                    <address>                        
                        <p>Damudhunga Panchaki P.O.- Kathgodam</p>
                        <p>Haldwani- 263139, District- Nainital</p>
                        <p>Uttarakhand, India</p>
                        <p>&nbsp;</p>
                        <p><b>email :</b> <a href="#">jaidurgeeducationalpublic@gmail.com</p>
                        <p><b>phone :</b> +91-8476863333</p>
                    </address>
                </div>
            </div>	
            <div class="clearfix"> </div>
        </div>
    </div>
</div>