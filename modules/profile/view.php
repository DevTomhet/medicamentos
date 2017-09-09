<?php
if (isset($_SESSION['id_user'])) {
  $query = mysqli_query($mysqli, "SELECT * FROM usuario WHERE id_user='$_SESSION[id_user]'") or die ('error: '.mysqli_error($mysqli));
  $data = mysqli_fetch_assoc($query);
}
?>

<section class="content-header">
  <h1>
    <i class="fa fa-user icon-title"></i> Perfil de Usuario
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active"> Perfil de Usuario</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <?php
      if (empty($_GET['alert'])) {
        echo "";
      }
      elseif ($_GET['alert'] == 1) {
        echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4> <i class='icon fa fa-check-circle'></i> Exito!</h4>
                Perfil de usuario cambiado correctamente.
              </div>";
      }
      ?>
    </div>
  </div>
</section>
