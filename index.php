<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo "CONTACT FORM";?></title>

        <!--links-->
        <link href="asset/Css/media.css" rel="stylesheet">
        <link rel="stylesheet" href="asset/css/style.css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>
        <?php
        /* form isseting*/
        if(isset($_POST['sub'])){
                //form value
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $username = $_POST['username'];
             // form validation

            
        }
             if(empty($name) || empty($email) || empty($mobile) || empty($username)){

                $msg = "<p class=\" alert alert-danger text-left text-danger font-weight-bolder w-50 mx-auto display-5\">Oops!!...all fields are required!!<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

             }else{

                $msg = "<p class=\" alert alert-primary text-left text-primary font-weight-bolder w-50 mx-auto display-5\">Congratulations!...you are registered!!<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

             }
        
        ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="CNTCT-FRM">
                        <div class="card shadow rounded pt-5 bg-light">
                            <div class="crd-body bg-primary p-5">
                                <img src="img/twitter.png" width="100px" height="100px" style="background-position: center;">
                                <h3 style="text-align: center; padding: 40px 0; font-size: 45px; font-weight: 800; color: white;">Sign Up</h3>
                                <?php
                                    if(isset($msg)){
                                        echo $msg;
                                    }
                                ?>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-grp" style="padding: 10px 100px;">
                                        <label for="" style="font-size: 15px; font-weight: 600; color: #ffffff; padding-left: 40px;">NAME</label>
                                        <input name="name" type="text" placeholder="fulll name.." class="form-control" style="margin: 10px 20px; padding: 25px 20px; color: gold; font-size: 12px; font-weight: 500;">
                                    </div>
                                    <div class="form-grp" style="padding: 10px 100px;">
                                        <label for="" style="font-size: 15px; font-weight: 600; color: #ffffff; padding-left: 40px;">EMAIL</label>
                                        <input name="email" type="text" placeholder="email.." class="form-control" style="margin: 10px 20px; padding: 25px 20px; color: gold; font-size: 12px; font-weight: 500;">
                                    </div>                                    
                                    <div class="form-grp" style="padding: 10px 100px;">
                                        <label for="" style="font-size: 15px; font-weight: 600; color: #ffffff; padding-left: 40px;">PHONE</label>
                                        <input name="mobile" type="text" placeholder="moblie.." class="form-control" style="margin: 10px 20px; padding: 25px 20px; color: gold; font-size: 12px; font-weight: 500;">
                                    </div>
                                    <div class="form-grp" style="padding: 10px 100px;">
                                        <label for="" style="font-size: 15px; font-weight: 600; color: #ffffff; padding-left: 40px;">USERNAME</label>
                                        <input name="username" type="text" placeholder="username.." class="form-control" style="margin: 10px 20px; padding: 25px 20px; color: gold; font-size: 12px; font-weight: 500;">
                                    </div>
                                   
                                    <div class="form-grp" style="padding: 10px 100px;">                                        
                                        <input name="sub" type="submit" value="Sign up.." class="btn btn-light text-primary float-right" style="font-size: 28px; font-weight: 600; text-align: center; padding: 10px 45px; ">
                                    </div>
                                                                       
                                </form>
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>
















         <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
             
    </body>
    </html>