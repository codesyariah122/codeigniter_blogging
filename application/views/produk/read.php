<div class="container">
	<?php foreach($allproduk as $j):?><br/><br/>
			<div class="row text-center">
					<h2 class="bold" style="font-size:10em;"><?=$j->nama?></h2>
			</div>
	<?php endforeach; ?>

</div>
<?php foreach($allproduk as $k):?>
<div class="container" style="margin-top:10em;">
	<div class="work-single-flex js-fullheight">
			<div class="col-half js-full-height work-img" style="background-image: url(<?php if($k->image == NULL): echo $page_img."slider3.jpg"; else: echo $produk_img.$k->image; endif;?>);"></div>
			<div class="col-half js-fullheight">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight">
						<div class="work-desc">
							<h2><?=$k->nama?></h2>
							<p>
                                <b>Sertifikat BPOM : </b><br/>
                                <?=$k->nomor_ijin?><br/><br/>
                                <b>Deskripsi : </b></br>
								<?=$k->deskripsi?><br/><br/>
								<b>Ingredients : </b></br>
								<?=$k->ingredients?><br/><br/>
								<b>Cara Penggunaan : </b></br/>
								<?=$k->cara_pakai?>
							</p><br/><br/>
							<p><a href="<?=base_url()?>produk/index/<?=$k->tipe?>" class="btn-preview">Kembali</a></p><br/><br/>
						</div>
					</div>
				</div>
			</div>
		</div>
	
<?php endforeach; ?>