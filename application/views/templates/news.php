<div class="banner-grid-sec vticker" style="min-height: 280px;">
                <ul>
                    <?php foreach ($news_ as $item) { ?>
                    <li style="list-style: none; padding: 0px">
                            <div class="news-grid" style="padding: 10px;border-bottom: #C0C0C0 dotted 1px">
                                <h4 style="font-weight: bold"><?php echo $item->SUBJECT; ?></h4>
                                <p style="margin-bottom: 5px;"><?php echo $item->NEWS; ?></p>
                                <div title="Source Title" style="color: #ffffff; float: left">
                                    <?php if ($item->PATH_ATTACH != 'x') { ?>
                                        <a href="<?php echo ADMIN___ . '/_assets_/newsdetail/' . $item->PATH_ATTACH; ?>" target="_blank" style="text-decoration: none; color:#fff; background: #9090DD; padding: 2px; border-radius: 3px; font-size: 10px">click for detail</a>
                                    <?php } ?>
                                </div>
                                <div style="color:#0086B3; font-size: 10px; float: right; margin-top: 10px"><?php echo $item->DATE_ . " | " . $item->TIME_; ?></div>
                                <br>
                            </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>