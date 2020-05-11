<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
?>
<!DOCTYPE html>

  <?php echo head(5)?>

    <header class="bg-primary text-white">
        <div class="container text-center">
            <h1>People</h1>
        </div>
    </header>
    <?php echo cards(5, $conn)?>

    <section id="Review" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3>Review</h3>
                    <p>Mouse over the English to view Chinese translations. (将鼠标悬停在英语上可以查看中文翻译。) </p>
                </div>
                <div class="col-lg-8 mx-auto">

                    <h5>People</h5>
                    <audio
                    controls
                    src="audio/ch5.mp3">
                    </audio>
                        <a data-toggle="tooltip" title="本杰明·富兰克林（Benjamin Franklin）– 国外交官，制宪会议历史最悠久的成员，美国第一任邮政局长，《可怜的理查德年鉴》的作者，开办了第一批免费图书馆" class="dots">1. Benjamin Franklin – U.S. diplomat,
                            Oldest member of the Constitutional Convention, First Postmaster General
                            of the US, Writer of Poor Richard's Almanac, Started the First Free
                            Libraries</a>
                        <a data-toggle="tooltip" title="乔治·华盛顿–美国第一任总统，“我们国家的父亲”" class="dots">2. George Washington – First President of the US,
                            "Father of Our Country"</a>
                        <a data-toggle="tooltip" title="苏珊·安东尼（Susan B. Anthony) - 争取妇女权利，争取公民权利" class="dots">3. Susan B. Anthony – Fought for Women's Rights, Fought
                                for Civil Rights</a>
                        <a data-toggle="tooltip" title="伍德罗·威尔逊（Woodrow Wilson）– 第一次世界大战期间的总统" class="dots">4. Woodrow Wilson – President during World War I</a>
                        <a data-toggle="tooltip" title="富兰克林·罗斯福（Franklin Roosevelt）– 大萧条和第二次世界大战期间的总统" class="dots">5. Franklin Roosevelt – President during the Great Depression and World War II</a>
                        <a data-toggle="tooltip" title="德怀特·艾森豪威尔（Dwight D. Eisenhower）– 美国总统，第二次世界大战的战争英雄" class="dots">6. Dwight D. Eisenhower – President of the United States, War Hero from World War II</a>
                        <a data-toggle="tooltip" title="小马丁·路德·金（Martin Luther King，Jr.）– 为争取民权而战，为所有美国人争取平等" class="dots">7. Martin Luther King, Jr. – Fought for Civil Rights, Worked for
                                Equality for all Americans</a>
                        <a data-toggle="tooltip" title="南希·佩洛西（Nancy Pelosi）– 众议院现任议长" class="dots">8. Nancy Pelosi – Current Speaker of the House of Representatives</a>
                        <a data-toggle="tooltip" title="唐纳德·特朗普（Donald Trump）– 美国现任总统，共和党领袖" class="dots">9. Donald Trump – Current President of the United States, Part of the Republican Party </a>

                    </br>
                    </br>
                </div>


            </div>
        </div>
        </div>
        </div>
    </section>

    <?php echo foot()?>
</html>