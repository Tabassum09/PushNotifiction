            <!doctype html>
            <html>
                <head>
                    <title>
                        Notification form:-
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
                                        <a href="index.php"><button class="btn info">logout</button></a>		
                                        <a href="dashboard.php"><button class="btn warning">dashboard</button></a>



                                </div>
                        <form role="form" class="form-horizontal" method="post">
                               <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">TITLE:</label><br>
                                    <div class="col-sm-10">
                                    <input type="text" id="title" name="title" class="form-control" required />
                                   </div>
                                </div>
                                <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">MESSAGE:</label><br>
                                    <div class="col-sm-10">
                                    <input type="text" id="message" name="message" class="form-control" required/>
                                    </div>
                                </div>
                            <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">URL:</label><br>
                                <div class="col-sm-10">
                                <input type="website" id="url" name="url" class="form-control" required/>
                                </div>
                            </div>   
                            <div class="form-group">
                            <label for="url" class="col-sm-2 control-label">Image URL:</label><br>
                                <div class="col-sm-10">
                                <input type="website" id="imageUrl" name="imageUrl" class="form-control" required />
                                </div>
                            </div>   
                            <div class="form-group" id="buttons">
                                <div class="col-sm-offset-2 col-sm-10">
                                <input type="button" onclick="notifyMe()" name="submit" value="Submit" />

                            </div>
                            </div>
                    </form>

                          </body>
            </html>    

        <script>

            function notifyMe() { 

                var title=document.getElementById('title').value;
                var message=document.getElementById('message').value;
                var url=document.getElementById('url').value;
                var imageUrl=document.getElementById('imageUrl').value;

                var options = {
              body: message,
              icon: imageUrl,
                url: url
          };
          // Let's check if the browser supports notifications
          if (!("Notification" in window)) {
            alert("This browser does not support desktop notification");
          }

          // Let's check whether notification permissions have already been granted
          else if (Notification.permission === "granted") {
            // If it's okay let's create a notification
            var notification = new Notification(title,options);



              //on click notifications

                notification.onclick = function(event) {




                event.preventDefault(); 
                window.open(url,'_blank');

                             var xhr1 = new XMLHttpRequest();
            xhr1.open("POST", 'http://localhost/PushNotification/click_increment.php', true);


            xhr1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


            xhr1.onreadystatechange = function() {
            if(xhr1.readyState == XMLHttpRequest.DONE && xhr1.status == 200) {

                }
            }
                xhr1.send("action='archieve' & title="+title);





                }

                }




          // Otherwise, we need to ask the user for permission
          else if (Notification.permission !== "denied") {
            Notification.requestPermission(function (permission) {
              // If the user accepts, let's create a notification
              if (permission === "granted") {
                var notification = new Notification(title,options);

              }
            });
          }


          // At last, if the user has denied notifications, and you 
          // want to be respectful there is no need to bother them any more.
        Notification.requestPermission().then(function(result) {
          console.log(result);
        });

                //for stroing notification DAta

            var xhr = new XMLHttpRequest();
            xhr.open("POST", 'http://localhost/PushNotification/notify.php', true);


            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


            xhr.onreadystatechange = function() {
            if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {

                }
            }
                xhr.send("action='archieve' & title="+title+" & message="+message+" & url="+url+" & imageUrl="+imageUrl);








        }


        </script>







