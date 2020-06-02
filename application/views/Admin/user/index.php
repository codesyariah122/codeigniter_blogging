        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?=$title?></h1>
<div class="row">
<div class="col-lg-6">
<?=$this->session->flashdata('message');?>
<div class="logins-data" data-logins="<?= $this->session->flashdata('success'); ?>"></div>

</div>
</div>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=base_url()?>assets/images/profile/<?=$user['avatar']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$user['name']?></h5>
        <small class="text-info"><?=$role?></small>
        <p class="card-text"><?=$user['email']?></p>
        <p class="card-text"><small class="text-muted">Member Since : <?=date('d F Y', $user['date_created']);?></small><br/>
        <small class="blockquote-footer">Last update : <?=date('d F Y , H:i:s', $user['date_update'])?></small>
        </p>
      </div>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->