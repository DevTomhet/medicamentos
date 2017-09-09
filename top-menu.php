<?php

require_once "config/database.php";

$query = mysqli_query($mysqli, "SELECT id_user, name_user, foto, permisos_acceso FROM usuario WHERE id_user='$_SESSION[id_user]'") or die ('error: '.mysqli_error($mysqli));

$data = mysqli_fetch_assoc($query);
?>

<li class="dropdown user user-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <?php
    if ($data['foto']== "") { ?>
      <img src="images/user/user-default.png" class="user-image" alt="User Image" />
    <?php
  } else { ?>
    <img src="images/user/<?php echo $data['foto']; ?>" class="user-image" alt="User Image" />
  <?php
  }
  ?>
    <span class="hidden-xs"><?php echo $data['name_user']; ?> <i style="margin-left:5px" class="fa fa-angle-down"></i></span>
  </a>
  <ul class="dropdown-menu">
    <li class="user-header">
      <?php
      if ($data['foto'] == "") { ?>
        <img src="images/user/user-default.png" class="img-circle" alt="User Image" />
      <?php
    } else { ?>
      <img src="images/user/<?php echo $data['foto']; ?>" class="img-circle" alt="User Image" />
    <?php
    }
    ?>
    <p>
      <?php echo $data['name_user']; ?>
      <small><?php echo $data['permisos_acceso']; ?></small>
    </p>
    </li>

    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-left">
        <a href="?module=profile" style="width:80px" class="btn btn-default btn-flat">Perfil</a>
      </div>

      <div class="pull-right">
        <a href="#logout" style="width:80px" data-toggle="modal" class="btn btn-default btn-flat">Salir</a>
      </div>
    </li>
  </ul>
</li>
