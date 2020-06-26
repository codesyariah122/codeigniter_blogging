
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">View <?=$title?></h6>
              <button type="button" class="btn btn-outline-primary btn-sm btn-block mt-2 mb-5" data-toggle="modal" data-target="#newSliderModal">Add Page </button>
              <?=$this->session->flashdata('message');?>
        </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Action</th>
                      <th>Peringkat</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Image</th>
                      <th>Kota</th>
                      <th>Negara</th>
                      <th>Total Income</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach($page as $p):?>
                    <tr>
                      <td><?=$no?></td>
                      <td width="500">
                      <a href="<?=$p->url?>" class="mb-5 btn badge badge-pill badge-success"><i class="fas fa-fw fa-eye"></i> View</a> &nbsp; <a href="<?=base_url()?>Layout/edithalloffame/<?=$p->id?>" class="mb-5 btn badge badge-pill badge-primary"><i class="fas fa-fw fa-edit"></i> Edit </a> &nbsp; <a href="" class="badge badge-pill badge-danger"><i class="fas fa-fw fa-trash-alt"></i> Delete</a>
                      </td>
                      <td><?=$p->judul?></td>
                      <td><?=$p->nama?></td>
                      <td><?=$p->username?></td>
                      <td><img src="<?=base_url()?>assets/images/<?=$link_image?>/<?=($p->image == NULL) ? 'default-avatar.png' : $p->image; ?>" width="300" height="300"></td>
                      <td><?=$p->kota?></td>
                      <td><?=$p->negara?></td>
                      <td><?=$p->totalincome?></td>
                    </tr>
                  <?php $no++; endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
           
            </div>
            <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->