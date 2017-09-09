<?php
session_start();

require_once "../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
  echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
} else {
  if ($_GET['act'] == 'update') {
    if (isset[$_POST['Guardar']]) {
      if (isset($_POST['id_user'])) {
        $id_user = mysqli_real_escape_string($mysqli, trim($_POST['id_user']));
        $username = mysqli_real_escape_string($mysqli, trim($_POST['username']));
        $name_user = mysqli_real_escape_string($mysqli, trim($_POST['name_user']));
        $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
        $telefono = mysqli_real_escape_string($mysqli, trim($_POST['telefono']));

        $name_file = $_FILES['foto']['name'];
        $ukuran_file = $_FILES['foto']['size'];
        $tipe_file = $_FILES['foto']['type'];
        $tmp_file = $_FILES['foto']['tmp_name'];

        $allowed_extensions = array('jpg','jpeg','png')
      }
    }
  }
}
?>
