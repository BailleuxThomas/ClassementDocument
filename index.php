<?php
$nombre = 0;
$iterator = new DirectoryIterator('film');

// On boucle sur la liste des documents retournés dans l'itérateur
foreach($iterator as $document){
    $nombre++;
      echo '<a href="film/'.$document->getFilename().'">'.$document->getFilename().'</a><br>';
}
echo ('Il y a  '.$nombre.'   documents');
foreach($iterator as $fichier){

    // La fonction isDot retourne TRUE si l'élement courant est "." ou ".."
    if($list_tri== 'DESC'){
        if(!$fichier->isDot()){
       echo $fichier->getFilename().'<br>';
       echo 'Taille du document en octets:  '.$fichier->getSize().'<br>';
       echo 'Type de document (file, dir ou link):  '.$fichier->getType().'<br>';
        }
    }
}
?>