

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resturant Administration</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <style>


  </style>
</head>

<body>
   
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Administration</a>
            </div>
            <div style="color: white;
                           padding: 0px 50px 5px 50px;
                           float: right;
                      font-size: 16px;
                      display:flex;
                      width:60%;
                      align-items: center;
                      ">
                      <?php 
            
            if($_SESSION['user_info']) {
            echo "<div style='marging-right:56px;font-size:20px;text-align:center; width: 83%;'>". "Welcom" ."<br>". $_SESSION['user_info']['name']."</div>";
            }
        ?>
       <a href="logout.php" class="btn btn-success square-btn-adjust">Logout</a> </div>
        </nav>
        <!-- /. NAV TOP  -->

        <!-- /. NAV SIDE  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <?php 
            
               if($_SESSION['user_info'])
               {
               if($_SESSION['user_info']['role_id']==1) {
               
                
                ?>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-users "></i>Users</a>
                    </li>
                    <li>
                        <a href="categories.php"><i class="fa fa-tasks"></i>Categories </a>
                    </li>
                    <li>
                        <a href="products.php"><i class="fa fa-bars"></i>Products</a>
                    </li>
                    <li>
                        <a href="orders.php"><i class="fa fa-table"></i>Orders</a>
                    </li>
                    <li>
                        <a href="../index.php"><i class="fa fa-tasks"></i>Prowse Website</a>
                    </li>
                    <li>
                        <a href="profile.php"><i class="fa fa-tasks"></i>Profile</a>
                    </li>

                    <?php } 
                    elseif($_SESSION['user_info']['role_id']==2)
                    {   ?>
                        <li>
                        <a href="../index.php"><i class="fa fa-tasks"></i>Prowse Website</a>
                        </li>
                         <li>
                        <a href="profile.php"><i class="fa fa-tasks"></i>Profile</a>
                        </li>
                         <li>
                        <a href="Purchases.php"><i class="fa fa-tasks"></i>Purchases</a>
                        </li>
                  <?php }} ?>

                </ul>

            </div>

        </nav>