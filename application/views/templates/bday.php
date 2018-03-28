<div class="vticker_bday">
                <ul>
                    <?php foreach ($bday as $item) { ?>
                    <li style="list-style: none; padding: 0px">
                            <div class="news-grid" style="padding:0px;border-bottom: #C0C0C0 dotted 1px">
                                <div title="Source Title" style="color: #ffffff; float: left; padding: 2px 2px 2px 0px">
                                    <?php if ($item->PHOTO_ != 'x') { ?>
                                        <img src="<?php echo ADMIN___ . '/_assets_/stud_photo/' . $item->PHOTO_; ?>" style="max-width: 200px;">
                                    <?php } else { ?>
                                        <img src="<?php echo ADMIN___ . '/_assets_/stud_photo/na.jpg'; ?>" width="340">
                                    <?php } ?>
                                </div>
                                <h5 align="center"><a href="#">Happy Birthday</a></h5>
                                <div style="float: left; font-size: 10px; padding: 0px 2px">
                                    <h4 align="center" style="font-weight: bold; font-size: 15px;color: red"><?php echo $item->NAME_; ?></h4>
                                    <p align="center" style="font-weight: bold; font-size: 15px;"><?php echo $item->day."-".$this->my_library->getMonthsName($item->mnth); ?></p>
                                    <p align="center" style="margin-bottom: 5px;font-weight: bold; font-size: 16px; color: #0000ff">May GOD bless you forever.</p>
                                </div>
                                <div style="clear: both"></div>
                                <br>
                            </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>