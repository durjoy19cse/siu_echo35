<?php
include_once("includes/header.php");


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<div class="container">
  <!-- replace with your endoint URL -->
  <form action="" method="POST" >
    <h3 style="text-align: center;">Contact Us</h3>

    <div class="form-group">
      <div class="input-group">
        
        <input name="name" type="text" placeholder="Name" class="form-control border-left-0" required>
      </div>
    </div>
    
    <div class="row">
      <div class="col">
        <div class="form-group">
          <div class="input-group">
           
            <input name="email" type="email" placeholder="Email" class="form-control border-left-0" required>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <div class="input-group">
            
            <input name="phone" type="tel" placeholder="Phone" class="form-control border-left-0" required>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" id="message" rows="5" placeholder="Enter message" required></textarea>
    </div>
    
    <div class="form-group">   
      <fieldset>
        <div class='row'>
            <div class="col">
              <legend><h5>Contact me via</h5></legend>
            </div>

            <div class="col">
              <div class="form-check form-check">
                <input class="form-check-input" type="radio" name="byemail" id="byemail" value="email" checked>
                <label class="form-check-label" for="byemail">Email</label>
              </div>
              <div class="form-check form-check">
                <input class="form-check-input" type="radio" name="byphone" id="byphone" value="phone">
                <label class="form-check-label" for="phone">Phone</label>
              </div>
              <div class="form-check form-check">
                <input class="form-check-input" type="radio" name="dont" id="dont" value="dont">
                <label class="form-check-label" for="dont">Don't contact me</label>
              </div>
            </div>
        </div>
      </fieldset>
    </div>
    
    <button type="submit" class="btn btn-primary float-right">
      <i class="fa fa-paper-plane"></i> 
      Send
    </button>
  </form>
</div>


