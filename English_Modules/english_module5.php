<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

<?php echo head("Module 5")?>

<header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Economic Status</h1>
    </div>
  </header>

<?php echo cards(5, $conn)?>

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
                  <a data-toggle="tooltip" title="你生活费是从哪里来的?" class="dots"> How do you support yourself?</a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="我的儿子/女儿养活我。" class="dots"> My children support me.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="我有社会福利" class="dots"> I am on welfare.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="我有工作。" class="dots"> I have a job.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="我有积蓄。" class="dots"> I have savings.</a>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你有工作吗?" class="dots"> Do you have a job?</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你有工作吗?" class="dots"> Do you work?</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你有受雇吗?" class="dots"> Are you employed?</a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="有。我是 ______(职业)。" class="dots"> Yes, I have a job. I am a ______.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="没有,我退休了。在中国的时候,我以前是 ______。" class="dots"> No, I am retired. In China,
                    I was a ______. </a>

                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你付房租吗?" class="dots"> Do you pay rent?</a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="付" class="dots"> Yes</a>/
                  <a data-toggle="tooltip" title="不付" class="dots"> No</a>.
                </td>
              </tr>
              <tr>>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="每月租金多少?"" class=" dots"> How much is rent each month?</a>
                  <br>
                  A:
                  ______ <a data-toggle="tooltip" title="美元" class="dots">dollars</a>.

                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你是否用美国政府福利? " class="dots"> Are you on government welfare? </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你拿食物票吗? " class="dots"> Do you receive food stamps?</a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="拿" class="dots"> Yes</a>/
                  <a data-toggle="tooltip" title="不拿" class="dots"> No</a>.
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你缴税吗?" class="dots"> Do you pay your taxes? </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你每年都报税吗?" class="dots"> Do you file a tax return every year?</a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="是" class="dots"> Yes</a>.
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  Q:
                  <a data-toggle="tooltip" title="你欠着税吗?" class="dots"> Do you owe any taxes that are overdue? </a>
                  <br>
                  A:
                  <a data-toggle="tooltip" title="没有" class="dots"> No</a>.
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
