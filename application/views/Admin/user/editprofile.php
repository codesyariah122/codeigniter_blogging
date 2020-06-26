        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row justify-content-center">

                <div class="col-5">
                        <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php echo form_open_multipart('UserPage/UpdateProfile');?>
                        <!-- <input type="hidden" name="id" value="<?//=$user['id_user']?>"> -->
                        <?php foreach($users as $user):?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?=$user->email?>" readonly>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Full Name</label>
                            <input type="text" name="name" autofocus autocomplete="off" value="<?=$user->name?>" class="form-control" id="exampleInputPassword1" placeholder="Full Name">
                            <?=form_error('name','<small class="text-danger pl-3">','</small>') ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                Pictures
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?=base_url()?>assets/images/profile/<?=$user->avatar?>" class="img-thumbnail">
                                        <small><?=$user->avatar?></small>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input name="avatar" type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group-row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-outline-primary">Edit Profile</button>
                            </div>
                        </div>
                        </form>
                        <?php endforeach;?>
                </div>
            </div>

        </div>
            <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->