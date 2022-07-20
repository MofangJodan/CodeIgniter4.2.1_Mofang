<?php
$uri = service('uri');
$news_pagesinfo1= $uri->getSegment(2);
$AAA='https://api.mofang.com.tw/mofang_official_even.php?officialnoid=';
$url0_newsinfo1=$AAA.$news_pagesinfo1;
$json0_newsinfo1 = file_get_contents($url0_newsinfo1);
$json0_newsinfo1 = json_decode($json0_newsinfo1);
$OFFICIAL_NOID = $json0_newsinfo1 -> results -> OFFICIAL_NOID;
$OFFICIAL_TITLE = $json0_newsinfo1 -> results -> OFFICIAL_TITLE;
$OFFICIAL_IMG = $json0_newsinfo1 -> results -> OFFICIAL_IMG;
$OFFICIAL_CONTENT = $json0_newsinfo1 -> results -> OFFICIAL_CONTENT;
$OFFICIAL_DATE = $json0_newsinfo1 -> results -> OFFICIAL_DATE;
?>

<div class="row">
    <div class="col-sm-1" >
            <div class="row">
            </div>
    </div>
<div class="col-sm-10" >
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                <h1><?= esc($OFFICIAL_TITLE);?></h1>
                </div>
 
                <div class="card">
                    <?php print($OFFICIAL_CONTENT); ?>
                </div>
            </div>
        </div>
    </div>
</div>