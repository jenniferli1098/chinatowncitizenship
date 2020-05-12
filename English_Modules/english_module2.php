<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

<?php echo head("Module 2")?>

<header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Questions and Verbs</h1>
    </div>
  </header>

<?php echo cards(2, $conn)?>


<section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Review</h2>
        </div>
        <div class="col-lg-8 mx-auto">


          <h3>Question Words (问题词)</h3>
          <table class="table table-borderless two-col">

            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="谁?" class="dots">Who?</a></td>
                <td><a data-toggle="tooltip" title="多少?" class="dots">How many/much?</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="什么?" class="dots">What?</a></td>
                <td><a data-toggle="tooltip" title="多少岁?" class="dots">How old?</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="何时?" class="dots">When?</a></td>
                <td><a data-toggle="tooltip" title="多久?" class="dots">How long?</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="哪里?" class="dots">Where?</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="为什么?" class="dots">Why?</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="怎么?" class="dots">How?</a></td>
              </tr>


            </tbody>
          </table>
          <h3>Important Phrases (重要句子)</h3>
          <p><a data-toggle="tooltip" title="请重复一遍。" class="dots">Please repeat (that).</a></p>

          <p><a data-toggle="tooltip" title="Please speak more slowly." class="dots">Please speak more slowly.</a></p>

        </div>



      </div>
    </div>
    </div>
    </div>
  </section>
  
<?php echo foot()?>
</html>
