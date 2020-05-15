<?php
    include 'flashcards.php';
    include 'header.php';
    include 'review.php';
    include_once '../access.php'; ?>
<!DOCTYPE html>
<?php echo head("Module 1")?>

<header style="background-image:url('../images/english_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Numbers and Dates</h1>
    <p class="lead" style = "font-family: 'Comfortaa', cursive;">Ordinal and Cardinal Numbers</p>
  </div>
</header>

<section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h3>Review</h3>
          <button type="button" class="btn btn-outline-secondary" onclick="conv()">Click to allow mouseover translations. (先点此按钮，然后将鼠标放在任何需要翻译的句子上.)</button>
        <br></br>
        </div>
        <div class="col-lg-8 mx-auto">

          <h3 data-toggle="tooltip" title="" class="dots" id="58">Ordinal Numbers</h3>
          <table class="table table-borderless three-col">

            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="1">One</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="2">Eleven</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="3">Thirty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="4">Two</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="5">Twelve</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="6">Forty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="7">Three</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="8">Thirteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="9">Fifty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="10">Four</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="11">Fourteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="12">Sixty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="13">Five</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="14">Fifteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="15">Seventy</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="16">Six</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="17">Sixteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="18">Eighty</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="19">Seven</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="20">Seventeen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="21">Ninety</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="22">Eight</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="23">Eighteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="24">One Hundred</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="25">Nine</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="26">Nineteen</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="27">One Thousand</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="28">Ten</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="29">Twenty</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="30">One Million</a></td>
              </tr>
            </tbody>
          </table>
          <h3 data-toggle="tooltip" title="" class="dots" id="59">Month</h3>
          <table class="table table-borderless two-col">

            <tbody>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="31">January</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="32">July</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="33">February</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="34">August</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="35">March</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="36">September</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="37">April</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="38">October</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="39">May</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="40">November</a></td>
              </tr>
              <tr>
                <td><a data-toggle="tooltip" title="" class="dots" id="41">June</a></td>
                <td><a data-toggle="tooltip" title="" class="dots" id="42">December</a></td>
              </tr>
            </tbody>
          </table>
          <p><a data-toggle="tooltip" title="" class="dots" id="43">The general order is:</a> <a data-toggle="tooltip"
              title="" class="dots" id="44">Month</a> <a data-toggle="tooltip" title="" class="dots" id="45">Date</a>, <a
              data-toggle="tooltip" title="" class="dots" id="46">Year</a>.
          </p>
          <p><a data-toggle="tooltip" title="" class="dots" id="47">Use</a> <a data-toggle="tooltip" title=""
              class="dots" id="48">ordinal numbers</a> when saying <a data-toggle="tooltip" title="" class="dots" id="49">dates</a>.
          </p>
          <p><a data-toggle="tooltip" title="" class="dots" id="50">Years are generally pronounced in two pairs. </a>
          </p>
          <br>
          <p><a data-toggle="tooltip" title="" class="dots" id="51">Examples - </a><br>
            <ul>
              <li>
                <a data-toggle="tooltip" title="" class="dots" id="52">March 24, 1979</a> (March twenty-fourth,
                nineteen seventy-nine)
              </li>
              <li>
                <a data-toggle="tooltip" title="" class="dots" id="53">I was born on </a> <a data-toggle="tooltip"
                  title="" class="dots" id="54">November 15, 2005</a> (November fifteenth, two thousand five).
              </li>
            </ul>
          </p>
          <br>
          <h3 data-toggle="tooltip" title="" class="dots" id="60">Verbal Exercises</h3>
          <br>
          <p>
            <a data-toggle="tooltip" title="" class="dots" id="55">I cannot work April thirtieth.</a>
            <br><br>
            <a data-toggle="tooltip" title="" class="dots" id="56">What plans do you have for December seventh? </a>
            <br><br>
            <a data-toggle="tooltip" title="" class="dots" id="57">My birthday is ________ </a>
            <br>
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<script>
  function conv(){
      <?php for ($i = 1 ; $i < 60 ; $i++) { ?>
          fetchChinese('<?php echo $i ?>', document.getElementById('<?php echo $i ?>').innerHTML);
      <?php } ?>
      $('[data-toggle="tooltip"]').tooltip();
  }
</script>
<?php echo foot()?>
</html>
