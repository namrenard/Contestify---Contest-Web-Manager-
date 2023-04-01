
<?php echo validation_errors(); ?>
<?php echo form_open('candidature/connexion'); ?>
<label>Code d'inscription</label>
<input type="text" class="form-control" name="code_inscription" placeholder="...">
<button class="btn btn-danger btn-lg btn-fill">Se connecter au dossier</button>