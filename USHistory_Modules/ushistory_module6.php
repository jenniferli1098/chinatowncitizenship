<?php
    include_once '../access.php';
?>
<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>US History Module 6</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/custom.css" rel="stylesheet">

  <!-- Flashcard JS -->
  <script src="../source.js"></script>


</head>

<body id="page-top">

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
            <a class="nav-link" href="../english.html">English</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="../ushistory.html">US History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../n400.html">N400</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../other.html">Other Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact.html">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>The 1800s</h1>
    </div>
  </header>
  <section id="flashcard">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h3>Flashcards</h3>
          <div id="flashCardControls" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="flip-card d-block w-100">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <h1 class="question" style="padding: 100px;">Flashcards Instructions: <br /> Mouse over this card to flip.</h1>
                    </div>
                    <div class="flip-card-back">
                      <p class="answer" style="padding: 100px;">Use the left and right arrows to switch to another card.</p>
                    </div>
                  </div>
                </div>
              </div>
            <?php
              $sql = "SELECT * FROM USHistory WHERE Unit = 6";
              $result = mysqli_query($conn, $sql);
              $datas = array();
              if (mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      $datas[] = $row;
                  }
              }
              $i = 0;
              foreach ($datas as $data){ 
                  $answers = array('C2', 'C3');
                  $ans = $data['C1'];
                  foreach ($answers as $answer) { ?>
                      <?php if ($data[$answer] != "") { 
                        $ans = $ans . ", " . $data[$answer]; }; 
                  }; ?>
                <div class="carousel-item">
                  <div class="flip-card d-block w-100">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <h1 class="question" style="padding: 100px;"><?php echo $data['Question']; ?></h1>
                      </div>
                      <div class="flip-card-back">
                        <p class="answer" style="padding: 120px;"><?php echo $ans ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            <?php $i+=1; }; ?>
              </div>
            </div>

            <a class="carousel-control-prev" href="#flashCardControls" role="button" data-slide="prev"
              data-interval="false">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#flashCardControls" role="button" data-slide="next"
              data-interval="false">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="Review" class="bg-light">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mx-auto">
                  <h3>Review</h3>
                  <p>Mouse over the English to view Chinese translations. (将鼠标悬停在英语上可以查看中文翻译。) </p>
                  <h5>1800s</h5> 
                  <audio
                  controls
                  src="audio/ch6.mp3">
                  </audio>
                  <ul class="timeline">
                      <li>
                          <h6 data-toggle="tooltip" title="路易斯安那州购买" class="dots">Louisiana Purchase</h6>
                          <h6 class="float-right">1803</h6>
                          </br>
                          <a data-toggle="tooltip" title="美国从法国购买了大片土地，覆盖美国中部地区。" class="dots">America purchased a very large expanse of land covering the central part of the US from France.</a>                            
                      </li>
                    </br>
                      <li>
                        
                          <h6 data-toggle="tooltip" title="1812年战争" class="dots">War of 1812</h6>
                          <h6 class="float-right">1812-1815</h6>
                          </br>                           
                        
                      </li>
                    </br>
                      <li>
                          <h6 data-toggle="tooltip" title="墨西哥美国战争" class="dots">Mexican-American War</h6>
                          <h6 class="float-right">1850-1853</h6>
                          </br>
                          <a data-toggle="tooltip" title="美国想要一块很大的土地，包括现代的德克萨斯州，新墨西哥州，亚利桑那州和加利福尼亚州。" class="dots">America wanted a significant piece of land, including modern-day Texas, New Mexico, Arizona, and California.</a>                            
                          <a data-toggle="tooltip" title="美国提出从墨西哥购买土地，但墨西哥不希望出售该土地。" class="dots">America offered to buy the land from Mexico, but Mexico did not wish to sell the land.</a>                            
                          <a data-toggle="tooltip" title="美国向墨西哥发动了战争。" class="dots">America began a war against Mexico.</a>                            
                          <a data-toggle="tooltip" title="美国赢得了战争并获得了这些领土。" class="dots">America won the war and obtained these territories.</a>                            

                      </li>
                    </br>
                      <li>
                          <h6 data-toggle="tooltip" title="美国南北战争" class="dots">Civil War</h6>
                          <h6 class="float-right">1861-1865</h6>
                          </br>
                          <a data-toggle="tooltip" title="北方和南方在奴隶制问题上进行过战争。" class="dots">The war was fought between the North and the South over the issue of slavery.</a>
                          <a data-toggle="tooltip" title="南方的经济以农业为基础，而农业在很大程度上取决于非洲的奴隶。" class="dots">The South had an economy based on agriculture, which depended heavily on slaves from Africa.</a>
                          <a data-toggle="tooltip" title="亚伯拉罕·林肯（Abraham Lincoln）在内战期间担任总统。" class="dots">Abraham Lincoln was the President during the Civil War.</a>                            
                          <a data-toggle="tooltip" title="亚伯拉罕·林肯被称为拯救联盟或释放奴隶的人。" class="dots">Abraham Lincoln is known as the person that saved the Union or freed the slaves.</a>                            
                          <a data-toggle="tooltip" title="林肯发表了非常著名的演讲，即《解放宣言》。" class="dots">Lincoln gave a very famous speech known as the Emancipation Proclamation.</a>                            
                          <a data-toggle="tooltip" title="解放宣言释放了奴隶。" class="dots">The Emancipation Proclamation freed the slaves.</a>                            

                      </li>
                    </br>
                      <li>
                          <h6 data-toggle="tooltip" title="美西战争" class="dots">Spanish-American War</h6>
                          <h6 class="float-right">1898</h6>

                      </li>
                    </br>
                  </ul>
              </div>
          </div>
          </div>
      </div>
  </section>


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Chinatown Citizenship 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <script>
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</body>

</html>