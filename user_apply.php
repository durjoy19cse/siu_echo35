
<?php 

include("includes/header.php");

?>
<?php



if (isset($_POST['apply']) && $_POST['apply']!="")

           {

            $target_dir="pic//";
            $target_file = $target_dir . basename($_FILES["pic"]["name"]);
           if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)){


            
            $pic = $_FILES["pic"] ["name"];

           $Name=$_POST['Name'];
           $Father_name=$_POST['Father_name'];
           $mother_name=$_POST['mother_name'];
           $dob=$_POST['dob'];
           $gender=$_POST['gender'];
           $nationality=$_POST['nationality'];
           $email=$_POST['email'];
           $permanentaddress=$_POST['permanentaddress'];
           $presentaddress=$_POST['presentaddress'];
           $guardian_name=$_POST['guardian_name'];
           $ssc_year=$_POST['ssc_year'];
           $ssc_board=$_POST['ssc_board'];

           $ssc_board=$_POST['ssc_board'];
           $ssc_instname=$_POST['ssc_instname'];
           $ssc_gpa=$_POST['ssc_gpa'];
           $hsc_year=$_POST['hsc_year'];

           $hsc_board=$_POST['hsc_board'];
           $hsc_instname=$_POST['hsc_instname'];
           $hsc_gpa=$_POST['hsc_gpa'];
          

        


          $sql=" insert into student_application(pic, Name,Father_name, mother_name,
          dob, gender,nationality, email, permanentaddress, presentaddress, guardian_name, 
          ssc_year, ssc_board, ssc_instname, ssc_gpa, hsc_year, hsc_board, hsc_instname, hsc_gpa)

               values( '$pic','$Name','$mother_name','$dob','$gender','$nationality','$email','$permanentaddress','$presentaddress','$guardian_name','$guardian_name',
               '$ssc_year','$ssc_board','$ssc_instname','$ssc_gpa','$hsc_year','$hsc_board','$hsc_instname','$hsc_gpa')";





               if($conn->query($sql) == true ){

                 echo "new record creat successfully";
                 echo "<script>location.href='user_document.php'</script>";
           }

        }
               else{
                   echo  $conn->error;

               }



         }

?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sylhet international university||Admission Application Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    
</head>
<body >



    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="text-center  color-success">Admission Application Form</h1>
                </div>
                <div class="panel-body">
                    <form action="" method="POST"  enctype="multipart/form-data">
                        
                    <div class="form-group">
                            <label for="pic">Upload your pic:</label>
                            <input type="file" class="form-control" name="pic" required>
                        </div> <br>

                   
                        <div class="form-group">
                            <label for="Name">Full Name * (in English Capital Letters)</label>
                            <input type="text" class="form-control" name="Name" placeholder=" Enter Name" required>
                        </div> <br>

        
                       
                        <div class="form-group">
                            <label for="fatherName">Father's/Husband's Name * </label>
                            <input type="text" class="form-control" name="fatherName" placeholder=" Enter Your Father name" required>
                        </div> <br>


                        <div class="form-group">
                            <label for="motherName">Mother's Name * </label>
                            <input type="text" class="form-control" name="motherName" placeholder=" Enter Your Mother name" required>
                        </div> <br>

                        <div class="form-group">
                            <label for="dob">Date and Place of Birth * </label>
                            <input type="text" class="form-control" name="dob" placeholder=" Enter your Date of  Birthday " required>
                        </div> <br>

                        <div class="form-group">
                            <label for="gender">Gender * </label>
                            <select name="gender" name="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                              </select>

                        </div> <br>


                        <div class="form-group">
                            <label for="nationality">Nationality * </label>
                            <input type="text" class="form-control" name="nationality" required>
                        </div> <br>

                        <div class="form-group">
                            <label for="email">Email * </label>
                            <input type="text" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="number">Phone Number * </label>
                            <input type="text" class="form-control" name="number" required>
                        </div> <br>

                        <div class="form-group">
                            <label for="permanentaddress">Permanent Address * </label> <br>
                            <textarea name="permanentaddress" name="permanentaddress" cols="50" rows="4" required></textarea>
                        </div> <br>

                        <div class="form-group">
                            <label for="presentaddress">Present Address * </label> <br>
                            <textarea name="presentaddress" name="presentaddress" cols="50" rows="4" required></textarea>
                        </div> <br>

                        <div class="form-group">
                            <label for="guardian">Guardian's Name & Phone * </label> <br>
                            <textarea name="guardian_name" name="guardian" cols="50" rows="4" required></textarea>
                        </div> <br>

                        <div>
                            <h6>Academic Records * </h6>
                            <p>SSC or equivalent:</p>
                            <label for="year1">Year</label>
                            <input type="text" name="ssc_year" required />

                            <label for="board1">Board</label>
                            <input type="text" name="ssc_board" required />

                            <label for="instname1">Name of the Institution</label>
                            <input type="text" name="ssc_instname" required />

                            <label for="gpa1">GPA</label>
                            <input type="text" name="ssc_gpa" required /> <br> <br>

                            <p>HSC or equivalent:</p>
                            <label for="year2">Year</label>
                            <input type="text" name="hsc_year" required />

                            <label for="board2">Board</label>
                            <input type="text" name="hsc_board" required />

                            <label for="instname2">Name of the Institution</label>

                            <input type="text" name="hsc_instname" required />
                            <label for="gpa2">GPA</label>

                            <input type="text" name="hsc_gpa" required />
                        </div> <br> <br>
                        <div>
                            <p>I hereby declare and certify that all the information 
                                furnished by me are accurate and correct to the best 
                                of my knowledge. I also agree that if any information 
                                is found false or incomplete, or any certificate and 
                                mark sheet supplied by me found to be forged or manipulated,
                                then my admission in the Sylhet International University 
                                will stand cancelled and I shall be liable to any 
                                punishment which may be given me under the law of the state 
                                and regulations of the University.</p>
                            <input type="checkbox" name="agreement1"  name="agreement2" value="Agreement1" >
                            <label for="agreement1">Agree to terms and conditions</label><br> <br> <br>
                            
                            <p>I further undertake that if I get admitted myself in the Sylhet International 
                                University (i) I shall abide by all the reules and regulations of the 
                                University and (ii) that I shall accept any decision of the University 
                                authorities in respect of academic or disciplinary matters concerning me.
                            </p>
                            <input type="checkbox" name="agreement2" name="agreement1" value="Agreement2" >
                            <label for="agreement2">Agree to terms and conditions</label>
                        </div> <br> <br>
                        <div>
                            Signature of the Applicant:
                            <input type="file" id="myFile" name="sign_filename" >
                            <br> <br>
                            Signature of Parent/Local Guardian:
                            <input type="file" id="myFile" name="sign_filename" >
                        </div> <br>
                        
                      
                        <button  type="submit" name="apply" class="btn btn-primary"> Continue </button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php");?>
</body>
</html>



