       <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
              <button type="button" class="btn btn-outline-primary btn-sm btn-block mt-2 mb-5" data-toggle="modal" data-target="#newProfileModal">Add Page </button>
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
                      <a href="view/<?=$p->link?>/<?=$p->link_tujuan?>" class="mb-5 btn badge badge-pill badge-success"><i class="fas fa-fw fa-eye"></i> View</a> &nbsp; <a href="editpage/<?=$p->id?>" class="mb-5 btn badge badge-pill badge-primary"><i class="fas fa-fw fa-edit"></i> Edit </a> &nbsp; <a href="<?=base_url()?>Layout/deletepage/<?=$p->id?>" class="badge badge-pill badge-danger"><i class="fas fa-fw fa-trash-alt"></i> Delete</a>
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

       <!-- Modal -->
       <div class="modal fade" id="newProfileModal" tabindex="-1" role="dialog" aria-labelledby="newProfileModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="newPostModalLabel">Add New Page</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?=$this->session->flashdata('message');?>
                                        <?php echo form_open_multipart('Layout/addpage');?>
                                        <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" name="judul" class="form-control" id="formGroupExampleInput" placeholder="Judul Post" value="<?=set_value('judul')?>">
                                        <?=form_error('judul','<small class="text-danger pl-3">','</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="disabled" name="url" class="form-control" id="formGroupExampleInput" placeholder="Judul Post" value="<?=$page[0]->url?>">
                                        <?=form_error('url','<small class="text-danger pl-3">','</small>') ?>
                                        </div>
                                        <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Upload Gambar</label>
                                        </div>
                                        <div class="mt-3 form-group">
                                            <input type="disabled" name="link" class="form-control" id="formGroupExampleInput" placeholder="Link Page" value="<?=$page[0]->link?>">
                                        <?=form_error('link','<small class="text-danger pl-3">','</small>') ?>
                                        </div>
                                        <div class="mt-3 form-group">
                                            <input type="disabled" name="link_tujuan" class="form-control" id="formGroupExampleInput" placeholder="Link Page" value="<?=$page[0]->link_tujuan?>">
                                        <?=form_error('link','<small class="text-danger pl-3">','</small>') ?>
                                        </div>
                                        <div class="form-group">
                                        <label for="content" style="margin-top:1em;">Content Message</label><br/>
									        <textarea class="ckeditor" id="content" name="content">
                                            <?=set_value('content');?>
                                            </textarea>
                                            <?=form_error('content','<small class="text-danger pl-3">','</small>') ?>
									    </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Post</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of modal -->


            </div>
          </div>
           
            </div>
            <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->