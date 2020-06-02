
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
                    <div class="row">
                        <div class="col-lg-6">
                    <?=$this->session->flashdata('message');?>
                        <button type="button" class="btn btn-outline-primary btn-block mt-2 mb-5" data-toggle="modal" data-target="#newMenuModal">Add Menu</button>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php $i=1; foreach($menu as $m):?>
                                <tr>
                                <th scope="row"><?=$i?></th>
                                <td><?=$m['menu']?></td>
                                <td>
                                    <a href="" class="badge badge-primary">edit</a>
                                    <a href="<?=base_url()?>menu/deletemenu/<?=$m['id']?>" class="badge badge-warning tombol-hapus">delete</a>
                                </td>
                                </tr>
                        <?php $i++; endforeach;?>
                            </tbody>
                            </table>

                            <!-- Modal -->
                            <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?=base_url()?>menu" method="post">
                                <div class="modal-body">
                                <form>
                                <div class="form-group">
                                    <input type="text" name="menu" class="form-control" id="formGroupExampleInput" placeholder="Menu Name">
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


                        </div>
                    </div>

            </div>
            <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->