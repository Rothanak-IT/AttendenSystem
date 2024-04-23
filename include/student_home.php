<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
     ?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="css/style.css">
          <link rel="stylesheet" href="library/bootstrap.min.css" media="screen">
     </head>
     <style>
          * {
               margin: 0;
               padding: 0;
          }

          .header {
               background-color: skyblue;
               line-height: 70px;
               padding-left: 30px;
          }

          a,a:hover {
               text-decoration: none!important;
          }

          .logout {
               float: right;
               padding-right: 30px;
          }
          ul{
               background-color: green;
               width: 16%;
               height: 100%;
               position: fixed;
               padding-top: 5%;
               text-align: center;
          }
          ul li{
               list-style: none;
               padding-bottom: 30px;
               font-size: 15px;
          }
          ul li a{
               color: white;
               font-weight: bold;
          }
          ul li a:hover{
               color: skyblue;
               text-transform: none;
          }
          .content{
          margin-left: 20%;
          margin-top: 5%;
          }
     </style>
     <body>
          <?php include"student_sidebar.php"?>
     </body>
     </html>
     <?php
} else {
     header("Location: index.php");
     exit();
}

?>