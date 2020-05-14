<?php
    include 'flashcards.php';
    include 'header.php';
    include_once '../access.php';
    include 'review.php';

?>
<!DOCTYPE html>

  <?php echo head("Module 4")?>

    <header class="bg-primary text-white">
        <div class="container text-center">
            <h1>System of Government</h1>
        </div>
    </header>
    <?php echo cards(4, $conn)?>

<section id="Review" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3>Review</h3>
                <p>Mouse over the English to view Chinese translations. (将鼠标悬停在英语上可以查看中文翻译。) </p>
            </div>
            <div class="col-lg-8 mx-auto">

                <h5 data-toggle="tooltip" title="立法部门/国会" class="dots">Legislative Branch / Congress</h5>
            </br>
            <audio
            controls
            src="audio/leg - ch4.mp3">
            </audio>
        </br>

                <a data-toggle="tooltip" title="国会制定联邦法律。" class="dots">Congress makes federal laws.</a>
                <a data-toggle="tooltip" title="国会由参议院和众议院组成。" class="dots">Congress is composed of the Senate and the House of Representatives.</a>
                <a data-toggle="tooltip" title="参议院有100名成员，我们每6年选举一次参议员。" class="dots">The Senate has 100 members, we elect Senators every 6 years.</a>
                <a data-toggle="tooltip" title="参议员代表该州的所有人。" class="dots">Senators represent all people in the state.</a>
                <a data-toggle="tooltip" title="马萨诸塞州的两位参议员是埃德·马基和伊丽莎白·沃伦。" class="dots">The two Senators of Massachusetts are Ed Markey and Elizabeth Warren.</a>
                <a data-toggle="tooltip" title="众议院有435名投票委员。 每个州都有不同数量的代表。" class="dots">The House of Representatives has 435 voting members. Each state has a different number of representatives.</a>
                <a data-toggle="tooltip" title="人多的州的代表也更多。" class="dots">States with more people have more representatives.</a>
                <a data-toggle="tooltip" title="我们每两年选举一次代表。" class="dots">We elect Representatives every 2 years.</a>
                <a data-toggle="tooltip" title="马萨诸塞州的代表包括 Richard Neal，Jim McGovern，Lori Trahan，Joe Kennedy III，Katherine Clark，Seth Moulton，Ayanna Pressley，Stephen Lynch 和 Bill Keating。" class="dots">Representatives in Massachusetts include Richard Neal, Jim McGovern, Lori Trahan, Joe Kennedy III, Katherine Clark, Seth Moulton, Ayanna Pressley, Stephen Lynch, and Bill Keating.</a>



                </br>
                </br>

                <h5 data-toggle="tooltip" title="行政部门/总裁" class="dots">Executive Branch / President</h5>
            </br>
            <audio
            controls
            src="audio/exe ch4.mp3">
            </audio>
        </br>

                <a data-toggle="tooltip" title="总统负责行政部门。" class="dots">The President is in charge of the executive branch.</a>
                <a data-toggle="tooltip" title="我们选举总统四年，我们总是在11月投票。" class="dots">We elect a President for 4 years, and we always vote in November.</a>
                <a data-toggle="tooltip" title="如果总统不能再任职，则副总统将成为总统。" class="dots">If the President can no longer serve, the Vice President becomes President.</a>
                <a data-toggle="tooltip" title="如果副总统也不能再任职，众议院议长将成为总统。" class="dots">If the Vice President can also no longer serve, the Speaker of the House becomes President.</a>
                <a data-toggle="tooltip" title="总统拥有多种权力：总统是军队总司令，有权否决，并有权将法案签署为法律。" class="dots">The President has many powers: the president is the Commander in Chief of the military, has the power to veto, and has the power to sign bills into law.</a>
                <a data-toggle="tooltip" title="总统设有内阁，向总统提供建议。" class="dots">The President has a Cabinet that advises the President.</a>
                <a data-toggle="tooltip" title="内阁级别的职位很多，包括：农业部长，商务部长，国防部长，教育部长，能源部长，卫生和人类服务部长，国土安全部长，住房和城市发展部长，秘书 内政部，劳工部长，国务卿，交通运输部长，财政部长，退伍军人事务部长，总检察长和副总统。" class="dots">There are many Cabinet-level positions that include: Secretary of Agriculture, Secretary of Commerce, Secretary of Defense, Secretary of Education, Secretary of Energy, Secretary of Health and Human Services, Secretary of Homeland Security, Secretary of Housing and Urban Development, Secretary of the Interior, Secretary of Labor, Secretary of State, Secretary of Transportation, Secretary of the Treasury, Secretary of Veterans Affairs, Attorney General, and Vice President.</a>


                </br>
                </br>

                <h5 data-toggle="tooltip" title="司法部门/法院" class="dots">Judicial Branch / The Courts</h5>
            </br>
            <audio
            controls
            src="audio/judicial - ch4.mp3">
            </audio>
        </br>

                <a data-toggle="tooltip" title="司法部门审查法律。" class="dots">The judicial branch reviews laws.</a>
                <a data-toggle="tooltip" title="美国最高法院是最高法院，有9名法官。" class="dots">The highest court in the US is the Supreme Court, which has 9 justices. </a>
                <a data-toggle="tooltip" title="最高法院的首席法官是约翰·罗伯茨。" class="dots">The Chief Justice of the Supreme Court is John Roberts.</a>
                </br>
                </br>

                <h5 data-toggle="tooltip" title="司法部门/法院" class="dots">The System</h5>
            </br>
            <audio
            controls
            src="audio/the sys - ch4.mp3">
            </audio>
        </br>

                <a data-toggle="tooltip" title="美国政府有三个分支机构。" class="dots">There are three branches of the US government.</a>
                <a data-toggle="tooltip" title="三者能够相互核对并创造平衡。" class="dots">The three are able to check each other and create a balance.</a>
                <a data-toggle="tooltip" title="这种“制衡”阻止了一个政府部门变得过于强大。" class="dots">This "checks and balances" stops one branch of government from becoming too powerful.</a>
                <a data-toggle="tooltip" title="一些权力属于联邦政府：印钞，宣战，组建军队，缔结条约" class="dots">Some powers belong to the federal government: to print money, to declare war, to create an army, to make treaties</a>
                <a data-toggle="tooltip" title="一些权力属于各州：提供教育和教育，提供保护，提供安全，颁发驾驶执照，批准分区和土地使用" class="dots">Some powers belong to the states: provide schooling and education, provide protection, provide safety, give a driver's license, approve zoning and land use</a>
                <a data-toggle="tooltip" title="两个主要政党是民主党和共和党。" class="dots">The two major political parties are Democratic and Republican.</a>

            </div>


        </div>
    </div>
    </div>
    </div>
</section>
<?php echo foot()?>
</html>