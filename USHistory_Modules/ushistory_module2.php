<?php
    include_once '../access.php';
?>
<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>US History Module 2</title>

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
      <h1>Colonial Period and Independence</h1>
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
              $sql = "SELECT * FROM USHistory WHERE Unit = 2";
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
    
              <h5>Colonial Period</h5>
              <audio
              controls
              src="audio/colonial period - ch2.mp3">
              </audio>
                <a data-toggle="tooltip" title="1600年代，英国人来到美国。" class="dots">The British came to America in the 1600s.</a>
                <a data-toggle="tooltip" title="他们来到美国的原因有很多：自由，政治自由，宗教自由，经济机会以及逃避迫害。" class="dots">They came to America for many reasons: freedom, political liberty, religious freedom, economic opportunity, and to escape persecution.</a>
                <a data-toggle="tooltip" title="当他们来到美国，美洲原住民（美洲印第安人）已经居住在美国。" class="dots">When they came to America, Native Americans (American Indians) were already living in the US.</a>
                <a data-toggle="tooltip" title="这些美洲原住民是许多不同部落的一部分。 它们包括：切诺基，纳瓦霍，苏族，奇珀瓦，乔克托，普韦布洛，阿帕奇，易洛魁河，克里克，黑脚，塞米诺尔，夏安，阿拉瓦克，肖尼，莫赫根，休伦，奥尼达，拉科塔，乌鸦，提顿和霍皮族。" class="dots">These Native Americans were a part of many different tribes. They included: Cherokee, Navajo, Sioux, Chippewa, Choctaw, Pueblo, Apache, Iroquois, Creek, Blackfeet, Seminole, Cheyenne, Arawak, Shawnee, Mohegan, Huron, Oneida, Lakota, Crow, Teton, and the Hopi.</a>
                <a data-toggle="tooltip" title="为了获得这块土地，欧洲人进行了战斗，并迫使美洲印第安人离开了他们的土地。" class="dots">In order to acquire this land, the Europeans fought and forced the Native Americans off their lands.</a>
                <a data-toggle="tooltip" title="英国后来形成了13个殖民地：新罕布什尔州，马萨诸塞州，罗德岛州，康涅狄格州，纽约州，新泽西州，宾夕法尼亚州，特拉华州，马里兰州，弗吉尼亚州，北卡罗来纳州，南卡罗来纳州和乔治亚州。" class="dots">The British later formed 13 colonies: New Hampshire, Massachusetts, Rhode Island, Connecticut, New York, New Jersey, Pennsylvania, Delaware, Maryland, Virginia, North Carolina, South Carolina, and Georgia. </a>
            </br>
        </br>
            <h5>Independence</h5>
            <audio
            controls
            src="audio/independence - ch2.mp3">
            </audio>
                <a data-toggle="tooltip" title="为了偿还战争债务，英国政府开始对殖民者征收高额税款。" class="dots">To pay off war debts, the British government began to impose high taxes on the colonists.</a>
                <a data-toggle="tooltip" title="他们开始对纸，邮票，糖，茶和其他必需品征税。" class="dots">They began taxing paper, stamps, sugar, tea, and other necessities.</a>
                <a data-toggle="tooltip" title="殖民者开始不遵守这些税收，所以英国人开始向海派兵。" class="dots">The colonists began disobeying these taxes, so the British began sending soldiers across the ocean.</a>
                <a data-toggle="tooltip" title="英国政府要求殖民者给这些士兵一部分住房，这更加激怒了殖民者。" class="dots">The British government asked the colonists to house these soldiers, angering the colonists even more.</a>
                <a data-toggle="tooltip" title="由于税收高昂，由于英军留在自己的房屋中，并且由于他们没有自治，所以殖民者与英军作战。" class="dots">Because of high taxes, because the British army stayed in their houses, and because they didn't have self-government, the colonists fought the British.</a>
                <a data-toggle="tooltip" title="然后，托马斯·杰斐逊写了独立宣言。" class="dots">Then, Thomas Jefferson wrote the Declaration of Independence.</a>
                <a data-toggle="tooltip" title="独立宣言宣布我们脱离英国独立，并于1776年7月4日获得通过。" class="dots">The Declaration of Independence declared our independence from Great Britain and was adopted on July 4th, 1776.</a>
                <a data-toggle="tooltip" title="今天，我们庆祝7月4日独立日！" class="dots">Today, we celebrate Independence Day on July 4th!</a>
                <a data-toggle="tooltip" title="独立宣言还保障三项权利：生命，自由和追求幸福。" class="dots">The Declaration of Independence also guarantees 3 rights: life, liberty, and the pursuit of happiness.</a>
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