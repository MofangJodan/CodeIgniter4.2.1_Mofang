<?php
$uri = service('uri');
$game_pagesinfo1= $uri->getSegment(2);
$AAA1='https://api.mofang.com.tw/gameinfo.php?userid&gameid=';
$url0_gameinfo1=$AAA1.$game_pagesinfo1;
$json0_gameinfo1 = file_get_contents($url0_gameinfo1);
$json0_gameinfo1 = json_decode($json0_gameinfo1);
$LOGO = $json0_gameinfo1 -> results -> LOGO;

$GAME_NAME = $json0_gameinfo1 -> results -> GAME_NAME;
$GAME_INFO = $json0_gameinfo1 -> results -> GAME_INFO;
$LOGO = $json0_gameinfo1 -> results -> LOGO;
$Video = $json0_gameinfo1 -> results -> Video;
$PIC0 = $json0_gameinfo1 -> results -> PIC0;
$PIC1 = $json0_gameinfo1 -> results -> PIC1;
$PIC2 = $json0_gameinfo1 -> results -> PIC2;
$PIC3 = $json0_gameinfo1 -> results -> PIC3;
$PIC4 = $json0_gameinfo1 -> results -> PIC4;
$PIC5 = $json0_gameinfo1 -> results -> PIC5;
$Develope = $json0_gameinfo1 -> results -> Develope;
$GAME_RELEASE_DATE = $json0_gameinfo1 -> results -> GAME_RELEASE_DATE;
$IOS_Pay = $json0_gameinfo1 -> results -> IOS_Pay;
$IOS_game_url = $json0_gameinfo1 -> results -> IOS_game_url;
$Android_game_url = $json0_gameinfo1 -> results -> Android_game_url;
$Officialwebsite = $json0_gameinfo1 -> results -> Officialwebsite;
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
                        <img src= <?php print($LOGO);?> width="20%">
                    <b><?php print($GAME_NAME);?></b>
                    </div>
                </div>
        </div>
            <div class="row">
                <?php if($Video != ''){ ?>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src= <?php print($Video);?> width=100%>
                        </div>
                    </div>
                </div>
                <?php }?>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src= <?php print($PIC0);?> width=100%>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src= <?php print($PIC1);?> width=100%>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src= <?php print($PIC2);?> width=100%>
                        </div>
                    </div>
                </div>
                <?php if ($PIC3 !=''){?>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src= <?php print($PIC3);?> width=100%>
                        </div>
                    </div>
                </div>
                <?php }else{} ?>
<?php if ($PIC4 !=''){?>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src= <?php print($PIC4);?> width=100%>
                        </div>
                    </div>
                </div>
<?php }else{} ?>
<?php if ($PIC5 !=''){?>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <img src= <?php print($PIC5);?> width=100%>
                        </div>
                    </div>
                </div>
<?php }else{} ?>
            </div>

            <div class="row">
                <div class="col-sm-12">                
                    <?php print($GAME_INFO);?>
                    <?php if($Officialwebsite != ''){?>
                        <a href=<?php print($Officialwebsite); ?>><b>官網</b></a>
                        <?php } else{} ?>
                </div>
            </div>
<!-- 遊戲相關新聞 -->
<h2>遊戲相關新聞 </h2>
<div class="row">
<?php
$About_Game_news="https://api.mofang.com.tw/about_game_news.php?gameid=";
$ABGN=$About_Game_news.$game_pagesinfo1;
$json0_gameallnews1 = file_get_contents($ABGN);
$json0_gameallnews1 = json_decode($json0_gameallnews1);
for ($cc=0;$cc<5;$cc++)
{
$MOFANGNAME = $json0_gameallnews1 -> MOFANGNEWS[$cc] -> MOFANGNAME;
$MOFANGNEWSID = $json0_gameallnews1 -> MOFANGNEWS[$cc] -> MOFANGNEWSID;
$MOFANGNEWSTITLE = $json0_gameallnews1 -> MOFANGNEWS[$cc] -> MOFANGNEWSTITLE;
$MOFANGNEWSURL = $json0_gameallnews1 -> MOFANGNEWS[$cc] -> MOFANGNEWSURL;
$MOFANGIMG = $json0_gameallnews1 -> MOFANGNEWS[$cc] -> MOFANGIMG;
$MOFANGNEWSDATE = $json0_gameallnews1 -> MOFANGNEWS[$cc] -> MOFANGNEWSDATE;
$MOFANGNEWSINFO = $json0_gameallnews1 -> MOFANGNEWS[$cc] -> MOFANGNEWSINFO;
?>

            <!-- <div class="row"> -->
                <?php if($MOFANGIMG !=''){?>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <a href= ../news/<?php print($MOFANGNEWSID);?>>
                            <img src= <?php print($MOFANGIMG);?> width=100%>
                            <br>
                            <?php print($MOFANGNEWSINFO);?></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>
            </div>

<!-- 遊戲相關新聞 -->

    </div>

</div>