<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "student_db";
$result = '';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$sql = "SELECT * FROM user WHERE usertype='student'";
$result = mysqli_query($conn, $sql);
?>
<?php
error_reporting(0);
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

          a,
          a:hover {
               text-decoration: none !important;
          }

          .logout {
               float: right;
               padding-right: 30px;
          }

          ul {
               background-color: green;
               width: 16%;
               height: 100%;
               position: fixed;
               padding-top: 5%;
               text-align: center;
          }

          ul li {
               list-style: none;
               padding-bottom: 30px;
               font-size: 15px;
          }

          ul li a {
               color: white;
               font-weight: bold;
          }

          ul li a:hover {
               color: skyblue;
               text-transform: none;
          }

          .content {
               margin-left: 20%;
               margin-top: 5%;
          }

          .table_th {
               padding: 20px;
               font-size: 20px;
          }

          .table_td {
               padding: 20px;
               background-color: skyblue;
          }
     </style>

     <body>

          <header class="header">
               <a href="">View Student Dashbord</a>

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
                    <h3>View Student Dashbord</h3>
                    <?php
                    if ($_SESSION['message']) {
                         echo $_SESSION['message'];
                    }
                    unset($_SESSION['message']);
                    ?>
                    <table border="1px">
                         <tr>
                              <th class="table_th">UserName</th>
                              <th class="table_th">Email</th>
                              <th class="table_th">Phone</th>
                              <th class="table_th">Password</th>
                              <th class="table_th">Delete</th>
                              <th class="table_th">Update</th>
                         </tr>
                         <?php
                         while ($info = $result->fetch_assoc()) {
                              ?>
                              <tr>
                                   <td class="table_td">
                                        <?php echo "{$info['username']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['email']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['phone']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "{$info['password']}" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "<a onClick=\" javascript:return confirm('Are Your Sure to Delete This')\" href='delete.php?student_id={$info['id']}' class='btn btn-danger'>Delete</a>" ?>
                                   </td>
                                   <td class="table_td">
                                        <?php echo "<a href='update.php?student_id={$info['id']}' class='btn btn-success'>Update</a>" ?>
                                   </td>
                              </tr>
                         <?php
                         }
                         ?>
                    </table>
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