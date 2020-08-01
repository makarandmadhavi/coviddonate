<?php include "templates/header.php"; ?>
<?php include "templates/headerend.php"; ?>

<div class="container">
  <h1 class="text-center">NGO Registration</h1>
  <form action="nrregister.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">NGO Name</label>
      <input type="text" required class="form-control" id="name" name="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Website Link</label>
      <input type="text" required class="form-control" id="website" name="website" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Registration Number</label>
      <input type="text" required class="form-control" id="registration" name="registration">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" required class="form-control" id="username" name="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label >Set Password</label>
      <input type="password" required class="form-control" id="password1" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label >Re-type Password</label>
      <input type="password" required class="form-control" id="password2" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label >Contact Number</label>
      <input type="number" required class="form-control" id="phone" name="phone" placeholder="phone">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email id</label>
      <input type="email" required class="form-control" id="email" name="email" placeholder="email">
    </div>
    

    <button type="submit" class="btn btn-success">Register</button>
  </form>
</div>

<?php include "templates/footer.php"; ?>