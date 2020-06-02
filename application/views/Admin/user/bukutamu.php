
        <!-- Begin Page Content -->
<div class="container-fluid">

            <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
        </div>
            <div class="card-body">

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
                                <th scope="col">Actions</th>
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
                                    <a href="<?=base_url()?>Application/deletebukutamu/<?=$m['id']?>" class="badge badge-warning">delete</a>
                                </td>
                                </tr>
                        <?php $i++; endforeach;?>
                            </tbody>
                            </table>
                    </div>
             </div>
         </div>

</div>