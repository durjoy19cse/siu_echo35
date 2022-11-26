<?php
include("includes/header.php");

?>





<div class="main">

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="slide-img" src=" images/d1.jpg" class="d-block " alt="...">
                <div class="carousel-caption">
                    <h1 class="text-success">SIU admission fall 2023</h1>
                    <p class="text-success">sylhet international university</p>
                </div>
            </div>
            <div class=" carousel-item">
                <img class="slide-img" src=" images/d2.jpg" class="d-block " alt="...">
                <div class="carousel-caption ">
                    <h3 class="text-success">SIU admission</h3>
                    <p class="text-success">sylhet international university</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="slide-img" src=" images/d4.jpg" class="d-block " alt="...">
                <div class="carousel-caption">
                    <h3  class="text-success">SIU admission fall 2022</h3>
                    <p class="text-success">sylhet international university</p>
                </div>
            </div>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>




    </div>
</div>

<div class=admission-notice>
<hr>
    <?php include_once('.php');?>

</div>
<hr>
<!--=======banner section========-->

<div class=" container-fluid p-1 text-lg-center">
    <div class="bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
            height: 50vh;">


        <h2 class="display-1">FALL 2022 INTAKE</h2>
        <p class="h4">Resize the browser window to see the effect.</p>

        <h1> <a href="user_apply.php" class="btn btn-outline-primary ">Apply Now</a>
        </h1>
        <h1 class=""> <a href="admission_news.php" class="btn btn-outline-primary"> Admission dead line</a></h1>


    </div>
</div>


<div class="container-fluid  mt-5 " style="height:500px">

     <div class="container text-center mt-3  mb-3"> 
        <h1 class="text-success">OUR PROFESSIONAL COURSES</h1>
        <p class="">Lorem ipsum </p>
      
    </div>
    


    <div class="row  text-center " style="height:350px" >

      <div class="col-3 border ">
        <img class="mt-2" src="images/icon5.png" alt="" srcset="">
        <p class="mt-3 " >Batchlor of Law</p>
        <p class=" mt-2 w-60"> hdfdfcznf uyftsjd fd4tjsdh  yutstedr</p>

        <div class="mt-5"style="padding-top:100px">
               <button type="submit" class="btn btn-outline-success  "> <a href="user_apply.php">Apply Now</a></button>

               </div>
              
      </div>

        <div class="col-3 border ">
         <img class="mt-2"   src="images/icon5.png" alt="" srcset="">
            <p class="mt-3" >Batchlor of Computer  Science and Engineering Application</p>
             <p class="mt-3 "> hng fiwer;ea;.rep[eoir[p</p>

             <div class="mt-5"style="padding-top:100px">
               <button type="submit" class="btn btn-outline-success  "> <a href="user_apply.php">Apply Now</a></button>

               </div>
              
    
        </div>

            <div class="col-3 border ">
               <img  class="mt-2" src="images/icon5.png" alt="" srcset="">
               <p class="mt-3" >Batchlor of Business Administration</p>
               <p class="mt-3">fdsifudeflkd;podfgsthsert</p>

              <div class="mt-5"style="padding-top:100px">
               <button type="submit" class="btn btn-outline-success  "> <a href="user_apply.php">Apply Now</a></button>

               </div>
              
            </div>

          <div class="col-3 border ">
             <img  class="mt-2" src="images/icon5.png" alt="" srcset="">
                 <p class="mt-3" >Computer Science</p>
               <p class="mt-3">fdfgfgdjjggusoddfsiefhfads4sahb ytedrsudgasr</p>

               <div class="mt-5 " style="padding-top:100px">
               <button type="submit" class="btn btn-outline-success  "> <a href="user_apply.php">Apply Now</a></button>

               </div>
              
             </div>

</div>
     







</div>

<?php require("contact.php");?>





<?php include("includes/footer.php"); ?>