<?php

  session_start();

  $_SESSION = array();

  session_destroy();

  print "<script>window.location=\"../index.php\";</script>";
?>