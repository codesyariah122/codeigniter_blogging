<br/><br/>
		<div id="colorlib-work">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold" style="font-size:5em; margn-top:10rem;"><?=$index_title?></h2>
				</div>
				<div class="row">
					<?php $i=1; foreach($halloffameread as $v): //echo "<h1>".$v->link."</h1>";?> 
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
                                        <div class="work-img js-fullheight" style="background-image: url(<?php if(empty($v->image)): echo $hof_img."default-avatar.png"; else: echo $hof_img.$v->image ; endif; ?>);">
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
												<h2 class="hof_text"><?=strtolower($v->nama)?></h2>
                                                    <h5><?=strtoupper($v->kota)?> - INDONESIA</h5>
                                                    <hr>
													<p>
                                                        <b>Peringkat : <?=$v->id?></b><br/>
                                                        <?=$v->judul?><br/>
														<br/>

												<div class="row">
													<div class="col-sm" style="margin-left:-2em;">
														<form action="" method="post">
															<ul style="list-style:none;">
																<li style="float:left; margin-left:0.5em">
																	<input type="hidden" name="nama" value="<?=$v->nama?>">
																	<button id="react<?=trim(str_replace(" ", "", $v->nama))?>-1" class="react btn" type="submit" name="reaction" id="reaction" value="love">
																	<span class="emoji-<?=trim(str_replace(" ", "", $v->nama))?>-1" style="font-size:35px;">&#128157;</span></button>
																	<br/>
																	<small class="text-emoji text-danger text-center text-react<?=trim(str_replace(" ", "", $v->nama))?>-1" style="margin-left:-0.2em;"><?=$v->love?></small>
																</li>
																<li style="float:left; margin-left:0.5em">
																	<button id="react<?=trim(str_replace(" ", "", $v->nama))?>-2" class="react btn" type="submit" name="reaction" id="reaction" value="like">
																	<span class="emoji-<?=trim(str_replace(" ", "", $v->nama))?>-2" style="font-size:35px;">&#128077;</span></button>
																	<br/>
																	<small class="text-emoji text-danger text-center text-react<?=trim(str_replace(" ", "", $v->nama))?>-2" style="margin-left:-0.5em;"><?=$v->like?></small>
																</li>
																<li style="float:left; margin-left:0.5em">
																	<button id="react<?=trim(str_replace(" ", "", $v->nama))?>-3" class="react btn" type="submit" name="reaction" id="reaction" value="clapping">
																	<span class="emoji-<?=trim(str_replace(" ", "", $v->nama))?>-3" style="font-size:35px;">&#128079;</span></button>
																	<br/>
																	<small class="text-emoji text-danger text-center text-react<?=trim(str_replace(" ", "", $v->nama))?>-3" style="margin-left:-0.5em;"><?=$v->clapping?></small>
																</li>
																<li style="float:left; margin-left:0.5em">
																	<button id="react<?=trim(str_replace(" ", "", $v->nama))?>-4" class="react btn" type="submit" name="reaction" id="reaction" value="biceps">
																	<span class="emoji-<?=trim(str_replace(" ", "", $v->nama))?>-4" style="font-size:35px;">&#128170;</span></button>
																	<br/>
																	<small class="text-emoji text-danger text-center text-react<?=trim(str_replace(" ", "", $v->nama))?>-4" style="margin-left:-0.7em;"><?=$v->biceps?></small>
																</li>
																<li style="float:left; margin-left:0.5em">
																	<button id="react<?=trim(str_replace(" ", "", $v->nama))?>-5" class="react btn" type="submit" name="reaction" id="reaction" value="fire">
																	<span class="emoji-<?=trim(str_replace(" ", "", $v->nama))?>-5" style="font-size:35px;">&#128293;</span></button>	<br/>
																	<small class="text-emoji text-danger text-center text-react<?=trim(str_replace(" ", "", $v->nama))?>-5" style="margin-left:-0.7em;"><?=$v->fire?></small>
																</li>
															</ul>
														</form>
													</div>
												</div>


														<br/><br/>
                                                        <a href="whatsapp://send?text=<?=base_url()?>post/read/<?=$v->url?>/" class="btn btn-success" data-action="share/whatsapp/share">Share to Whatsapp</a>
                                                        <br/><br/>
												
														<!-- Emojics Inline Code
														<div id="emojics-root"></div>                                                        
														<br/> -->
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

