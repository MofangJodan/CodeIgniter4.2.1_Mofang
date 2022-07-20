<p>
<?php
    $uri = service('uri');
    $news_pagesinfo= $uri->getSegment(2);
    $AA='https://api.mofang.com.tw/mofang_news.php?mofangnews=';
    if($news_pagesinfo != '')
    {
        
    $url0_newsinfo=$AA.$news_pagesinfo;
    $json0_newsinfo = file_get_contents($url0_newsinfo);
    $json0_newsinfo = json_decode($json0_newsinfo);
    $MOFANGNEWSID = $json0_newsinfo -> results[0] -> MOFANGNEWSID;
    $MOFANGNEWSTITLE = $json0_newsinfo -> results[0] -> MOFANGNEWSTITLE;
    $MOFANGIMG = $json0_newsinfo -> results[0] -> MOFANGIMG;
    $MOFANGCONNET = $json0_newsinfo -> results[0] -> MOFANGCONNET;
    $GAME_ID =  $json0_newsinfo -> GAME_INFO[0] -> GAME_ID;
    $GAME_NAME =  $json0_newsinfo -> GAME_INFO[0] -> GAME_NAME;
    $GAME_IMG =  $json0_newsinfo -> GAME_INFO[0] -> GAME_IMG;
    $IOS_PLATFORM =  $json0_newsinfo -> GAME_INFO[0] -> IOS_PLATFORM;
    $ANDROID_PLATFORM =  $json0_newsinfo -> GAME_INFO[0] -> ANDROID_PLATFORM;

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
                    <h3><?= esc($MOFANGNEWSTITLE);?></h3>
                    </div>

                    <div class="card">
                        <?php print($MOFANGCONNET); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-1" >
                <div class="row">
                    <a href= ../gameinfo/<?php print($GAME_ID);?> >
                    <img src = <?php print($GAME_IMG);?> width="100%" >
                    <b><?php print($GAME_NAME);?></b></a>
                </div>
        </div>

</div>
<?php

}else{

}
?>