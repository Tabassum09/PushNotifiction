

    <?php
                        include('dbcon.php');
                            if(isset($_POST))
                            {
                        $title=$_POST['title'];
                        $message=$_POST['message'];
                        $url=$_POST['url'];
                        $imageUrl=$_POST['imageUrl'];
                        $query="INSERT into notification(title,message,url,imageUrl) values('$title','$message','$url','$imageUrl')";
                        $run=mysqli_query($conn,$query);
                            if($run==true)
                            {
                                echo "notification sucessfully stored in database ";
                            }
                            }
                    ?> 