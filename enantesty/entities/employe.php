<?PHP
class employe{
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	private $poste;
	private $horaire;
	private $salaire;
    
    function __construct($cin,$nom,$prenom,$tel,$poste,$horaire,$salaire)
    {
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->poste=$poste;
		$this->horaire=$horaire;
		$this->salaire=$salaire;
		
	}
	
	function getcin(){
		return $this->cin;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function gettel(){
		return $this->tel;
	}
	function getposte(){
		return $this->poste;
	}
	function gethoraire(){
		return $this->horaire;
	}
	function getsalaire(){
		return $this->salaire;
	}
	
	
	function setnom($nom){
		return $this->nom=$nom;
	}
	function setprenom($prenom){
		return $this->prenom=$prenom;
	}
	function settel($tel){
		return $this->tel=$tel;
	}
	function setposte($poste){
		return $this->poste=$poste;
	}
	function sethoraire($horaire){
		return $this->horaire=$horaire;
	}
	function setsalaire($salaire){
		return $this->salaire=$salaire;
	}

	
	
}

?>
