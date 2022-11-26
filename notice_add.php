<?php include("includes/header.php");?>

<?php
if(isset($_POST["addnotice"]))
{

   

   $target_dir = "images/notice/";
   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

    $pic_name =  $_FILES["fileToUpload"]["name"];
    $title = $_POST['title'];
    $description = $_POST['description'];
   
    $sql = "insert into admission_notice (title, description,   notice_picture) values ('$title','$description','$pic_name')";

      if($conn->query($sql)==true)
        echo "new notice created successfully";
    else
        echo $conn->error;


  } else {
    echo "Sorry, there was an error uploading your file.";
  }

}


?>








<div class="container text-center">

           <div class="text-center text-info ">
               <h2> Add Admission notice </h2>

            </div>

       <div class="row">



                        	<form action="" method="post" enctype="multipart/form-data">


                        		<table>

                                <div class="col-md-6 mt-2 ">
                                 <tr>
                        				<td><b>title:</b></td>
                        				
                        				<td> <input type="text" name="title" ></td>
                        					
                        				
                        		 </tr>

                                </div>

                        			
                                <div class="col-md-6 mt-2"><tr>
                        				
                        				<tr>
                                        <td><b>description:</b></td>
                                        <td> <input type="text" name="description" ></td>
                        					
                        			</tr>
                                </div>
                        			
                                    <div class="col-md-6 mt-2"><tr>
                        				<td><b>Notice_picture:</b></td>
                        				<td>

                                            <input type="file" name="fileToUpload" id="fileToUpload">

                        				</td>
                        			</tr>
                        			</div>

                        			
                        			
                        			
                                    
                                    
                        		</table>
                                <div class="mt-3"> <button type="submit" name="addnotice" value="addnotice">Add Notice</button></div>
                                
                        	</form>
         </div>

</div>     




                       


<?php include("includes/footer.php");?>