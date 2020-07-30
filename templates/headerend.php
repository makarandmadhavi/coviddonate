
  <title>CovidDonate</title>
  <!-- <link rel="shortcut icon" type="image/png" href="../booticon.ico"/> -->
</head>

<body>
  <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">CovidDonate</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php 
  $categories = getcategories();
  //print_r($categories); 
  ?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <!-- <?php foreach($categories as $cat){ ?>  
      <li class="nav-item" >
        <a class="nav-link" href="index.php?category=<?=$cat['category']?>" > <?=$cat['category']?> </a>
      </li>
      <?php } ?> -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="index.php?category=TVs"> TVs </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?category=Laptops"> Laptops </a>
      </li> -->


      </ul>
      
      <a href="register.php"><button class="btn btn-info logbutton my-2 my-sm-0">Register</button></a>

      <a href="login.php"><button class="btn btn-success logbutton my-2 my-sm-0">Login</button></a>
  
    </div>
  </nav>