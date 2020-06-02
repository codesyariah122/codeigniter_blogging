	<?php foreach($viewpost as $v): ?>
		<div class="container">
				<div class="row text-center">
					<h5 class="bold" style="font-size:7em; margin-top:0.5em;"><?=$index_title?></h5>
				</div>
	<div class="work-single-flex js-fullheight" style="margin-top:12em;">
			<div class="col-half js-full-height work-img" style="background-image: url(<?php
				if($v->image == NULL): echo $img_url."work-1.jpg"; else: echo $post_img.$v->image; endif;?>);" style="z-index: -1;"></div>
			<div class="col-half js-fullheight">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight">
						<div class="work-desc">
							<h2><?=ucwords($v->judul)?></h2>
							<p>
								<?=ucwords($v->content)?><br/>
							</p>
                            <small class="text-info">Author : <?=$v->author?></small><br/>
                                                    <small class="text-success">Last Update : <?=date('d F Y',$v->date_post_update)?></small><br/><br/>
							<p><a href="<?=base_url()?>post/" class="btn-preview">Kembali</a></p><br/><br/>
						</div>
					</div>
				</div>
			</div>
		</div>

</div>

<?php endforeach;?>
