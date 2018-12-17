<?php
    foreach ($statement as $row):
?>
<div class="col-sm-3">
                            <div class="panel no-border overflow-hidden">
                                <!-- thumbnail -->
                                <div class="thumbnail nm">
                                    <!-- media -->
                                    <div class="media">
                                        <!-- indicator -->
                                        <div class="indicator"><span class="spinner"></span></div>
                                        <!--/ indicator -->

                                        <img data-toggle="unveil" src="<?php echo $host?>/asset/image/shop/placeholder.jpg" data-src="<?php echo $host?>/asset/image/shop/item1.jpg" alt="Photo" width="100%" />

                                        <!-- meta -->
                                        <span class="meta meta-hover bottom light">
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star6 text-primary"></i>
                                            <i class="ico-star5 text-primary"></i>
                                        </span>
                                    </div>
                                    <!--/ media -->
                                </div>
                                <!--/ thumbnail -->
                                <!-- Meta -->
                                <div class="panel-footer" style="padding:25px;border:0;">
                                    <h4 class="text-center mt0"><?php echo $row['name']?></h4>
                                    <h3 class="font-alt text-center text-accent mt0"><?php echo $row['Price']?></h3>
                                </div>
                               
                                        <li class="text-right">
                                            <a href="<?php echo $host . '?page=item-detail&id=' . $row['id']?>" class="btn btn-link text-default"><i class="ico-list-ul fsize14"></i>&nbsp;&nbsp;Item detail</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--/ Meta -->
                            </div>
</div>
<?php
    endforeach
    ?>
