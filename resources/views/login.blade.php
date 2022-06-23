<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>

body{

    background-image: url('');
    
    background-position: center;
    
    background-size: cover;
}


.padding {
    padding: 5rem
}


.card {
    background: lightsteelblue;
    border-width: 0;
    border-radius: .25rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
    margin-bottom: 1.5rem
}


.card-header {
    background-color: lightblue;
    border-color: rgba(160, 175, 185, .15);
    background-clip: padding-box
}

.card-body p:last-child {
    margin-bottom: 0
}

.card-hide-body .card-body {
    display: none
}


</style>

</head>
<body class="body">
 
<form action="login" method="POST">
@csrf 

<div id="content" class="flex"> 
      <div class="page-content page-container" id="page-content">
         <div class="padding">
            <div class="row">
               <div class="col-md-4">
                  <div class="card">
                     <div class="card-header"><strong>Login to your account</strong></div>
                     <div class="card-body">
                        
                        <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" placeholder="Enter username">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password">
  </div>
                           <button type="submit" class="btn btn-primary">Login</button>
                    
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   
</div>


</form>
</body>


</html>