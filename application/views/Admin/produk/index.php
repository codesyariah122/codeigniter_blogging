
        <!-- Begin Page Content -->
        <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
                <button type="button" class="btn btn-outline-primary btn-block mt-2" data-toggle="modal" data-target="#newSliderModal">Add <?=$title?></button>
                <?=$this->session->flashdata('message');?>
        </div>

            <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Actions</th>
                                <th>Image</th>
                                <th>Nama</th>
                                <th>Category</th>
                                <th>Deskripsi</th>
                                <th>Ingredients</th>
                                <th>Cara Pakai</th>
                                <th>Nomor Ijin</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; foreach($produk as $p):?>
                                <tr>
                                <td scope="row"><?=$i?></td>
                                <td scope="row" width="500">
                                    <a href="<?=base_url()?>produk/index/<?=$link?>/<?=$p->link?>" targe="blank_" class="badge badge-success badge-pill btn"><i class="far fa-eye"></i></a> &nbsp;<a href="editproduk/<?=$p->id?>" class="badge badge-primary badge-pill btn"><i class="fas fa-edit"></i></a>&nbsp; <a href="" class="badge badge-danger badge-pill btn tombol-hapus"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <td><img src="<?=base_url()?>assets/images/produk/<?=$p->image?>" width="200" height="150"></td>
                                <td><?=$p->nama?></td>
                                <td><?=$p->tipe?></td>
                                <td class="text-truncate"><?=$p->deskripsi?></td>
                                <td class="text-truncate"><?=$p->ingredients?></td>
                                <td class="text-truncate"><?=$p->cara_pakai?></td>
                                <td class="text-truncate"><?=$p->nomor_ijin?></td>
                                </tr>
                                <?php $i++; endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
          </div>
        </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->