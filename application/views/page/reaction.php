<?php foreach($halloffameread as $v): //echo "<h1>".$v->link."</h1>";?> 
	<div class="row">
									<div class="col-sm" style="margin-left:-2em;">
														<form action="" method="post">
															<ul style="list-style:none;">
																<li style="float:left; margin-left:0.5em">
																	<input type="hidden" name="nama" value="<?=$v->nama?>">
																	<button id="react<?=trim(str_replace(" ", "", $v->nama))?>-1" class="react btn" type="button" name="reaction" id="reaction" value="love">
																	<span class="emoji-<?=trim(str_replace(" ", "", $v->nama))?>-1" style="font-size:35px;">&#128157;</span></button>
																	<br/>
																	<small class="text-emoji text-danger text-center text-react<?=trim(str_replace(" ", "", $v->nama))?>-1" style="margin-left:-0.2em;"><?=$v->love?></small>
																</li>
																<li style="float:left; margin-left:0.5em">
																	<button id="react<?=trim(str_replace(" ", "", $v->nama))?>-2" class="react btn" type="button" name="reaction" id="reaction" value="like">
																	<span class="emoji-<?=trim(str_replace(" ", "", $v->nama))?>-2" style="font-size:35px;">&#128077;</span></button>
																	<br/>
																	<small class="text-emoji text-danger text-center text-react<?=trim(str_replace(" ", "", $v->nama))?>-2" style="margin-left:-0.5em;"><?=$v->like?></small>
																</li>
																<li style="float:left; margin-left:0.5em">
																	<button id="react<?=trim(str_replace(" ", "", $v->nama))?>-3" class="react btn" type="button" name="reaction" id="reaction" value="clapping">
																	<span class="emoji-<?=trim(str_replace(" ", "", $v->nama))?>-3" style="font-size:35px;">&#128079;</span></button>
																	<br/>
																	<small class="text-emoji text-danger text-center text-react<?=trim(str_replace(" ", "", $v->nama))?>-3" style="margin-left:-0.5em;"><?=$v->clapping?></small>
																</li>
																<li style="float:left; margin-left:0.5em">
																	<button id="react<?=trim(str_replace(" ", "", $v->nama))?>-4" class="react btn" type="button" name="reaction" id="reaction" value="biceps">
																	<span class="emoji-<?=trim(str_replace(" ", "", $v->nama))?>-4" style="font-size:35px;">&#128170;</span></button>
																	<br/>
																	<small class="text-emoji text-danger text-center text-react<?=trim(str_replace(" ", "", $v->nama))?>-4" style="margin-left:-0.7em;"><?=$v->biceps?></small>
																</li>
																<li style="float:left; margin-left:0.5em">
																	<button id="react<?=trim(str_replace(" ", "", $v->nama))?>-5" class="react btn" type="button" name="reaction" id="reaction" value="fire">
																	<span class="emoji-<?=trim(str_replace(" ", "", $v->nama))?>-5" style="font-size:35px;">&#128293;</span></button>	<br/>
																	<small class="text-emoji text-danger text-center text-react<?=trim(str_replace(" ", "", $v->nama))?>-5" style="margin-left:-0.7em;"><?=$v->fire?></small>
																</li>
															</ul>
														</form>
													</div>
												</div>
				<?php endforeach;?>