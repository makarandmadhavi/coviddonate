<?php include "templates/header.php"; ?>
<?php include "templates/headerend.php"; ?>

<div class="container">
  <h1 class="text-center">Register to get help</h1>
  <form action="victimregister.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Full Name</label>
      <input type="text" required class="form-control" id="name" name="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" required class="form-control" id="username" name="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Set Password</label>
      <input type="password" required class="form-control" id="password1" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Re-type Password</label>
      <input type="password" required class="form-control" id="password2" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contact Number</label>
      <input type="number" required class="form-control" id="phone" name="phone" placeholder="phone">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Aadhar Number</label>
      <input type="number" required class="form-control" id="aadhar" name="aadhar" placeholder="aadhar">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email id</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="email">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Have you tested positive for COVID-19</label>
      <select class="form-control" name="iscovidpositive" id="iscovidpositive">
        <option>Yes</option>
        <option>No</option>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Check all applicable cases</label>
    <br>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" id="food" name="food" class="custom-control-input">
        <label class="custom-control-label" for="food">Food and basic needs</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" id="financial" name="financial" class="custom-control-input">
        <label class="custom-control-label" for="financial">Need financial Aid</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" id="research" name="research" class="custom-control-input">
        <label class="custom-control-label" for="research">Education and Research</label>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Describe your problem</label>
      <textarea class="form-control" required id="description" name="description" rows="5"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Address</label>
      <textarea class="form-control" required id="address" name="address" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Register</button>
  </form>
</div>

<?php include "templates/footer.php"; ?>