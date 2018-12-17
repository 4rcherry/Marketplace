<?php
    foreach ($statement as $row):?> 
            <!-- START Item Detail -->
            <section class="section bgcolor-white">
                <div class="container">
                    <!-- START row -->
                    <div class="row">
                        <!-- START Carousel -->
                        <div class="col-md-6">
                            <div id="layerslider" style="width:100%; height:550px;">
                                <!-- slide 1 -->
                                <div class="ls-slide" data-ls="transition2d:73;">
                                    <img src="<?php echo $host?>/asset/image/shop/item-detail1.jpg" class="ls-bg" alt="">
                                </div>
                                <!--/ slide 1 -->

                                <!-- slide 2 -->
                                <div class="ls-slide" data-ls="transition2d:73;">
                                    <img src="<?php echo $host?>/asset/image/shop/item-detail2.jpg" class="ls-bg" alt="">
                                </div>
                                <!--/ slide 2 -->

                                <!-- slide 3 -->
                                <div class="ls-slide" data-ls="transition2d:73;">
                                    <img src="<?php echo $host?>/asset/image/shop/item-detail3.jpg" class="ls-bg" alt="">
                                </div>
                                <!--/ slide 3 -->

                                <!-- slide 4 -->
                                <div class="ls-slide" data-ls="transition2d:73;">
                                    <img src="<?php echo $host?>/asset/image/shop/item-detail4.jpg" class="ls-bg" alt="">
                                </div>
                                <!--/ slide 4 -->
                            </div>
                            <div class="mb25 visible-xs visible-sm"></div>
                        </div>
                        <!--/ END Carousel -->

                        <!-- START Detail -->
                        <div class="col-md-6">
                            <h3 class="section-title font-alt mt0"><?php echo  $row['name']?></h3>
                            <div class="clearfix mb15">
                            <?php if ($row['discount'] != 0): ?>
                                <h4 class="section-title font-alt text-muted nm pull-left" style="text-decoration:line-through;"><?php echo $row['price']?></h4>
                            <?php endif ?> 
                                <h4 class="section-title font-alt text-primary nm ml15 pull-left"><?php echo $row['Price']?></h4>
                            </div>
                            <div class="mb15">
                                <i class="ico-star6 text-primary"></i>
                                <i class="ico-star6 text-primary"></i>
                                <i class="ico-star6 text-primary"></i>
                                <i class="ico-star6 text-primary"></i>
                                <i class="ico-star5 text-primary"></i>
                            </div>

                            <hr><!-- horizontal line -->

                            <p class="mb15">Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                            <p class="mb15">Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>

                            <ul class="list-unstyled nm">
                                <li class="mb10"><i class="ico-checkmark3 fsize18 text-muted"></i>&nbsp;&nbsp;&nbsp;Polyblend</li>
                                <li class="mb10"><i class="ico-checkmark3 fsize18 text-muted"></i>&nbsp;&nbsp;&nbsp;Collar stand</li>
                                <li class="mb10"><i class="ico-checkmark3 fsize18 text-muted"></i>&nbsp;&nbsp;&nbsp;Slim fit</li>
                                <li><i class="ico-checkmark3 fsize18 text-muted"></i>&nbsp;&nbsp;&nbsp;Inner lining</li>
                            </ul>

                            <hr><!-- horizontal line -->

                            <form name="add-to-cart">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="control-label">Colors</label>
                                            <select name="type" class="form-control">
                                                <option value="">Select</option>
                                                <option value="1">Blue</option>
                                                <option value="2">Green</option>
                                                <option value="3">Red</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label">Sizes</label>
                                            <select name="type" class="form-control">
                                                <option value="">Select</option>
                                                <option value="1">S</option>
                                                <option value="2">M</option>
                                                <option value="3">L</option>
                                            </select>
                                        </div>
                                       
                                            <div class="col-md-4">
                                            <label class="control-label">Quantity</label>
                                            <input type="text" value="" name="quantity">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary"><i class="ico-cart4"></i> <a href="?page=shopping-cart"> Add to cart</a></button>
                                
                                </div>                              
                            </form>
                        </div>
                        <!--/ END Detail -->
                    </div>
                    <!--/ END row -->
<?php endforeach?>
                    
