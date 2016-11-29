<?php

require_once 'models/Calculatrice.php';


class ComputeController extends Controller {
  private $request;
  public $maCalculatrice;
  public function init(Request $request){
    $this->maCalculatrice = new Calculatrice();
  }

   public function IndexAction()
   {
      //$maCalculette = new Calculatrice();

       $this->useView("Calculette/index");
       $this->useLayout("layout");
       //$this->addTemplatevar("text", "Bonjour, bienvenue " .$this->maCalculatrice->getResultat() ." !!!!");
       //$this->addTemplatevar("user", $nomUtilisateur);
       $this->run();
   }
   public function traitementAction()
   {
      //$maCalculette = new Calculatrice();
      $operators = json_decode($_POST['operator']);
      $digits = json_decode($_POST['digit']);
      for ($i=0; $i < $digits ; $i++) {

      }


       $this->run();
   }
   public function SumAction()
   {
      //$this->maCalculatrice =new Calculatrice();
       $digits = json_decode($_GET['digit']);
       $result = $this->maCalculatrice->additionner($digits);
		   echo json_encode($result);
   }
   public function MultAction()
   {
      //$this->maCalculatrice =new Calculatrice();
       $digits = json_decode($_GET['digit']);
       $result = $this->maCalculatrice->multiplier($digits);
		   echo json_encode($result);
   }
   public function MinAction()
   {
      //$this->maCalculatrice =new Calculatrice();
       $digits = json_decode($_GET['digit']);
       $result = $this->maCalculatrice->soustraire($digits);
		   echo json_encode($result);
   }
   public function DivAction()
   {
      //$this->maCalculatrice =new Calculatrice();
       $digits = json_decode($_GET['digit']);
       $result = $this->maCalculatrice->diviser($digits);
		   echo json_encode($result);
   }

   public function ProcAction()
   {
      $this->maCalculatrice =new Calculatrice();
       $digits = json_decode($_GET['digit']);
       $result = $this->maCalculatrice->pourcent($digits);
		   echo json_encode($result);
   }
}



 ?>
