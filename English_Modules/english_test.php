<?php
    include_once 'access.php';
?>
<!DOCTYPE html>
<?php header('Content-Type: text/html; charset=utf-8'); ?>

<head>

  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>English</title>

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
          <li class="nav-item active">
            <a class="nav-link active" href="english.html">English</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ushistory.html">US History</a>
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
      <h1>English Test</h1>
      <p class="lead">This test consists of 10 questions randomly pulled out of a test bank! Refresh to get a new set of 10 questions.</p>
    </div>
  </header>
  <!-- Page Content -->
  <div class="container">
    <br/>
    <p> Below are 10 multiple choice questions. Select a correct answer (there can be more than one). </p>
    <p>If your answer is incorrect, the answer choice will become red. Try again!</p>
    <?php
    $sql = mysqli_query($conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
    $sql = "SELECT * FROM English\n"
    . "ORDER BY RAND()\n"
    . "LIMIT 10";
    $result = mysqli_query($conn, $sql);
    $datas = array();
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $datas[] = $row;
        }
    }
    $i = 0;
    foreach ($datas as $data){ ?>
        <h5> <?php echo $data['Question']; ?> </h5> 
        <?php $answers = array('C1', 'C2', 'C3', 'I1', 'I2', 'I3', 'I4');
        shuffle($answers);
        foreach ($answers as $answer) { ?>
            <?php if ($data[$answer] != "") { ?> 
                <button class = "answerchoice" id="<? echo $answer.$i ?>"><?php echo $data[$answer]; ?></button>
                <div style="line-height:20%;">
                <br>
                </div>
                <script>
                if ("<? echo $answer.$i ?>".substring(0, 1) == "C"){
                    document.getElementById("<?= $answer.$i ?>").onclick = function() {
                    document.getElementById("<? echo $answer.$i ?>").style.backgroundColor = "#abebbd"; }}
                else {
                    document.getElementById("<?= $answer.$i ?>").onclick = function() {
                    document.getElementById("<? echo $answer.$i ?>").style.backgroundColor = "#ffcfcf"; }}
            </script> 
        <?php }; }; ?> 
    <br>
    <?php $i+=1; }; ?>
    </div>
    <br></br>
    <footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Chinatown Citizenship 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>