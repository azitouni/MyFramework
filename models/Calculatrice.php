<?php class Calculatrice{
	/**   * Résultat des calculs   */
	private $_resultat;

	/**   * Retourne le résultat   */
	public function getResultat()  {
		return (double) $this->_resultat;
	}
	/**   * Réinitialise la calculatrice   */
	public function init()   {
		$this->_resultat = 0;
	}
	/**    * Addition  */
	public function additionner($valeurs)    {
		for ($i = 0; $i < count($valeurs); $i++) {
    		$this->_resultat += $valeurs[$i];
		}
		return $this->getResultat();
	}
	/**    * Soustraction  */
	public function soustraire($valeurs){
		$this->_resultat = $valeurs[0];
		for ($i = 1; $i < count($valeurs); $i++) {
    		$this->_resultat -= $valeurs[$i];
		}
		return $this->getResultat();
	}

	/**    * Multiplication */
	public function multiplier($valeurs)    {
		$this->_resultat = $valeurs[0];
		for ($i = 1; $i < count($valeurs); $i++) {
    		$this->_resultat *= $valeurs[$i];
		}
		return $this->getResultat();
	}

	/**    * Division */
	public function diviser($valeurs)    {
		$this->_resultat = $valeurs[0];
		for ($i = 1; $i < count($valeurs); $i++) {
    		$this->_resultat /= $valeurs[$i];
		}
		return $this->getResultat();
	}

  /**    *Pourcent */
	public function pourcent($valeurs)    {
		$this->_resultat = $valeurs[0];
		for ($i = 0; $i < count($valeurs); $i++) {
    		$this->_resultat = $valeurs[$i]/100;
		}
		return $this->getResultat();
	}

}
?>
