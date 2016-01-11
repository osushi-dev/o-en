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

<style>
    .list-group-item-logolist{
        height:80px;
        position:relative;
    }
    .logolist-item-logo-img{
        position:absolute;
        top:10px;
        left:8px;
        width:60px;
        height:60px;
        border: 0px;
        border-radius: 10px;
    }
    .logolist-item-logo-name{
        position:absolute;
        top:0px;
        left:80px;
    }
    .logolist-item-logo-level{
        position:absolute;
        top:40px;
        left:80px;
    }
    .logolist-item-logo-rank{
        position:absolute;
        top:5px;
        left:275px;
        font-size: 30px;
    }
    .logolist-item-logo-rank-number{
        font-size: 50px;
    }
    .logolist-item-logo-arrow{
        position:absolute;
        top:18px;
        left:230px;
    }
    .fa-arrow-up{
        color:GREEN;
    }
    .fa-arrow-down{
        color:RED;
    }
    .logo-level-level1{
        color:#FFCDD6;
    }
    .logo-level-level2{
        color:#F990A2;
    }
    .logo-level-level3{
        color:#FB5874;
    }
    .logo-level-level4{
        color:#FD143D;
    }
    .logo-level-empty{
        color:lightgray;
    }
    .headline a{
        font-size: 12px;
        float:right;
        padding-top: 10px;
    }
</style>


<div class="mt-20 container-fluid main-component">

    <div class="row" style="background-image: url('../img/user-back.jpg'); background-size:auto; background-position:center;">
        <div align="center">
            <img src="../img/user-sazae.jpg" class="img-thumbnail" alt="User-thumbnail" style="width:130px; -webkit-clip-path:circle(60px at center); margin-bottom:-25px">
            <h4 style="color:#eee;">サザエ さん</h4>
            <h4 style="color:#eee;">1,000,000 pt</h4>
        </div>
    </div>

    <div class="row">
        <h4 class="headline">おうえんメーカー<a href="/listoenmaker">もっと見る...</a></h4>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-logolist">
            <img src="http://lineofficial.blogimg.jp/ja/imgs/c/a/caedbf69.jpg" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">コカ・コーラ</h4>
            <div class="logolist-item-logo-level">
                <i class="fa fa-heart fa-2x logo-level-level1"></i>
                <i class="fa fa-heart fa-2x logo-level-level2"></i>
                <i class="fa fa-heart fa-2x logo-level-level3"></i>
                <i class="fa fa-heart fa-2x logo-level-level4"></i>
            </div>
            <div class="logolist-item-logo-arrow">
                    <i class="fa fa-arrow-up fa-3x" ></i>
            </div>
            <div class="logolist-item-logo-rank">
                <span class="logolist-item-logo-rank-number">31</span>位
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-logolist">
            <img src="http://www.cnyes.com/globalinvest/images/pics/B_200x150/JP-4911.jpg" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">資生堂</h4>
            <div class="logolist-item-logo-level">
                <i class="fa fa-heart fa-2x logo-level-level1"></i>
                <i class="fa fa-heart fa-2x logo-level-level2"></i>
                <i class="fa fa-heart fa-2x logo-level-level3"></i>
                <i class="fa fa-heart fa-2x logo-level-empty"></i>
            </div>
            <div class="logolist-item-logo-arrow">
                    <i class="fa fa-arrow-up fa-3x" ></i>
            </div>
            <div class="logolist-item-logo-rank">
                <span class="logolist-item-logo-rank-number">25</span>位
            </div>
          </a>
          <a href="#" class="list-group-item list-group-item-logolist">
            <img src="http://www.suntory.co.jp/img/socialthumb.gif" class="logolist-item-logo-img" />
            <h4 class="logolist-item-logo-name">サントリー</h4>
            <div class="logolist-item-logo-level">
                <i class="fa fa-heart fa-2x logo-level-level1"></i>
                <i class="fa fa-heart fa-2x logo-level-level2"></i>
                <i class="fa fa-heart fa-2x logo-level-empty"></i>
                <i class="fa fa-heart fa-2x logo-level-empty"></i>
            </div>
            <div class="logolist-item-logo-arrow">
                    <i class="fa fa-arrow-down fa-3x" ></i>
            </div>
            <div class="logolist-item-logo-rank">
                <span class="logolist-item-logo-rank-number">63</span>位
            </div>
          </a>
      </div>
    </div>

    <div class="row pb-20">
        <h4 class="headline">もらいもの<a href="/listgift">もっと見る...</a></h4>
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
<script>
$(document).ready(function() {
    var a = document.getElementsByTagName("a");
    for(var i=0;i<a.length;i++) {
        if(!a[i].onclick && a[i].getAttribute("target") != "_blank") {
            a[i].onclick=function() {
                window.location=this.getAttribute("href");
                return false; 
            }
        }
    }
});
</script>
