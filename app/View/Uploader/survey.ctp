<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="/js/jquery.animateNumber.js"></script>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">アンケート</h4>
    </div>
    <div class="modal-body">
        <h4>お買い物の主な目的は？</h4>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">日用品</button>
            <button type="button" class="btn btn-default">食料品</button>
            <button type="button" class="btn btn-default">その他</button>
        </div>

        <h4>お探しの物を全て揃いましたか？</h4>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">はい</button>
            <button type="button" class="btn btn-default">いいえ</button>
            <button type="button" class="btn btn-default">その他</button>
        </div>

        <h4>お買い物はいかがでしたか？</h4>
        <input id="input-id" />

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">また今度</button>
        <button type="button" class="btn btn-primary">回答</button>
    </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="mt-20 container-fluid main-component">
    <div class="row">
        <h3 class="headline">レシート送信が完了しました</h3>
	<h3 class="headline">　取得ポイントは</h3>
	<?php
	    $lists = array(
		array(
		    'id' => 'asahi',
		    'name' => 'アサヒビール',
		    'point' => 2400
		),
		array(
                    'id' => 'shiseido',
                    'name' => '資生堂',
                    'point' => 1000
                ),
		array(
                    'id' => 'kaou',
                    'name' => '花王',
                    'point' => 800
                )
	    );
	    echo "<table width='100%' class='showPoint'>";
	    echo "<thead><tr><th>メーカー</th><th>現在ポイント</th></tr></thead>";
	    foreach($lists as $key => $maker){
		echo "<tr><td>" . $maker['name'] . "</td><td> <span id=" . $maker['id'] .">" . $maker['point'] . "</span></td></tr>";
	    }
	    echo "</table>";
	?>
	<h3 class="headline">　の予定です！</h3>
        <h3 id="hide_modal" class="headline hidden"> アンケートへのご協力ありがとうございました </h3>
    </div>
</div>


<script>
    $('#asahi').animateNumber(
    	{
      	    number: 2600
        }, 1500
    );

    $('#shiseido').animateNumber(
        {
            number: 1150
        }, 1500
    );

    $('#kaou').animateNumber(
        {
            number: 900
        }, 1500
    );

    jQuery(document).ready(function () {
	setTimeout(function(){
    	    $('#myModal').modal('show');
            $("#input-id").rating({min:0, max:5, step:1, size:'sm', showClear:false, showCaption:false});


            var a = document.getElementsByTagName("a");
            for(var i=0;i<a.length;i++) {
                if(!a[i].onclick && a[i].getAttribute("target") != "_blank") {
                    a[i].onclick=function() {
                        window.location=this.getAttribute("href");
                        return false; 
                    }
                }
            }
	},2500);
    });

    $('#myModal').on('click', '.modal-footer .btn-primary', function() {
 	$('#myModal').modal('hide');
    	$('#hide_modal').removeClass('hidden');
    });

</script>
