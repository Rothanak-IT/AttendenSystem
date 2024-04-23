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

          <header class="header">
               <a href="">Teacher Dashbord</a>
               <div class="logout">
                    <a href="logout.php" class="btn btn-primary">Logout</a>
               </div>
          </header>
          <aside>
               <ul>
               <li>
                         <a href="adminsion.php">Admission</a>
                    </li>
               <li>
                         <a href="addstudent.php">Add Student</a>
                    </li>
                    <li>
                         <a href="viewstudent.php">View Student</a>
                    </li>
                    <li>
                         <a href="addteacher.php">Add Tescher</a>
                    </li>
                    <li>
                         <a href="viewteacher.php">View Teacher</a>
                    </li>
                    <li>
                         <a href="addcourses.php">Add Courses</a>
                    </li>
                    <li>
                         <a href="viewcourses.php">View Courses</a>
                    </li>
               </ul>
          </aside>
          <div>
               <div class="content">
                    <h1>Teacher Dashbord</h1>
               </div>
          </div>
          <h1>
               <?php echo $_SESSION['name']; ?>
          </h1>


     </body>

     </html>
     <?php
} else {
     header("Location: index.php");
     exit();
}

?>