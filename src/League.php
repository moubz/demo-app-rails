<?php

namespace Acme;

class League 
{
    private $name;
    private $teams = [];

    public function __construct($name){
       $this->name = $name;
    }

    public function addTeam($team){
        $this->teams[] = $team;
    }

    public function getTeamCount(){
        return count($this->teams);
    }
}


?>