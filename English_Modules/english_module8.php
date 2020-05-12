<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

<?php echo head("Module 8")?>

<header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Commands</h1>
    </div>
  </header>

<?php echo cards(8, $conn)?>

<section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Review</h2>
        </div>
        <div class="col-lg-8 mx-auto">


          <h3>Commands (指令) </h3>

          <ol>
            <li>
                <a data-toggle="tooltip" title="往左/右转。" class="dots"> Turn left/right. Take a left/right. </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="沿这走廊走。" class="dots"> Go down the hall.  </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="在拐角转。" class="dots"> Go around the corner.  </a>
            </li>
            <li>
                <a data-toggle="tooltip" title=" 他/她不能和你来。" class="dots"> He/She can’t come with you. </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="请在这儿等。" class="dots"> Wait right here.  </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="你错了,请再试一次。" class="dots"> That’s wrong/incorrect. Please try again. </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="跟着那个女士/先生走。" class="dots">Go with that woman/lady/man. </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="请去 2 号窗口交你的通知信。" class="dots"> Please go up to window two and put your letter there. </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="请坐下等。" class="dots">  Please sit down and wait. </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="告诉我答案。" class="dots"> Tell me the answer.  </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="表示考官没有听清楚你刚说的话所以想让你重复一遍。" class="dots">What? / Pardon? / Come again? / Excuse me? / Can you repeat that? / Can you say that again?  </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="请跟我到____号室" class="dots"> Please follow me to room ____.  </a>
            </li>
            <li>
                <a data-toggle="tooltip" title="请坐下" class="dots"> Please have a seat.  </a>
            </li>
          </ol>
        </div>



      </div>
    </div>
    </div>
    </div>
  </section>

<?php echo foot()?>
</html>
