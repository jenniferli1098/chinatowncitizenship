<?php
    include_once 'access.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>US History</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">

</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="main.html">Chinatown Citizenship</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="english.html">English</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="ushistory.html">US History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="n400.html">N400</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="other.html">Other Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>US History Test</h1>
      <p class="lead">This test consists of 20 questions randomly pulled out of a test bank!</p>
    </div>
  </header>
  <!-- Page Content -->
  <div class="container">
      <br/>
      <p> Below are 10 multiple choice questions. Select a correct answer (there can be more). If your answer is incorrect, the answer choice will become red. Try again!</p>
      <?php
          $sql = "SELECT * FROM USHistory\n"
          . "ORDER BY RAND()\n"
          . "LIMIT 10";
          $result = mysqli_query($conn, $sql);
          $datas = array();
          if (mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                  $datas[] = $row;
              }
          }
      foreach ($datas as $data) {
            echo $data['Question']; }; 
    ?>
  </div>
</body>
</html>