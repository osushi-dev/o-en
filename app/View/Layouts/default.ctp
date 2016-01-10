<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

/*  === add css ===  */
$this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', null, array('inline' => false));
$this->Html->css('//fonts.googleapis.com/css?family=Gochi+Hand', null, array('inline' => false));
$this->Html->css('bootstrap.min', null, array('inline' => false));
$this->Html->css('base',          null, array('inline' => false));
$this->Html->css('star-rating.min', null, array('inline' => false));

/*  === add js ===  */
$this->Html->script('jquery.simple-sidebar.min.js', array('inline' => false));
$this->Html->script('base.js', array('inline' => false));
$this->Html->script('star-rating.min.js', array('inline' => false));

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php echo $this->Html->charset(); ?>
        <title>O-EN | <?php echo $page_title ?></title>
        <?php
            echo $this->Html->meta('icon');
            echo $this->fetch('meta');
            echo $this->fetch('css');
        ?>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    </head>

    <body>
        <header class="navbar navbar-fixed-top">
            <div class="container">
                <!-- <a href="#" id="toggle&#45;sidebar" class="sidebar&#45;buttonn"><span class="glyphicon glyphicon&#45;th&#45;list" aria&#45;hidden="true"></span></a> -->
                <?php if(strcmp(Router::url(), "/") !== 0){?>
                    <a href="#" id="toggle-sidebar" class=""><i class="fa fa-bars sidebar-button" aria-hidden="true"></i></a>
                <?php } ?>
                <div class="center">
                    <a class="navbar-brand brand" href="/dashboard">O-EN</a>
                </div>
            </div>
        </header>

        <div>
            <?php echo $this->Flash->render(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>

        <footer>
            <div style="text-align:center">
                <p class="muted credit">&copy; 2015
                    <?php if(date("Y")!=2015) echo date("-Y"); ?>
                        All rights reserved, Acht Geld
                </p>
            </div>
            <?php echo $this->element('sql_dump'); ?>
        </footer>
        <?php if(strcmp(Router::url(), "/") !== 0){?>
        <div id="sidebar">
            <div class="container-fluid" style="background-image: url('../img/user-back.jpg'); background-size:auto; background-position:center;">
                <img src="../img/user-sazae.jpg" class="img-thumbnail" alt="User-thumbnail" style="width:130px; -webkit-clip-path:circle(60px at center); margin-bottom:-25px">
                <h4 style="color:#eee;">サザエ さん</h4>
                <h4 style="color:#eee;">1,000,000 pt</h4>
            </div>
            <div class="list-group">
                <a href="/dashboard" class="list-group-item close-sidebar active">
                    <h4 class="list-group-item-heading"><i class="fa fa-tachometer"></i> マイページ</h4>
                </a>
                <a href="/point/payment" class="list-group-item close-sidebar">
                    <h4 class="list-group-item-heading"><i class="fa fa-camera-retro"></i> レシート送信</h4>
                </a>
                <a href="/asset" class="list-group-item close-sidebar">
                    <h4 class="list-group-item-heading"><i class="fa fa-wrench"></i> おうえんメーカー</h4>
                </a>
                <a href="/market" class="list-group-item close-sidebar">
                    <h4 class="list-group-item-heading"><i class="fa fa-gift"></i> もらいもの</h4>
                </a>
                <a href="/purchaseinfo" class="list-group-item close-sidebar">
                    <h4 class="list-group-item-heading"><i class="fa fa-history"></i> 買い物履歴</h4>
                </a>
                <!--
                <a href="/point/payment" class="list-group-item close-sidebar">
                    <h4 class="list-group-item-heading"><i class="fa fa-jpy"></i> OSUSHIポイント購入</h4>
                </a>
                -->
            </div>
        </div>
        <?php } ?>
        <?php echo $this->fetch('script');?>
    </body>
</html>
