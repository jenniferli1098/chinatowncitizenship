<?php
    include '../access.php';

function rev($array) { ob_start(); ?>
    <html>
    <section id="Review" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <h3>Review</h3>
            <button type="button" class="btn btn-outline-secondary" onclick="conv()">Click to allow mouseover translations. (先点此按钮，然后将鼠标放在任何需要翻译的句子上.)</button>
        </div>      
        <?php $incr = 1;?>
        <?php foreach ($array as $topic){?>
            <div class="col-lg-8 mx-auto">
            <br></br>
            <h5><?php echo $topic[0]?></h5>
            <?php for ($i = 1; $i < count($topic); $i++) { ?>
                <a data-toggle="tooltip" title="" class="dots" id="<? echo $incr ?>"><?php echo $topic[$i]?></a><br>
                <?php $incr++; ?>
            <?php } ?>
            <br></br>
            </div>
        <?php } ?>
      </div>  
    </div>
    <script>
        function conv(){
            <?php for ($i = 1 ; $i < $incr ; $i++) { ?>
                fetchChinese('<?php echo $i ?>', document.getElementById('<?php echo $i ?>').innerHTML);
            <?php } ?>
            $('[data-toggle="tooltip"]').tooltip();
        }
    </script>
    </html>
<?php return ob_get_clean(); } ?>