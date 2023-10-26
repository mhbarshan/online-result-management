<?php
  session_start();
  unset($_SESSION['id']);
  unset($_SESSION['first_name']);
  unset($_SESSION['username']);
  header('location:index.html');
  
?>