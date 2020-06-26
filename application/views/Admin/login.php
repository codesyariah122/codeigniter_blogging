
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

<div class="col-xl-10 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><?=$header?></h1>
              </div>
            
              <?=$this->session->flashdata('message'); ?>
              
              <div class="logins-data" data-logins="<?= $this->session->flashdata('success'); ?>"></div>

              <div class="activation-data" data-activation="<?= $this->session->flashdata('activation'); ?>"></div>
              <div class="errorpassword-data" data-errorpassword="<?= $this->session->flashdata('errorpassword'); ?>"></div>
              <div class="register-data" data-register="<?= $this->session->flashdata('register'); ?>"></div>


              <form class="user" action="<?=base_url()?>auth" method="post">
                <div class="form-group">
                  <input autofocus autocomplete="true" type="text" class="form-control form-control-user" id="email" placeholder="Enter Email Address..." name="email" value="<?=set_value('email')?>">
                   <?=form_error('email','<small class="text-danger pl-3">','</small>') ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                   <?=form_error('password','<small class="text-danger pl-3">','</small>') ?>
                </div>
                <div class="form-group">
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                  Login
                </button>
                <hr>
              </form>
              <a href="<?=base_url()?>main/home" class="btn btn-outline-danger btn-user btn-block">
                  Back to ourcitrus
                </a>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?=base_url()?>auth/registration/">Create an Account!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>

