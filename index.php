<?php
$nombre = -2;
$nombre2 = 0;

$dir = "./film";
//  si le dossier pointe existe
if (is_dir($dir)) {

   // si il contient quelque chose
   if ($dh = opendir($dir)) {

       // boucler tant que quelque chose est trouve
       while (($file = readdir($dh)) !== false) {


           // affiche le nom et le type si ce n'est pas un element du systeme
           if( $file != '.' && $file != '..') {
            $nombre2++;
    //    if( $file != '.' && $file != '..' && preg_match('#\.(jpe?g|gif|png)$#i', $file)) { Uniquement photo
           echo '<a href="film/'.$file.'">'.$file.'</a><br>';

           }
       }
                  echo ("Il y a $nombre2 documents <br>");
       // on ferme la connection
       closedir($dh);
   }
}


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