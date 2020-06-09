<div id="colorlib-work">
			<div class="container">
				<div class="row text-center" >
					<h5 class="bold" style="font-site:3em; margin-top:0.3em;"><?=$index_title?></h5>
				</div>
				<div class="row">
					<div class="col" style="margin-top:7em; margin-bottom:-5em;">
                        <?= $pagination ?>
        			</div>					
			<?php foreach($produk as $k):?> 
					<?php if($k->tipe): ?>
					<div class="col-md-12" style="margin-top:5em;">
						<div class="work-entry-flex animate-box js-fullheight">
							<div class="col-three-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 
									<?php 
									$id_awal = 8;
									if($k->id % 2 == 0): 
									echo 'col-md-push-10'; 
									else: 
									echo 'no-gutters'; 
									endif;
									?>">
										<div class="work-img js-fullheight" style="background-image: url(
											<?php 
											if($k->image == NULL):
											echo $page_img."slider6.jpg";
											else:	
											echo $produk_img.$k->image;
											endif;
											?>
											);">
										</div>
									</div>
								</div>
							</div>
							<div class="col-one-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 
										<?php 
										if($k->id % 2 == 0): 
										echo 'col-md-pull-12'; 
										else: 
										echo 'no-gutters'; 
										endif;
										?>">
										<div class="display-t js-fullheight">
											<div class="display-tc js-fullheight">
												<div class="text-inner text-inner-justify">
													<h2><a href="<?=base_url()?>produk/read/<?=$k->tipe?>/<?=$k->link?>"><?=$k->nama?></a></h2>
													<p>
														<?=substr($k->deskripsi, 0, $num_char)?>...<br/>
													</p>
													<a href="<?=base_url()?>produk/read/<?=$k->tipe?>/<?=strtolower($k->link)?>" class="btn-view btn-block text-center">View Product</a><br/><br/>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				<?php endif; endforeach;?>
				
                <?=$pagination?>

				 <a href="<?=base_url()?>main/home"><button  type="button" class="btn btn-warning btn-block">Kembali</button></a> <br/>
				 <?php if ($this->uri->segment(3)=="nutrisi"): $link_href="kosmetik"; elseif($this->uri->segment(3)=="kosmetik"): $link_href="nutrisi"; endif; ?>
				 <a href="<?=base_url()?>produk/index/<?=$link_href?>"><button  type="button" class="btn btn-danger btn-block"><?=ucwords($link_href)?></button></a> 

				</div>
			</div>
		</div>
		
		