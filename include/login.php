<!DOCTYPE html>
<html lang="en" ng-app="complete">
<head>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='-1'>
    <meta http-equiv='pragma' content='no-cache'>
    <title>System</title>
    <link rel="stylesheet" href="library/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="library/style.css">
    <style type="text/css">
    </style>
</head>
<body ng-controller="homeCtrl" style="background-image: url('img/skay.png')">
    <div id="wrapper">
        <div id="menuhead" class="img1" style="background: #0099D3;">
            <div width="50%" class="floatleft shadow "> <img class="image1" src="img/system.png" />
                <h2 style="display: inline; font-weight: bold; margin: 10px; color: white;"> Student Management
                    System </h2>
            </div>
            <div class="floatright" style="margin-top: 10px;"> <img src="" width="200"></div>
        </div>
        <div class="row" style="width: 80%; margin: 0 auto;">
            <h5
                style="border: 1px solid gold; background: rgba(0,0,0,0.5); text-align: center; border-radius: 15px; padding: 10px; width: 100%; margin-top: 2%">
                <img src="img/computer.png" width="50"> <b> IT Management System </b>
            </h5>
        </div>
    </div>
    <div class="row">
        <form action="login.php" method="post" style="width: 50%; margin: 0 auto;">
            <h2 style=" text-align: center; color: white;">login system</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>
            <label style="color: white;">User Name</label>
            <input type="text" class="form-control" name="uname" placeholder="User Name"
                style="background: rgba(0, 0, 0, 0.3)"><br>
            <label style="color: white;">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password"
                style="background: rgba(0, 0, 0, 0.3)"><br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>