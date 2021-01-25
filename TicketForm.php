<?php 
    include ('header.php');
    require ('DB_connection.php');
    if (isset($_POST['buyticket'])) {
    $name = $_POST[''];
  }
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
<div class="container-fluid bg-dark pt-5"> 
<!--Contact Form-->
<div class="contact-form bg-dark text-white p-3 my-5">
    <div class="title text-center mb-3">
        <h3 class= "font-weight bolder">Ticket Form</h3>
    </div>
        <form action="Ticket_backend.php" class="w-50 m-auto was-validated">
            <div class="form-group pt-3 pb-3">
            <label for="matchid"><h4>Match Number</h4></label>
            <input type="text" class="form-control" name="matchid" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please Enter Match Number</div>
            </div>

            <div class="form-group pt-3 pb-3">
            <label for="name"><h4>Name</h4></label>
            <input type="text" class="form-control" name="name" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please Enter your Name</div>
            </div>

            <div class="form-group pt-3 pb-3">
            <label for="email"><h4>Email</h4></label>
            <input type="text" class="form-control" name="email" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please Enter your email</div>
            </div>
           
            <div class="form-group pt-3 pb-3">
            <label for="phone"><h4>Phone No.</h4></label>
            <input type="text" class="form-control" name="phone" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please Enter your Phone Number</div>
            </div>
            
            <div class="form-group col-md-4 pt-3">
                <label for="inputState">Select Ticket Category</label>
                <select id="inputState" class="form-control" name="category" requried>
                  
                  <option>VIP TK-10000 Only</option>
                  <option>First Class TK-6000 Only</option>
                  <option>North Stand TK-4000 Only</option>
                  <option>South Stand TK-3000 Only</option>
                  <option>Eastern Gallery TK-2000 Only</option>
                  <option>Western Gallery TK-1000 Only</option>
                </select>
              </div>
              <div class="form-group pt-3 pb-3">
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

                <button type="buy" class= "btn btn-warning " name="buynow" value="Buy Now">Buy Now</button>
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
