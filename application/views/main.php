		<div id="colorlib-hero" class="js-fullheight">
			<div class="owl-carousel">

			<?php foreach($MainSlide as $slide1):?>
				<div class="item">
					<div class="hero-flex js-fullheight">
						<div class="col-three-forth">
								<div class="hero-img js-fullheight allery image-popup-link"  style="background-image: url(<?= $slider_img.$slide1->img?>); width:100%;"></div>
						</div>
						<div class="col-one-forth js-fullheight">
							<div class="display-t js-fullheight">
								<div class="display-tc js-fullheight">
									<!--<h2 class="number">01/03</h2>-->
									<div class="text-inner">
										<div class="desc">
											<span class="tag"><?php if($slide1->small == "produk"): echo "ourcitrus | "; else: echo ""; endif;?><?=$slide1->small?> <?php echo $slide1->link != NULL ? "| page" : "";?> </span>
											<h2><?=ucwords($slide1->header)?></h2>
											<p style="color:silver;"><?=$slide1->truncate?></p>
                                            <?php if($slide1->link === "post"):?>
                                                <a href="<?=base_url().$slide1->link?>" class="btn-view btn-block text-center">View News<i class="icon-arrow-right3"></i></a>
                                            <?php endif;?>

											<?php if($slide1->link != NULL && $slide1->link !== "post"):?>
											<a href="<?=base_url()."page/index/".$slide1->link?>" class="btn-view btn-block text-center">ViewLink<i class="icon-arrow-right3"></i></a>
                                            <?php elseif($slide1->small == "products"):?>
                                        <ul style="list-style-type:none;"> 
                                       <li>
                                            <a href="<?=base_url()?>produk/index/kosmetik" class="btn-view btn-block text-center">View Products<i class="icon-arrow-right3"></i></a><br/>
                                            </li>
                                            <!-- <li>
                                            <a href="<?=base_url()?>produk/index/kosmetik" class="btn-view btn-block text-center">Kosmetik<i class="icon-arrow-right3"></i></a><br/>
                                            </li>
                                            <li>
                                                <a href="<?=base_url()?>produk/index/nutrisi" class="btn-view btn-block text-center" style=>Nutrisi<i class="icon-arrow-right3"></i></a>
                                            </li> -->
                                         </ul>
											<?php else: echo '';?>
											<?php endif;?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php endforeach;?>

		</div><!-- end owlcarousel -->
    </div><!-- end colorlib-hero -->
</div> <!-- end colorlib-page -->