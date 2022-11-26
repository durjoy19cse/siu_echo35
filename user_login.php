<?php
session_start();
include("includes/header.php");


?>

<?php


$un_successful_msg = '';

if (isset($_POST['submit'])) {
    $users_email = $_POST['users_email'];
    $users_password = $_POST['users_password'];
    $passwordmd5 = md5($users_password);

    if (empty($users_email)) {
        $email_msg = 'Enter an email.';
    } else {
        $email_msg = '';
    }

    if (empty($users_password)) {
        $pass_msg = 'Enter your password.';
    } else {
        $pass_msg = '';
    }

    if (!empty($users_email) && !empty($users_password)) {
        $sql = "SELECT * FROM user_registration WHERE users_email='$users_email' AND users_password = '$passwordmd5'";
        $query = $conn->query($sql);

        if ($query->num_rows > 0) {
            $row = $query->fetch_assoc();
             $users_email = $row['users_email'];
             $users_password = $row['users_password'];

            $_SESSION['users_email'] = $users_email;
             $_SESSION['users_password'] = $users_password;
             $_SESSION['user_id']=$u_id

           // header('location:index.php');
        
           echo "<script>location.href='users_dashboard.php'</script>";
        } else {
            $un_successful_msg = 'Wrong email or Password!';
        }
    }
}
?>


<div class="container">
    <div class="container" style="margin-top:50px">
        <h3 class="text-center">Login </h3>
        

            <?php if (!empty($_SESSION['sign_up_msg'])) {
                echo $_SESSION['sign_up_msg'];
            } ?>
        </p>
    </div>
    <div class="container" style="margin-top:50px">
        <div class="row">

            <div class="col-md-6">
                <div class="container bg-light p-4">
                    <p class="text-danger">
                        <?php echo $un_successful_msg ?>
                    </p>
                    <form action="" method="POST">
                        <div class="mt-2 pb-2">
                            <label for="email">Email:</label>
                            <input type="email" name="users_email" class="form-control" placeholder="Enter your email"
                                value="<?php if (isset($_POST['submit'])) {
                                    echo $users_email;
                                } ?>">
                            <span class="text-danger">
                                <?php if (isset($_POST['submit'])) {
                                    echo $email_msg;
                                } ?>
                            </span>
                        </div>
                        <div class="mt-1 pb-2">
                            <label for="password">Password:</label>
                            <input type="password" name="users_password" class="form-control"
                                placeholder="Enter your password">
                            <span class="text-danger">
                                <?php if (isset($_POST['submit'])) {
                                    echo $pass_msg;
                                } ?>
                            </span>
                        </div>
                        <div class="mt-1 pb-2">
                            <button name="submit" class="btn btn-success">Login</button>
                        </div>
                        <div class="mt-1 pb-2">
                            Not an account? <a href="user_registration.php" class="text-decoration-none">Registration
                            </a>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>




<?php include("includes/footer.php"); ?>