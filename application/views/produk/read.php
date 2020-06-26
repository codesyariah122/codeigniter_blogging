<div class="container">
	<?php foreach($allproduk as $j):?><br/><br/>
			<div class="row text-center">
                <?php //if(strlen($j->nama < 50)): echo "<br/>"; echo substr($j->nama, 26,50); else: $j->nama; endif;?>
                    <h2 class="bold" style="font-size:6em;margin-top:1em;">
                        <?php if(strlen($j->nama < 50)): echo substr($j->nama, 10,50); else: $j->nama; endif; ?>
                    </h2>
			</div>
	<?php endforeach; ?>

</div>
<?php if($this->uri->segment(5) === "eng"):?>
    <?php foreach($allproduk_eng as $k):?>
<div class="container" style="margin-top:10em;">
	<div class="work-single-flex js-fullheight">
    <a href="<?php if($k->image == NULL): echo $page_img.'slider3.jpg'; else: echo $produk_img.$k->image; endif;?>" class="col-half js-full-height work-img gallery image-popup-link" style="background-image: url(<?php if($k->image == NULL): echo $page_img.'slider3.jpg'; else: echo $produk_img.$k->image; endif;?>);">
	</a>
			<div class="col-half js-fullheight">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight">
						<div class="work-desc">
							<h2 style="margin-top:-2em;"><?=$k->nama?></h2>
							<p>
                                <b>INDONESIAN FOOD AND DRUG AUTHORITY/BPOM CERTIFICATION : </b><br/>
                                <?=$k->nomor_ijin?><br/><br/>
                                <b>Description : </b></br>
                                <?=$k->deskripsi?><br/><br/>
                                <?php if($k->id != 6 AND $k->id != 7):?>
								<b>Ingredients : </b></br>
                                <?=$k->ingredients?><br/><br/>
                                <?php endif;?>
                                <?php if($k->tipe === "nutrisi"):?>
                                    <b>How To Drink : </b></br/>
                                <?php else:?>
                                <b>How To Use : </b></br/>
                                <?php endif;?>
								<?=$k->cara_pakai?>
                            </p><br/>
                            <a href="whatsapp://send?text=<?=base_url()?>produk/read/<?=$k->link?>/" class="btn btn-success" data-action="share/whatsapp/share">Share to Whatsapp</a>
                            <br/><br/>
                             <?=$reaction?>
                            <br/><br/>
                            <p>
                                <a href="<?=base_url()?>produk/index/<?=$k->tipe?>" class="btn-preview">Back</a>
                                <a href="<?=base_url()?>produk/read/<?=$k->tipe?>/<?=$k->link?>" class="btn btn-danger" style="margin-left:1rem;">Switch To Bahasa</a>        
                            </p><br/><br/>

                            <nav>
                                <ul class="pager">
                                    <li class="previous <?php if($k->id === 8 OR $k->id <= 1):?> disabled <?php endif;?>">
                                        <a href="<?=base_url()?>produk/read/<?=$k->tipe?>/<?= $link_previous?>/eng"><span aria-hidden="true">&larr;</span> Previous </a></li>
                                    <li class="next <?php if($k->id == 7 OR $k->id == 9):?>  disabled <?php endif;?>">
                                        <a href="<?=base_url()?>produk/read/<?=$k->tipe?>/<?=$link_next?>/eng">next <span aria-hidden="true">&rarr;</span></a></li>
                                </ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	
<?php endforeach; else: ?>
<?php foreach($allproduk as $k):?>
<div class="container" style="margin-top:10em;">
	<div class="work-single-flex js-fullheight">
			<a href="<?php if($k->image == NULL): echo $page_img."slider3.jpg"; else: echo $produk_img.$k->image; endif;?>" class="col-half js-full-height work-img gallery image-popup-link" style="background-image: url(<?php if($k->image == NULL): echo $page_img."slider3.jpg"; else: echo $produk_img.$k->image; endif;?>)";>
			</a>
			<div class="col-half js-fullheight">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight">
						<div class="work-desc">
							<h2 style="margin-top:-3em;"><?=$k->nama?></h2>
							<p>
                                <b>Sertifikat BPOM : </b><br/>
                                <?=$k->nomor_ijin?><br/><br/>
                                <b>Deskripsi : </b></br>
                                <?=$k->deskripsi?><br/><br/>
                                <?php if($k->id != 6 AND $k->id != 7):?>
								<b>Ingredients : </b></br>
                                <?=$k->ingredients?><br/><br/>
                                <?php endif;?>
                                <?php if($k->tipe === "nutrisi"):?>
                                    <b>Cara Minum/Konsumsi : </b></br/>
                                <?php else:?>
                                <b>Cara Pemakaian/penggunaan : </b></br/>
                                <?php endif;?>
								<?=$k->cara_pakai?>
                            </p><br/>
                            <br/>
                            <a href="whatsapp://send?text=<?=base_url()?>produk/read/<?=$k->tipe?>/<?=$k->link?>" class="btn btn-success" data-action="share/whatsapp/share">Share to Whatsapp</a>
                            <br/><br/>
                             <?=$reaction?>
                            <br/><br/>
                            <p>
                                <a href="<?=base_url()?>produk/index/<?=$k->tipe?>" class="btn-preview">Kembali</a>
                                <a href="<?=$k->link?>/eng" class="btn btn-warning" style="margin-left:0.1rem;">Switch To English</a>    
                            </p><br/><br/>

							<nav>
							<ul class="pager">
								<li class="previous <?php if($k->id == 8 OR $k->id <= 1):?>  disabled <?php endif;?>">
                                    <a href="<?=base_url()?>produk/read/<?=$k->tipe?>/<?=$link_sebelumnya?>"><span aria-hidden="true">&larr;</span> Sebelumnya </a></li>
								<li class="next <?php if($k->id == 7 OR $k->id == 9):?>  disabled <?php endif;?>">
									<a href="<?=base_url()?>produk/read/<?=$k->tipe?>/<?=$link_selanjutnya?>">Selanjutnya <span aria-hidden="true">&rarr;</span></a></li>
							</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	
<?php endforeach; endif;?>


