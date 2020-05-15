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

  <?php echo cards(2, $conn)?>
  <?php 
    $Economic = array("Questions About Your Economic Status","Q: What is your social security number? ","A: My social security number is <xxx-xx-xxxx>.","Q: When did you become a permanent resident of the United States? ","A: I became a permanent resident on <date>.","Q: How long have you been a permanent resident? ","A: I have been a permanent resident for <number> years. ","Q: Have you traveled outside of the United States since becoming a permanent resident? ","  Have you left the country since you came to America? ","A: Yes/ No. ","Q: Why did you travel outside the United States? ","A: For vacation. ","  To see my family. ","Q: Who helped you fill out your N-400 application? ","  Who helped you complete your N-400? ","A: My friend. ","  My son. ","  My daughter. ","Q: Have you had any additional children since you turned in/submitted/filed your N-400? ","A: Yes/ No. ","Q: Have you committed a crime since you turned in/submitted/filed your N-400? ","A: No. ","Q: Have you taken any additional trips outside of the United States since you turned in/submitted/filed your N-400? ","A: Yes/ No. ","Q: Have you moved since you turned in/submitted/filed your N-400? ","A: Yes/ No. ","Q: Who sponsored you to come to the U.S.? ","A: My wife. ","  My husband. ","  My son. ","  My daughter. ","Q: Why did you decide to come to the U.S.? ","  Why did you want to come to America? ","A: To be with my family. ","  To get a better education. ","  For my children. ","  To have a better life. ","  For freedom. ","  To find work. ","Q: Do you miss anything about China? ","A: I miss my family. ","  I miss my friends. ","  I miss the food. ","  No, I do not miss anything. ","Q: Why do you want to be an American citizen? ","A: To vote. ","  To travel with a U.S. passport. ","  To obtain federal government jobs. ","  To get social security benefits. ","  To sponsor my family to come to America. ","Q: Do you like living in America? ","A: Yes, I like it here. ","Q: Why do you like living in America? ","A: The air is good. ","  The education is good. ","  The water is good. ","  I like the freedom. ","  The food is good.");$review = array($EconomicStatus);
    $review = array($Economic);
    echo rev($review);
  ?>
  <?php echo foot()?>
</html>