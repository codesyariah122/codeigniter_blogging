
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
                    <div class="row">
                        <div class="col-lg">

                        <?php if(validation_errors()):?>
                            <div class="alert alert-danger" role="alert">
                                <?=validation_errors()?>
                        </div>
                        <?php endif;?>
                        <?=$this->session->flashdata('message');?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Message</th>
                                <th scope="col">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php $i=1; foreach($message as $m):?>
                                <tr>
                                <th scope="row"><?=$i?></th>
                                <td><?=$m['email']?></td>
                                <td><?=$m['fullname']?></td>
                                <td><?=$m['message']?></td>
                                <td><?=$m['phone']?></td>
                                <td>
                                    <a href="" class="btn badge badge-primary" data-toggle="modal" data-target="#editSubMenuModal">edit</a>
                                    <a href="<?=base_url()?>menu/deletesubmenu/<?=$m['id']?>" class="badge badge-warning">delete</a>
                                </td>
                                </tr>
                        <?php $i++; endforeach;?>
                            </tbody>
                            </table>

                            <!-- Modal NewSubModal -->
                            <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newMenuModalLabel">Add New SUbMenu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?=base_url()?>menu/submenu" method="post">
                                <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Submenut Title">
                                </div>
                                <div class="form-group">
                                    <select name="menu_id" id="menu_id" class="form-control">
                                        <option value="">Select Menu</option>
                                        <?php foreach($menu as $m):?>
                                            <option value="<?=$m['id']?>"><?=$m['menu']?></option>
                                        <?php endforeach;?>
                                    </select>
                                    </div>

                                    <div class="form-group">
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Submenu Url">
                                    </div>

                                    <div class="form-group">
                                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                                    </div>

                                    <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active" checked>
                                        <label class="form-check-label" for="is_active">Active</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Menu</button>
                                </div>
                                </form>
                                </div>
                            </div>
                            </div>
                        <!-- end NewSubMenu Modal -->

                                <?php $this->view('Admin/menu/modal.php');?>



                        </div>
                    </div>

            </div>
            <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->