<?PHP
class Produit
{
	private $identifiant;
	private $nom;
	private $quantite;
	private $prix;
	/****constructeur*****/
	function __construct($id,$nom,$qt,$prix){
		$this->identifiant=$id;
		$this->nom=$nom;
		$this->quantite=$qt;
		$this->prix=$prix;
	}
	/***getters et setters****/
	function getCin(){
		return $this->identifiant;
	}
	function getNom(){
		return $this->nom;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getPrix(){
		return $this->prix;
	}

	function setNom($nom){
		$this->nom=$nom;
	}

	function setQuantite($qt){
		$this->quantite=$qt;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	
}

?>