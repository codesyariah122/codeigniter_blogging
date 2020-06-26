
<!-- fitur pencarian ini kita sajikan dalam bentuk form di website ini lokasi form pencarian nya ada di bagian navbar --> 
<!-- kita coba sekarang fitur pencarian ini -->

<?php $this->view('template/search');?>
<?php $this->view('template/login');?>
				<div class="row" style="margin-top:2em;">
					<div class="col-md-12">
						<ul>
                            <?php if($this->session->userdata('email')):?>
                                <li><a href="profile/<?=str_replace(" ","", $this->session->userdata('name'))?>">My Profile </a></li>
                            <?php endif; ?>
                            <?php 
                                $url = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3); 
                                // echo $url;
                            ?>
                            <?php foreach($navbar as $nav => $link):?>
                            <li <?php
                            if($link === $url):?> class="active" <?php endif;?>>
								<a href="<?=$link?>"><?=$nav?></a>
								<?php if($nav === 'News'): break; endif;?>
							</li>
							<?php endforeach;?>

							<li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false">Products
                                      <span class="caret" style="margin:0.3em;"></span></a>
						          <ul class="dropdown-menu">
						          	<?php foreach($nav_produk as $produk => $l): //echo $produk."<br/>";?>
						            	<li><a href="<?=$l?>" style="margin-left: 0.2em;"><?=$produk?></a></li>
						             <?php endforeach;?>
						          </ul>
						        </li>

						       <?php //echo "<pre>"; print_r($navbar); echo "</pre>"; 
							   $navbar = array_diff_key($navbar, array("Home" => base_url('main/index/home'),"Company Profile" => base_url('page/index/profilperusahaan'), "Hall Of Fame" => base_url('page/index/halloffame'), "News" => base_url('post/index'))); 
							   foreach($navbar as $nav => $link): 
							   ?>
							<li <?php  
                            if($link === $url):?> class="active" <?php endif;?>>
										<a href="<?=$link?>"><?=$nav?></a>
									</li>
                            <?php endforeach;?>

                            <li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Application <span class="caret" style="margin:0.3em;"></span></a>
						          <ul class="dropdown-menu">
						          	<?php foreach($nav_application as $app => $l): //echo $produk."<br/>";?>
						            	<li><a href="<?=$l?>"><?=$app?></a></li>
						             <?php endforeach;?>
						          </ul>
						    </li>

						</ul>
					</div>

                </div>
                <?php  if(!$this->session->userdata('email')){?>
				<a href="<?=base_url()?>auth/" class="btn btn-primary btn-block" style="margin-bottom:1em;">Admin Login</a>
                <?php }else { ?>
                <a href="<?=base_url()?>auth/logout" class="btn btn-primary btn-block" style="margin-bottom:1em;">Logout <?=$this->session->userdata('name')?> </a>
                <?php }?>
				<div class="row">
					<div class="col-md-12">
						<h2 class="head-title">Gallery</h2>
						<?php for($i=0; $i<=count($img_cp)-1; $i++):?>
						<a href="<?=$slider_img?><?=$img_cp[$i]->img;?>" class="gallery image-popup-link text-center" style="background-image: url(<?=$slider_img.$img_cp[$i]->img;?>);">
							<span><i class="icon-search3"></i></span>
						</a>
					<?php endfor;?><br/>
					<?php for($i=0; $i<=count($img_produk)-1; $i++):?>
						<a href="<?=$produk_img?><?=$img_produk[$i]->image;?>" class="gallery image-popup-link text-center" style="background-image: url(<?=$produk_img.$img_produk[$i]->image;?>);">
							<span><i class="icon-search3"></i></span>
						</a>
					<?php endfor;?>
					</div>
				</div>
			</div>
		</div>
	</nav>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     