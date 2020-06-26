
<section id="<?=$smooth_page?>" class="details-card mb-2">
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
					<a href="<?=base_url().$news_1['img_thumb']?>" data-toggle="lightbox" data-gallery="gallery">
					<img src="<?=base_url().$news_1['img_thumb']?>" alt="" style="height:650px;">
					</a>
					<small class="ml-2 mt-2"><strong class="d-inline-block text-primary"><?=$news_1['title']?></strong></small><br/>

					<small class="ml-2">
					<?php
					$datenews = $news_1['date'];// pendefinisian tanggal awal
					$date_news = date('Y-m-d', strtotime('-2 days', strtotime($datenews))); //operasi penjumlahan tanggal sebanyak 6 hari
					echo $date_news; //print tanggal
					?>
					</small>

            <span style="margin-left:5em;"><h4><?=$news_1['header']?></h4></span>
                    </div>
                    <div class="card-desc">
                        <h3><?=$news_1['header']?></h3>
                        <p><?=$news_1['content_feature']?></p>
                            <a class="btn-card text-white" data-toggle="modal" data-target=".bd-<?=$news_1['link']?>-modal-lg">Read</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card-content">
                    <div class="card-img">
					<a href="<?=base_url().$news_2['img_thumb']?>" data-toggle="lightbox" data-gallery="gallery">
          <img src="<?=base_url().$news_2['img_thumb']?>" alt="" style="height:530px;">
					</a>

					<small class="ml-2 mt-2"><strong class="d-inline-block text-primary"><?=$news_2['title']?></strong></small><br/>

					<small class="ml-2">
					<?=$datenews = $news_2['date'];?>
					</small>

              <span><h4><?=$news_2['header']?></h4></span>
                    </div>
                    <div class="card-desc">
                        <h3><?=$news_2['header']?></h3>
                        <p><?=$news_2['content_feature']?></p>
                            <a class="btn-card text-white" data-toggle="modal" data-target=".bd-<?=$news_2['link']?>-modal-lg">Read</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/tech" alt="">
                        <span><h4>heading3</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Heading3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">Read</a>
                    </div>
                </div>
            </div>
        </div>

	<div class="container-fluid">
	 <?php $this->view('front-end/work/news/modal_news.php');?>
	</div>

</section>
