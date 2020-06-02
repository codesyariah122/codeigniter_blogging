
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row justify-content-center">
                <div class="col-2 mt-5">
                    <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
                </div>
                <?=$this->session->flashdata('message');?>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php echo form_open_multipart('Post/updatepost');?>
                    <input type="hidden" name="id" class="form-control" value="<?=$post['id']?>">
                        <div class="form-group">
                            <input type="text" name="judul" class="form-control" id="formGroupExampleInput" placeholder="Judul Post" value="<?=$post['judul']?>">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                Pictures
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?=base_url()?>assets/images/post/<?=$post['image']?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Upload Gambar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" style="margin-top:1em;">Content Message</label><br/>
                            <textarea class="ckeditor" id="content" name="content">
                                <?=$post['content']?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Update Post</button>
                        </div>
                    </form>
                </>
            </div>

        </div>

    </div>
</div>
    <!-- End of Main Content -->