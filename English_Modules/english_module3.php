<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

<?php echo head("Module 3")?>

<header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Conversational English</h1>
    </div>
  </header>

<?php echo cards(3, $conn)?>


<section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Review</h2>
        </div>
        <div class="col-lg-8 mx-auto">


          <h3>Self-Introduction & Greetings (自我介绍和问候)</h3>
          <table class="table table-borderless three-col">
            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="你好" class="dots">Hello/Hi/Hey</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="早上好" class="dots">Good morning</a></td>
                <td><a data-toggle="tooltip" title="下午好" class="dots">Good afternoon</a></td>
                <td><a data-toggle="tooltip" title="晚上好" class="dots">Good evening</a></td>
              </tr>
            </tbody>
          </table>
          <table class="table table-borderless three-col">
            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="再见" class="dots">Goodbye/Bye.</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="等会/明天/下周见" class="dots">See you later/tomorrow/next week.</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="祝你有美好的一天" class="dots">Have a nice day.</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="谢谢,你也是" class="dots">Thank you. You too.</a></td>
              </tr>
            </tbody>
          </table>


          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>
                  <a data-toggle="tooltip" title="你好,我的名字是___。你的名字是什么?" class="dots">A: Hi, my name is ___. What’s your
                    name?</a>
                  <br>
                  <a data-toggle="tooltip" title="我的名字是___。很高兴能见到你。" class="dots">B: My name is
                    ___. It is nice to meet you.</a>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <a data-toggle="tooltip" title="你今天怎么样?" class="dots">A: How are you today?</a>
                  <br>
                  <a data-toggle="tooltip" title="你今天怎么样?" class="dots"> &emsp;How are you
                    (doing)?</a>
                  <br>
                  <a data-toggle="tooltip" title="我很好, 谢谢。 你呢?/ 我很好。" class="dots">B: I am fine, thank you, and you? /
                    I’m good.</a>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <a data-toggle="tooltip" title="你今天怎么样?" class="dots">A: What do you do in your free time?</a>
                  <br>
                  <a data-toggle="tooltip" title="你今天怎么样?" class="dots"> &emsp;Do you have any hobbies?</a>
                  <br>
                  <a data-toggle="tooltip" title="我喜欢读书。" class="dots">B: I like to read.</a>
                  <br>
                  <a data-toggle="tooltip" title="我喜欢" class="dots">&emsp;I like</a>&nbsp;<a data-toggle="tooltip"
                    title="做菜。" class="dots">to cook.</a>
                  <br>
                  <a data-toggle="tooltip" title="我喜欢" class="dots">&emsp;I like</a>&nbsp;<a data-toggle="tooltip"
                    title="看电视。" class="dots">to watch TV.</a>
                  <br>
                  <a data-toggle="tooltip" title="我喜欢" class="dots">&emsp;I like</a>&nbsp;<a data-toggle="tooltip"
                    title="上网路。" class="dots">to surf the internet.</a>
                  <br>
                  <a data-toggle="tooltip" title="我喜欢" class="dots">&emsp;I like</a>&nbsp;<a data-toggle="tooltip"
                    title="旅游。" class="dots">to travel.</a>
                  <br>
                  <a data-toggle="tooltip" title="我喜欢" class="dots">&emsp;I like</a>&nbsp;<a data-toggle="tooltip"
                    title="唱歌。" class="dots">to sing.</a>
                  <br>
                  <a data-toggle="tooltip" title="我喜欢" class="dots">&emsp;I like</a>&nbsp;<a data-toggle="tooltip"
                    title="运。" class="dots">to exercise.</a>
                  <br>
                  <a data-toggle="tooltip" title="我喜欢" class="dots">&emsp;I like</a>&nbsp;<a data-toggle="tooltip"
                    title="听音乐。" class="dots">to listen to music.</a>
                  <br>
                  <a data-toggle="tooltip" title="我喜欢" class="dots">&emsp;I like</a>&nbsp;<a data-toggle="tooltip"
                    title="游泳。" class="dots">to swim.</a>
                </td>
              </tr>
              <tr>
                <td>
                  <a data-toggle="tooltip" title="你住在哪里?" class="dots">A: Where do you live?</a>
                  <br>
                  <a data-toggle="tooltip" title="我住在波士顿/昆西/马尔登/牛顿..." class="dots">B: I live in
                    Boston/Quincy/Malden/Newton, etc.</a>
                  <br>
                  <a data-toggle="tooltip" title="你喜欢住在哪里吗?" class="dots">A: Do you like living there?</a>
                  <br>
                  <a data-toggle="tooltip" title="喜欢,挺不错的。" class="dots">B: Yes, it is nice.</a>
                  <br>
                  <a data-toggle="tooltip" title="不,我想要搬家。" class="dots"> &emsp;No, I want to move.</a>
                  <br>
                  <a data-toggle="tooltip" title="你住房子还是公寓?" class="dots">A: Do you live in a house or an apartment?</a>
                  <br>
                  <a data-toggle="tooltip" title=" 住房子。" class="dots">B: I live in a house.</a>
                  <br>
                  <a data-toggle="tooltip" title="住公寓。" class="dots"> &emsp;I live in an apartment.</a>
                  <br>
                  <a data-toggle="tooltip" title="哪你在那里住多久了?" class="dots">A: How long have you lived there?</a>
                  <br>
                  <a data-toggle="tooltip" title="在那里住了___ (几年/月/周)。" class="dots">B: I have lived there for ___
                    (years/months/weeks)</a>
                  <br>
                  <a data-toggle="tooltip" title="从 ___(几月/日/年)开始住的" class="dots"> &emsp;I have lived there since ___
                    (month/date/year).</a>

                </td>
              </tr>


            </tbody>
          </table>
          <h3>Talking About the Weather (谈谈天气)</h3>
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>
                  <a data-toggle="tooltip" title="今天天气怎么样?" class="dots">A: How is the weather today?</a>
                  <br>
                  <a data-toggle="tooltip" title="天气" class="dots">B: The weather is</a>
                  <a data-toggle="tooltip" title="很好" class="dots">great</a>/
                  <a data-toggle="tooltip" title="晴好" class="dots">fine</a>/
                  <a data-toggle="tooltip" title="好" class="dots">good</a>/
                  <a data-toggle="tooltip" title="还可以" class="dots">okay</a>/
                  <a data-toggle="tooltip" title="坏" class="dots">bad</a>/
                  <a data-toggle="tooltip" title="很坏" class="dots">terrible.</a>
                  <br>
                  &emsp; It is
                  <a data-toggle="tooltip" title="晴朗" class="dots">sunny</a>/
                  <a data-toggle="tooltip" title="下雨" class="dots">raining</a>/
                  <a data-toggle="tooltip" title="下雪" class="dots">snowing</a>/
                  <a data-toggle="tooltip" title="刮风" class="dots">windy</a>/
                  <a data-toggle="tooltip" title="多云" class="dots">cloudy</a>.
                  <br>
                </td>
              </tr>
            </tbody>
          </table>
          <h3>Transportation (交通)</h3>
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>
                  <a data-toggle="tooltip" title="你今天怎么样来的?" class="dots">A: How did you come here today?</a>
                  <br>
                  <a data-toggle="tooltip" title="我坐来的" class="dots">B: I came by</a>
                  <a data-toggle="tooltip" title="地铁" class="dots">subway</a>/
                  <a data-toggle="tooltip" title="公共汽车" class="dots">bus</a>/
                  <a data-toggle="tooltip" title="汽车" class="dots">car</a>/
                  <a data-toggle="tooltip" title="自行车" class="dots">bike</a>.
                  <br> &emsp;
                  <a data-toggle="tooltip" title="我乘坐了" class="dots">I took the</a>
                  <a data-toggle="tooltip" title="地铁" class="dots">subway</a>/
                  <a data-toggle="tooltip" title="公共汽车" class="dots">bus</a>/
                  <a data-toggle="tooltip" title="火车" class="dots">train</a>.
                  <br> &emsp;
                  <a data-toggle="tooltip" title="我乘坐了" class="dots">I took a</a>
                  <a data-toggle="tooltip" title="公共汽车" class="dots">bus</a>/
                  <a data-toggle="tooltip" title="出租车" class="dots">taxi</a>.
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <a data-toggle="tooltip" title="哪一号?" class="dots">A: Which one?</a>
                  <a data-toggle="tooltip" title="(公共汽车) " class="dots">(for bus)</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="哪一线?" class="dots">Which line?</a>
                  <a data-toggle="tooltip" title="(地铁) " class="dots">(for subway)</a>
                  <br>

                  <a data-toggle="tooltip" title="号汽车" class="dots">B: Bus number</a>
                  <a data-toggle="tooltip" title="<数字>" class="dots">&lt;number&gt;</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="蓝" class="dots">Blue</a>/
                  <a data-toggle="tooltip" title="红" class="dots">red</a>/
                  <a data-toggle="tooltip" title="橙" class="dots">orange</a>/
                  <a data-toggle="tooltip" title="绿" class="dots">green</a>
                  <a data-toggle="tooltip" title="线" class="dots">line</a>.
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <a data-toggle="tooltip" title="用多长时间? " class="dots">A: How long did it take?</a>
                  <br>
                  B:
                  <a data-toggle="tooltip" title=" <数字>" class="dots">&lt; Number &gt;</a>
                  <a data-toggle="tooltip" title="分钟" class="dots">minutes</a>/
                  <a data-toggle="tooltip" title="小时" class="dots">hours</a>.
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <a data-toggle="tooltip" title="有没有塞车? " class="dots">A: Was there traffic? </a>
                  <br>
                  B:
                  <a data-toggle="tooltip" title="没有" class="dots">no</a>/
                  <a data-toggle="tooltip" title="有。" class="dots">yes</a>.
                  <br>
                </td>
              </tr>
            </tbody>
          </table>

        </div>



      </div>
    </div>
    </div>
    </div>
  </section>
  
<?php echo foot()?>
</html>
