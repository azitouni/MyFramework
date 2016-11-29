<?php
require_once 'models/Settings.php';
require_once 'models/Request.php';

class Ministream
{
  private $_request;
  private $_action;
  private $_controller;
  private $_settings;

  function __construct()
  {
    $get = $this->_request['get'] = $_GET;
    $post = $this->_request['post'] = $_POST;
    $this->_request = new Request($get, $post);//on récupère les paramètres passer par l'url($get) ou dans la requete ($post)

    $this->_settings = new Settings();//on récupère les différentes configurations de notre application

    $cp = $this->_settings->get('controller_prefix');
    $ap = $this->_settings->get('action_prefix');// on stoke les configuations

    $this->_controller = isset($_GET[$cp]) ? $_GET[$cp] . 'Controller' : 'IndexController';// on détermine quel controlleur utiliser
    $this->_action = isset($_GET[$ap]) ? $_GET[$ap] . 'Action' : null;//on détermine l'action à exécuter
  }

  public static function _call404()
  {
    include '404.html';
    exit;
  }

  public function run()
  {
    $controllerfile = 'controller/' . $this->_controller . '.php';

    if ( is_file($controllerfile) )
    require_once $controllerfile;// inclut le bon controleur
    else
    $this->_call404();//le fichier n'existe pas, on envoie une erreur

    $controller = new $this->_controller;// on instancie la classe située dans le fichier controlleur
    $controller->init($this->_request);// onexécute la fonction init

    try
    {
      $action = $this->_action;
      if ( $action )
      {
          $controller->$action();
      }

      else
      $controller->indexAction();
    }
    catch(Exception $e)
    {
      //echo $this->e.message;
      $this->_call404();
    }
  }

}
?>
