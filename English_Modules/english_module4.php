<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

<?php echo head("Module 4")?>

<header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Characteristics and Children</h1>
    </div>
  </header>

<?php echo cards(4, $conn)?>


<section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Review</h2>
        </div>
        <div class="col-lg-8 mx-auto">


          <h3>Colors</h3>





          <table class="table table-borderless ">
            <tbody>
              <tr>
                <td>
                  <div class="hovereffect foo blue">
                    <div class="overlay">
                      <h2>Blue</h2>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="hovereffect foo green">
                    <div class="overlay">
                      <h2>Green</h2>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="hovereffect foo yellow">
                    <div class="overlay">
                      <h2>Yellow</h2>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="hovereffect foo red">
                    <div class="overlay">
                      <h2>Red</h2>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="hovereffect foo brown">
                    <div class="overlay">
                      <h2>Brown</h2>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="hovereffect foo grey">
                    <div class="overlay">
                      <h2>Grey</h2>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="hovereffect foo white">
                    <div class="overlay">
                      <h2 class="text-dark">White</h2>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="hovereffect foo black">
                    <div class="overlay">
                      <h2>Black</h2>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <h3>Questions About Your Physical Characteristics <br>(关于您身体的特征的问题)</h3>
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="问:你有多高?" class="dots">Q: How tall are you? / What is your
                    height? </a>
                  <br>
                  <a data-toggle="tooltip" title="答:我有<数字>英尺,<数字>英寸高" class="dots">A: I am &lt;number&gt; feet,
                    &lt;number&gt; inches tall.</a>
                </td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="问:你有多重?" class="dots">Q: What is your weight?</a>
                  <br>
                  <a data-toggle="tooltip" title="答:我重<数字>磅。" class="dots">A: I weigh &lt;number&gt; pounds.</a>
                </td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="问:你的眼睛是什么颜色的?" class="dots">Q: What color are your eyes?</a>
                  <br>
                  <a data-toggle="tooltip" title="答:我的眼睛是" class="dots">A: My eyes are</a>
                  <a data-toggle="tooltip" title="棕" class="dots">brown</a>/
                  <a data-toggle="tooltip" title="黑色的" class="dots">black</a>.
                </td>
              </tr>
              <tr>
                <td>
                  Q: What <a data-toggle="tooltip" title="颜色" class="dots"> color</a> is your
                  <a data-toggle="tooltip" title="头发" class="dots"> hair?</a>
                  <br>
                  <a data-toggle="tooltip" title=" 答:我的头发是" class="dots">A: My hair is </a>
                  <a data-toggle="tooltip" title="白" class="dots">white</a>/
                  <a data-toggle="tooltip" title="棕" class="dots">brown</a>/
                  <a data-toggle="tooltip" title="黑色的" class="dots">black</a>.
                </td>
              </tr>
            </tbody>
          </table>
          <h3>Questions About Your Children <br> (关于您儿女的问题)</h3>
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你有几个孩子?" class="dots">How many children do you have?
                  </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="我有<数字>孩子/孩子们." class="dots">I have &lt;number&gt; child/children.</a>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  What is <a data-toggle="tooltip" title="他的" class="dots">his</a>/<a data-toggle="tooltip" title="她的"
                    class="dots">her </a> <a data-toggle="tooltip" title="什么?" class="dots"> name?</a> What are <a
                    data-toggle="tooltip" title="他们的" class="dots">their</a> names?
                  </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="他的" class="dots">His</a>/<a data-toggle="tooltip" title="她的"
                    class="dots">Her</a> name is &lt;name>. <a data-toggle="tooltip" title="他们的" class="dots">Their</a>
                  names are &lt;names>.</a>
                </td>
              </tr>
              <tr>
                  <td>
                    Q:
                    What is his/her <a data-toggle="tooltip" title="出生日期" class="dots">date of birth?</a> <a data-toggle="tooltip" title="他们什么时候出生的?" class="dots">What are their dates of birth?</a> 
                    <br>
                    Q: When was he/she <a data-toggle="tooltip" title="出生" class="dots">born?</a> <a data-toggle="tooltip" title="他们什么时候出生的?" class="dots"> When were they born?</a>
                    <br>
                    A: His/Her date of birth is <a data-toggle="tooltip" title="日期" class="dots">&lt;date></a>. <a data-toggle="tooltip" title="他们的生日是<日期>。" class="dots">Their dates of birth are &lt;dates>.</a>

                  </td>
                </tr>
                <tr>
                    <td>
                      Q:
                      <a data-toggle="tooltip" title="他/她/他们多大了?" class="dots">What is his/her age? / What are their ages?
                      </a>
                      <br>
                      A:
                      <a data-toggle="tooltip" title="他/她/他们<数字>岁了。" class="dots">He/She is &lt;number> years old. / They are &lt;numbers> years old.</a>
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
