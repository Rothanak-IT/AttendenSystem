<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "student_db";
$result = '';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$name =$_SESSION['username'];
$sql = "SELECT * FROM user WHERE username='$name' ";
$result = mysqli_query($conn, $sql);
$info=mysqli_fetch_assoc($result);

?>
<?php
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
          label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
          }
          .div_deg{
            background-color: skyblue;
            width: 500px;
            padding-top: 70px;
            padding-bottom: 70px;
          }
     </style>
     <body>
          <?php include"student_sidebar.php"?>
          <div class="content" >
            <h1>Update Profile</h1>
            <br><br>
                <form action="" >
                    <div class="div_deg" >
                    <div>
                        <label>Name</label>
                        <input type="text" Name="name" value="<?php echo"{$info['$username']}"?>" >
                    </div> 
                    <div>
                        <label>Email</label>
                        <input type="text" Name="email" value="<?php echo"{$info['$email']}"?>" >
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="number" Name="phone" value="<?php echo"{$info['$phone']}"?>" >
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="text" Name="password" value="<?php echo"{$info['$password']}"?>" >
                    </div>
                    <div>
                        <button class="btn  btn-primary" type="submit" name="update_profile" >submit</button>
                    </div>
                    </div>
                </form>
                
          </div>
     </body>
     </html>
     <?php
} else {
     header("Location: index.php");
     exit();
}

?>