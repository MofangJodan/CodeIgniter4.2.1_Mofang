<div class="row">
    <div class="col-sm-1">

    </div>
    <div class="col-sm-10">
        <div class="row">
            <h3>iOS遊戲 - 發售日期 </h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-1">

    </div>
    <div class="col-sm-11">
        <div class="row">
        <?php $A='0';
            for($A;$A<24;$A++)
            {
        ?>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <?php
                            $GAME_ID = $json0_iOS_release -> results[$A] -> GAME_ID;
                            $GAME_NAME = $json0_iOS_release -> results[$A] -> GAME_NAME;
                            $GAME_RELEASE_DATE = $json0_iOS_release -> results[$A] -> GAME_RELEASE_DATE;
                            $GAME_IMG = $json0_iOS_release -> results[$A] -> GAME_IMG;
                            $LABLE = $json0_iOS_release -> results[$A] -> LABLE;
                            $IOS_PLATFORM = $json0_iOS_release -> results[$A] -> IOS_PLATFORM;
                            $ANDROID_PLATFORM = $json0_iOS_release -> results[$A] -> ANDROID_PLATFORM;
                            print('<a href=../gameinfo/'.$GAME_ID.' >');
                            print('<img src='.$GAME_IMG.' width = "100%">');
                            print('<br><h5>'.$GAME_NAME.'</h5>');
                            print('</a>');
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>

</div>