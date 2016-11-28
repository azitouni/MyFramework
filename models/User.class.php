<?php


  class User{
  private $idUser="";
  private $nom="";
  private $prenom="";
  private $DateNaissance="";
  private $age="";
  public function __construct($idUser){
    $this->bdd= new PDO(
                    'mysql:host=localhost;dbname=revision;charset=utf8',
                    'root',
                    '',
                    array(
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_PERSISTENT => false
                    )
                );
    $currentUser = $this->getUser($idUser,$this->bdd);

    $this->prenom = $currentUser[0]['firstName'];
    $this->nom = $currentUser[0]['lastName'];
    $this->DateNaissance = $currentUser[0]['birthDate'];
    $dateToday = new DateTime("now");
    $dateBirth = new DateTime($currentUser[0]['birthDate']);
    $this->age = date_diff($dateToday, $dateBirth);

  }
  public function getAge(){
    return $this->age;
  }
  public function getNom(){
    return $this->nom;
  }
  public function getPrenom(){
    return $this->prenom;
  }
  public function getDisplayName(){
    return $this->prenom ." " .$this->nom;
  }
  public function isLetters($name) {
    $regex = '/[^A-Za-z]/';
    $name = (string) $name;
    $name = preg_replace($regex, '', $name);
    if (empty($name)) {
      return false;
    }
    return true;
  }
  public function setNom($chaine){
    if (isLetters($chaine)) {
      $this->nom=$chaine;
    }
  }

  public function setPrenom($chaine){
    if (isLetters($chaine)) {
      $this->prenom=$chaine;
    }
  }

  public function getUser($idUser="",$bdd=""){
    $rqGetUser = "SELECT usrId,usrFirstName as firstName,usrLastName as lastName, birthDate
				FROM users
				WHERE usrId = ?";
	$stmt = $bdd->prepare($rqGetUser); // préparation
  $stmt->execute(array($idUser));
  $myUser = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $myUser;
  }
  public function disConnect(){
    $this->connexion = '';
  }

}


?>
