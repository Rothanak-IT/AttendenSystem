<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "student_db";
$result = '';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$id=$_GET['student_id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$info=$result->fetch_assoc();
if (isset($_POST["update"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $query = "UPDATE user SET username='$name',email='$email',phone='$phone',password='$password' WHERE id='$id'";
    $result2 = mysqli_query($conn,$query);
    if($result2){
        header("locatio:viewstudent.php");
    }
}
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

         label{
            display: inline-block;
            width: 100px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
         }
         .dev_deg{
            background-color: skyblue;
            width: 400px;
            padding-bottom: 70px;
            padding-top: 70px;
         }
     </style>

     <body>

          <header class="header">
               <a href="">Update Student</a>

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
                <h3>Update Student</h3>
                  <div class="dev_deg" >
                    <form action="#" method="POST" >
                       <div>
                       <label>Username</label>
                        <input type="text" name="name" value="<?php echo"{$info['username']}";?>" >
                       </div>
                       <div>
                       <label>Email</label>
                        <input type="text" name="email" value="<?php echo"{$info['email']}"?>">
                       </div>
                       <div>
                       <label>Phone</label>
                        <input type="text" name="phone" value="<?php echo"{$info['phone']}"?>">
                       </div>
                       <div>
                       <label>Password</label>
                        <input type="number" name="password" value="<?php echo"{$info['password']}"?>">
                       </div>
                       <div>
                        <button class="btn btn-success" type="text" name="update">Update</button>
                       </div>
                    </form>
                  </div>
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