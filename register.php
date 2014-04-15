
<?php
//

$page_title = 'Registration Page';
include('header.html');
?>
<head
        <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
         <!--<script src='behaviour.js' type='text/javascript'></script>-->
        <link rel="stylesheet" type="text/css" href="mybook.css" />
        <link rel="stylesheet" type="text/css" href="header.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">

    </head>
 
    <body id='body'>

        <div id="signup">

            <div id="heading">
                <h1>Sign Up</h1>
                <h5> It's free! No hidden charges</h5>
            </div>

            <form class="form-horizontal" role="form" id="signup-form" action='action.php?a=register' method='post'>

                 <div class="form-group" id="name">
                        <label class="sr-only" for="fname">First Name</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="fname" placeholder="First Name" name='fname'>
                    </div>
                  </div>

              <div class="form-group" id="name">
                <label class="sr-only" for="lname">Last Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="lname" placeholder="Last Name" name='lname'>
                </div>
              </div>


              <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail2">Email address</label>
                  <div class="col-sm-12">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name='email'>
                  </div>
                </div>


                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword2">Password</label>
                  <div class="col-sm-12">
                    <input type="password" class="form-control" id="pass" placeholder="Password" name= 'pword'>
                  </div>
              </div>

                <div id="birthdayHead">
                <h3>Birthday</h3>

                    <div class="col-xs-5" id="dob">
                        
                        <input type="text" class="form-control" placeholder="YYYY/MM/DD" name="dob">
                      
                    </div> 

                <!-- </div> -->

            <div >
            <input type='text' name ='a' hidden='true' value='register'><br /><!-- Ensures that the register control sequence is run-->
            <button type="submit" id="signupbtn"  class="btn btn-primary btn-lg" \>Sign Up</button>
          </div>

            </div>
          
          

            </form>

        </div>



        <div id="footer">
            Copyright © Cary Nicole Shantel Jodi
        </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    </body>
</html>
