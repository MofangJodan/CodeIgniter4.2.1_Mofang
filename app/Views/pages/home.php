  <!-- <h2>我是首頁</h2> -->
  <div class="row">
    <div class="col-sm-1">

    </div>

    <div class="col-sm-11">
      <div class="row">
      <!-- 左邊BANNER START -->
        <div class="col-sm-8">
          <div class="card">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">          
                  <div class="carousel-item active">
                  <?php $WEB_IN = $json0 -> results[0] -> WEB_IN;
                      if($WEB_IN == 'true'){
                        $BANNER_URL= $json0 -> results[0] -> BANNER_URL; 
                      }else{
                        $BANNER_URL= $json0 -> results[0] -> BANNER_URL;
                        $BANNER_URL.' target=_blank>';
                      }
                  ?>
                  <a href=<?= esc($BANNER_URL)?> >
                  <img src="<?php  print $BANNER_IMG = $json0 -> results[0] -> BANNER_IMG;?>"" class="d-block w-100" alt="...">
                      <p>                
                          <?php print $BANNER_TITLE = $json0 -> results[0] -> BANNER_TITLE;?>
                      </p>
                      </a>             
                  </div>          
                  <?php
                      for ($a=1;$a<5;$a++)
                      {
                        $WEB_IN = $json0 -> results[$a] -> WEB_IN;
                        $BANNER_TITLE = $json0 -> results[$a] -> BANNER_TITLE;
                        $BANNER_IMG = $json0 -> results[$a] -> BANNER_IMG;
                        $BANNER_URL= $json0 -> results[$a] -> BANNER_URL;
                  ?>
                        <div class=carousel-item>
                  <?php
                        if($WEB_IN == 'true'){
                            $BANNER_URL1= '<a href='.$BANNER_URL.' >';
                            $BANNER_IMGS= '<img src='.$BANNER_IMG.' class=d-block w-100>';
                        }else{    
                            $BANNER_URL1='<a href='.$BANNER_URL.' target=_blank>';
                            $BANNER_IMGS='<img src='.$BANNER_IMG.' class=d-block w-100>';
                        }
                  ?>
                  <a href=<?=  esc($BANNER_URL)?>><img src=<?= esc($BANNER_IMG)?> class="d-block w-100">
                        <p><?= esc($BANNER_TITLE) ?></a>
                  </div>
                  <?php
                      }
                      ?>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
            </div>
          </div>
        </div>
      <!-- 左邊BANNER END -->
      <!-- 右邊BANNER START -->
        <div class="col-sm-4">
          <div class="card">
              <div id="carouselExampleCaptionsR" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">          
                    <div class="carousel-item active">
                    <?php $WEB_IN = $json0_r -> results[0] -> WEB_IN;
                        if($WEB_IN == 'true'){
                          $PUSH_URL= $json0_r -> results[0] -> PUSH_URL; 
                        }else{
                          $PUSH_URL= $json0_r -> results[0] -> PUSH_URL;
                          $PUSH_URL.' target=_blank>';
                        }
                    ?>
                    <a href=<?= esc($PUSH_URL)?> >
                    <img src="<?php  print $PUSH_IMG = $json0_r -> results[0] -> PUSH_IMG;?>"" class="d-block w-100" alt="...">
                        <p>                
                            <?php print $PUSH_TITLE = $json0_r -> results[0] -> PUSH_TITLE;?>
                        </p>
                        </a>             
                    </div>          
                    <?php
                        for ($aa=1;$aa<5;$aa++)
                        {
                          $WEB_IN = $json0_r -> results[$aa] -> WEB_IN;
                          $PUSH_TITLE = $json0_r -> results[$aa] -> PUSH_TITLE;
                          $PUSH_IMG = $json0_r -> results[$aa] -> PUSH_IMG;
                          $PUSH_URL= $json0_r -> results[$aa] -> PUSH_URL;
                    ?>
                          <div class=carousel-item>
                    <?php
                          if($WEB_IN == 'true'){
                              $PUSH_URL1= '<a href='.$PUSH_URL.' >';
                              $PUSH_IMGS= '<img src='.$PUSH_IMG.' class=d-block w-100>';
                          }else{    
                              $PUSH_URL1='<a href='.$PUSH_URL.' target=_blank>';
                              $PUSH_IMGS='<img src='.$PUSH_IMG.' class=d-block w-100>';
                          }
                    ?>
                    <a href=<?=  esc($PUSH_URL)?>><img src=<?= esc($PUSH_IMG)?> class="d-block w-100">
                          <p><?= esc($PUSH_TITLE) ?></a>
                    </div>
                    <?php
                        }
                        ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptionsR" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptionsR" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </button>
              </div>
            </div>            
        </div>
      <!-- 右邊BANNER END -->
      </div>

      <div class="col-sm-11">
        <div class="row">
            <b>最近更新</b>
        </div>
      </div>

      <div class="col-sm-11">
        <div class="row">
          <?php
            for ($aaa=0;$aaa<9;$aaa++)
            {
              $GAME_ID = $json0_r00 -> results[$aaa] -> GAME_ID;
              $GAME_NAME = $json0_r00 -> results[$aaa] -> GAME_NAME;
              $GAME_IMG =  $json0_r00 -> results[$aaa] -> GAME_IMG;
              $NEWS_DATE = $json0_r00 -> results[$aaa] -> NEWS_DATE;
          ?>
            <div class="col-sm-4">
              <div class="card">
                <div id="carouselExampleCaptionsR0" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">          
                      <div class="carousel-item active" align=center>
                        <?php print('<a href=gameinfo/'.$GAME_ID.' >');?>
                        <?php print('<img src='.$GAME_IMG.'  width=100% height=100%>');?>
                        <?php print($GAME_NAME)?></a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
      </div>




    </div>

  </div>


