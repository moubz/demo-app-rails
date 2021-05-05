<?php 
require 'vendor/autoload.php';

use Acme\{Person, Team, League};

new Song;
echo random_number();

$ho = new Person('Honore');
$ko = new Person('Komoe');

echo $ho->getName(). PHP_EOL;
echo $ko->getName(). PHP_EOL;

$barcelone = new Team('Barcelona');
$real = new Team('Real Madrid');

$ho->addFavori($barcelone);
$ko->addFavori($real);
$ko->addFavori($barcelone);

echo $barcelone->getName().' a '.$barcelone->getNombreFans().' Fans'. PHP_EOL;
echo $real->getName().' a '.$real->getNombreFans().' Fans'. PHP_EOL;

$liga = new League("Liga");
$liga->addTeam($barcelone);
$liga->addTeam($real);
echo $liga->getTeamCount();

?>