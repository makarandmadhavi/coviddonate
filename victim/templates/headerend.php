
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
  
       <li class="nav-item">
        <a class="nav-link" href="#"> Edit Profile </a>
      </li>
    
      </ul>

      <a href="logout.php"><button class="btn btn-success logbutton my-2 my-sm-0">Logout</button></a>
  
    </div>
  </nav>
<div class="main">

