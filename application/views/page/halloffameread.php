<br/><br/>

		<div id="colorlib-work">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold" style="font-size:5em; margn-top:10rem;"><?=$index_title?></h2>
				</div>
				<div class="row">
					<?php foreach($halloffameread as $v): //echo "<h1>".$v->link."</h1>";?> 
					<div class="col-md-12">
						<div class="work-entry-flex animate-box js-fullheight">
							<div class="col-three-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 
									<?php 
									$id_awal = 8;
									if($v->id % 2 == 0): 
									echo 'col-md-push-10'; 
									else: 
									echo 'no-gutters'; 
									endif;
									?>">
                                        <div class="work-img js-fullheight" style="background-image: url(<?php if(empty($v->image)): echo $img_url."default-avatar.png"; else: echo $v->image ; endif; ?>);">
										</div>
									</div>
								</div>
							</div>
							<div class="col-one-forth js-fullheight">
								<div class="row no-gutters">
									<div class="col-md-12 
										<?php 
										if($v->id % 2 == 0): 
										echo 'col-md-pull-12'; 
										else: 
										echo 'no-gutters'; 
										endif;
										?>">
										<div class="display-t js-fullheight">
											<div class="display-tc js-fullheight">
												<div class="text-inner text-inner-justify">
                                                    <h2><?=ucwords($v->nama)?></h2>
                                                    <h3><?=ucwords($v->kota)?></h3>
                                                    <hr>
													<p>
                                                        <b>Peringkat : </b><br/>
                                                        <?=$v->judul?><br/>
                                                        <br/><br/>
                                                        <a href="whatsapp://send?text=<?=base_url()?>post/read/<?=$v->url?>/" class="btn btn-success" data-action="share/whatsapp/share">Share to Whatsapp</a>
                                                        <br/><br/>
                                                        <?=$reaction?>
                                                        <br/>
                                                    </p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				<?php endforeach;?>
				
 <a href="<?=base_url()?>page/index/halloffame"><button  type="button" class="btn btn-warning btn-block">Kembali</button></a> 

				</div>
			</div>
		</div>

