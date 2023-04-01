<?php

$uploaddir = '/var/www/html/dicdl3/zrenardni/dev/CodeIgniter/documents/';


//$uploaddir = __DIR__. '/documents/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo $uploadfile;
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
echo "Le fichier est valide, et a été téléchargé
avec succès. Voici plus d'informations :\n";
} else {
echo "Le fichier n’a pas été téléchargé. Il y a eu un problème !\n";
}
echo 'Voici quelques informations sur le téléversement :';
print_r($_FILES);



?>