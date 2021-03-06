<?php
/*  === add css ===  */
$this->Html->css('components/slick', array('inline' => false));
$this->Html->css('pages/dashboard', array('inline' => false));

/*  === add js ===  */
$this->Html->script('slick.min', array('inline' => false));
$this->Html->script('components/slick', array('inline' => false));
$this->Html->script('pages/dashboard', array('inline' => false));
?>

<div class="mt-20 container-fluid main-component">
    <div class="row">
        <div align="center" style="background-image: url('../img/user-back-cute.png'); background-size:auto; background-position:center;">
          <div class="css-box-shadow">
            <img id="user-icon" src="../img/user-sazae.jpg" class="img-thumbnail" alt="User-thumbnail">
          </div>
          <h4 id="user-name">サザエ さん</h4>
        </div>
    </div>

    <div class="row">
        <h4 class="headline">保有ポイント<a href="/listoenmaker" class="header_more_info">もっと見る...</a></h4>
        <div class="list-group">
          <a href="https://www.asahibeer.co.jp/park/" class="list-group-item list-group-item-logolist" target="_blank">
            <img src="../img/maker/logo_asahipark.png" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">アサヒビール</h4>
            <div class="logolist-item-logo-point">
                <span class="logolist-item-logo-point-number">2,400</span> ポイント
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-logolist">
            <img src="../img/maker/logo_suntorytown.png" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">サントリー</h4>
            <div class="logolist-item-logo-point">
                <span class="logolist-item-logo-point-number">1,200</span> ポイント
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-logolist">
            <img src="../img/maker/logo_cocacolapark.png" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">コカ・コーラ</h4>
            <div class="logolist-item-logo-point">
                <span class="logolist-item-logo-point-number">900</span> ポイント
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-logolist">
            <img src="../img/maker/logo_watashiplus.gif" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">資生堂</h4>
            <div class="logolist-item-logo-point">
                <span class="logolist-item-logo-point-number">200</span> ポイント
            </div>
          </a>
      </div>
    </div>

    <div class="row pb-20">
        <h4 class="headline">お得なお知らせ<a href="/listgift" class="header_more_info">もっと見る...</a></h4>
        <div class="list-group">
          <a href="https://www.asahibeer.co.jp/park/" class="list-group-item list-group-item-logolist" target="_blank">
            <img src="../img/maker/logo_asahipark.png" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">アサヒビール</h4>
            <div class="logolist-item-logo-point">
                <span class="logolist-item-logo-point-number">2,400</span> ポイント
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-logolist">
            <img src="../img/maker/logo_suntorytown.png" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">サントリー</h4>
            <div class="logolist-item-logo-point">
                <span class="logolist-item-logo-point-number">1,200</span> ポイント
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-logolist">
            <img src="../img/maker/logo_cocacolapark.png" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">コカ・コーラ</h4>
            <div class="logolist-item-logo-point">
                <span class="logolist-item-logo-point-number">900</span> ポイント
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-logolist">
            <img src="../img/maker/logo_watashiplus.gif" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">資生堂</h4>
            <div class="logolist-item-logo-point">
                <span class="logolist-item-logo-point-number">200</span> ポイント
            </div>
          </a>
      </div>
    </div>
</div>
