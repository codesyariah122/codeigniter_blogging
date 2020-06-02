 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>main/home" target="blank_">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laptop-code"></i>        
  </div>
  <div class="sidebar-brand-text mx-3">
  ourcitrus
  </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">
<!-- query dari menu -->
 <?php
 $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id` ,`menu`
    FROM `user_menu` JOIN `user_access_menu` 
      ON `user_menu`.`id` = `user_access_menu`.`menu_id`
   WHERE `user_access_menu`.`role_id` = $role_id 
   ORDER BY `user_access_menu`.`menu_id` ASC
   ";
   $menu = $this->db->query($queryMenu)->result_array();
 ?>

      <!-- looping menu -->
<?php foreach($menu as $m):?>
<div class="sidebar-heading">
  <?=$m['menu']?>
</div>

<!-- siapkan sub menu -->
<?php 
$menuId = $m['id'];
$querySubMenu = "SELECT *
FROM `user_sub_menu` JOIN `user_menu` 
  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
WHERE `user_sub_menu`.`menu_id` = $menuId 
AND `user_sub_menu`.`is_active` = 1
";
$subMenu = $this->db->query($querySubMenu)->result_array();
//var_dump($subMenu);
?>
<?php foreach($subMenu as $m):?>
<?php if($title == $m['title']):?>
    <li class="nav-item active">
<?php else:?>
    <li class="nav-item">
<?php endif;?>

  <a class="nav-link pb-0" href="<?=base_url()?><?=$m['url']?>">
    <i class="<?=$m['icon']?>"></i>
    <span><?=$m['title']?></span></a>
</li>
<?php endforeach;?>

<!-- Divider -->
<hr class="sidebar-divider mt-3">

<?php endforeach;?>

<li class="nav-item">
  <a class="nav-link" href="<?=base_url()?>auth/logout">
      <i class="fas fa-sign-out-alt"></i>           
        <span>Logout</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->