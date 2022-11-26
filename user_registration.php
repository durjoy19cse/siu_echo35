<?php 
include('includes/header.php');
if (isset($_POST['user_register'])) {

    print_r($_POST);
    $users_name = $_POST['users_name'];

    $users_email = $_POST['users_email'];
    $users_phone = $_POST['users_phone'];
    $users_password = $_POST['users_password'];
    $again_password = $_POST['again_password'];
    $md5password = md5($users_password);

   
    $empty_msg1 = $empty_msg2 = $empty_msg3 = $empty_msg4 = $psw_match_msg = $empty_msg5 = '';

$error =0;
    if (empty($users_name)) {
        $empty_msg1 = 'Write User Name';
        $error =1;

    }

    if (empty($users_email)) {
        $empty_msg2= 'Write email';
        $error =1;
    }
    if (empty($users_phone)) {
        $empty_msg3= 'Write your Mobile no..';
        $error =1;
    }
    if (empty($users_password)) {
        $empty_msg4 = 'Write password';
        $error =1;
    }
    if (empty($again_password)) {
        $empty_msg5 = 'Write password Again';
        $error =1;
    }

    if ($error ==0) {
        if ($users_password !== $again_password) {
            echo $psw_match_msg = 'Password does not match!';
        } else {
            $psw_match_msg = '';
           echo  $sql = "insert into user_registration(users_name,  users_email,  users_phone,users_password) 
						values('$users_name',  '$users_email','$users_phone', '$md5password')";

            if ($conn->query($sql) == TRUE) {
               // header('Location:login.php');
                echo "<script>location.href='user_login.php'</script>";
               
            } else {
                echo 'data is not inserted';
            }
        }
    } else {
       echo  $empty_msg = 'Fill up all fields';
    }

}

?>




<div class="container-fluid ">
    <div class="container" style="margin-top:20px">
        <h3 class="text-center">Student's Signup</h3>
        <p></p>
    </div>
    <div class="container" style="margin-top:20px">
      



        <div class="col-md-6">
           
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mt-2 pb-2">
                    <label for="username">User Name:</label>
                    <input type="text" name="users_name" class="form-control" placeholder="Your User Name"  required value="<?php if (isset($_POST['user_register'])) {
                        echo $users_name;
                    } ?>">
                    <span class="text-danger">
                        <?php if (isset($_POST['user_register'])) {
                            echo $empty_msg1;
                        } ?>
                    </span>
                </div>

                <div class="mt-2 pb-2">
                    <label for="email">Email:</label>
 
                    <input type="email"  required name="users_email" class="form-control" placeholder="Enter your email" value="<?php if (isset($_POST['user_register'])) {
                        echo $users_email;

                    } ?> ">
                    <span class=" text-danger">
                        <?php if (isset($_POST['user_register'])) {
                            echo $empty_msg2;
                        } ?>
                    </span>

                </div>
                <div class="mt-2 pb-2">
                    <label for="phone">Mobile No:</label>

                    <input type="number" required name="users_phone" class="form-control" placeholder="Enter your Mobile no."
                        value="<?php if (isset($_POST['user_register'])) {
                            echo $users_phone;

                        } ?> ">
                    <span class=" text-danger">
                        <?php if (isset($_POST['user_register'])) {
                            echo $empty_msg3;
                        } ?>
                    </span>

                </div>


                <div class="mt-1 pb-2">
                    <label for="password">Password:</label>
                    <input type="password" required name="users_password" class="form-control" placeholder="Enter New password">
                    <span class="text-danger">
                        <?php if (isset($_POST['user_register'])) {
                            echo $empty_msg4;
                        } ?>
                    </span>

                </div>
                <div class="mt-1 pb-2">
                    <label for="password">Password Again:</label>
                    <input type="password" required name="again_password" class="form-control" placeholder="Enter password Again">
                    <span class="text-danger">
                        <?php if (isset($_POST['user_register'])) {
                            echo $empty_msg5 . '' . $psw_match_msg;
                        } ?>
                    </span>
                </div>
                <div class="mt-1 pb-2">
               
                    <button type="submit" name="user_register"  value="user_register"class="btn btn-success">Sign In</button>
                </div>
                <div class="mt-1 pb-2">
                    Alrady have an account? <a href="login.php" class="text-decoration-none">Login here</a>
                </div>
            </form>
        </div>
    </div>
   
</div>
</div>





<?php
include('includes/footer.php');

    ?>