       <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
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
                      <th>judul</th>
                      <th>Image</th>
                      <th>Link</th>
                      <th>Content</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>#</th>
                    <th>Action</th>
                      <th>judul</th>
                      <th>Image</th>
                      <th>Link</th>
                      <th>Content</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php $no=1; foreach($page as $p):?>
                    <tr>
                      <td><?=$no?></td>
                      <td width="230">
                      <a href="view/<?=$p->link?>/<?=$p->link_tujuan?>" class="mb-5 btn badge badge-pill badge-success"><i class="fas fa-fw fa-eye"></i> View</a> &nbsp; <a href="editpage/<?=$p->id?>" class="mb-5 btn badge badge-pill badge-primary"><i class="fas fa-fw fa-edit"></i> Edit </a> &nbsp; <a href="" class="badge badge-pill badge-danger"><i class="fas fa-fw fa-trash-alt"></i> Delete</a>
                      </td>
                      <td><?=$p->judul?></td>
                      <td><img src="<?=base_url()?>assets/images/page/<?=$p->img?>" width="300" height="200"></td>
                      <td><?=$p->link?></td>
                      <td><?=$p->content?></td>
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