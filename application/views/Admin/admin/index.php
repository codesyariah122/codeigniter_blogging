
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
            <?=$this->session->flashdata('message');?>
            <div class="logins-data" data-logins="<?= $this->session->flashdata('success'); ?>"></div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="<?=base_url()?>assets/images/sliders/3.png" class="card-img img-thumbnail" style="height:150px;" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?=$profileperusahaan['nama']?></h5>
                        <p class="card-text"><?=$profileperusahaan['alamat']?>.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
            </div>

            </div>
            <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->