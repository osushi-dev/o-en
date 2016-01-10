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

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>




<script>
    jQuery(document).ready(function () {
        $("#input-id").rating({min:0, max:5, step:1, size:'sm', showClear:false, showCaption:false});
    });
</script>


