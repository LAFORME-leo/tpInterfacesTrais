<?php 
require_once 'Animal.php';
require_once 'Chat.php';
require_once 'Chien.php';
require_once 'Poule.php';
require_once 'Vache.php';
require_once 'Animal.php';
use Notifiable;
$herbivors = array();
$carnivors = array();

// $chat = new Chat($name = "leChat" );
// $chien = new Chien ($name = "leChien");
// $poule = new Poule ($name = "laPoule");
// $vache = new Vache ($name = "laVache");

$chat = new Chat("leChat");
echo $chat->infos() . "\n";

$chien = new Chien("leChien");
echo $chien->infos() . "\n";

$poule = new Poule("laPoule");
echo $poule->infos() . "\n";

$vache = new Vache("laVache");
echo $vache->infos() . "\n";

echo "\nLes herbivors :\n";
foreach ($carnivors as $Animal)
{
    if($Animal instanceof Iherbivor) 
    {
        echo $Animal -> infos(); 
    }
}

echo "\n Les Carnivors :\n";
foreach ($carnivors as $Animal)
{
    if($Animal instanceof Ipredateur) 
    {
        echo $Animal -> infos(); 
    }
}

echo "\nLivres :\n";
foreach ($livres as $livre) {
    echo "Titre : {$livre->getTitre()}, Date de sortie : {$livre->getDateSortie()}, ISBN : {$livre->getISBN()}, Résumé : {$livre->getResume()}\n";
}
foreach($boite->list() as $item)
{
    echo $item->print()."\n";

}
