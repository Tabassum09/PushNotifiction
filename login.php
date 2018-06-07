    <!doctype html>
    <html>
        <head>
            <title>
                login page:-
            </title>
             <link href="CSS/dashboard.css" rel="stylesheet" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <link rel="stylesheeet" type="text/css" href="css/bootstrap.css">
            <style>
                 body{
                        padding:50px;
                         height:600px;
                        width:1100px;
                    }
            </style>
            <style>
                body{
                padding:50px;
                 background-image:url("images/landscape_68-wallpaper-1366x768.jpg");
                 height:600px;
                width:1100px;
                }
            </style>
        </head>
        <body>
            <!--NAVIGATION MENU-->
                            <div id="nav_menu">
                                    <a href="index.php"><button class="btn home">home</button></a>
                                    <a href="signUp.php"><button class="btn success">sign Up</button></a>
                                    <a href="login.php"><button class="btn info">logIn</button></a>		



                            </div>
             <h2>LOGIN HERE:~</h2>
           <form method="POST" role="form" class="form-horizontal">
      <div class="form-group" >
        <label for="username" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
          <input type="text" id="username" name="username" class="form-control" required/>
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" id="password" name="password" class="form-control" required />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" name="submit" value="submit" />
          <input type="button" value="Cancel" />
        </div>
      </div>
    </form>
        </body>
    </html>


    <?php
                        $conn=mysqli_connect('localhost','root','','miniproject');
                       // include('dbcon.php');
                        if(isset($_POST['submit']))
                        {
                        $username=$_POST['username'];

                        $password=$_POST['password'];


                        $query="select * from signup where email_Id='$username' and Password='$password'";
                        $result = $conn->query($query) ;   

                            if($result-> num_rows==1)
                                {
                             echo "<script> alert('successful login');
                               window.location='dashboard.php'</script>";

                                }
                            else
                                echo ("unsuccessful loggedIn");
                        }
    ?> 