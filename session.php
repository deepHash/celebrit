<?php
   include('dbh.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"SELECT * FROM tbl_users_224 WHERE username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['first_name'];
   $id_session = $row['id'];
   $profile_session = $row['profile'];
   if(!isset($_SESSION['login_user'])){
      header("Location: index.php");
   }
?>