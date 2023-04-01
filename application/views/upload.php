<form enctype="multipart/form-data" action="uploadaction.php" method="post" >

	<input type="hidden" name="MAX_FILE_SIZE" value="100000000"/>
	<label>Envoyez ce fichier :</label> 
		<input type="file" name="userfile" />
		<input type="submit" name="Envoyer le fichier" />
</form>

