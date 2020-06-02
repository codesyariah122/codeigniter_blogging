
        <!-- Begin Page Content -->
<div class="container-fluid">
                           <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
              <button type="button" class="btn btn-outline-primary btn-block mt-2 mb-5" data-toggle="modal" data-target="#newSliderModal">Add Slider</button>
              <?=$this->session->flashdata('message');?>
            </div>
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Action</th>
                                <th>Image</th>
                                <th>Text Small</th>
                                <th>Text header</th>
                                <th>Content</th>
                                <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;foreach($slider as $slide):?>
                                <tr>
                                <td><?=$i?></td>
                                <td width="170">
                                    <a href="<?=base_url()?>Layout/editslider/<?=$slide->id?>" class="badge badge-primary badge-pill btn "><i class="fas fa-edit"></i> Edit</a> &nbsp; <a href="<?=base_url()?>Layout/deleteslider/<?=$slide->id?>" class="badge badge-pill badge-danger btn"  onclick="return confirm('are you sure?')"><i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                                <td><img src="<?=base_url()?>assets/images/sliders/<?=$slide->img?>" width="200" height="100"/></td>
                                <td><?=$slide->small?></td>
                                <td><?=$slide->header?></td>
                                <td><?=$slide->truncate?></td>
                                <td><?=$slide->link?></td>
                                </tr>
                            <?php $i++; endforeach;?>
                            </tbody>
                        </table>
                        </div>
                </div>
          </div>
</div>
                    </div>

            </div>
        </div>