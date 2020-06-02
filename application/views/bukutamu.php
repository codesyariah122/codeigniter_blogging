


<div id="colorlib-subscribe">
    <div class="overlay"></div>
    <div class="container" style="margin-top:6em;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h2><?=$index_title?></h2>
                <?php if(validation_errors()):?>
                    <?=$this->session->flashdata('error');?>
                <?php else:?>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
                    <?php endif;?>
                <p>Silahkan isi buku tamu</p>
            </div>
        </div>

        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-inline qbstp-header-subscribe" action="" method="post">
                            <div class="col-three-forth">
                                <div class="form-group">
                                    <input autofocus type="text" class="form-control" id="email" name="email" placeholder="Email@emailanda.com" value="<?= set_value('email') ?>">
                                    <?php echo form_error('email', '<div class="error text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-three-forth">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="fullname" placeholder="Nama Lengkap" value="<?= set_value('email') ?>">
                                    <?php echo form_error('fullname', '<div class="error text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-three-forth">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="phone" placeholder="0822-2266-8778" value="<?= set_value('phone') ?>">
                                    <?php echo form_error('phone', '<div class="error text-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" style="margin-top:1em;">Content Message</label><br />
                                <?php echo form_error('message', '<div class="error text-danger">', '</div>'); ?>
                                <textarea class="ckeditor" id="email" name="message"><?= set_value('message') ?></textarea>
                            </div>

                            <div class="col-one-third" style="margin-top:1em;">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    Swal.fire({
        title: '<h1><font color=white><br/><font color=lemonchiffon>' + flashData + '</font><br/> So...Sory</h1>',
        text: 'ourcitrus.id',
        showConfirmButton: true,
        timer: 5000,
        width: 400,
        padding: '2em',
        background: '#fff url(https://ourcitrus.id/assets/images/tenor2.gif)',
        backdrop: `
						rgba(0,0,123,0.4)
						url("https://ourcitrus.id/assets/images/tenor3.gif")
						left top
						no-repeat
					`
    });
</script>