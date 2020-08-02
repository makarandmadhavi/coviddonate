<title>CovidDonate</title>
<!-- <link rel="shortcut icon" type="image/png" href="../booticon.ico"/> -->
</head>

<body>
  <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="ngo.php">CovidDonate</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php 
  //print_r($categories); 
  ?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="ngo.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Edit Profile <span class="sr-only">(current)</span></a>
        </li>
        <?php
        include '../backend/conn.php';
        $username = $_SESSION['username'];
        $check = " SELECT * from organizations where username= "."'".$username."'"." and isverified = 1";
        $res = $conn->query($check);
    
        if ($res->num_rows == 0) 
        {
          ?>
        <li class="nav-item">
          <a class="nav-link" href="#"> Status </a>
        </li>
        <?php
        }else{
        ?>

        <li class="nav-item">
          <a class="nav-link" href="verifyvictims.php"> Verify victims </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicevictims.php"> Service Victims </a>
        </li>
        <?php } ?>
      </ul>

      <a href="logout.php"><button class="btn btn-success logbutton my-2 my-sm-0">Logout</button></a>

    </div>
  </nav>
  <div class="main">