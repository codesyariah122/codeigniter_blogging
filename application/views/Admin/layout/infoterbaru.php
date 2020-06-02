
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
            <?=$this->session->flashdata('message');?>
                    <div class="row justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-block mt-2 mb-5" data-toggle="modal" data-target="#newPostModal">Add New Post</button>
                        <div class="col-lg">
                                    <!-- Modal -->
                                    <div class="modal fade" id="newPostModal" tabindex="-1" role="dialog" aria-labelledby="newPostModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="newPostModalLabel">Add New Post</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?=$this->session->flashdata('message');?>
                                        <?php echo form_open_multipart('Post/insertpost');?>
                                        <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" name="judul" class="form-control" id="formGroupExampleInput" placeholder="Judul Post" value="<?=set_value('judul')?>">
                                        <?=form_error('judul','<small class="text-danger pl-3">','</small>') ?>
                                        </div>
                                        <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Upload Gambar</label>
                                        </div>
                                        <div class="form-group">
                                        <label for="content" style="margin-top:1em;">Content Message</label><br/>
									        <textarea class="ckeditor" id="content" name="content">
                                            <?=set_value('content');?>
                                            </textarea>
                                            <?=form_error('judul','<small class="text-danger pl-3">','</small>') ?>
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
                    <div class="row justify-content-center">
                        <div class="col-6">       
                                    <!--Tampilkan pagination-->
                                    <?php echo $pagination; ?>
                        </div>
                    </div>
            <div class="row">
                    <?php foreach($post as $p):?>
                        <div class="col-lg mt-2 mb-2">
                            <div class="card" style="width: 18rem;">
                                <img src="<?=base_url()?>assets/images/post/<?=$p->image?>" class="card-img-top rounded mx-auto d-block" width="250" height="250" alt="...">
                                    <div class="card-body">
                                    <small><?php $char=strlen($p->content);?></small>
                                        <h5 class="card-title"><?=$p->judul?></h5>
                                        <p class="card-text text-truncate">
                                        <?php 
                                        if($char > $num): 
                                        $num_char=$char-$num;
                                        substr($p->content, 0, $num_char);
                                        endif;
                                        ?>
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Created : <?=date('d F Y ', $p->date_created)?></li>
                                        <li class="list-group-item">Update : <?php if($p->date_post_update != 0): echo date('d F Y', $p->date_post_update); else: echo "-"; endif;?></li>
                                        <li class="list-group-item">Author : <?=$p->author;?></li>
                                    </ul>
                                    <div class="card-body">
                                    <?php if($p->author === $this->session->userdata('name')):?>
                                        <a href="<?=base_url()?>Post/editpost/<?=$p->id?>" class="card-link badge-primary btn">Edit Post</a>
                                    <?php endif;?>
                                        <a href="<?=base_url()?>post/read/<?=$p->url?>" class="card-link badge-info btn">View Post</a><br/>
                                        <?php if($user['role_id'] == 1):?>
                                            <a href="<?=base_url()?>post/deletepost/<?=$p->id?>" class="card-link badge-danger mt-2 mx-auto btn btn-block tombol-hapus">Delete Post</a>
                                        <?php endif;?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>

            </div>


            <!-- /.container-fluid -->


            <!-- active user modal -->
                                                    <!-- Modal -->
                                <div class="modal fade" id="activeUsersModal" tabindex="-1" role="dialog" aria-labelledby="activeUsersModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="activeUsersModalLabel">Activated User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?=base_url()?>AdminPage/activeuser" method="post">
                                        <div class="modal-body">                                        
                                        <div class="form-group">
                                        <input type="hidden" name="id" value="">
                                            <input type="text" name="email" class="form-control" id="formGroupExampleInput" value="">
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
                                <!-- end of modal -->
    <!-- end active user modal -->


    </div>
    <!-- End of Main Content -->