<?php
/*  === add css ===  */
$this->Html->css('components/slick', array('inline' => false));
$this->Html->css('pages/dashboard', array('inline' => false));

/*  === add js ===  */
$this->Html->script('slick.min', array('inline' => false));
$this->Html->script('components/slick', array('inline' => false));
$this->Html->script('pages/dashboard', array('inline' => false));
?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {
        packages: ["corechart"]
    });
    google.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            <?php
                for($i = 0; $i < count($assets); $i++){
                    $list = "['" . $assets[$i]['Stock']['name'] . "'," . $assets[$i]['Asset']['num'] ."]";
                    if($i < count($assets)-1){
                        $list = $list . ",";
                    }
                    echo $list;
                }
            ?>
        ]);

        var options = {
            //title: '保有株式割合',
            legend: 'none',
            pieSliceText: 'label'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>

<div class="mt-20 container dashboard">
    <div class="row">
        <h4 class="headline">あなたにオススメ！</h4>
        <div class="mb-10 carousel">
            <div class="recommend-item" style="background-image:url('http://livedoor.blogimg.jp/ftmember/imgs/7/b/7bf3fde8.jpg')">
                <div class="overlay"></div>
                <p class="recommend-item-brand">MEGMILK</p>
                <p class="recommend-item-name">牛乳</p>
                <p class="recommend-item-price">￥198</p>
            </div>
            <div class="recommend-item" style="background-image:url('http://livedoor.blogimg.jp/ftmember/imgs/7/b/7bf3fde8.jpg')">
                <div class="overlay"></div>
                <p class="recommend-item-brand">MEGMILK</p>
                <p class="recommend-item-name">牛乳</p>
                <p class="recommend-item-price">￥198</p>
            </div>
            <div class="recommend-item" style="background-image:url('http://livedoor.blogimg.jp/ftmember/imgs/7/b/7bf3fde8.jpg')">
                <div class="overlay"></div>
                <p class="recommend-item-brand">MEGMILK</p>
                <p class="recommend-item-name">牛乳</p>
                <p class="recommend-item-price">￥198</p>
            </div>
            <div class="recommend-item" style="background-image:url('http://livedoor.blogimg.jp/ftmember/imgs/7/b/7bf3fde8.jpg')">
                <div class="overlay"></div>
                <p class="recommend-item-brand">MEGMILK</p>
                <p class="recommend-item-name">牛乳</p>
                <p class="recommend-item-price">￥198</p>
            </div>
        </div>
    </div>

    <div class="row">
        <h4 class="headline">もうすぐ優待！</h4>
        <div>
            <p>
                アサヒ飲料: <span class="attention">あとアサヒスーパードライ3ケースで優待！</span>
            </p>
            <i class="fa fa-beer"></i>
            <i class="fa fa-beer"></i>
            <i class="fa fa-beer"></i>
        </div>
    </div>
    <div class="row">
        <div class="jumbotron">
            <h4>あなたがお持ちの株式</h4>
            <hr>
            <div id="piechart" style="width: 100%; height: 600px;"></div>
            <p>説明だよ</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <div class="jumbotron">
                <h4>なんかの情報</h4>
                <hr>
                <p>説明だよ</p>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="jumbotron">
                <h4>役に立ちそうな情報</h4>
                <hr>
                <p>説明だよ</p>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <h4>補足になりそうな情報</h4>
        <hr>
        <p>説明だよ</p>
    </div>
    <div class="container" style="text-align:center;">
        <a class="btn btn-lg btn-primary btn-raised" href="../history/">
            購入履歴
        </a>
    </div>

</div>
