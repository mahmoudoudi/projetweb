<?PHP
class jobs{
	private $id;
	private $poste;
	private $salaire;
	private $experience;
	private $horaire;
	private $etat;
    
    function __construct($id,$poste,$salaire,$experience,$horaire,$etat)
    {
		$this->id=$id;
		$this->poste=$poste;
		$this->salaire=$salaire;
		$this->experience=$experience;
		$this->horaire=$horaire;
		$this->etat=$etat;
		
	}
	
	function getid(){
		return $this->id;
	}
	
	function getposte(){
		return $this->poste;
	}
	function getsalaire(){
		return $this->salaire;
	}
	function getexperience(){
		return $this->experience;
	}
	function gethoraire(){
		return $this->horaire;
	}
	function getetat(){
		return $this->etat;
	}
	
	
	function setposte($poste){
		return $this->poste=$poste;
	}
	function setsalaire($salaire){
		return $this->salaire=$salaire;
	}
	function setexperience($experience){
		return $this->experience=$experience;
	}
	function sethoraire($horaire){
		return $this->horaire=$horaire;
	}
	function setetat($etat){
		return $this->etat=$etat;
	}

	
	
}

?>
