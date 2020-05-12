<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

<?php echo head("Module 6")?>

<header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Immigration History</h1>
    </div>
  </header>

<?php echo cards(6, $conn)?>

<section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Review</h2>
        </div>
        <div class="col-lg-8 mx-auto">


          <h3>Questions About Your Economic Status <br>(关于您经济情况的问题) </h3>

          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>
                  Q:
                  What is your
                  <a data-toggle="tooltip" title="社会安全号码" class="dots"> social security number?</a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="我的社会安全号是<xxx-xx-xxx>" class="dots"> My social security number is
                    &lt;xxx-xx-xxxx>.</a>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你何时成为了美国永久居民 ?" class="dots"> When did you become a permanent resident
                    of the United States?</a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="我在<日期>成为美国永久居民。" class="dots"> I became a permanent resident on
                    &lt;date>.</a>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你已成为永久居民多长时间了?" class="dots">How long have you been a permanent
                    resident?</a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="我已当了<数字>年的永久居民了。" class="dots"> I have been a permanent resident for
                    &lt;number> years.</a>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你成为永久居民之后出过国吗?" class="dots">Have you traveled outside of the United
                    States since becoming a permanent resident? </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你来美国以后出过国吗?" class="dots">Have you left the country since you came to
                    America? </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="有" class="dots"> Yes</a>/
                  <a data-toggle="tooltip" title="没有" class="dots"> No</a>.
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你为何离开美国?" class="dots">Why did you travel outside the United
                    States?</a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="为了旅游。" class="dots">For vacation.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="为了探望家人。" class="dots">To see my family.</a>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="谁帮你填的 N-400?" class="dots">Who helped you fill out your N-400
                    application?</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="谁帮你完成的 N-400?" class="dots">Who helped you complete your N-400?</a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="我的朋友" class="dots">My friend.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="我的儿子" class="dots">My son.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="我的女儿" class="dots">My daughter.</a>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你交 N-400 以后还要没要孩子?" class="dots">Have you had any additional children
                    since you turned in/submitted/filed your N-400?
                  </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="要了" class="dots"> Yes</a>/
                  <a data-toggle="tooltip" title="没有" class="dots"> No</a>.
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你交 N-400 以后犯过罪吗?" class="dots"> Have you committed a crime since you
                    turned in/submitted/filed your N-400? </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="没有" class="dots"> No</a>.
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你交 N-400 以后出过国吗?" class="dots"> Have you taken any additional trips
                    outside of the United States since you turned in/submitted/filed your N-400?
                  </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="有" class="dots"> Yes</a>/
                  <a data-toggle="tooltip" title="没有" class="dots"> No</a>.
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你交 N-400 以后搬过家吗?" class="dots"> Have you moved since you turned
                    in/submitted/filed your N-400?

                  </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="有" class="dots"> Yes</a>/
                  <a data-toggle="tooltip" title="没有" class="dots"> No</a>.
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="是谁担保你来美国的?" class="dots"> Who sponsored you to come to the U.S.?

                  </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="我的妻子" class="dots">My wife.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="我的丈夫" class="dots">My husband.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="我的儿子" class="dots">My son.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="我的女儿" class="dots">My daughter.</a>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你为什么决定来美国?" class="dots"> Why did you decide to come to the U.S.? </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你为什么想来美国?" class="dots">Why did you want to come to America? </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="和我家人团聚。" class="dots">To be with my family. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="得到更好的教育。" class="dots">To get a better education.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="为了我子女。" class="dots">For my children. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="为了有更好的生活。" class="dots">To have a better life. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="为了自由。" class="dots">For freedom.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="找工作。" class="dots">To find work.</a>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你最想念中国的什么?" class="dots"> Do you miss anything about China? </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="想念家人。" class="dots"> I miss my family. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="想念朋友。" class="dots">I miss my friends. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="想念中国料理。" class="dots"> I miss the food. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="什么都不想念。" class="dots"> No, I do not miss anything. </a>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你为什么想入美国籍?" class="dots"> Why do you want to be an American citizen? </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="选举。" class="dots"> To vote. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="用美国护照旅游。" class="dots">To travel with a U.S. passport. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title=" 得到美国政府工作。" class="dots"> To obtain federal government jobs. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="为了社安待遇。" class="dots">  To get social security benefits. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="为了担保我的家人来美国。" class="dots">  To sponsor my family to come to America. </a>
                
                </td>
              </tr>
              <tr>
                  <td>
                    Q:
                    <a data-toggle="tooltip" title="你喜欢住在美国吗?" class="dots"> Do you like living in America? </a>
                    <br>
                    A:
                    <a data-toggle="tooltip" title="喜欢。" class="dots"> Yes, I like it here. </a>
                    <br>
                    Q:
                    <a data-toggle="tooltip" title="你为什么喜欢住在美国?" class="dots"> Why do you like living in America? </a>
                    <br>
                    A:
                    <a data-toggle="tooltip" title=" 空气很好。" class="dots"> The air is good.</a>
                    <br>
                    &emsp;
                    <a data-toggle="tooltip" title="教育很好。" class="dots">The education is good.</a>
                    <br>
                    &emsp;
                    <a data-toggle="tooltip" title="  水质很好。" class="dots">The water is good.</a>
                    <br>
                    &emsp;
                    <a data-toggle="tooltip" title="喜欢这里的自由。" class="dots"> I like the freedom.  </a>
                    <br>
                    &emsp;
                    <a data-toggle="tooltip" title="这边食物好吃。" class="dots"> The food is good. </a>
                  
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
