<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<div class="row">
                <?=$this->session->flashdata('message');?>
					<div class="col-md-12">
					<form action="<?=base_url()?>main/cari/" method="post">
						<div class="form-group">
							<input type="text" class="form-control" id="keyword" name="keyword" autofocus autocomplete="off" placeholder="cari produk ...">
							<button type="submit" class="btn btn-primary" name="cari" value="cari" id="tombol-cari"><i class="icon-search3"></i></button>
						</div>
						</form>
					</div>
				</div>
<!-- <div id="container">
<?php //$this->view('ocproduct/pencarian');?>
</div> -->
<!--- 
bikin fitur pencarian untuk website ourcitrus 
fitur pencarian ini ditujukan untuk mencari nama produk atau produk terbaru
-->