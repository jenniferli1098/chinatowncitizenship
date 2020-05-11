<?php
    include_once '../access.php';
?>
<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>US History Module 7</title>

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
      <h1>The 1900s - Present</h1>
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
              $sql = "SELECT * FROM USHistory WHERE Unit = 7";
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
                    <h5>1900s - Present</h5> 
                    <audio
                    controls
                    src="audio/ch7.mp3">
                    </audio>
                    <ul class="timeline">
                        <li>
                            <h6 data-toggle="tooltip" title="第一次世界大战" class="dots">World War I</h6>
                            <h6 class="float-right">1914-1919</h6>
                            </br>
                            <a data-toggle="tooltip" title="伍德罗威尔逊在这场战争中担任总统。" class="dots">Woodrow Wilson was president during this war.</a>                            
                        </li>
                      </br>
                        <li>
                          
                            <h6 data-toggle="tooltip" title="第二次世界大战" class="dots">World War II</h6>
                            <h6 class="float-right">1939-1945</h6>
                            </br>
                            <a data-toggle="tooltip" title="我们与日本，德国和意大利作战。" class="dots">We fought Japan, Germany, and Italy.</a>                            
                            <a data-toggle="tooltip" title="富兰克林·罗斯福·在这场战争中担任总统。" class="dots">Franklin Roosevelt was president during this war.</a>                            
                            <a data-toggle="tooltip" title="未来的总统德怀特·艾森豪威尔·是第二次世界大战期间的战争英雄." class="dots">Dwight D Eisenhower, a future president, was a war hero during World War II.</a>                            
                        </li>
                      </br>
                        <li>
                            <h6 data-toggle="tooltip" title="朝鲜战争" class="dots">Korean War</h6>
                            <h6 class="float-right">1950-1953</h6>
                            </br>
                            <a data-toggle="tooltip" title="朝鲜战争是冷战的一部分。" class="dots">The Korean War was a part of the Cold War.</a>                            
                            <a data-toggle="tooltip" title="在冷战中，美国与共产主义的蔓延作斗争。" class="dots">In the Cold War, America fought the spread of communism.</a>                            
                        </li>
                      </br>
                        <li>
                            <h6 data-toggle="tooltip" title="越南战争" class="dots">Vietnam War</h6>
                            <h6 class="float-right">1955-1975</h6>
                            </br>
                            <a data-toggle="tooltip" title="越南战争是冷战的一部分。" class="dots">The Vietnam War was a part of the Cold War.</a>                            
                            <a data-toggle="tooltip" title="在冷战中，美国与共产主义的蔓延作斗争。" class="dots">In the Cold War, America fought the spread of communism.</a>  
                        </li>
                      </br>
                        <li>
                            <h6 data-toggle="tooltip" title="民权运动" class="dots">Civil Rights Movement</h6>
                            <h6 class="float-right">1960s</h6>
                        </li>
                      </br>
                        <li>
                            <h6 data-toggle="tooltip" title="海湾战争" class="dots">Gulf War</h6>
                            <h6 class="float-right">1990-1991</h6>
                        </li>
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