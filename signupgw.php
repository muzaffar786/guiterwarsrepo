<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>signupgw</title>

    </style>
  </head>
  <body class="body1">
    <?php
    require_once "css.php";
     ?>
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-10 hght2">

           <h2 class="text-danger">Welcome to Sign-up page</h2>


         </div>

       </div>
     </div>
     <div class="container">
       <div class="row">
         <div class="col-sm-offset-12 hhh">
         </div>
         </div>

     <form class="form-horizontal">
       <div class="form-group">
         <label for="name" class="col-sm-offset-2 col-sm-2 control-label margin">Name</label>
         <div class="col-sm-4">
           <input type="text" class="form-control border2"  placeholder="Enter name">
         </div>
       </div>
       <div class="form-group">
         <label for="username" class="col-sm-offset-2 col-sm-2 control-label margin">UserName</label>
         <div class="col-sm-4">
           <input type="text" class="form-control border2" placeholder="Enter Username">
         </div>
       </div>
       <div class="form-group">
         <label for="inputEmail3" class="col-sm-offset-2 col-sm-2 control-label margin">Email</label>
         <div class="col-sm-4">
           <input type="email" class="form-control border2" placeholder="Email">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-offset-2 col-sm-2 control-label margin">Password</label>
         <div class="col-sm-4">
           <input type="password" class="form-control border2"  placeholder="Password">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class="col-sm-offset-2 col-sm-2 control-label margin">Confirm-Password</label>
         <div class="col-sm-4">
           <input type="re-password" class="form-control border2"  placeholder="Confirm-Password">
         </div>
       </div>

       <div class="form-group">
         <div class="col-sm-offset-4 col-sm-8">
           <button type="submit" class=" border1 btn-success">Sign up</button>
         </div>
       </div>
     </form>
     </div>
  </body>
</html>
