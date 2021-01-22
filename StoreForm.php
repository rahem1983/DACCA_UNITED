<?php 
    include ('header.php');
    require ('DB_connection.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>


    </style>

</head>
<body>
    

    <!--Contact Form-->
<div class="container-fluid bg-dark">
<div class="contact-form bg-dark text-white pt-5">
    <div class="title text-center mb-3">
        <h3 class= "font-weight bolder pt-5">Order Form</h3>
    </div>
 
    <form action="" class="w-50 m-auto was-validated">
        <div class="form-group pt-3">
        <label for="fullname">Name</label>
        <input type="text" class="form-control" name="fullname" required>
        <div class="valid-feedback">Valid</div>
        <div class="invalid-feedback">Please Enter your Name</div>
        </div>

        <div class="form-group pt-3">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" required>
        <div class="valid-feedback">Valid</div>
        <div class="invalid-feedback">Please Enter your email</div>
        </div>
       
        <div class="form-group pt-3">
        <label for="phone">Phone No.</label>
        <input type="text" class="form-control" name="phone" required>
        <div class="valid-feedback">Valid</div>
        <div class="invalid-feedback">Please Enter your Phone Number</div>
        </div>

        <div class="form-row pt-3">
            <div class="form-group col-md-12">
              <label for="inputCity">Country</label>
              <input type="text" class="form-control" id="inputCity" required>
              <div class="valid-feedback">Valid</div>
              <div class="invalid-feedback">*required</div>
            </div>
          </div>
        <div class="form-row pt-3">
            <div class="form-group col-md-12">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity" required>
              <div class="valid-feedback">Valid</div>
              <div class="invalid-feedback">*required</div>
            </div>
         </div>
            <div class="form-row pt-3">
                <div class="form-group col-md-12">
                  <label for="inputCity">Division</label>
                  <input type="text" class="form-control" id="inputCity" required>
                  <div class="valid-feedback">Valid</div>
                  <div class="invalid-feedback">*required</div>
                </div>
</div>
      <div class="form-group pt-3">
        <label for="inputAddress2">Detailed Address</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Area Name, House/Apartment Name, Number and Floor, Postal Code" required>
        <div class="valid-feedback">Valid</div>
        <div class="invalid-feedback">*required</div>
      </div>
   

    <div class="py-3">Product ID:</div>
   
    <div class="form-row pt-3">
        <div class="form-group col-md-2">
        <label for="quantity">Quantity</label>
        <input type="number" min="1" class="form-control text-center" max="17" value="1" id="quantity">
        </div>
    </div>
        
    
   

    <div class="form-group pt-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>

     <div class="form-group pt-3 text-center">
      <div class="text-center pt-3"><button type="submit" class="btn btn-warning"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
      </svg> Order Now</button></div>
    </div>
    </form>
</div>
 <?php 
    include 'footer.php';
   ?>
 </div> 


     


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>