<?php

class user {

protected $prenom = "John";
protected $nom = "Doe";

public function getDisplayName(){
  return $this->prenom ." " .$this->nom;
}

}






 ?>
