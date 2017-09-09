<?php

session_start();
// hapus Session
session_destroy();

//index.php alert = 2
header('Location: index.php?alert=2');
?>
