        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
            <div class="row">
                <div class="col-lg">
                <?php echo form_open_multipart('Layout/updatepage');?>
                <?php foreach($edit as $e):?>
                <input type="hidden" name="id" class="form-control" value="<?=$e->id?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="<?=$e->judul?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Url</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="url" value="<?=$e->url?>">
                    </div>
                    <div class="row mb-5 mt-4">
                                    <div class="col-sm-3">
                                        <img src="<?=base_url()?>assets/images/page/<?=$e->img?>" class="img-thumbnail">
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
                    <label for="category">Link</label>
                        <select name="link" class="form-control">
                            <option><?=$e->link?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea name="content" class="form-control ckeditor" id="exampleFormControlTextarea1" rows="3">
                        <?=$e->content?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Edit</button>
                        <a href="<?=base_url()?>Layout/<?=$e->link?>" class="btn btn-warning btn-block">Cancel</a>
                    </div>
                <?php endforeach;?>
                    </form>
                </div>
            </div>

        </div>
            <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->