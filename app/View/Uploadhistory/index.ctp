<div class="ploadhistory-collectionview" >

    <div class="uploadhistory-collectionview-item uploadhistory-collectionview-item-position-1-1" align="center">
        <img class="uploadhistory-img-thumbnail" src="http://livedoor.blogimg.jp/codran/imgs/3/a/3a6cbca0.jpg" onclick="openmodal1_1()" />
    </div>
    <div class="uploadhistory-collectionview-item uploadhistory-collectionview-item-position-1-2" align="center">
        <img class="uploadhistory-img-thumbnail" src="http://livedoor.blogimg.jp/codran/imgs/3/a/3a6cbca0.jpg" onclick=""/>
    </div>

</div>


<div class="modal fade" id="myModal-1-1" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">2015年5月21日</h4>
    </div>
    <div class="modal-body">

        <div align="center">
            <img <img class="uploadhistory-img-detail" src="http://livedoor.blogimg.jp/codran/imgs/3/a/3a6cbca0.jpg" />
        </div>

        <table class="table table-striped">
         <tr>
             <td>
                 Blendy Coffee
             </td>
             <td>
                 サントリー
             </td>
             <td>
                 ￥234
             </td>
             <td>
                 2pt
             </td>
         </tr>
         <tr>
             <td>
                 ハムサンド
             </td>
             <td>
                 SEVEN&i
             </td>
             <td>
                 ￥432
             </td>
             <td>
                 4pt
             </td>
         </tr>
       </table>
       </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-primary">修正依頼</button>
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->






<style>
 .ploadhistory-collectionview{
      position: relative;
  }
.uploadhistory-collectionview-item{
    width:110px;
    height:110px;
    background-color: white;
    border: 0px;
    border-radius: 10px;
}
.uploadhistory-collectionview-item-position-1-1{
    position: absolute;
    top:10px;
    left:10px;
}
.uploadhistory-collectionview-item-position-1-2{
    position: absolute;
    top:10px;
    left:132px;
}
.uploadhistory-collectionview-item-position-1-3{
    position: absolute;
    top:10px;
    left:254px;
}
.uploadhistory-img-thumbnail{

    max-width: 100%;
    height: 100%;
}
.uploadhistory-img-detail{
    width:auto;
    height:300px;
}

</style>

<script>
    var openmodal1_1 = function(){
        console.log('onclick');
        $('#myModal-1-1').modal('show');
    };
</script>
