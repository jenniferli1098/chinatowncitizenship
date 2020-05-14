<?php
    include '../access.php';
    include 'header.php';

function rev($array) { ob_start(); ?>
    <html>
    <section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <h3>Review</h3>
            <p>Mouse over the English to view Chinese translations. (将鼠标悬停在英语上可以查看中文翻译。) </p>
        </div>
        <?php $incr = 1?>
        <?php foreach ($array as $topic){?>
            <div class="col-lg-8 mx-auto">
            <br></br>
            <h5><?php echo $topic[0]?></h5>
            <?php for ($i = 1; $i < count($topic); $i++) { ?>
                <a data-toggle="tooltip" title="" class="dots" id="<? echo $incr ?>" onclick="test('<? echo $incr ?>')"><?php echo $topic[$i]?></a>
                <?php $incr++; ?>
            <?php } ?>
            <br></br>
            </div>
        <?php } ?>
      </div>  
    </div>
    <script>
        function test(k) {
            alert(document.getElementById(''+k).innerHTML);
            fetchChinese(''+k, document.getElementById(''+k).innerHTML);
            $('[data-toggle="tooltip"]').tooltip();
        }
    </script>
    </html>
<?php return ob_get_clean(); } ?>