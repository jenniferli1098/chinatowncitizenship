<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';

?>
<!DOCTYPE html>

<?php echo head("Module 8")?>

<header style="background-image:url('../images/ushistory_banner.png')">
  <div class="container text-center">
    <h1 style = "font-family: 'Comfortaa', cursive;">Updated Questions (128)</h1>
  </div>
</header>

<?php echo cards(8, $conn)?>

<?php 
  $rights = array("These are updated questions – currently there is no review, but we will update it soon!");
  $review = array($rights);
  echo rev($review);?>

<?php echo foot()?>

</html>