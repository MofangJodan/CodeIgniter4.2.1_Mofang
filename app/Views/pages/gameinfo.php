<?php
$uri = service('uri');
$game_pagesinfo1= $uri->getSegment(2);
$AAA1='https://api.mofang.com.tw/gameinfo.php?userid&gameid=';
$url0_gameinfo1=$AAA1.$game_pagesinfo1;
$json0_gameinfo1 = file_get_contents($url0_gameinfo1);
$json0_gameinfo1 = json_decode($json0_gameinfo1);
$GAME_NAME = $json0_gameinfo1 -> results -> GAME_NAME;
$GAME_INFO = $json0_gameinfo1 -> results -> GAME_INFO;
$LOGO = $json0_gameinfo1 -> results -> LOGO;
$PIC0 = $json0_gameinfo1 -> results -> PIC0;
$PIC1 = $json0_gameinfo1 -> results -> PIC1;
$PIC2 = $json0_gameinfo1 -> results -> PIC2;
$PIC3 = $json0_gameinfo1 -> results -> PIC3;
$PIC4 = $json0_gameinfo1 -> results -> PIC4;
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
                <?php print($GAME_NAME);?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src= <?php print($PIC0);?> width=100%>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src= <?php print($PIC1);?> width=100%>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src= <?php print($PIC2);?> width=100%>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src= <?php print($PIC3);?> width=100%>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src= <?php print($PIC4);?> width=100%>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">                
                <?php print($GAME_INFO);?>
                    <a href=<?php print($Officialwebsite); ?>><b>官網</b></a>
            </div>
        </div>
    </div>
</div>