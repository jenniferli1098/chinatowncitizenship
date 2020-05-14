<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';

?>
<!DOCTYPE html>

  <?php echo head("Module 8")?>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Rights and Responsibilities</h1>
    </div>
  </header>
  <?php echo cards(8, $conn)?>

  <section id="Review" class="bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h3>Review</h3>
              <p>Mouse over the English to view Chinese translations. (将鼠标悬停在英语上可以查看中文翻译。) </p>
            </div>
            <div class="col-lg-8 mx-auto">
    
              <h5>Rights</h5>
              <audio
              controls
              src="audio/rights.mp3">
              </audio>
              <h6>For Citizens ONLY</h6>
                <a data-toggle="tooltip" title="在联邦大选中投票" class="dots">- Vote in a federal election</a></br>
                <a data-toggle="tooltip" title="竞选联邦办公室" class="dots">- Run for federal office</a></br>
            </br>
            <h6>For EVERYONE</h6>
                <a data-toggle="tooltip" title="表达自由" class="dots">- Freedom of expression</a></br>
                <a data-toggle="tooltip" title="言论自由" class="dots">- Freedom of speech</a></br>
                <a data-toggle="tooltip" title="集会自由" class="dots">- Freedom of assembly</a></br>
                <a data-toggle="tooltip" title="自由上访政府" class="dots">- Freedom to petition the government</a></br>
                <a data-toggle="tooltip" title="宗教自由" class="dots">- Freedom of religion</a></br>
                <a data-toggle="tooltip" title="携带武器的权利" class="dots">- The right to bear arms</a></br>

        </br>
    </br>
            <h5>Responsibilities</h5>
            <audio
            controls
            src="audio/resp.mp3">
            </audio>
            <h6>For Citizens ONLY</h6>
                <a data-toggle="tooltip" title="担任陪审义务" class="dots">- Serve on a jury</a></br>
                <a data-toggle="tooltip" title="在联邦大选中投票" class="dots">- Vote in a federal election</a></br>
                <a data-toggle="tooltip" title="为了投票，您必须年满18岁。" class="dots">- In order to vote, you must be 18 or older.</a></br>
                <a data-toggle="tooltip" title="对国旗（或对美国）宣誓效忠" class="dots">- Say the Pledge of Allegiance to the Flag (or to the United States)</a></br>
                <a data-toggle="tooltip" title="所有男人都必须在18岁至18岁之间注册18岁的选择性服务" class="dots">- All men must register for the Selective Service at age 18, between 18 and 26</a></br>
            </br>
            <h6>For EVERYONE</h6>
                <a data-toggle="tooltip" title="在4月15日之前寄出联邦所得税表格" class="dots">- Send in federal income tax forms by April 15th</a></br>

        </br>
    </br>
    <h5>Promises</h5>
    <audio
    controls
    src="audio/promises.mp3">
    </audio>
    <h6>For Citizens ONLY</h6>
        <a data-toggle="tooltip" title="停止对其他国家的忠诚" class="dots">- Stop loyalty to other countries</a></br>
        <a data-toggle="tooltip" title="捍卫美国宪法和法律" class="dots">- Defend the Constitution and the laws of the United States</a></br>
        <a data-toggle="tooltip" title="遵守美国法律" class="dots">- Obey the laws of the United States</a></br>
        <a data-toggle="tooltip" title="服务于美军" class="dots">- Serve in the US Military</a></br>
        <a data-toggle="tooltip" title="为国家服务" class="dots">- Serve the nation</a></br>
        <a data-toggle="tooltip" title="忠于美国" class="dots">- Be loyal to the United States</a></br>

</br>
</br>
<h5>Pariticpating in the Democracy</h5>
<audio
controls
src="audio/parti.mp3">
</audio>
</br>

    <a data-toggle="tooltip" title="参与民主的方式很多。" class="dots">- There are many ways to participate in the democracy.</a></br>
    <a data-toggle="tooltip" title="投票" class="dots">- Vote</a></br>
    <a data-toggle="tooltip" title="加入政党" class="dots">- Join a political party</a></br>
    <a data-toggle="tooltip" title="帮助竞选" class="dots">- Help with a campaign</a></br>
    <a data-toggle="tooltip" title="加入公民团体" class="dots">- Join a civic group</a></br>
    <a data-toggle="tooltip" title="加入社区团体" class="dots">- Join a community group</a></br>
    <a data-toggle="tooltip" title="向当选官员就问题发表意见" class="dots">- Give an elected official your opinion on an issue</a></br>
    <a data-toggle="tooltip" title="致电参议员和代表" class="dots">- Call Senators and Representatives</a></br>
    <a data-toggle="tooltip" title="竞选公职" class="dots">- Run for office</a></br>
    <a data-toggle="tooltip" title="写报纸" class="dots">- Write to a newspaper</a></br>



</br>
</br>
        </div>
      </div>
      </div>
      </div>
    </section>
    <?php echo foot()?>
</html>