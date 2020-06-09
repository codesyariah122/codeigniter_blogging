<?php if($halloffameview['url'] !== $uri){?>
<?php foreach($viewpage as $v): ?>
		<div class="container">
				<div class="row text-center">
					<h5 class="bold" style="font-size:8em; margin-top:0.7em;font-family: 'NouvelleVague-Black'; z-index:-1;"><?=$index_title?></h5>
				</div>
	<div class="work-single-flex js-fullheight" style="margin-top:10em;">
        <?php if($uri !== "price-list" AND $uri !== "Legality-And-Business-Plan"):?>
			<a href="<?php
				if($v->img == NULL): echo $img_url."default-avatar.png"; else: echo $page_img.$v->img; endif;  ?>" class="col-half js-full-height work-img gallery image-popup-link" style="background-image: url(<?php
				if($v->img == NULL): echo $img_url."default-avatar.png"; else: echo $page_img.$v->img; endif;  ?>);" style="z-index: -1;">
            </a>
			<div class="col-half js-fullheight">
				<div class="display-t js-fullheight">
					<div class="display-tc js-fullheight">
						<div class="work-desc">
							<h2 style="margin-top:-3em;"><?=ucwords($v->judul)?></h2>
							<p>
								<?=$v->content?><br/>
							</p>
							<p>
                                <a href="<?=base_url()?>page/index/<?=$v->link?>" class="btn-preview">Kembali</a>
                            </p>
                            
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php elseif($uri === "price-list"):?>
		<br/><br/>
		<a href="<?=base_url()?>page/index/<?=$v->link?>" class="btn  btn-block"
		style="
			margin-top: 5em;
			background-color:blueviolet;
			color:blanchedalmond;
		";
		>Kembali ke <?=$v->link?></a>
		<br/><br/>
        <?php $this->view('page/pricelist')?>
        <?php elseif($uri === "Legality-And-Business-Plan"):?>
            <?php $this->view('page/legalitas');?>
           <a href="<?=base_url()?>page/index/<?=$v->link?>" class="btn btn-block btn-primary" style="margin-bottom:15em;">Kembali</a>
           <div class="container">
               <div class="row">
                   <div class="col-md">
                       ....
                   </div>
               </div>
           </div>
           <br/><br/><br/>
        <?php endif;?>
</div>

<?php endforeach;?>

<?php } else { 	$this->view('page/halloffameread'); }?>
