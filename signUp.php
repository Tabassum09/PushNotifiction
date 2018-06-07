            <!doctype html>
            <html>
                <head>
                    <title>
                        signUp page:-
                    </title>
                     <link href="CSS/dashboard.css" rel="stylesheet" type="text/css">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
                    <style>
                        #check{
                            padding-left: 17%;
                        }
                        #buttons{
                            padding-left: 17%;
                            padding-top: 5%;
                        }
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
                        <h2>SIGN UP HERE:~</h2>
                        <form role="form" class="form-horizontal" method="POST" action="signUp.php">
                               <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email id:</label>
                                    <div class="col-sm-10">
                                    <input type="text" id="email" name="email" class="form-control" required/>
                                   </div>
                                </div>
                                <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                    <input type="password" id="password" name="password" class="form-control" required />
                                    </div>
                                </div>
                            <div class="form-group">
                            <label for="confirm password" class="col-sm-2 control-label">confirm Password</label>
                                <div class="col-sm-10">
                                <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" required />
                                </div>
                            </div>
                             <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">website url</label>
                                <div class="col-sm-10">
                                <input type="text" id="url" name="url" class="form-control" />
                                </div>
                            </div>
                            <div class="checkbox" id="check">
                            <label>
                            <input type="checkbox" value="1" required/>
                            agree to privacy
                              </label>
                            </div>
                            <div class="form-group" id="buttons">
                                <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="Signup" name="submit" />
                                <input type="button" value="Cancel" />
                            </div>
                            </div>
                            </form>
                         </body>
                        </html>     


                        <?php
                            include('dbcon.php');
                            if(isset($_POST['submit']))
                            {
                            $username=$_POST['email'];
                            $password=$_POST['password'];
                            $Url=$_POST['url'];
                            $query="INSERT into signup(email_Id,Password,Url) values('$username','$password','$Url')";
                            $run=mysqli_query($conn,$query);
                                if($run==true)
                                {
                                    echo "sign up sucessfully";
                                     echo "<script> alert('successful login');
                               window.location='login.php'</script>";

                                }
                            }
                        ?> 

