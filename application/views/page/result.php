<?php 
if(count($cari)>0):
	//print_r($cari);
	echo "<br/><br/><br/><br/><br/>";
foreach($cari as $k):
	if( $k->key_search != $k->tipe ):
?>
<div class="container">
				<div class="row text-center">
					<h2 class="bold"><?=$k->tipe?></h2>
				</div>
	<div class="work-single-flex js-fullheight">
			<div class="col-half js-full-height work-img" style="background-image: url(<?php
				if($k->image == NULL): echo $img_url."work-1.jpg"; else: echo $img_url.$k->image; endif;?>);"></div>
			<div class="col-half js-fullheight">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight">
						<div class="work-desc">
							<h2><?=$k->nama?></h2>
							<p>
								<?=$k->desc?><br/>
								<b>Harga Mitra: </b><br/>
								<?=$k->harga_member?></b><br/>
                                <b>Harga Non Mitra : </b><br/>
                                <?=$k->harga_non_member?><br/><br/>
								<b>Ingredients : </b></br></br>
								<?=$k->ingredients?><br/>
								<b>Cara Penggunaan : </b><br/>
								<?=$k->carapenggunaan?>
								
							</p>
							<p><a href="<?=base_url()?>produk/index/<?=$k->tipe?>/" class="btn-preview">Kembali</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php 
else:
	redirect(base_url().'produk/'.$k->tipe);
endif;
endforeach; 
else:
?>

			<div class="container">
				<div class="row text-center">
					<h2 class="bold">Data Tidak Ditemukan</h2>
				</div>
			</div>

<?php endif;?>

