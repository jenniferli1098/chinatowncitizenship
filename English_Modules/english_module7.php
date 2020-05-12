<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

<?php echo head("Module 7")?>

<header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Before the Interview</h1>
    </div>
  </header>

<?php echo cards(7, $conn)?>


<section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Review</h2>
        </div>
        <div class="col-lg-8 mx-auto">


          <h3>Questions Before the Naturalization Interview <br>(入籍考试前的问题: 你准备好了吗?)
          </h3>


          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="你为什么来?" class="dots"> Why are you here? </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你为什么原因来?" class="dots"> What is your reason for being here? </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你知道你为什么来的吗?" class="dots">Do you know what you are doing here? </a>
                  <br>
                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="我来考我的入籍考试。" class="dots"> I am here to take my citizenship test. </a>
                </td>
              </tr>
              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="有没有人和你来?" class="dots"> Did anyone come with you? </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你是不是和家人来的?" class="dots"> Did you come with family? </a>
                  <br>
                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="没有,我自己来的。" class="dots"> No, I came by myself. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="对,我和儿子/女儿/妻子/丈夫/朋友...一起来的。" class="dots"> Yes, I came with my
                    son/daughter/wife/ husband/friend... </a>
                </td>
              </tr>

              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="你是自己来的吗?" class="dots"> Did you come by yourself? </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你是一个人来的吗?" class="dots"> Did you come alone? </a>
                  <br>
                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="是。" class="dots"> Yes, I did. </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title=" 不,我和儿子/女儿/妻子/丈夫/朋友...一起来的。" class="dots"> No, I came with my
                    son/daughter/wife/husband/friend... </a>
                </td>
              </tr>

              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="你带没带你的通知信?" class="dots">Do you have your appointment notice? </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="我能看一下你的通知信吗?" class="dots"> Can I see your appointment notice? </a>
                  <br>
                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="好" class="dots"> Yes</a>.
                  <br>
                </td>
              </tr>


              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="你约的是什么时候面试?" class="dots">What time is your appointment? </a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你约的是什么时候面试?" class="dots"> What time is your interview?</a>
                  <br>
                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="考试约在____。" class="dots"> It is at ________ (e.g. 9:45). </a>.
                  <br>
                </td>
              </tr>

              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="你等了很久吗?" class="dots"> Have you been waiting for a long time? </a>
                  <br>

                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="没有" class="dots">No</a>/
                  <a data-toggle="tooltip" title="是" class="dots"> Yes </a>.
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="你等了多久?" class="dots"> How long have you been waiting here? </a>
                  <br>

                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="我等了" class="dots"> I have been waiting for</a> ____
                  <a data-toggle="tooltip" title="分钟" class="dots"> minutes </a>/
                  <a data-toggle="tooltip" title="小时。" class="dots"> hours </a>.
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="你带律师来了吗?" class="dots"> Did you bring a lawyer/an attorney with you?
                  </a>
                  <br>

                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="没有" class="dots">No</a>/
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="你证件带了吗?" class="dots"> Did you bring your documents?
                  </a>
                  <br>
                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="带了" class="dots">Yes</a>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="你带了些什么证件?" class="dots">Which documents did you bring with you? </a>
                  <br>
                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="我的身份证" class="dots">My ID card</a>/
                  <a data-toggle="tooltip" title="社会安全证" class="dots">social security card</a>/
                  <a data-toggle="tooltip" title="护照" class="dots">passport</a>/
                  <a data-toggle="tooltip" title="绿卡" class="dots">green card</a>/
                  <a data-toggle="tooltip" title="通知信" class="dots">appointment notice</a>/
                  <a data-toggle="tooltip" title="等等" class="dots">etc</a>.
                  <br>
                </td>
              </tr>

              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="这是你第一还是第二次考试?" class="dots"> Is this your first or second time taking
                    the test? </a>
                  <br>
                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="这是我第一次。" class="dots"> This is my first time.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="这是我第二次。" class="dots"> This is my second time. </a>

                  <br>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title="你第一次为什么没通过?" class="dots"> Why didn’t you pass the test the first
                    time? </a>
                  <br>
                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="我当时不会说/读/写英文" class="dots"> I couldn’t speak/read/write English.</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title=" 我没有通过说/读/写的部分" class="dots"> I didn’t pass the
                    speaking/reading/writing part. </a>
                </td>
              </tr>
              <tr>
                <td>
                  <strong> Q: </strong>
                  <a data-toggle="tooltip" title=" 你今天感觉怎么样?" class="dots">How are you feeling today?</a>
                  <br>
                  &emsp;
                  <a data-toggle="tooltip" title="你对这个考试感觉怎么样?" class="dots"> How are you feeling about this test? </a>
                  <br>
                  <strong> A: </strong>
                  <a data-toggle="tooltip" title="我觉得" class="dots"> I am feeling  </a> 
                  <a data-toggle="tooltip" title="挺好" class="dots"> fine </a>/
                  <a data-toggle="tooltip" title="有点紧张" class="dots"> a bit nervous </a>/
                  <a data-toggle="tooltip" title="兴奋" class="dots"> excited </a>.
                  <br>
                </td>
              </tr>
              <tr>
                  <td>
                    <strong> Q: </strong>
                    <a data-toggle="tooltip" title=" 你考试准备好了吗?" class="dots">Are you prepared to take this test? 
                    </a>
                    <br>
                    <strong> A: </strong>
                    <a data-toggle="tooltip" title="好了。" class="dots">Yes. </a>
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
