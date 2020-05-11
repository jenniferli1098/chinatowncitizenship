<?php
    include_once '../access.php';
?>
<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>US History Module 5</title>

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
            <h1>People</h1>
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
              $sql = "SELECT * FROM USHistory WHERE Unit = 5";
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

                    <h5>People</h5>
                    <audio
                    controls
                    src="audio/ch5.mp3">
                    </audio>
                        <a data-toggle="tooltip" title="本杰明·富兰克林（Benjamin Franklin）– 国外交官，制宪会议历史最悠久的成员，美国第一任邮政局长，《可怜的理查德年鉴》的作者，开办了第一批免费图书馆" class="dots">1. Benjamin Franklin – U.S. diplomat,
                            Oldest member of the Constitutional Convention, First Postmaster General
                            of the US, Writer of Poor Richard's Almanac, Started the First Free
                            Libraries</a>
                        <a data-toggle="tooltip" title="乔治·华盛顿–美国第一任总统，“我们国家的父亲”" class="dots">2. George Washington – First President of the US,
                            "Father of Our Country"</a>
                        <a data-toggle="tooltip" title="苏珊·安东尼（Susan B. Anthony) - 争取妇女权利，争取公民权利" class="dots">3. Susan B. Anthony – Fought for Women's Rights, Fought
                                for Civil Rights</a>
                        <a data-toggle="tooltip" title="伍德罗·威尔逊（Woodrow Wilson）– 第一次世界大战期间的总统" class="dots">4. Woodrow Wilson – President during World War I</a>
                        <a data-toggle="tooltip" title="富兰克林·罗斯福（Franklin Roosevelt）– 大萧条和第二次世界大战期间的总统" class="dots">5. Franklin Roosevelt – President during the Great Depression and World War II</a>
                        <a data-toggle="tooltip" title="德怀特·艾森豪威尔（Dwight D. Eisenhower）– 美国总统，第二次世界大战的战争英雄" class="dots">6. Dwight D. Eisenhower – President of the United States, War Hero from World War II</a>
                        <a data-toggle="tooltip" title="小马丁·路德·金（Martin Luther King，Jr.）– 为争取民权而战，为所有美国人争取平等" class="dots">7. Martin Luther King, Jr. – Fought for Civil Rights, Worked for
                                Equality for all Americans</a>
                        <a data-toggle="tooltip" title="南希·佩洛西（Nancy Pelosi）– 众议院现任议长" class="dots">8. Nancy Pelosi – Current Speaker of the House of Representatives</a>
                        <a data-toggle="tooltip" title="唐纳德·特朗普（Donald Trump）– 美国现任总统，共和党领袖" class="dots">9. Donald Trump – Current President of the United States, Part of the Republican Party </a>

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