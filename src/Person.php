<?php 

namespace Acme;

class Person
{
    private $name;
   
    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function addFavori(Team $team){
      $team->addFans();
    }


}


?>