<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';

?>
<!DOCTYPE html>

  <?php echo head("Module 7")?>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>The 1900s - Present</h1>
    </div>
  </header>
  <?php echo cards(7, $conn)?>

    <section id="Review" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3>Review</h3>
                    <p>Mouse over the English to view Chinese translations. (将鼠标悬停在英语上可以查看中文翻译。) </p>
                    <h5>1900s - Present</h5> 
                    <audio
                    controls
                    src="audio/ch7.mp3">
                    </audio>
                    <ul class="timeline">
                        <li>
                            <h6 data-toggle="tooltip" title="第一次世界大战" class="dots">World War I</h6>
                            <h6 class="float-right">1914-1919</h6>
                            </br>
                            <a data-toggle="tooltip" title="伍德罗威尔逊在这场战争中担任总统。" class="dots">Woodrow Wilson was president during this war.</a>                            
                        </li>
                      </br>
                        <li>
                          
                            <h6 data-toggle="tooltip" title="第二次世界大战" class="dots">World War II</h6>
                            <h6 class="float-right">1939-1945</h6>
                            </br>
                            <a data-toggle="tooltip" title="我们与日本，德国和意大利作战。" class="dots">We fought Japan, Germany, and Italy.</a>                            
                            <a data-toggle="tooltip" title="富兰克林·罗斯福·在这场战争中担任总统。" class="dots">Franklin Roosevelt was president during this war.</a>                            
                            <a data-toggle="tooltip" title="未来的总统德怀特·艾森豪威尔·是第二次世界大战期间的战争英雄." class="dots">Dwight D Eisenhower, a future president, was a war hero during World War II.</a>                            
                        </li>
                      </br>
                        <li>
                            <h6 data-toggle="tooltip" title="朝鲜战争" class="dots">Korean War</h6>
                            <h6 class="float-right">1950-1953</h6>
                            </br>
                            <a data-toggle="tooltip" title="朝鲜战争是冷战的一部分。" class="dots">The Korean War was a part of the Cold War.</a>                            
                            <a data-toggle="tooltip" title="在冷战中，美国与共产主义的蔓延作斗争。" class="dots">In the Cold War, America fought the spread of communism.</a>                            
                        </li>
                      </br>
                        <li>
                            <h6 data-toggle="tooltip" title="越南战争" class="dots">Vietnam War</h6>
                            <h6 class="float-right">1955-1975</h6>
                            </br>
                            <a data-toggle="tooltip" title="越南战争是冷战的一部分。" class="dots">The Vietnam War was a part of the Cold War.</a>                            
                            <a data-toggle="tooltip" title="在冷战中，美国与共产主义的蔓延作斗争。" class="dots">In the Cold War, America fought the spread of communism.</a>  
                        </li>
                      </br>
                        <li>
                            <h6 data-toggle="tooltip" title="民权运动" class="dots">Civil Rights Movement</h6>
                            <h6 class="float-right">1960s</h6>
                        </li>
                      </br>
                        <li>
                            <h6 data-toggle="tooltip" title="海湾战争" class="dots">Gulf War</h6>
                            <h6 class="float-right">1990-1991</h6>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </section>
    <?php echo foot()?>

</html>