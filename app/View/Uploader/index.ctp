<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
    window.onload = function() {
    	document.getElementById("sbmImage").disabled = true;
    };

    window.addEventListener("load", function () {

        if (!window.File) {
            result.innerHTML = "File API 使用不可";
            return;
        }

        document.getElementById("imageFile").addEventListener("change", function () {
            var reader = new FileReader();

            reader.onload = function (event) {
                document.getElementById("image").src = reader.result;
            }
            var file = document.getElementById("imageFile").files[0];
            reader.readAsDataURL(file);
	    document.getElementById("sbmImage").disabled = false;
        }, true);
    }, true);

   
</script>


<div class="container">
    <div class="jumbotron">
        <div class="container">
            <h2>レシートの写真を送る</h2>
   	    <br>
	    <form method="post" enctype="multipart/form-data" action="/uploader/survey" id="add">
		<div><h3>あなたのレシート</h3></div>
		<div>
                    <img id="image" width="100%">
                    <input type="file" accept="image/*;capture=camera" id="imageFile" name="picture" />
            	</div>
	    <br>
            <input type="submit" value="登録" id="sbmImage" class="btn btn-primary btn-lg" onchange="selectFile()">
	    </form>

	</div>
    </div>
</div>
