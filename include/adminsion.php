
<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "student_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$sql="SELECT * from admission";
$result = mysqli_query($conn,$sql);
if (!$conn) {
    echo "Connection failed!";
}
?>
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
               <a href="">Adminsion</a>
               <div class="logout">
                    <a href="logout.php" class="btn btn-primary">Logout</a>
               </div>
          </header>
          <aside>
               <ul>
               <li>
                         <a href="adminsion.php">Adminsion</a>
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
                    
                    <center>
                    <h1>Applied Adminsion</h1>
                    <br><br>
                    <table border='1px'>
                         <tr>
                              <th style=" padding: 20px; font-size: 15px; " >Name</th>
                              <th style=" padding: 20px; font-size: 15px; ">Phone</th>
                              <th style=" padding: 20px; font-size: 15px; ">Email</th>
                              <th style=" padding: 20px; font-size: 15px; ">Message</th>
                         </tr>
                         <?php 
                         while($info = $result->fetch_assoc())
                         {
                         ?>
                         <tr>
                              <td style=" padding: 20px; ">
                              <?php
                              echo"{$info['name']}";
                              ?>
                            </td>
                              <td style=" padding: 20px; ">
                              <?php
                              echo"{$info['email']}";
                              ?>
                            </td>
                              <td style=" padding: 20px; ">
                              <?php
                              echo"{$info['phone']}";
                              ?>
                            </td>
                              <td style=" padding: 20px; ">
                              <?php
                              echo"{$info['message']}";
                              ?>
                            </td>
                         </tr>
                         <?php
                         }
                         ?>
                    </table>
                    </center>
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