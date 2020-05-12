<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

<?php echo head("Module 1")?>

<header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Numbers and Dates</h1>
    </div>
  </header>

<?php echo cards(1, $conn)?>

<section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Review</h2>
        </div>
        <div class="col-lg-8 mx-auto">

          <h3>Ordinal Numbers</h3>
          <table class="table table-borderless three-col">

            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="一" class="dots">One</a></td>
                <td><a data-toggle="tooltip" title="十一" class="dots">Eleven</a></td>
                <td><a data-toggle="tooltip" title="三十" class="dots">Thirty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="二" class="dots">Two</a></td>
                <td><a data-toggle="tooltip" title="十二" class="dots">Twelve</a></td>
                <td><a data-toggle="tooltip" title="四十" class="dots">Forty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="三" class="dots">Three</a></td>
                <td><a data-toggle="tooltip" title="十三" class="dots">Thirteen</a></td>
                <td><a data-toggle="tooltip" title="五十" class="dots">Fifty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="四" class="dots">Four</a></td>
                <td><a data-toggle="tooltip" title="十四" class="dots">Fourteen</a></td>
                <td><a data-toggle="tooltip" title="六十" class="dots">Sixty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="五" class="dots">Five</a></td>
                <td><a data-toggle="tooltip" title="十五" class="dots">Fifteen</a></td>
                <td><a data-toggle="tooltip" title="七十" class="dots">Seventy</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="六" class="dots">Six</a></td>
                <td><a data-toggle="tooltip" title="十六" class="dots">Sixteen</a></td>
                <td><a data-toggle="tooltip" title="八十" class="dots">Eighty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="七" class="dots">Seven</a></td>
                <td><a data-toggle="tooltip" title="十七" class="dots">Seventeen</a></td>
                <td><a data-toggle="tooltip" title="九十" class="dots">Ninety</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="八" class="dots">Eight</a></td>
                <td><a data-toggle="tooltip" title="十八" class="dots">Eighteen</a></td>
                <td><a data-toggle="tooltip" title="一百" class="dots">One Hundred</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="九" class="dots">Nine</a></td>
                <td><a data-toggle="tooltip" title="十九" class="dots">Nineteen</a></td>
                <td><a data-toggle="tooltip" title="一千" class="dots">One Thousand</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="十" class="dots">Ten</a></td>
                <td><a data-toggle="tooltip" title="二十" class="dots">Twenty</a></td>
                <td><a data-toggle="tooltip" title="一百万" class="dots">One Million</a></td>
              </tr>
            </tbody>
          </table>
          <h3>Ordinal Numbers</h3>
          <table class="table table-borderless two-col">

            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="第一" class="dots">First</a></td>
                <td><a data-toggle="tooltip" title="" class="dots"></a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="第二" class="dots">Second</a></td>
                <td><a data-toggle="tooltip" title="第二十" class="dots">Twentieth</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="第三" class="dots">Third</a></td>
                <td><a data-toggle="tooltip" title="第三十" class="dots">Thirtieth</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="第四" class="dots">Fourth</a></td>
                <td><a data-toggle="tooltip" title="第四十" class="dots">Fortieth</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="第五" class="dots">Fifth</a></td>
                <td><a data-toggle="tooltip" title="第五十" class="dots">Fiftieth</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="第六" class="dots">Sixth</a></td>
                <td><a data-toggle="tooltip" title="第六十" class="dots">Sixtieth</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="第七" class="dots">Seventh</a></td>
                <td><a data-toggle="tooltip" title="第七十" class="dots">Seventieth</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="第八" class="dots">Eigth</a></td>
                <td><a data-toggle="tooltip" title="第八十" class="dots">Eightieth</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="第九" class="dots">Ninth</a></td>
                <td><a data-toggle="tooltip" title="第九十" class="dots">Nintieth</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="第十" class="dots">Tenth</a></td>
              </tr>
              <tr>
                <td>(数字)+th (以下为例外)</td>
                <td>(数字结尾-ty)去 y+ieth</td>
              </tr>

            </tbody>
          </table>
          <h3>Months</h3>
          <table class="table table-borderless two-col">

            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="一月" class="dots">January</a></td>
                <td><a data-toggle="tooltip" title="七月" class="dots">July</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="二月" class="dots">February</a></td>
                <td><a data-toggle="tooltip" title="八月" class="dots">August</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="三月" class="dots">March</a></td>
                <td><a data-toggle="tooltip" title="九月" class="dots">September</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="四月" class="dots">April</a></td>
                <td><a data-toggle="tooltip" title="十月" class="dots">October</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="五月" class="dots">May</a></td>
                <td><a data-toggle="tooltip" title="十一月" class="dots">November</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="六月" class="dots">June</a></td>
                <td><a data-toggle="tooltip" title="十二月" class="dots">December</a></td>
              </tr>
            </tbody>
          </table>
          <h3>Months</h3>
          <p><a data-toggle="tooltip" title="一般顺序是:" class="dots">The general order is:</a> <a data-toggle="tooltip"
              title="月份" class="dots">Month</a> <a data-toggle="tooltip" title="日期" class="dots">Date</a>, <a
              data-toggle="tooltip" title="年份" class="dots">Year</a>.
          </p>
          <p><a data-toggle="tooltip" title="用" class="dots">Use</a> <a data-toggle="tooltip" title="序数词"
              class="dots">ordinal numbers</a> when saying <a data-toggle="tooltip" title="日期" class="dots">dates</a>.
          </p>
          <p><a data-toggle="tooltip" title="年份一般分两部分读" class="dots">Years are generally pronounced in two pairs. </a>
          </p>
          <p><a data-toggle="tooltip" title="例子" class="dots">Examples</a><br>
            <ul>
              <li>
                <a data-toggle="tooltip" title="1979年 3月 24日" class="dots">March 24, 1979</a> (March twenty-fourth,
                nineteen seventy-nine)
              </li>
              <li>
                <a data-toggle="tooltip" title="我出生于" class="dots">I was born on </a> <a data-toggle="tooltip"
                  title="2005年 11月 15号" class="dots">November 15, 2005</a> (November fifteenth, two thousand five).
              </li>
            </ul>
          </p>
          <h3>Verbal Exercises</h3>
          <p>
            <a data-toggle="tooltip" title="我四月三十号不能上班。" class="dots">I cannot work April thirtieth.</a>
            <br><br>
            <a data-toggle="tooltip" title="你十二月七号有什么计划?" class="dots">What plans do you have for December seventh? </a>
            <br><br>
            <a data-toggle="tooltip" title="我的出生日期是_____" class="dots">My birthday is ________ </a>
            <br>
          </p>
        </div>
      </div>
    </div>
    </div>
    </div>
</section>
<?php echo foot()?>
</html>
