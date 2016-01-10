<?php
/*  === add css ===  */
$this->Html->css('components/slick', array('inline' => false));
$this->Html->css('pages/dashboard', array('inline' => false));

/*  === add js ===  */
$this->Html->script('slick.min', array('inline' => false));
$this->Html->script('components/slick', array('inline' => false));
$this->Html->script('pages/dashboard', array('inline' => false));
?>

<script type="text/javascript" src="//code.highcharts.com/highcharts.js"></script>
<script type="text/javascript" src="//code.highcharts.com/modules/data.js"></script>
<script type="text/javascript" src="//code.highcharts.com/modules/drilldown.js"></script>
<script type="text/javascript">
    $(function () {
        $('#capital_holdings').highcharts(<?php echo $capital_holdings ?>);
    });
</script>

<div class="mt-20 container-fluid main-component">

    <div class="row" style="background-image: url('../img/user-back.jpg'); background-size:auto; background-position:center;">
        <div align="center">
            <img src="../img/user-sazae.jpg" class="img-thumbnail" alt="User-thumbnail" style="width:130px; -webkit-clip-path:circle(60px at center); margin-bottom:-25px">
            <h4 style="color:#eee;">サザエ さん</h4>
            <h4 style="color:#eee;">1,000,000 pt</h4>
        </div>
    </div>

    <div class="row">
        <h4 class="headline">おうえんメーカー</h4>
        <table class="table">
            <tbody>
                <tr>
                    <td>金</td>
                    <td>あああ</td>
                </tr>
                <tr>
                    <td>銀</td>
                    <td>あああ</td>
                </tr>
                <tr>
                    <td>銅</td>
                    <td>あああ</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row pb-20">
        <h4 class="headline">もらいもの</h4>
        <div class="mb-10 carousel">
            <div class="recommend-item" style="background-image:url('http://livedoor.blogimg.jp/ftmember/imgs/7/b/7bf3fde8.jpg')">
                <div class="overlay"></div>
                <p class="recommend-item-brand">MEGMILK</p>
                <p class="recommend-item-name">牛乳</p>
                <p class="recommend-item-price">200 pt</p>
            </div>
            <div class="recommend-item" style="background-image:url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcToga8O-LF_M9Rg2ttr9aWL7_7q_aEUdKqHoukCp4Cz7RTXg2k-jg')">
                <div class="overlay"></div>
                <div class="ribbon ribbon-orange"><span>オススメ！</span></div>
                <p class="recommend-item-brand">日清食品</p>
                <p class="recommend-item-name">ラ王</p>
                <p class="recommend-item-price">150pt</p>
            </div>
            <div class="recommend-item" style="background-image:url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSvS1f7Rrgc3jJxYryoUFYhUsxX8ewmpk6XWvD1neVUi02pmzpV')">
                <div class="overlay"></div>
                <p class="recommend-item-brand">アサヒ</p>
                <p class="recommend-item-name">スーパードライ</p>
                <p class="recommend-item-price">800pt</p>
            </div>
            <div class="recommend-item" style="background-image:url('http://www.banbix.com/assets_c/2012/03/w_elleair12r8-thumb-260x300-711.jpg')">
                <div class="overlay"></div>
                <p class="recommend-item-brand">大王製紙</p>
                <p class="recommend-item-name">エリエール</p>
                <p class="recommend-item-price">300pt</p>
            </div>
        </div>
    </div>

<!--
    <div class="row" style="overflow:hidden;">
        <h4 class="headline">もうすぐ１株！</h4>
				<?php
					$count = 0;
					if( $compinfos['0']['Assets']['num'] < 1.0  ) $count++;
					if( $compinfos['1']['Assets']['num'] < 1.0  ) $count++;
					if( $compinfos['2']['Assets']['num'] < 1.0  ) $count++;
					switch($count){
						case 1:
							$colsep = 12;
							break;
						case 2:
							$colsep = 6;
							break;
						case 3:
							$colsep = 4;
							break;
						default:
							$colsep = 4;
							break;
					}
					if( $compinfos['0']['Assets']['num'] < 1.0  ){
				?>
        <div class="bonus col-sm-<?php echo $colsep ?>">
            <p>
                <?php echo $compinfos['0']['Issuelist']['name'] ?><br>
								<span class="attention">
								<?php echo $compinfos['0']['Items']['name'] ?><br>
								あと<?php echo ceil((1.0 - $compinfos['0']['Assets']['num']) * $compinfos['0']['Issuelist']['stockprice'] / ($compinfos['0']['Compinfos']['flagshipprice'] * $compinfos['0']['Compinfos']['interestrate'])) ?>パックで1株</span>
            </p>
            <div class="bonus-meter">
						<?php for($i=1; $i<=10; $i++) { ?>
                <i class="fa fa-beer <?php if( $i <= intval($compinfos['0']['Assets']['num'] * 10) ) echo 'active'; ?>"></i>
						<?php
							if( $i==5 ) echo '<br>';
							}
						?>
            </div>
        </div>
				<?php
					}
					if( $compinfos['1']['Assets']['num'] < 1.0  ){
				?>
        <div class="bonus col-sm-<?php echo $colsep ?>">
            <p>
                <?php echo $compinfos['1']['Issuelist']['name'] ?><br>
								<span class="attention">
								<?php echo $compinfos['1']['Items']['name'] ?><br>
								あと<?php echo ceil((1.0 - $compinfos['1']['Assets']['num']) * $compinfos['1']['Issuelist']['stockprice'] / ($compinfos['1']['Compinfos']['flagshipprice'] * $compinfos['1']['Compinfos']['interestrate'])) ?>ロールで1株</span>
            </p>
            <div class="bonus-meter">
						<?php for($i=1; $i<=10; $i++) { ?>
                <i class="fa fa-beer <?php if( $i <= intval($compinfos['1']['Assets']['num'] * 10) ) echo 'active'; ?>"></i>
						<?php
							if( $i==5 ) echo '<br>';
							}
						?>
            </div>
        </div>
				<?php
					}
					if( $compinfos['2']['Assets']['num'] < 1.0  ){
				?>
        <div class="bonus col-sm-<?php echo $colsep ?>">
            <p>
                <?php echo $compinfos['2']['Issuelist']['name'] ?><br>
								<span class="attention">
								<?php echo $compinfos['2']['Items']['name'] ?><br>
								あと<?php echo ceil((1.0 - $compinfos['2']['Assets']['num']) * $compinfos['2']['Issuelist']['stockprice'] / ($compinfos['2']['Compinfos']['flagshipprice'] * $compinfos['2']['Compinfos']['interestrate'])) ?>缶で1株</span>
            </p>
            <div class="bonus-meter">
						<?php for($i=1; $i<=10; $i++) { ?>
                <i class="fa fa-beer <?php if( $i <= intval($compinfos['2']['Assets']['num'] * 10) ) echo 'active'; ?>"></i>
						<?php
							if( $i==5 ) echo '<br>';
							}
						?>
            </div>
        </div>
				<?php } ?>
    </div>
-->
<!--
    <div class="row">
        <h4 class="headline"><a href="/asset">保有銘柄一覧</a></h4>
        <div class="col-sm-6">
            <div id="capital_holdings" style="width:100%; height:400px;"></div>
        </div>
        <div class="col-sm-6">
            <table class="table">
                <?php echo $this->Html->tableHeaders(array('銘柄名', '所有株数', '前日比')) . PHP_EOL; ?>
                <?php echo $this->Html->tableCells($asset_list) . PHP_EOL; ?>
            </table>
        </div>
    </div>
-->
</div>
