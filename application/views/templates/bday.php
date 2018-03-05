<div class="vticker_bday" style="min-height: 100px;">
                <ul>
                    <?php foreach ($bday as $item) { ?>
                    <li style="list-style: none; padding: 0px">
                            <div class="news-grid" style="padding: 10px;border-bottom: #C0C0C0 dotted 1px">
                                <div title="Source Title" style="color: #ffffff; float: left; padding: 2px 2px 2px 0px">
                                    <?php if ($item->PHOTO_ != 'x') { ?>
                                        <img src="<?php echo ADMIN___ . '/_assets_/stud_photo/' . $item->PHOTO_; ?>" width="50">
                                    <?php } else { ?>
                                        <img src="<?php echo ADMIN___ . '/_assets_/stud_photo/na.jpg'; ?>" width="50">
                                    <?php } ?>
                                </div>
                                <div style="float: left; font-size: 10px; padding: 0px 2px">
                                    <h4 style="font-weight: bold; font-size: 13px;"><?php echo $item->NAME_; ?></h4>
                                    <p><?php echo $item->day."-".$this->my_library->getMonthsName($item->mnth); ?></p>
                                    <p style="margin-bottom: 5px;font-weight: bold; font-size: 11px; color: #0000ff">May GOD bless you forever.</p>
                                </div>
                                <div style="clear: both"></div>
                                <br>
                            </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>