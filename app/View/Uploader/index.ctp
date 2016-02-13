<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
    window.onload = function() {
    	document.getElementById("sbmImage").disabled = true;
    };

    window.addEventListener("load", function() {

        if (!window.File) {
            result.innerHTML = "File API 使用不可";
            return;
        }

        document.getElementById("imageFile").addEventListener("change", function() {
            var reader = new FileReader();

            reader.onload = function(event) {
                document.getElementById("image").src = reader.result;
            }
            var file = document.getElementById("imageFile").files[0];
            reader.readAsDataURL(file);
	    document.getElementById("sbmImage").disabled = false;
        }, true);
    }, true);

</script>

<div class="mt-20 container-fluid main-component">
    <div class="row">
        <h4 class="headline">レシート送信</h4>
        <form method="post" enctype="multipart/form-data" action="/uploader/survey" id="add">
            <div class="container">
                <h5>あなたのレシート</h5>
                <img id="image" style="width:100%;">
                <input type="file" accept="image/*;capture=camera" id="imageFile" name="picture" />
            </div>
            <br>
            <input type="submit" value="登録" id="sbmImage" class="btn btn-primary btn-lg" style="width:100%;">
            <br>
        </form>
    </div>
</div>
