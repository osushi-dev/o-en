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

/*  === add js ===  */
$this->Html->script('jquery.simple-sidebar.min.js', array('inline' => false));

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php echo $this->Html->charset(); ?>
        <title>OSUSHI |<?php echo $page_title ?></title>
        <?php
            echo $this->Html->meta('icon');
            echo $this->fetch('meta');
            echo $this->fetch('css');
        ?>
    </head>

    <body>
        <header class="navbar navbar-fixed-top">
            <div class="container">
                <a href="#" id="toggle-sidebar" class="btn btn-default sidebar-button icon"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a>
                <div class="center">
                    <a class="navbar-brand brand" href="/">OSUSHI</a>
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
                        All rights reserved, Acht Geld＠NRI Hackathon 2015.10
                </p>
            </div>
            <?php echo $this->element('sql_dump'); ?>
        </footer>
        <div id="sidebar" style="background-color:gray">
            <div class="container-fluid" style="background-image: url('http://chatnoir666.com/wp-content/uploads/2015/03/knuttz-ueba-305111.jpg'); background-size:auto;">
                <br>
                <img src="http://chatnoir666.com/wp-content/uploads/2015/03/knuttz-ueba-305111.jpg" class="img-thumbnail" alt="Cinque Terre" style="width:80px">
                <br>
                <h4 style="color:#eee;">thiroyoshi</h4>
                <h5 style="color:#eee;">thiroyoshi@gmail.com</h5>
            </div>
            <br>
            <div class="list-group">
                <a href="#" class="list-group-item close-sidebar">
                    <h4 class="list-group-item-heading">Tile with a label</h4>
                </a>
                <a href="#" class="list-group-item close-sidebar">
                    <h4 class="list-group-item-heading">Tile with a label</h4>
                </a>
                <hr>
                <a href="#" class="list-group-item close-sidebar">
                    <h4 class="list-group-item-heading">Tile with a label</h4>
                </a>
                <a href="#" class="list-group-item close-sidebar">
                    <h4 class="list-group-item-heading">Tile with a label</h4>
                </a>
                <a href="#" class="list-group-item close-sidebar">
                    <h4 class="list-group-item-heading">Tile with a label</h4>
                </a>

            </div>
        </div>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <?php echo $this->fetch('script');?>
    </body>
</html>
