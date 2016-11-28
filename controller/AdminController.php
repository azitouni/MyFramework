<?php



class AdminController extends Controller {
  private $request;
  public function init(Request $request){

  }

   public function indexAction()
   {
       $this->useView("Admin/index");
       $this->useLayout("layout");
       $this->addTemplatevar("text", "Vous êtes dans l'administration");
       $this->run();
   }
}



 ?>
