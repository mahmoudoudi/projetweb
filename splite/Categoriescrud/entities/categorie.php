<?PHP
class Categorie
{
	private $numcat;
	private $nomcat;
	
	/****constructeur*****/
	function __construct($num,$nom){
		$this->numcat=$num;
		$this->nomcat=$nom;
		
	}
	/***getters et setters****/
	function getNumcat(){
		return $this->numcat;
	}
	function getNomcat(){
		return $this->nomcat;
	}
	
    function setNumcat($num){
		$this->numcat=$num;
	}
	function setNomcat($nom){
		$this->nomcat=$nom;
	}

	
}

?>