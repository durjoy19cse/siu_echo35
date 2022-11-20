<?php include("includes/header.php");?>

<?php
$user_id=$_REQUEST['id'];

      
        ?>

        <?php


if(isset($_POST['update_registration']))
{
	


    $users_name = $_POST['users_name'];
    $users_email = $_POST['users_email'];
    $users_phone = $_POST['users_phone'];
    $users_password = $_POST['users_password'];
   


 
            $sql="update user_registration set user_name='$user_name',users_email='$users_email', users_phone='$users_phone', users_password='$users_password', where user_registration. user_id=$id";

                 






    if($conn->query($sql)==true)
        echo "updated registration";
    else
        echo $conn->error;

    
   }
   else {
    echo "Sorry, there was an error update registration.";
  }




  $sql="SELECT * from user_registration where user_id =".$id;


 $result  =  $conn->query($sql);
 $row     =  $result->fetch_assoc();



 ?>
















<div class="addmedicine">

                        	<form action="" method="post" enctype="multipart/form-data">


                        		<table align="center" width="400">
                        			<tr>
                        				<td><b>User  Name:</b></td>
                        				
                        				<td> <input type="text" name="users_name"  value="<?php echo $row['users_name']?>" ></td>
                        					
                        				</td>
                        			</tr>
                        			<tr>
                        				<td><b>Email:</b></td>
                        				
                        				<td> <input type="text" name="users_email"  value="<?php echo $row['users_email']?>" ></td>
                        					
                        				</td>
                        			</tr>

                        			<tr>
                        				<td><b>Mobile:</b></td>
                        				
                        				<td> <input type="number" name="users_phone"  value="<?php echo $row['users_phone']?>" ></td>
                        					
                        				</td>
                        			</tr>
                        			
                                    <tr>
                        				<td><b>Password:</b></td>
                        				
                        				<td> <input type="password" name="users_password"  value="<?php echo $row['users_password']?>" ></td>
                        					
                        				</td>
                        			</tr>

                                   
                    <tr>

                                    	

                         </tr>


                        			<tr>

                        				<td><input  type="submit" name="update_registration" value="update"></td>
                        			</tr>
                        		</table>
                        	</form>








<?php include("common/footer.php");?>






































