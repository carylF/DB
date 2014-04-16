
<?php
//

$page_title = 'Registration Page';
include('header2.html');
?>
  <head>
    <?php session_start() ?>
    <title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <!-- Imported local files -->
    <link rel="stylesheet" type="text/css" href="profile.css" />
    <link rel="stylesheet" type="text/css" href="header2.css">
    <script src='behaviour.js' type='text/javascript'></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">
    <script src"/DB/bootstrap-3.1.1-dist/js/bootstrap.js" type='text/javascript'></script>

  </head>
 
  <body>

    <div id="container">
      <div id="banner">
       <!--  <img src="/DB/images/banner.jpg" > -->

        <div id="profpic">
          <img src="/DB/images/default.jpg">
            <li><a href="add_image.html"> Change profile picture</a></li>
        </div>

        <div id="tabs">
        <ul class="nav nav-tabs">
          <li class="active"><a href="profile.php">Timeline</a></li>
          <li ><a href="#">About</a></li>
          <li><a href="friends.php">Friends</a></li>
          <li><a href="editpro.php">Edit</a></li>
        </ul>
      </div>

      </div>

      

      

    </div>

    

    <div id="footer">
      Copyright © Cary Nicole Shantel Jodi
    </div>

  </body>
</html>