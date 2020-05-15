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
            <br></br>
        </div>      
        <?php $incr = 1;?>
        <?php foreach ($array as $topic){?>
            <div class="col-lg-8 mx-auto">
            <h5 data-toggle="tooltip" title="" class="dots" id="<? echo $incr ?>"><?php echo $topic[0]?></h5> <br>
            <?php $incr++; ?>
            <ul>
            <?php for ($i = 1; $i < count($topic); $i++) { ?>
                <li><a data-toggle="tooltip" title="" class="dots" id="<? echo $incr ?>" onclick="say('<? echo $incr ?>')"><?php echo $topic[$i]?></a></li>
                <?php $incr++; ?>
            <?php } ?>
            </ul>
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
        function say( k ){
            var synth = window.speechSynthesis;
            //alert("test");
            var speech = new SpeechSynthesisUtterance( document.getElementById('sad'+k).innerHTML );
            speech.lang = 'en-US';
            //speech.voice = synth.getVoices()[0];
            //alert(synth.getVoices());
            synth.speak(speech);

        }
    </script>
    </html>
<?php return ob_get_clean(); } ?>