<?php
    include 'flashcards.php';
    include 'header.php';
    include 'review.php';
    include_once '../access.php'; ?>
<!DOCTYPE html>
<?php echo head("Module 1")?>
<header class="bg-primary text-white">
  <div class="container text-center">
    <h1>Numbers and Dates</h1>
    <p class="lead">Ordinal and Cardinal Numbers</p>
  </div>
</header>
<?php echo cards(1, $conn)?>
<?php 
  $Cardinal = array("Cardinal Numbers","One","Eleven","Thirty","Two","Twelve","Forty","Three","Thirteen","Fifty","Four","Fourteen","Sixty","Five","Fifteen","Seventy","Six","Sixteen","Eighty","Seven","Seventeen","Ninety","Eight","Eighteen","One Hundred","Nine","Nineteen","One Thousand","Ten","Twenty","One Million");


  $Ordinal = array("Orginal Numbers", "First","Second","Twentieth","Third","Thirtieth","Fourth","Fortieth","Fifth","Fiftieth","Sixth","Sixtieth","Seventh","Seventieth","Eigth","Eightieth","Ninth","Nintieth","Tenth");
  
  $Months = array("Months","January","July","February","August","March","September","April","October","May","November","June","December");
  
  $Setup = array("Months","The general order is: Month Date, Year.","Use ordinal numbers when saying dates.","Years are generally pronounced in two pairs.","Examples","March 24, 1979 (March twenty-fourth, nineteen seventy-nine)","I was born on November 15, 2005 (November fifteenth, two thousand five).");
  $Verbal = array("Verbal Exercises","I cannot work April thirtieth.","What plans do you have for December seventh?","My birthday is ________");
  
  $review = array($Ordinal, $Months, $Setup, $Verbal);
  echo rev($review);
  ?>
<?php echo foot()?>
</html>
