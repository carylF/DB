<!DOCTYPE html >
<html >
  <head>
    <?php session_start() ?>
    <title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <script src='behaviour.js' type='text/javascript'></script>

     <!-- Imported local files -->
    <link rel="stylesheet" type="text/css" href="homepage.css" />
    <link rel="stylesheet" type="text/css" href="profile.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">
    <script src"/DB/bootstrap-3.1.1-dist/js/bootstrap.js" type='text/javascript'></script>

  </head>
 
  <body>

    <nav class="navbar navbar-default navbar-static-top" role="navigation" id="nav">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MyBook</a>
        </div>

    
      <form class="navbar-form navbar-left" role="search"  id="searchs">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default-lg">
         <span class="glyphicon glyphicon-search"></span>Serach</button>
      </form>


      <ul class="nav navbar-nav navbar-right" id="headLinks">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="#">Friends</a></li>
        <li><a href="#">Logout</a></li>
        
      </ul>
     </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

    </nav>

    <div id="container">
      <div id="banner">
       <!--  <img src="/DB/images/banner.jpg" > -->

        <div id="profpic">
          <img src="/DB/images/default.jpg">
          <ul id="link">
            <li><span class"glyphicon glyphicon-camera"></span></li>
            <li>Change profile picture</li>
          </ul>
        </div>

        <div id="tabs">
        <ul class="nav nav-tabs">
          <li class="active"><a href="profile.php">Timeline</a></li>
          <li action="action.php?a=displayInfo"><a href="action.php?a=displayInfo">About</a></li>
          <li><a href="#">Friends</a></li>
          <li><a href="#">Messages</a></li>
        </ul>
      </div>

      </div>

      

      

    </div>

    

    <div id="footer">
      Copyright © Cary Nicole Shantel Jodi
    </div>

  </body>
</html>