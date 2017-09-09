<?php
if (isset($_POST['id_user'])) {
  $query = mysqli_query($mysqli, "SELECT * FROM usuario WHERE id_user = '$_POST[id_user]'")
                                  or die ('Error: '.mysqli_error($mysqli));
  $data = mysqli_fetch_assoc($query);
}
?>

<section class="content-header">
  <h1>
    <i class="fa fa-edit icon-title"></i> Modificar Perfil de Usuario
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    <li><a href="?module=profile"> Perfil de usuario</a></li>
    <li class="active"> Modificar</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <!-- form start -->
        <form class="form-horizontal" role="form" enctype="multipart/form-data" action="modules/profile/proses.php?act=update" method="post">
          <div class="box-body">
            <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">

            <div class="form-group">
              <label class="col-sm-2 control-label">Nombre de usuarios</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="username" autocomplete="off" value="<?php echo $data['username']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nombre</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="name_user" autocomplete="off" value="<?php echo $data['name_user']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="email" autocomplete="off" value="<?php echo $data['email']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Telefono</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="telefono" autocomplete="off" maxlength="13" onkeypress="return goodchard(event,'0123456789',this)" value="<?php echo $data['telefono']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-5">
                <input type="file" name="foto">
                </br>
                <?php
                if ($data['foto'] == "") { ?>
                  <img src="images/user/user-default.png" style="border:1px solid #eaeaea;border-radius:5px;" width="128">
                <?php
                } else { ?>
                  <img src="images/user/<?php echo $data['foto']; ?>" style="border:1px solid #eaeaea;border-radius:5px;" width="128">
                <?php
                }
                ?>
              </div>
            </div>
          </div><!-- /.box body -->

          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                <a href="?module=profil" class="btn-default btn-reset">Cancelar</a>
              </div>
            </div>
          </div><!-- /.box footer -->
        </form>
      </div><!-- /.box -->
    </div><!--/.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
