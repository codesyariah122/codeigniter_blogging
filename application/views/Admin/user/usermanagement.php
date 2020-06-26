
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <?=$this->session->flashdata('message');?>
<div class="card shadow mb-4">
        <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
              <button type="button" class="btn btn-outline-primary btn-block mt-2 mb-5" data-toggle="modal" data-target="#newUsersModal">Add New User</button>
        </div>
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Status</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Date Created</th>
                                <th>Role</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;foreach($users as $user):?>
                            <?php 
                            switch($user->is_active):
                                case 1:
                                    $active = "Is Active";
                                break;
                                case 0:
                                    $active = "Not Active";
                                break;
                            endswitch;
                            ?>
                                <tr>
                                <td><?=$i?></td>
                                <td>
                                <?php if($user->is_active == 0):?>
                                    <button class="badge badge-warning btn btn-sm btn-block" data-toggle="modal" data-target="#activeUsersModal<?=$user->id_user?>">activated</button>
                                <?php else:?>
                                    <span class="badge badge-success">Is Active</span>
                                <?php endif;?>
  
                                </td>
                                <td><?=$user->name?></td>
                                <td><?=$user->email?></td>
                                <td><img src="<?=base_url()?>assets/images/profile/<?=$user->avatar?>" width="150" height="100"/></td>
                                <td><?=date('d F Y ', $user->date_created)?></td>
                                <td><?=$user->role?></td>
                                <td>
                                <?php if($this->session->userdata('role') !== $user->role ):?>
                                    <a href="<?=base_url()?>UserPage/deleteuser/<?=$user->id_user?>" class="badge badge-danger btn btn-sm btn-block tombol-hapus">delete</a>
                                <?php endif;?>
                                </td>
                                </tr>
                            <?php $i++; endforeach;?>
                            </tbody>
                        </table>
                        </div>

            </div>
            <!-- /.container-fluid -->

            <!-- modal new user -->
            <div class="modal fade" id="newUsersModal" tabindex="-1" role="dialog" aria-labelledby="newUsersModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="newUsersModalLabel">Add New Users</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?=base_url()?>AdminPage/insertUser" method="post">
                                        <div class="modal-body">
                                        <form>
                                        <div class="form-group">
                                            <input type="text" name="role" class="form-control" id="formGroupExampleInput" placeholder="Role Name">
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Role</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of modal -->

            <!-- active user modal -->
                                                    <!-- Modal -->
                            <?php foreach($users as $user):?>
                                <div class="modal fade" id="activeUsersModal<?=$user->id_user?>" tabindex="-1" role="dialog" aria-labelledby="activeUsersModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="activeUsersModalLabel">Activated User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?=base_url()?>UserPage/activeuser" method="post">
                                        <div class="modal-body">                                        
                                        <div class="form-group">
                                        <input type="hidden" name="id" value="<?=$user->id_user?>">
                                            <input type="text" name="email" class="form-control" id="formGroupExampleInput" value="<?=$user->email?>">
                                        </div>
                                        <div class="form-check">
                            <input <?php if($user->is_active === 1):?> checked="checked" <?php endif;?> class="form-check-input" type="checkbox" name="is_active" value="<?=$user->is_active = ($user->is_active == 0) ? 1 : 0;?>" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Activated here
                                            </label>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Active</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?> 
                                <!-- end of modal -->
    <!-- end active user modal -->


    </div>
    <!-- End of Main Content -->