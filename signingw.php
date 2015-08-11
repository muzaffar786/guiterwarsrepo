<!DOCTYPE html >
<html>
  <head>
    <meta charset="utf-8">
    <title>signingw</title>

  </head>
  <body class="body1">
    <?php
    require_once "css.php";
     ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 hght2">

          <h2 class="text-danger">Welcome to Guiterwars sign-in page</h2>


        </div>

      </div>
    </div>

      <div class="row">
        <div class="col-sm-offset-12 hhh1">

        </div>

      </div>
    <form class="form-horizontal">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-offset-2 col-sm-2 control-label margin">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control border2 "  placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-offset-2 col-sm-2 control-label margin">Password</label>
        <div class="col-sm-4">
          <input type="password" class="form-control border2"  placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
          <button type="submit" class=" border1 btn btn-success">Sign in</button>
        </div>
      </div>
    </form>
    </div>
  </body>
</html>
