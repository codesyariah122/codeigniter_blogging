        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
            <div class="row">
                <div class="col-lg">
                <?php echo form_open_multipart('Layout/updatehalloffame');?>
                <?php foreach($edit as $e):?>
                <input type="hidden" name="id" class="form-control" value="<?=$e->id?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Peringkat</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="<?=$e->judul?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?=$e->nama?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="username" value="<?=$e->username?>">
                    </div>
                    <div class="row mb-5 mt-4">
                                    <div class="col-sm-3">
                                        <img src="<?php if($e->image == NULL): echo base_url('assets/images/default-avatar.png'); else: echo base_url('assets/images/halloffame/').$e->image; endif;?>" class="img-thumbnail">
                                        <small class="text-success"><?=$e->image?></small>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Upload Gambar</label>
                                        </div>
                                    </div>
                                </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kota</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="kota" value="<?=$e->kota?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Negara</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="negara" value="<?=$e->negara?>">
                    </div>
                    <div class="form-group">
                    <label for="category">Link</label>
                        <select name="url" class="form-control">
                            <option><?=$e->url?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Edit</button>
                        <a href="<?=base_url()?>Layout/<?=$e->url?>" class="btn btn-warning btn-block">Cancel</a>
                    </div>
                <?php endforeach;?>
                    </form>
                </div>
            </div>

        </div>
            <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->