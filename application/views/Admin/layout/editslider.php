        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
            <div class="row">
                <div class="col-lg">
                <?php echo form_open_multipart('Layout/updateslider');?>
                <?php foreach($slider as $e):?>
                    <div class="row mb-5 mt-4">
                    <input type="hidden" name="id" class="form-control" value="<?=$e->id?>">

                                    <div class="col-sm-3">
                                        <img src="<?=base_url()?>assets/images/sliders/<?=$e->img?>" class="img-thumbnail">
                                        <small class="text-success"><?=$e->img?></small>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input name="img" type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Upload Gambar</label>
                                        </div>
                                    </div>
                                </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Text Small</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="small" value="<?=$e->small?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Text Header</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="header" value="<?=$e->header?>">
                    </div>
                    <div class="form-group">
                            <label for="content" style="margin-top:1em;">Content</label><br/>
                            <textarea class="ckeditor" id="content" name="truncate">
                                <?=$e->truncate?>
                            </textarea>
                        </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Link</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="link" value="<?=$e->link?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Edit</button>
                        <a href="<?=base_url()?>Layout/sliderlayout" class="btn btn-warning btn-block">Cancel</a>
                    </div>
                <?php endforeach;?>
                    </form>
                </div>
            </div>

        </div>
            <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->