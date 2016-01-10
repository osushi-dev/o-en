<?php
/*  === add css ===  */
$this->Html->css('pages/landing', null, array('inline' => false));

/*  === add js ===  */
$this->Html->script('pages/landing', array('inline' => false));

?>

<section class="landing-header">
    <div class="landing-header-inner center">
        <div class="container">
            <div class="row">
                <h1 class="brand" id="top-title">O-EN</h1>
                <p>企業を身近に。O-ENでお得に。</p>
            </div>
            <div class="row">
                <a class="btn btn-transparent btn-raised" href="dashboard/">
                    O-ENにログインする
                </a>
            </div>
        </div>
    </div>
</section>

<section class="landing-introduction">
    <div class="container">
        <div class="m-30 row center">
            <div class="col-sm-4">
                <i class="m-30 fa fa-camera-retro fa-4x"></i>
                <p>レシートを画像で撮って送るだけの簡単操作</p>
            </div>
            <div class="col-sm-4">
                <i class="m-30 fa fa-shopping-cart fa-4x"></i>
                <p>日々の買い物がよりお得に</p>
            </div>
            <div class="col-sm-4">
                <i class="m-30 fa fa-gift fa-4x"></i>
                <p>あなたが応援した企業からお返しがもらえるかも</p>
            </div>
        </div>
    </div>
</section>
