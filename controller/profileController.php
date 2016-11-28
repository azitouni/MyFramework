<?php

require_once 'models/User.class.php';


class ProfileController extends Controller {
  private $request;
  public function init(Request $request){

  }

   public function ProfileAction()
   {
     $nomUtilisateur = new user(4);
       $this->useView("profile/index");
       $this->useLayout("layout");
       $this->addTemplatevar("text", "Bonjour, bienvenue " .$nomUtilisateur->getDisplayName() ." !!!!");
       $this->addTemplatevar("user", $nomUtilisateur);
       $this->run();
   }
}



 ?>
