## contact form validation system with all uploads

<img src="2.JPG">
<img src="3.JPG">

#### our project features are as:
- name check
-email check
-mobile check
-username check
-etc

'<?php
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
        
        ?>'
        '<?php
                                    if(isset($msg)){
                                        echo $msg;
                                    }
                                ?>'