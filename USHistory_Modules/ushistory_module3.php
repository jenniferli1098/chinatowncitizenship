<?php
    include_once '../access.php';
?>
<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>US History Module 3</title>

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
            <h1>The Constitution</h1>
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
              $sql = "SELECT * FROM USHistory WHERE Unit = 3";
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
                </div>
                <div class="col-lg-8 mx-auto">

                    <h5>Founding of the Constitution</h5>
                    <audio
                    controls
                    src="audio/founding - ch3.mp3">
                    </audio>
                        <a data-toggle="tooltip" title="《宪法》是1787年制定的，当时开国元勋在《宪法公约》上见面。" class="dots">The Constitution was written in 1787, when the founding fathers met at the Constitutional Convention.</a>
                        <a data-toggle="tooltip" title="支持宪法的人包括詹姆斯·麦迪逊，亚历山大·汉密尔顿，约翰·杰伊和普普利乌斯。" class="dots">People who supported the Constitution included James Madison, Alexander Hamilton, John Jay, and Publius.</a>
                        <a data-toggle="tooltip" title="这些人写了《联邦主义者的论文》" class="dots">These people wrote the Federalist Papers.</a>
                        <a data-toggle="tooltip" title="宪法的前三个词是“我们人民”" class="dots">The first three words of the Constitution are "We the people."</a>
                        <a data-toggle="tooltip" title="宪法设立政府，定义政府，并保护美国人的基本权利。" class="dots">The Constitution sets up the government, defines the government, and protects basic rights of Americans.</a>

                    </br>
                    </br>
                    <h5>Changes to the Constitution</h5>
                    <audio
                    controls
                    src="audio/changes - ch3.mp3">
                    </audio>
                        <a data-toggle="tooltip" title="修改宪法被视为修正案。" class="dots">Changes to the Constitution are considered amendments.</a>
                        <a data-toggle="tooltip" title="这些修正案的前十个被称为《权利法案》。" class="dots">The first ten of these amendments are called The Bill of Rights.</a>
                        <a data-toggle="tooltip" title="第一项修正案包括言论，宗教，集会，新闻和上访自由。" class="dots">The first amendment includes the freedoms of speech, religion, assembly, press, and petition the government.
                        <a data-toggle="tooltip" title="宗教自由规定您可以实践任何宗教或不实践宗教。" class="dots">Freedom of religion states that you can practice any religion or not practice a religion.</a>                       
                        <a data-toggle="tooltip" title="总共有27个修正案。" class="dots">There are a total of 27 amendments.</a>
                        <a data-toggle="tooltip" title="这27个中有4个是关于谁可以投票的。" class="dots">4 of these 27 are about who can vote.</a>
                        <ul>
                        <li data-toggle="tooltip" title="1. 18岁以上的公民可以投票。" class="dots">1. Citizens 18 and older can vote.</li></br>
                        <li data-toggle="tooltip" title="2.您无需付费即可投票。" class="dots">2. You don't have to pay to vote.</li></br>
                        <li data-toggle="tooltip" title="3.任何公民均可投票（男女均可投票）。" class="dots">3. Any citizen can vote (Women and men can vote).</li></br>
                        <li data-toggle="tooltip" title="4.任何种族的男性公民均可投票。" class="dots">4. A male citizen of any race can vote.</li></br>

                    </ul>
                    <h5>System of the US</h5>
                    <audio
                    controls
                    src="audio/system ch3.mp3">
                    </audio>
                        <a data-toggle="tooltip" title="美国的经济体系是资本主义或市场经济。" class="dots">The economic system of the US is a capitalist or market economy.</a>
                        <a data-toggle="tooltip" title="“法治”规定，每个人都必须遵守法律。" class="dots">The "rule of law" states that everyone must follow the law.</a>

                    </br>
                    </br>
                </div>


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