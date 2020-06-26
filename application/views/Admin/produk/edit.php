        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
            <div class="row">
                <div class="col-lg">
                <?php echo form_open_multipart('Produk/updateproduk');?>
                <?php foreach($edit as $e):?>
                <input type="hidden" name="id" class="form-control" value="<?=$e->id?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?=$e->nama?>">
                    </div>
                    <div class="row mb-5 mt-4">
                                    <div class="col-sm-3">
                                        <img src="<?=base_url()?>assets/images/produk/<?=$e->image?>" class="img-thumbnail">
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
                    <label for="category">Tipe</label>
                        <select name="tipe" class="form-control">
                            <option><?=$e->tipe?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ingredients</label>
                        <textarea name="ingredients" class="form-control" id="exampleFormControlTextarea1" rows="3">
                        <?=$e->ingredients?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Cara Penggunaan</label>
                        <textarea name="carapenggunaan" class="form-control" id="exampleFormControlTextarea1" rows="3">
                            <?=$e->carapenggunaan?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3">
                        <?=$e->desc?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Harga Member</label>
                        <textarea name="hargamember" class="form-control" id="exampleFormControlTextarea1" rows="3">
                            <?=$e->harga_member?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Harga Non Member</label>
                        <textarea name="harganonmember" class="form-control" id="exampleFormControlTextarea1" rows="3">
                        <?=$e->harga_non_member?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Edit</button>
                    </div>
                <?php endforeach;?>
                    </form>
                </div>
            </div>

        </div>
            <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->