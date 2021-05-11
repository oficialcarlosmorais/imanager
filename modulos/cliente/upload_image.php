<form action="upload.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
        <label for="nasc">Selecione a imagem:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
        <input type="hidden" name="doc" value="<?php echo $doc;?>">
	</div>
	<input type="submit" value="Upload Image" name="submit" class="btn btn-sucess">
</form>