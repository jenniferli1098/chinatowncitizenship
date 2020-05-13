<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

  <?php echo head("Module 1")?>
  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>What is America?</h1>
      <p class="lead">Geography: States, Oceans, Capitals, Presidents, National Holidays, the Flag</p>
    </div>
  </header>
  <?php echo cards(1, $conn)?>
  <section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h3>Review</h3>
          <p>Mouse over the English to view Chinese translations. (将鼠标悬停在英语上可以查看中文翻译。) </p>
        </div>
        <div class="col-lg-8 mx-auto">

          <h5>Geography</h5>
          <audio
          controls
          src="audio/geography.mp3">
          </audio>
          <br>
          <a data-toggle="tooltip" title = "confused" id="sad" class="dots">To the north of the United States, there is Canada. Thirteen US States border Canada, and these
            include Maine, New Hampshire, Vermont, New York, Pennsylvania, Ohio, Michigan, Minnesota, North Dakota,
            Montana, Idaho, Washington, and Alaska. </a>
          <script>
            document.getElementById('sad').onclick = function() {
              fetchChinese('sad', document.getElementById('sad').innerHTML);
              $('[data-toggle="tooltip"]').tooltip();}
          </script>
          <a data-toggle="tooltip" title="在美国东部，有大西洋！ 欧洲在大西洋的对面" class="dots">To the east of the United States, there is
            the Atlantic Ocean! Across the Atlantic Ocean is Europe.</a>
          <a data-toggle="tooltip"
            title="在美国南部，有墨西哥。 美国有四个州与墨西哥接壤，其中包括德克萨斯州，新墨西哥州，亚利桑那州和加利福尼亚州。 在1800年代美墨战争之后，美国从墨西哥获得了这片土地。" class="dots">To
            the south of the United States, there is Mexico. Four US States border Mexico, and these include Texas, New
            Mexico, Arizona, and California. America got this land from Mexico after fighting the Mexican-American war
            in the 1800s.</a>
          <a data-toggle="tooltip" title="在美国西部，有太平洋！ 亚洲位于太平洋的对面" class="dots">To the west of the United States, there
            is the Pacific Ocean! Across the Pacific Ocean is Asia. </a>
          <a data-toggle="tooltip" title="美国的首都是华盛顿特区。同样，中国的首都是北京" class="dots">The capital of the United States is
            Washington, D.C. Similarly, the capital of China is Beijing.</a>
          <a data-toggle="tooltip" title="美国有50个州，每个州都有自己的首都。 马萨诸塞州的首府是波士顿" class="dots">There are 50 states in the
            United States, and each state has its own capital. The capital of Massachusetts is Boston.</a>
          <a data-toggle="tooltip" title="在纽约州的自由岛上，有自由女神像" class="dots">In the state of New York, on Liberty Island,
            there is the Statue of Liberty.</a>
          </br>
          </br>

          <h5>People</h5>
          <audio
          controls
          src="audio/people.mp3">
          </audio>
          <a data-toggle="tooltip" title="在中国，现任总统是习近平。 在美国，现任总统是唐纳德·特朗普" class="dots">In China, the current president
            is Xi Jinping. In America, the current president is Donald Trump. </a>
          <a data-toggle="tooltip" title="副总统在总统之下。 当总统不能再任职时，副总统将成为总统" class="dots">The Vice President is below the
            President. When the President can no longer serve, the Vice President becomes President. </a>
          <a data-toggle="tooltip" title="现任副总统是迈克·彭斯 " class="dots">The current Vice President is Mike Pence. </a>
          <a data-toggle="tooltip" title="与美国总统任职方式相似，每个州也有一位领导人。 此人称为州长" class="dots">Similar to how there is a
            president of the United States, there is also a leader of each state. This person is called the
            governor.</a>
          <a data-toggle="tooltip" title="既然有五十个州，美国就有五十个州长。 马萨诸塞州州长是查理·贝克（Charlie Baker)" class="dots">Since there are
            fifty states, there are fifty governors in the US. The governor of Massachusetts is Charlie Baker.</a>
          </br>
          </br>
          <h5>The Flag</h5>
          <audio
          controls
          src="audio/flag -ch1.mp3">
          </audio>
          <a data-toggle="tooltip" title="我们的美国国旗有50个星星和13个条纹。 星星是白色的蓝色背景" class="dots">Our American flag has 50 stars
            and 13 stripes. The stars are white against a blue background.</a>
          <a data-toggle="tooltip" title="条纹是红色和白色" class="dots">The stripes are red and white.</a>
          <a data-toggle="tooltip" title="我们有50颗星，因为目前有50个州" class="dots">We have 50 stars because there are currently
            50 states.</a>
          <a data-toggle="tooltip" title="我们有13条，因为当美国成为一个国家，他们共十三原殖民地" class="dots">We have 13 stripes because when
            America became a country, they were thirteen original colonies.</a>
          <a data-toggle="tooltip" title="美国独立战争之后，又添加了所有其他37个州" class="dots">All 37 other states were added later,
            after the American Revolution.</a>
          <a data-toggle="tooltip" title="美国独立战争是1776年的一场战争。美国与英国作战并取得了胜利。" class="dots">The American Revolution was a
            war in 1776. America fought Great Britain, and eventually won.</a>
          <a data-toggle="tooltip" title="美国最终将在1812年再次与英国作战。" class="dots">America would eventually fight the British
            again in 1812.</a>
          <a data-toggle="tooltip" title="在这场战争中，在战争中奋斗的作曲家看到美国国旗升到了所有枪炮，大炮和战斗之上" class="dots">During this war, a
            composer that was fighting in the war saw the American flag rise above all the guns, cannons, and
            fighting.</a>
          <a data-toggle="tooltip" title="这位作曲家写了一首歌《星星闪烁的旗帜》。 这成为了我们的国歌" class="dots">This composer wrote the song "The
            Stars Spangled Banner." This became our national anthem.</a>
          </br>
          </br>
          <h5>Holidays</h5>
          <audio
          controls
          src="audio/holidays - ch1.mp3">
          </audio>
        </br>
          <a data-toggle="tooltip" title="有许多国定假日！" class="dots">There are many national holidays!
            <a data-toggle="tooltip" title="在小马丁·路德·金纪念日，我们纪念为民权而战的活动家马丁·路德·金" class="dots">On Martin Luther King Jr.
              Day, we honor Martin Luther King Jr, an activist that fought for civil rights.</a>
            <a data-toggle="tooltip" title="在总统日，我们庆祝美国现任和前任总统" class="dots">On President's Day, we celebrate the
              current and past presidents of the United States.</a>
            <a data-toggle="tooltip" title="在阵亡将士纪念日，我们纪念所有服务于美国的士兵" class="dots">On Memorial Day, we commemorate all
              the soldiers that have served the United States.</a>
            <a data-toggle="tooltip" title="我们将在7月4日庆祝独立日，庆祝我们脱离英国的独立" class="dots">On Independence Day, which we
              celebrate on July Fourth, we celebrate our independence from Great Britain. </a>
            <a data-toggle="tooltip" title="在劳动节，我们庆祝美国所有的工人" class="dots">On Labor Day, we celebrate all the workers in
              the United States.</a>
            <a data-toggle="tooltip" title="在哥伦布日，我们向克里斯托弗·哥伦布（Cristopher Columbus）致敬，他是在西班牙国旗下航行的意大利殖民者，这使美洲得以征服和殖民"
              class="dots">On Columbus Day, we honor Cristopher Columbus, an Italian colonizer sailing under the Spanish
              flag that opened the Americas to conquest and colonization.</a>
            <a data-toggle="tooltip" title="在退伍军人节，我们向在美军中服役和作战的人们表示敬意" class="dots">On Veterans Day, we honor those
              that have served and fought in the US military.</a>
            <a data-toggle="tooltip" title="在感恩节，我们感谢那些影响我们生活的人" class="dots">On Thanksgiving Day, we give thanks to
              those that have impacted our lives.</a>
            <a data-toggle="tooltip" title="圣诞节是一个宗教节日，最终已成为国定假日" class="dots">Christmas is a religious holiday that has
              eventually become a national holiday.</a>
            </br>
            </br>
        </div>


      </div>
    </div>
    </div>
    </div>
  </section>
  <?php echo foot()?>
</html>