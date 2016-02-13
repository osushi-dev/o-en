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
$this->Html->css('o-en', null, array('inline' => false));

/*  === add js ===  */
$this->Html->script('jquery.simple-sidebar.min.js', array('inline' => false));
$this->Html->script('base.js', array('inline' => false));
$this->Html->script('star-rating.min.js', array('inline' => false));
$this->Html->script('o-en.js', array('inline' => false));

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Allow web app to be run in full-screen mode. -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Make the app title different than the page title. -->
    <meta name="apple-mobile-web-app-title" content="O-EN">

    <!-- Configure the status bar. -->
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- Disable automatic phone number detection. -->
    <meta name="format-detection" content="telephone=no">

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
        <div>
            <?php echo $this->Flash->render(); ?>
            <?php echo $this->fetch('content'); ?>
            <?php if(strcmp(Router::url(), "/") !== 0){?>
                <div id="space-for-tabbar-background"></div>
            <?php }?>
        </div>

        <?php if(strcmp(Router::url(), "/") !== 0){?>
        <footer id="bottom-tabbar">
            <ul class="table-ul">
                <li>
                    <a href="/dashboard"><i class="fa fa-tachometer"></i><br>マイページ</a>
                </li>
                <li>
                    <a href="/uploader"><i class="fa fa-camera-retro"></i><br>レシート送信</a>
                </li>
                <li>
                    <a href="/listoenmaker"><i class="fa fa-wrench"></i><br>応援メーカー</a>
                </li>
                <li>
                    <a href="/listgift"><i class="fa fa-gift"></i><br>もらいもの</a>
                </li>
                <li>
                    <a href="/uploadhistory"><i class="fa fa-history"></i><br>利用履歴</a>
                </li>
            </ul>
        </footer>
        <?php }else{ ?>
        <footer>
            <div style="text-align:center">
                <p class="muted credit">&copy; 2015
                    <?php if(date("Y")!=2015) echo date("-Y"); ?>
                        All rights reserved, Acht Geld
                </p>
            </div>
        </footer>
        <?php } ?>
        <?php echo $this->fetch('script');?>
    </body>
</html>
